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
    echo '<thead><tr><th>ID</th><th>Razón Social </th><th>Facturado a </th><th>Información Pago</th><th>Diseño Descargado</th></tr></thead>';
    echo '<tbody>';
    foreach ($records1 as $record) {
        echo '<tr><td>' . $record->id . '</td><td>' . $record->razon_social . '</td><td>' . $record->factura_a . '</td><td>' . $record->informacion_pago . '</td><td> 
        <img src="'. $record->background . '" alt="Diseño Descargado"></td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';

    echo '<div id="tab2" class="tab-content" style="display: none;">';
    // Aquí puedes agregar el contenido de la segunda tabla
    // Utiliza la estructura similar a la primera tabla para mostrar los registros
    echo '</div>';

    echo '<div id="tab3" class="tab-content" style="display: none;">';
    // Aquí puedes agregar el contenido de la segunda tabla
    // Utiliza la estructura similar a la primera tabla para mostrar los registros
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
