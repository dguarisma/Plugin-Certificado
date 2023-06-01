<?php
use Elementor\Controls_Manager;
use Elementor\Widget_Base;

function add_certified_generator_controls()
{
    global $forms;

    $form_options = array();
    foreach ($forms as $key => $value) {
        $form_options[$value] = $key;
    }

    if (class_exists('Elementor\Controls_Manager')) {
        $controls_manager = \Elementor\Plugin::$instance->controls_manager;
        $controls_manager->add_control(
            'form',
            array(
                'label' => 'Form',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $form_options,
                'default' => '1',
                'label_block' => true,
                'description' => 'Select the form to display.',
            )
        );

        $controls_manager->add_control(
            'name_label',
            array(
                'label' => 'Nombre',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Nombre',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de nombre.',
            )
        );

        $controls_manager->add_control(
            'email_label',
            array(
                'label' => 'Correo Electrónico',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Correo Electrónico',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de correo electrónico.',
            )
        );

        $controls_manager->add_control(
            'company_label',
            array(
                'label' => 'Razón Social',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Razón Social',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de Razón Social.',
            )
        );

        $controls_manager->add_control(
            'payment_info_label',
            array(
                'label' => 'Información de Pago',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Información de Pago',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de Información de Pago.',
            )
        );

        $controls_manager->add_control(
            'billing_label',
            array(
                'label' => 'Factura a',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Factura a',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de Factura a.',
            )
        );

        $controls_manager->add_control(
            'terms_label',
            array(
                'label' => 'Términos y Condiciones',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Términos y Condiciones',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de Términos y Condiciones.',
            )
        );

        $controls_manager->add_control(
            'signature_label',
            array(
                'label' => 'Firma',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Firma',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de Firma.',
            )
        );

        $controls_manager->add_control(
            'background_label',
            array(
                'label' => 'Imagen de Fondo',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Imagen de Fondo',
                'label_block' => true,
                'description' => 'Ingrese la etiqueta para el campo de Imagen de Fondo.',
            )
        );

        $controls_manager->add_category(
            'content',
            array(
                'title' => 'Content',
                'icon' => 'fa fa-file-text-o',
            )
        );
    } elseif (function_exists('vc_map')) {
        vc_map(array(
            'name' => 'Certified Generator',
            'base' => 'certified_generator',
            'category' => 'Content',
            'params' => array(
                array(
                    'type' => 'dropdown',
                    'heading' => 'Form',
                    'param_name' => 'form',
                    'value' => $form_options,
                    'description' => 'Select the form to display.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Nombre',
                    'param_name' => 'name_label',
                    'value' => 'Nombre',
                    'description' => 'Ingrese la etiqueta para el campo de nombre.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Correo Electrónico',
                    'param_name' => 'email_label',
                    'value' => 'Correo Electrónico',
                    'description' => 'Ingrese la etiqueta para el campo de correo electrónico.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Razón Social',
                    'param_name' => 'company_label',
                    'value' => 'Razón Social',
                    'description' => 'Ingrese la etiqueta para el campo de Razón Social.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Información de Pago',
                    'param_name' => 'payment_info_label',
                    'value' => 'Información de Pago',
                    'description' => 'Ingrese la etiqueta para el campo de Información de Pago.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Factura a',
                    'param_name' => 'billing_label',
                    'value' => 'Factura a',
                    'description' => 'Ingrese la etiqueta para el campo de Factura a.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Términos y Condiciones',
                    'param_name' => 'terms_label',
                    'value' => 'Términos y Condiciones',
                    'description' => 'Ingrese la etiqueta para el campo de Términos y Condiciones.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Firma',
                    'param_name' => 'signature_label',
                    'value' => 'Firma',
                    'description' => 'Ingrese la etiqueta para el campo de Firma.',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => 'Imagen de Fondo',
                    'param_name' => 'background_label',
                    'value' => 'Imagen de Fondo',
                    'description' => 'Ingrese la etiqueta para el campo de Imagen de Fondo.',
                ),
            ),
        ));
    }
}
?>