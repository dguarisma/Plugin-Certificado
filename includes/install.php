<?php

function certified_generator_install() {
    if (current_user_can('activate_plugins')) {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();

        // Crear tabla certified_generator_records
        $certified_table_name = $wpdb->prefix . 'certified_generator_records';
        if ($wpdb->get_var("SHOW TABLES LIKE '$certified_table_name'") != $certified_table_name) {
            $certified_sql = "CREATE TABLE $certified_table_name (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                razon_social varchar(255) NOT NULL,
                informacion_pago varchar(255) NOT NULL,
                factura_a varchar(255) NOT NULL,
                terms varchar(255) NOT NULL,
                image varchar(255) DEFAULT '',
                firma varchar(255) DEFAULT '',
                background varchar(255) DEFAULT '',
                PRIMARY KEY  (id)
            ) $charset_collate;";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($certified_sql);
        }

        // Crear tabla items_quotation
        $items_table_name = $wpdb->prefix . 'items_quotation';
        if ($wpdb->get_var("SHOW TABLES LIKE '$items_table_name'") != $items_table_name) {
            $items_sql = "CREATE TABLE $items_table_name (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                certified_id mediumint(9) NOT NULL,
                descripcion varchar(255) NOT NULL,
                cantidad int NOT NULL,
                precios decimal(10, 2) NOT NULL,
                PRIMARY KEY  (id),
                FOREIGN KEY (certified_id) REFERENCES $certified_table_name(id)
            ) $charset_collate;";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($items_sql);
        }
    }
}
