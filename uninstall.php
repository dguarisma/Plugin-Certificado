<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

$tables = array(
    $wpdb->prefix . 'items_quotation',
    $wpdb->prefix . 'records_form_one',
    $wpdb->prefix . 'records_form_three',
    $wpdb->prefix . 'process_form_three'
);

foreach ($tables as $table) {
    $wpdb->query("DELETE FROM $table");
}
