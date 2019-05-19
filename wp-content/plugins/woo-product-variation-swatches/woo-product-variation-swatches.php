<?php
/**
 * Plugin Name:             WooCommerce Variation Swatches
 * Plugin URI:              https://radiustheme.net/dev
 * Description:             Beautiful Colors, Images and Buttons Variation Swatches For WooCommerce Product Attributes
 * Version:                 1.0.21
 * Author:                  RadiusTheme
 * Author URI:              https://radiustheme.com
 * Requires at least:       4.8
 * Tested up to:            5.1
 * WC requires at least:    3.2
 * WC tested up to:         3.5
 * Domain Path:             /languages
 * Text Domain:             woo-product-variation-swatches
 */

// Define RTWPVS_PLUGIN_FILE.
if (!defined('RTWPVS_PLUGIN_FILE')) {
    define('RTWPVS_PLUGIN_FILE', __FILE__);
}

if (!class_exists('WooProductVariationSwatches')) {
    require_once("app/WooProductVariationSwatches.php");
}