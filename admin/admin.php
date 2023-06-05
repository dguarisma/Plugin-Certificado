<?php

function certified_generator_register_menu()
{
    add_menu_page(
        'Certificados Generados',
        'Certificados Generados',
        'manage_options',
        'certified-generator-records',
        'certified_generator_records_page',
        'dashicons-media-document'
    );

    add_submenu_page(
        'certified-generator-records',
        'Configuración de Fuentes',
        'Configuración de Fuentes',
        'manage_options',
        'certified-generator-fonts',
        'certified_generator_fonts_page'
    );
}

function certified_generator_fonts_page()
{
    // Página de configuración de fuentes
    echo '<div class="wrap">';
    echo '<h1>Configuración de Fuentes</h1>';

    echo '<h2>Subir Fuente para Formularios</h2>';
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<input type="file" name="form_font_file" accept=".zip">';
    echo '<input type="submit" name="submit_form_font" value="Subir Fuente">';
    echo '</form>';

    echo '<h2>Subir Fuente para PDF</h2>';
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<input type="file" name="pdf_font_file" accept=".zip">';
    echo '<input type="submit" name="submit_pdf_font" value="Subir Fuente">';
    echo '</form>';

    if (isset($_POST['submit_form_font'])) {
            $uploaded_zip = $_FILES['form_font_file'];
            $zip_name = $uploaded_zip['name'];
            $zip_tmp_name = $uploaded_zip['tmp_name'];
            $form_fonts_directory = plugin_dir_path(dirname(__FILE__)) . 'public/fonts/forms/';
            
            $zip = new ZipArchive;
            if ($zip->open($zip_tmp_name) === TRUE) {
            $zip->extractTo($form_fonts_directory);
            $zip->close();
            $extracted_files = scandir($form_fonts_directory);
            $font_css = '';
            
            foreach ($extracted_files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $font_name = pathinfo($file, PATHINFO_FILENAME);
                    $font_url = plugin_dir_url(dirname(__FILE__)) . 'public/fonts/forms/' . $font_name . '/' . $file;
                    $folder_path = $form_fonts_directory . $font_name;
                    $files = scandir($folder_path);
                    
                    foreach ($files as $file) {
                        if ($file !== '.' && $file !== '..') {
                             $file_name_without_extension = pathinfo($file, PATHINFO_FILENAME);
                             $font_css .= '@font-face {
                                font-family: \'' . $file_name_without_extension . '\';
                                font-weight: normal;
                                src: url(\'' .plugin_dir_url(dirname(__FILE__)) . 'public/fonts/forms/' .$file. '\') format(\'opentype\');
                                font-display: swap;
                            }';
                        }
                    }
                }
            }
              file_put_contents($form_fonts_directory . 'fonts.css', $font_css);
             echo '<p>Fuentes para formularios subidas exitosamente.</p>';
            } else {
                 echo '<p>Error al descomprimir el archivo ZIP.</p>';
            }

    }
    if (isset($_POST['submit_pdf_font'])) {
        $uploaded_zip = $_FILES['pdf_font_file'];
        $zip_name = $uploaded_zip['name'];
        $zip_tmp_name = $uploaded_zip['tmp_name'];
        $pdf_fonts_directory = plugin_dir_path(dirname(__FILE__)) . 'public/fonts/pdf/';
    
        $zip = new ZipArchive;
        if ($zip->open($zip_tmp_name) === TRUE) {
            $zip->extractTo($pdf_fonts_directory);
            $zip->close();
            $extracted_files = scandir($pdf_fonts_directory);
            $font_css = '';
    
            foreach ($extracted_files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $font_name = pathinfo($file, PATHINFO_FILENAME);
                    $font_url = plugin_dir_url(dirname(__FILE__)) . 'public/fonts/pdf/' . $font_name . '/' . $file;
                    $folder_path = $pdf_fonts_directory . $font_name;
                    $files = scandir($folder_path);
                    
                    foreach ($files as $file) {
                        if ($file !== '.' && $file !== '..') {
                             $file_name_without_extension = pathinfo($file, PATHINFO_FILENAME);
                             $font_css .= '@font-face {
                                font-family: \'' . $file_name_without_extension . '\';
                                font-weight: normal;
                                src: url(\'' .plugin_dir_url(dirname(__FILE__)) . 'public/fonts/pdf/' .$file. '\') format(\'opentype\');
                                font-display: swap;
                            }';
                        }
                    }
                }
            }
    
            file_put_contents($pdf_fonts_directory . 'fonts.css', $font_css);
            echo '<p>Fuentes para PDF subidas exitosamente.</p>';
        } else {
            echo '<p>Error al descomprimir el archivo ZIP.</p>';
        }
    }
   echo '</div>';
}

