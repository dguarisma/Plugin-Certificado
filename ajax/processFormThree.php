<?php
require_once(plugin_dir_path(__FILE__) . '../dompdf/autoload.inc.php');
require_once(plugin_dir_path(__FILE__) . '../includes/constants.php');

use Dompdf\Dompdf;

function certified_form_three_action() {
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['surname']) &&
        isset($_POST['job_profile']) && isset($_POST['optradio']) &&
        isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email'])) {

        $forename = sanitize_text_field($_POST['name']);
        $surname = sanitize_text_field($_POST['surname']);
        $slogan = sanitize_text_field($_POST['slogan']);
        $job_profile = sanitize_text_field($_POST['job_profile']);
        $address = sanitize_text_field($_POST['address']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_text_field($_POST['email']);
        $web_site = $_POST['web_site'];
        $logo = $_POST['logo'];
        $activeBackground = $_POST['optradio'];
        $background_front;
        $background_back;

        $uploads = array(
            'logo' => 'logo',
            'background_front' => 'background_front',
            'background_back' => 'background_back'
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

          $background_front = $uploaded_images['background_front'] ? $uploaded_images['background_front']: $GLOBALS['ASSEST_PRODCARD_FORMAT']['disegn_front_'.$activeBackground];
          $background_back = $uploaded_images['background_back'] ?$uploaded_images['background_back']: $GLOBALS['ASSEST_PRODCARD_FORMAT']['disegn_back_'.$activeBackground];
   
   
        global $wpdb;
        $table_name = $wpdb->prefix . 'records_form_three';
        $wpdb->insert($table_name, array(
            'name' =>  $forename,
            'surname' => $surname,
            'job_profile' => $job_profile,
            'slogan' => $slogan,
            'logo' => $uploaded_images['logo'],
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'web_site' => $web_site,
            'background_front' => $background_front,
            'background_back' => $background_back,
        ));
    
        $template_file = '';
        switch ($activeBackground) {
            case '1':
                $template_file = plugin_dir_path(__FILE__) . '../pdf/businesscard/pdf-1.php';
                break;
            case '2':
                $template_file = plugin_dir_path(__FILE__) . '../pdf/businesscard/pdf-2.php';
                break;
            case '3':
                $template_file = plugin_dir_path(__FILE__) . '../pdf/businesscard/pdf-3.php';
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
            $download_url = esc_url(plugin_dir_url(__FILE__) . 'download.php?filename="tarjeta.pdf"');

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
