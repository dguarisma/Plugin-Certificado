<?php

function certified_generator_register_menu()
{
    add_menu_page(
        'Certificados Generados',
        'Certificados Generados',
        'manage_options',
        'certified-generator-records',
        'records_form_one_page',
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
function records_form_one_page()
{
    global $wpdb;
    $table_name1 = $wpdb->prefix . 'records_form_one';

    // Obtener registros de la primera tabla
    $records1 = $wpdb->get_results("SELECT * FROM $table_name1");

    ?>

    <div class="wrap">
        <h1>Registros de los formularios</h1>
        <nav class="nav-tab-wrapper">
            <a href="#tab1" class="nav-tab nav-tab-active">Cotización</a>
            <a href="#tab2" class="nav-tab">Flyer</a>
            <a href="#tab3" class="nav-tab">Tarjeta Pro</a>
        </nav>

        <div id="tab1" class="tab-content">
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th style="text-align: center;">Logo</th>
                        <th style="text-align: center;">Razón Social</th>
                        <th style="text-align: center;">Facturado a</th>
                        <th style="text-align: center;">Información Pago</th>
                        <th style="text-align: center;">Diseño Seleccionado</th>
                        <th>Firma</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records1 as $record) : ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="<?php echo $record->image; ?>" style="min-width: 80px; max-width: 80px;" alt="Diseño Descargado">
                            </td>
                            <td><?php echo $record->business_name; ?></td>
                            <td><?php echo $record->invoice_to; ?></td>
                            <td><?php echo $record->payment_information; ?></td>
                            <td style="text-align: center;">
                                <img src="<?php echo $record->background; ?>" style="min-width: 80px; max-width: 80px;" alt="Diseño Descargado">
                            </td>
                            <td style="text-align: center;">
                                <img src="<?php echo $record->signature; ?>" style="min-width: 80px; max-width: 80px;" alt="Diseño Descargado">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="tab2" class="tab-content" style="display: none;">
        <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th style="text-align: center;">Logo</th>
                        <th style="text-align: center;">Razón Social</th>
                        <th style="text-align: center;">Facturado a</th>
                        <th style="text-align: center;">Información Pago</th>
                        <th>Firma</th>
                        <th>Foto</th>
                        <th style="text-align: center;">Diseño Seleccionado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records1 as $record) : ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="<?php echo $record->image; ?>" style="min-width: 80px; max-width: 80px;" alt="Diseño Descargado">
                            </td>
                            <td><?php echo $record->business_name; ?></td>
                            <td><?php echo $record->invoice_to; ?></td>
                            <td><?php echo $record->payment_information; ?></td>
                            <td style="text-align: center;">
                                <img src="<?php echo $record->background; ?>" style="min-width: 80px; max-width: 80px;" alt="Diseño Descargado">
                            </td>
                            <td style="text-align: center;">
                                <img src="<?php echo $record->signature; ?>" style="min-width: 80px; max-width: 80px;" alt="Diseño Descargado">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="tab3" class="tab-content" style="display: none;">
        <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th style="text-align: center;">Logo</th>
                        <th style="text-align: center;">Nombre y Apellido</th>
                        <th style="text-align: center;">Cargo</th>
                        <th style="text-align: center;">Información</th>
                        <th style="text-align: center;">Diseño Seleccionado</th>
                        <th style="text-align: center;">Redes Sociales</th>
                        <th>QR</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td></td>          
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Script para alternar entre las pestañas -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll(".nav-tab");
            const tabContents = document.querySelectorAll(".tab-content");
            tabs.forEach(function(tab) {
                tab.addEventListener("click", function(e) {
                    e.preventDefault();
                    tabs.forEach(function(tab) {
                        tab.classList.remove("nav-tab-active");
                    });
                    tabContents.forEach(function(content) {
                        content.style.display = "none";
                    });
                    this.classList.add("nav-tab-active");
                    const targetId = this.getAttribute("href");
                    const targetContent = document.querySelector(targetId);
                    targetContent.style.display = "block";
                });
            });
        });
    </script>

<?php
}
?>