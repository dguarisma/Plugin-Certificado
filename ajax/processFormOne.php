<?php
require_once(plugin_dir_path(__FILE__) . '../dompdf/autoload.inc.php');
require_once(plugin_dir_path(__FILE__) . '../includes/constants.php');
$font_css_url = esc_url(plugin_dir_url(dirname(__FILE__))) . 'fonts/pdf/fonts.css';

use Dompdf\Dompdf;

function certified_form_one_action() {
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['business_name']) && isset($_POST['payment_information']) 
    && isset($_POST['terms']) && isset($_POST['optradio'])) {
        $business_name = sanitize_text_field($_POST['business_name']);
        $payment_information = sanitize_text_field($_POST['payment_information']);
        $invoice_to = '';
        $terms = sanitize_text_field($_POST['terms']);
        $activeBackground = $_POST['optradio'];

        $uploads = array(
            'image' => 'image',
            'signature' => 'signature',
            'background' => 'background'
        );

        $uploaded_images = array();

        foreach ($uploads as $type => $name) {
            ${$type} = '';
            if (isset($_FILES[$name]) && $_FILES[$name]['error'] === UPLOAD_ERR_OK) {
                $file = $_FILES[$name];
                ${$type} = certified_generator_upload_image($file);
                $uploaded_images[$type] = ${$type};
            }
        }
        global $wpdb;
        $certified_table_name = $wpdb->prefix . 'records_form_one';
        $background = $uploaded_images['background'] ? $uploaded_images['background'] :  $GLOBALS['ASSEST_QUOTE_FORMAT']['design_'.$activeBackground];

        $wpdb->insert($certified_table_name, array(
            'business_name' => strtoupper($business_name),
            'payment_information' => strtoupper($payment_information),
            'invoice_to' => strtoupper($invoice_to),
            'terms' => $terms,
            'image' => $uploaded_images['image'],
            'signature' => $uploaded_images['signature'],
            'background' => $background,
        ));

        $template_file = '';
        switch ($activeBackground) {
            case '1':
                $template_file = plugin_dir_path(__FILE__) . '../pdf/budget/pdf-1.php';
                break;
            case '2':
                $template_file = plugin_dir_path(__FILE__) . '../pdf/budget/pdf-2.php';
                break;
            case '3':
                $template_file = plugin_dir_path(__FILE__) . '../pdf/budget/pdf-3.php';
                break;
            default:
                $response = array(
                    'success' => false,
                    'message' => 'Error: El archivo del template no existe.'
                );
                break;
        }

        if (file_exists($template_file)) {
            $dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled', true);
            $dompdf->set_option('isPhpEnabled', true);
            $dompdf->set_option('defaultFont', $font_css_url);
            
            ob_start();
            include($template_file);
            $html = ob_get_clean();
            $dompdf->loadHtml($html);
            $dompdf->render();
            $pdf_content = $dompdf->output();
            $_SESSION['pdf_content'] = $pdf_content;
            $download_url = esc_url(plugin_dir_url(__FILE__) . 'download.php?filename="cotizacion.pdf"');

            $response = array(
                'success' => true,
                'message' => 'Registro exitoso',
                'download_url' => $download_url
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Error: El archivo del template no existe.'
            );
        }
    } else {
        $response = array(
            'success' => false,
            'message' => 'Error: Los datos del formulario no son válidos.'
        );
    }

    wp_send_json($response);
}

function certified_generator_upload_image($file) {
    $plugin_dir = plugin_dir_path(__FILE__);
    $target_dir = $plugin_dir . 'uploads'; 
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755);
    }

    $target_file = $target_dir . '/' . basename($file['name']);
    $image_url = '';

    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        $image_url = plugins_url('uploads/' . basename($file['name']), __FILE__);
    }

    return $image_url;
}

/*
function certified_generator_upload_image($file) {
    $upload_dir = wp_upload_dir();
    $target_dir = $upload_dir['path'] . '/';
    $target_file = $target_dir . basename($file['name']);
    $image_url = '';

    $image_type = wp_check_filetype($target_file);
    $image_mime_type = $image_type['type'];

    $image_name = wp_unique_filename($target_dir, basename($target_file));

    if (move_uploaded_file($file['tmp_name'], $target_dir . $image_name)) {
        $attachment = array(
            'guid' => $upload_dir['url'] . '/' . $image_name,
            'post_mime_type' => $image_mime_type,
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($image_name)),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $attach_id = wp_insert_attachment($attachment, $target_dir . $image_name);

        if (!is_wp_error($attach_id)) {
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attach_data = wp_generate_attachment_metadata($attach_id, $target_dir . $image_name);
            wp_update_attachment_metadata($attach_id, $attach_data);

            $image_url = wp_get_attachment_url($attach_id);
        }
    }
    return $image_url;
}
*/
