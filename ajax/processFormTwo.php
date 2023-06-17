<?php
require_once(plugin_dir_path(__FILE__) . '../dompdf/autoload.inc.php');
require_once(plugin_dir_path(__FILE__) . '../includes/constants.php');
$font_css_url = esc_url(plugin_dir_url(dirname(__FILE__))) . 'fonts/pdf/fonts.css';

use Dompdf\Dompdf;

function certified_form_two_action() {
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['razon_social']) && isset($_POST['informacion_pago']) 
    && isset($_POST['factura_a']) && isset($_POST['terms']) && isset($_POST['optradio'])) {
        $razon_social = sanitize_text_field($_POST['razon_social']);
        $informacion_pago = sanitize_text_field($_POST['informacion_pago']);
        $factura_a = sanitize_text_field($_POST['factura_a']);
        $terms = sanitize_text_field($_POST['terms']);
        $activeBackground = $_POST['optradio'];

        $uploads = array(
            'image' => 'image',
            'firma' => 'firma',
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
        $background = $uploaded_images['background'] ? $uploaded_images['background'] : $activeBackground;

        $wpdb->insert($certified_table_name, array(
            'razon_social' => strtoupper($razon_social),
            'informacion_pago' => strtoupper($informacion_pago),
            'factura_a' => strtoupper($factura_a),
            'terms' => $terms,
            'image' => $uploaded_images['image'],
            'firma' => $uploaded_images['firma'],
            'background' => $background,
        ));

      /*   $certified_id = $wpdb->insert_id; 
        $items_table_name = $wpdb->prefix . 'items_quotation';
        $descripciones = $_POST['descripcion'];
        $cantidades = $_POST['cantidad'];
        $precios = $_POST['precios'];

        foreach ($descripciones as $index => $descripcion) {
            $cantidad = (int) $cantidades[$index];
            $precio = (float) $precios[$index];

            $wpdb->insert($items_table_name, array(
                'certified_id' => $certified_id,
                'descripcion' => strtoupper($descripcion),
                'cantidad' => $cantidad,
                'precios' => $precio,
            ));
        } */

        $template_file = '';
        switch ($activeBackground) {
            case $GLOBALS['ASSEST_QUOTE_FORMAT']['design1']:
                $template_file = plugin_dir_path(__FILE__) . '../pdf/pdf-1.php';
                break;
            case $GLOBALS['ASSEST_QUOTE_FORMAT']['design2']:
                $template_file = plugin_dir_path(__FILE__) . '../pdf/pdf-2.php';
                break;
            case $GLOBALS['ASSEST_QUOTE_FORMAT']['design3']:
                $template_file = plugin_dir_path(__FILE__) . '../pdf/pdf-3.php';
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
