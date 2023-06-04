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


function generate_font_css($font_directory)
{
    $site_url = get_site_url();
    $font_path = str_replace(ABSPATH, '', $font_directory);
    
    $font_files = scandir($font_directory);
    $font_css = '';
    
    foreach ($font_files as $file) {
        if ($file !== '.' && $file !== '..') {
            $font_name = pathinfo($file, PATHINFO_FILENAME);
            $font_css .= '@font-face {
                font-family: "' . $font_name . '";
                src: url("' . $site_url . '/' . $font_path . '/' . $file . '");
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }';
        }
    }

    return $font_css;
}