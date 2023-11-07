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
    '1' => [
        'name' => 'Hoja para cotización',
        'icon' =>  plugin_dir_url(__FILE__) . 'assets/budget.png',
        'class' => 'budget'
    ],
    '2' => [
        'name' => 'Volante',
        'icon' =>  plugin_dir_url(__FILE__) . 'assets/brochure.png',
        'class' => 'flyer'
    ],
    '3' => [
        'name' => 'Tarjeta de presentación personal',
        'icon' =>  plugin_dir_url(__FILE__) . 'assets/business-cards.png',
        'class' => 'businessCard'
    ]
);


require_once(plugin_dir_path(__FILE__) . 'admin/admin.php');
require_once(plugin_dir_path(__FILE__) . 'includes/install.php');
require_once(plugin_dir_path(__FILE__) . 'includes/inpust-form-1.php');

register_activation_hook(__FILE__, 'certified_generator_install');
add_shortcode('certified_generator', 'certified_generator_shortcode');
add_action('admin_menu', 'certified_generator_register_menu');
add_action('vc_before_init', 'add_certified_generator_controls');
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('init', 'register_custom_actions');
add_action('wp_ajax_previews_result', 'previews_result');
add_action('wp_ajax_nopriv_previews_result', 'previews_result');

function register_custom_actions() {
    process_forms();
    previews_results();
}

function certified_generator_shortcode()
{
    global $forms;
    ob_start();
?>
    <div class="container-options" style=" margin: 0 auto;text-align: center;">
        <h2 style="margin-bottom: 20px;color: #039ABC;">¿Qué publicidad te gustaría realizar?</h2>
       <div class="container-card" style="display:flex;gap: 20px 10px;justify-content: center;padding: 20px 0px;" >
        <?php foreach ($forms as $key => $form) { ?>
                <div class="card <?php echo $form['class']; ?>" data="<?php echo $key ?>" style="<?php echo ($form['class'] === 'budget' || $form['class'] === 'flyer') ? 'gap: 15px;' : ''; ?>" onclick="localStorage.setItem('currentForm', <?php echo $key ?>);">
                <div  class="image-container" >
                <img src="<?php echo $form['icon']; ?>" alt="<?php echo $form['name']; ?>">
                </div>
                    <p><?php echo $form['name']; ?></p>
                    <button>Seleccionar</button>
                </div>
            <?php } ?>
       </div>
       
       <p>Al continuar y hacer uso de la herramienta, está aceptando los términos y condiciones y la política de privacidad. <span style="color:red">*</span></p>
    </div>
    <div class="container-forms">
        <?php  foreach ($forms as $key => $form) { ?>
           <div id="container-certified-form-<?php echo $key; ?>" style="display: none;">
                <?php
                    $form_file = 'form-' . $key . '.php';
                    if (file_exists(plugin_dir_path(__FILE__) . 'public/forms/' . $form_file)) {
                        include(plugin_dir_path(__FILE__) . 'public/forms/' . $form_file);
                    } else {
                        echo 'Error: El formulario correspondiente no existe.';
                    }
                ?>
         
           </div>
       <?php } ?>
    </div>
<?php
    return ob_get_clean();
}

add_action('init', function () {
    global $response;
    certified_generator_utf8_decode_recursive($response);
});


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

function process_forms()
{
    $action = isset($_POST['certified_form_action']) ? $_POST['certified_form_action'] : '';
    switch ($action) {
        case 'process_form_one':
            include_once(plugin_dir_path(__FILE__) . 'ajax/processFormOne.php');
            certified_form_one_action();
            break;
        case 'process_form_two':
            include_once(plugin_dir_path(__FILE__) . 'ajax/processFormTwo.php');
            certified_form_two_action();
            break;
        case 'process_form_three':
            include_once(plugin_dir_path(__FILE__) . 'ajax/processFormThree.php');
            certified_form_three_action();
            break;
        default:
            break;
    }
}

function previews_results()
{
    $preview = isset($_POST['certified_form_action']) ? $_POST['certified_form_action'] : '';
    if ($preview ==='previews_result') {
        include_once(plugin_dir_path(__FILE__) . 'ajax/previews.php');
    }
}

function enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('pdfjs-core', 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.7.107/pdf.min.js', array(), '3.7.107', true);
    wp_enqueue_script('pdfjs-worker', 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.7.107/pdf.worker.min.js', array('pdfjs-core'), '3.7.107', true);
    wp_enqueue_script('custom-scripts', plugin_dir_url(__FILE__) . 'scripts.js', array('jquery', 'pdfjs-core'), '1.0', true);
    wp_localize_script('custom-scripts', 'host', array(
        'plugin_url' => plugin_dir_url(__FILE__),
        'ajaxurl' => admin_url('admin-ajax.php')
    ));

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3', 'all');
    wp_enqueue_style('custom-styles', plugin_dir_url(__FILE__) . 'styles.css');
}
