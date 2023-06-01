<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Eliminar la tabla de base de datos al desinstalar el plugin
global $wpdb;
$table_name = $wpdb->prefix . 'certified_generator_records';
$wpdb->query("DROP TABLE IF EXISTS $table_name;");