function certified_generator_records_page()
{
    global $wpdb;
    $table_name1 = $wpdb->prefix . 'certified_generator_records';
    $table_name2 = $wpdb->prefix . 'items_quotation';

    // Obtener registros de la primera tabla
    $records1 = $wpdb->get_results("SELECT * FROM $table_name1");

    // Obtener registros de la segunda tabla
    # $records2 = $wpdb->get_results("SELECT * FROM $table_name2");

    echo '<div class="wrap">';
    echo '<h1>Registros de los formularios</h1>';

    // Crear las pestañas de navegación
    echo '<nav class="nav-tab-wrapper">';
    echo '<a href="#tab1" class="nav-tab nav-tab-active">Cotización</a>';
    echo '<a href="#tab2" class="nav-tab">Flyer</a>';
    echo '<a href="#tab3" class="nav-tab">Tarjeta Pro</a>';
    echo '</nav>';

    // Contenido de las pestañas
    echo '<div id="tab1" class="tab-content">';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Logo </th><th>Razón Social </th><th>Facturado a </th><th>Información Pago</th><th>Diseño Descargado</th>
    <th>Firma</th><
    </tr></thead>';
    echo '<tbody>';
    foreach ($records1 as $record) {
        echo '<tr>
        </td>
        <td style="text-align: center;"> 
        <img src="'. $record->image . '"style="min-width: 80px; max-width: 80px; " alt="Diseño Descargado"></td>
        <td>' . $record->razon_social . '</td><td>' . $record->factura_a . '</td><td>' . $record->informacion_pago . '</td>
        <td style="text-align: center;"> 
        <img src="'. $record->background . '"style="min-width: 80px; max-width: 80px; " alt="Diseño Descargado"></td>
        <td style="text-align: center;"> 
        <img src="'. $record->firma . '"style="min-width: 80px; max-width: 80px; " alt="Diseño Descargado"></td><
        </tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';

    echo '<div id="tab2" class="tab-content" style="display: none;">';
    echo '</div>';

    echo '<div id="tab3" class="tab-content" style="display: none;">';
    echo '</div>';
    echo '</div>';

    // Script para alternar entre las pestañas
    echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll(".nav-tab");
            const tabContents = document.querySelectorAll(".tab-content");
            tabs.forEach(function(tab) {
                tab.addEventListener("click", function(e) {
                    e.preventDefault();
                    // Remover la clase "nav-tab-active" de todas las pestañas
                    tabs.forEach(function(tab) {
                        tab.classList.remove("nav-tab-active");
                    });
                    // Ocultar todos los contenidos de las pestañas
                    tabContents.forEach(function(content) {
                        content.style.display = "none";
                    });
                    // Agregar la clase "nav-tab-active" a la pestaña seleccionada
                    this.classList.add("nav-tab-active");
                    // Mostrar el contenido de la pestaña seleccionada
                    const targetId = this.getAttribute("href");
                    const targetContent = document.querySelector(targetId);
                    targetContent.style.display = "block";
                });
            });
        });
    </script>';
}