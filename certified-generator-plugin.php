<?php
/**
 * Plugin Name: Certified Generator Plugin
 * Plugin URI:
 * Description: Plugin que permite generar Certificados personalizados en PDF.
 * Version: 2.0.1
 * Author: David Guarisma
 * Author URI: https://github.com/dguarisma
 */

global $forms;
$forms = array(
    '1' => 'Cotización',
    '2' => 'Flyer',
    '3' => 'Tarjeta Pro'
);

require_once(plugin_dir_path(__FILE__) . 'admin/admin.php');
require_once(plugin_dir_path(__FILE__) . 'includes/install.php');
require_once(plugin_dir_path(__FILE__) . 'includes/inpust-form-1.php');

register_activation_hook(__FILE__, 'certified_generator_install');
add_shortcode('certified_generator', 'certified_generator_shortcode');
add_action('admin_menu', 'certified_generator_register_menu');
add_action('vc_before_init', 'add_certified_generator_controls');

add_action('init', 'certified_generator_process_form');

function certified_generator_shortcode($atts)
{
    global $forms;
    $atts = shortcode_atts(array(
        'form' => '1'
    ), $atts);

    if (array_key_exists($atts['form'], $forms)) {
        $form_file = 'form-' . $atts['form'] . '.php';
        ob_start();
        include(plugin_dir_path(__FILE__) . 'public/forms/' . $form_file);
        return ob_get_clean();
    } else {
        return 'Error: El formulario especificado no existe.';
    }
}

function certified_generator_utf8_decode_recursive(&$array)
{
    foreach ($array as &$value) {
        if (is_string($value)) {
            $value = utf8_decode($value);
        } elseif (is_array($value)) {
            certified_generator_utf8_decode_recursive($value);
        }
    }
}

add_action('init', function () {
    global $response;
    certified_generator_utf8_decode_recursive($response);
});

function certified_generator_process_form()
{
    if (isset($_POST['certified_form_action']) && $_POST['certified_form_action'] === 'process_form') {
        include_once(plugin_dir_path(__FILE__) . 'ajax/process-form.php');
        certified_form_action();
        exit;
    }
}
