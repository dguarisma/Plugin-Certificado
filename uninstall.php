<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;
$table_name1 = $wpdb->prefix . 'items_quotation';
$wpdb->query("DELETE FROM $table_name1");

$table_name2 = $wpdb->prefix . 'certified_generator_records';
$wpdb->query("DELETE FROM $table_name2");
