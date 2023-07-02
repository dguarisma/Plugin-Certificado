<?php
require_once(plugin_dir_path(__FILE__) . '../dompdf/autoload.inc.php');
require_once(plugin_dir_path(__FILE__) . '../includes/constants.php');

use Dompdf\Dompdf;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['previews_forms'])) {
        $certified_form_action = $_POST['previews_forms'];
        
        if ($certified_form_action === 'process_form_one') {
            process_form_one();
        } elseif ($certified_form_action === 'process_form_three') {
            process_form_three();
        }
    }
}
function process_form_one() {
    $required_fields = ['business_name', 'payment_information', 'invoice_to', 'terms', 'optradio'];
    $uploads = [
        'image' => 'image',
        'background' => 'background'
    ];

    $uploaded_images = [];
    $activeBackground = '';
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field])) {
            wp_send_json([
                'success' => false,
                'message' => 'Error: Missing required field: ' . $field
            ]);
        }
    }

    $business_name = sanitize_text_field($_POST['business_name']);
    $payment_information = sanitize_text_field($_POST['payment_information']);
    $invoice_to = sanitize_text_field($_POST['invoice_to']);
    $terms = sanitize_text_field($_POST['terms']);
    $activeBackground = $_POST['optradio'];

    foreach ($uploads as $type => $name) {
        ${$type} = '';

        if (isset($_FILES[$name]) && $_FILES[$name]['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES[$name];
            ${$type} = certified_generator_upload_image($file);
            $uploaded_images[$type] = ${$type};
        }
    }

    $background = $uploaded_images['background'] ? $uploaded_images['background'] : $activeBackground;
    $template_file = '';

    switch ($activeBackground) {
        case $GLOBALS['ASSEST_QUOTE_FORMAT']['design1']:
            $template_file = plugin_dir_path(__FILE__) . '../pdf/budget/pdf-1.php';
            break;
        case $GLOBALS['ASSEST_QUOTE_FORMAT']['design2']:
            $template_file = plugin_dir_path(__FILE__) . '../pdf/budget/pdf-2.php';
            break;
        case $GLOBALS['ASSEST_QUOTE_FORMAT']['design3']:
            $template_file = plugin_dir_path(__FILE__) . '../pdf/budget/pdf-3.php';
            break;
        default:
            wp_send_json([
                'success' => false,
                'message' => 'Error: The template file does not exist.'
            ]);
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
        wp_send_json([
            'success' => true,
            'message' => 'Successful registration',
            'pdf_content' => base64_encode($pdf_content)
        ]);
    } else {
        wp_send_json([
            'success' => false,
            'message' => 'Error: The template file does not exist.'
        ]);
    }
}

function process_form_three() {
    $required_fields = ['job_profile', 'name', 'surname', 'address', 'phone', 'email'];
    $uploads = array(
        'logo' => 'logo',
        'background_front' => 'background_front',
        'background_back' => 'background_back'
    );

    $uploaded_images = [];
    $activeBackground = '';
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field])) {
            wp_send_json([
                'success' => false,
                'message' => 'Error: Missing required field: ' . $field
            ]);
        }
    }

    $nameUser = sanitize_text_field($_POST['name']);
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

    foreach ($uploads as $type => $name) {
        ${$type} = '';

        if (isset($_FILES[$name]) && $_FILES[$name]['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES[$name];
            ${$type} = certified_generator_upload_image($file);
            $uploaded_images[$type] = ${$type};
        }
    }

    // Determine background value
    $background_front = $uploaded_images['background_front'] ? $uploaded_images['background_front']: $GLOBALS['ASSEST_PRODCARD_FORMAT']['disegn_front_'.$activeBackground];
    $background_back = $uploaded_images['background_back'] ?$uploaded_images['background_back']: $GLOBALS['ASSEST_PRODCARD_FORMAT']['disegn_back_'.$activeBackground];
   
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
            wp_send_json([
                'success' => false,
                'message' => 'Error: The template file does not exist.'
            ]);
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

        // Send response as JSON
        wp_send_json([
            'success' => true,
            'message' => 'Successful registration',
            'pdf_content' => base64_encode($pdf_content) // Convert PDF content to base64 to send via AJAX
        ]);
    } else {
        wp_send_json([
            'success' => false,
            'message' => 'Error: The template file does not exist.'
        ]);
    }
}

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
