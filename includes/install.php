<?php

function certified_generator_install() {
    if (current_user_can('activate_plugins')) {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();

        $tables = array(
            'records_form_one' => array(
                'business_name' => 'varchar(255) NOT NULL',
                'payment_information' => 'varchar(255) NOT NULL',
                'invoice_to' => 'varchar(255) NOT NULL',
                'terms' => 'varchar(255) NOT NULL',
                'image' => 'varchar(255) DEFAULT \'\'',
                'signature' => 'varchar(255) DEFAULT \'\'',
                'background' => 'varchar(255) DEFAULT \'\'',
            ),
            'records_form_two' => array(
                'business_name' => 'varchar(255) NOT NULL',
                'about_us' => 'varchar(255) NOT NULL',
                'why_choose_us' => 'varchar(255) NOT NULL',
                'service_1' => 'varchar(255) NOT NULL',
                'service_2' => 'varchar(255) NOT NULL',
                'service_3' => 'varchar(255) NOT NULL',
                'service_4' => 'varchar(255) NOT NULL',
                'logo' => 'varchar(255) DEFAULT \'\'',
                'photo' => 'varchar(255) DEFAULT \'\'',
                'background' => 'varchar(255) DEFAULT \'\'',
                'address' => 'varchar(255) DEFAULT \'\'',
                'phone' => 'varchar(255) DEFAULT \'\'',
                'email' => 'varchar(255) DEFAULT \'\'',
                'web_site' => 'varchar(255) DEFAULT \'\'',
            ),
            'records_form_three' => array(
                'name' => 'varchar(255) NOT NULL',
                'surname' => 'varchar(255) NOT NULL',
                'job_profile' => 'varchar(255) NOT NULL',
                'slogan' => 'varchar(255) NOT NULL',
                'logo' => 'varchar(255) DEFAULT \'\'',
                'address' => 'varchar(255) DEFAULT \'\'',
                'phone' => 'varchar(255) DEFAULT \'\'',
                'email' => 'varchar(255) DEFAULT \'\'',
                'web_site' => 'varchar(255) DEFAULT \'\'',
                'background_front' => 'varchar(255) DEFAULT \'\'',
                'background_back' => 'varchar(255) DEFAULT \'\'',
            ),
        );

        foreach ($tables as $table_name => $columns) {
            $full_table_name = $wpdb->prefix . $table_name;
            if ($wpdb->get_var("SHOW TABLES LIKE '$full_table_name'") != $full_table_name) {
                $sql = "CREATE TABLE $full_table_name (
                    id mediumint(9) NOT NULL AUTO_INCREMENT,
                    ";
                foreach ($columns as $column_name => $column_definition) {
                    $sql .= "$column_name $column_definition, ";
                }
                $sql .= "PRIMARY KEY  (id)
                ) $charset_collate;";
                require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
                dbDelta($sql);
            }
        }

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
