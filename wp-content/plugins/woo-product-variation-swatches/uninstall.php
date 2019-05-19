<?php
/**
 * Uninstall plugin
 */

// If uninstall not called from WordPress, then exit
defined( 'WP_UNINSTALL_PLUGIN' ) or die( 'Keep Silent' );

$options = get_option( 'rtwpvs' );
if ( ! empty( $options ) && is_array( $options ) && isset( $options['remove_all_data'] ) && $options['remove_all_data'] ) {
	global $wpdb;

	// change to select type when uninstall
	$table_name = $wpdb->prefix . 'woocommerce_attribute_taxonomies';
	$query      = $wpdb->query( "UPDATE `$table_name` SET `attribute_type` = 'select' WHERE `attribute_type` != 'text'" );
	$wpdb->query( $query );

	delete_option( 'rtwpvs' );
	// Remove Option
	delete_option( 'rtwpvs_activate' );
	// Site options in Multisite
	delete_site_option( 'rtwpvs_activate' );
}