<?php
/**
 * Plugin Name: WooCommerce
 * Plugin URI: https://woocommerce.com/
 * Description: An eCommerce toolkit that helps you sell anything. Beautifully.
 * Version: 7.1.0
 * Author: Automattic
 * Author URI: https://woocommerce.com
 * Text Domain: woocommerce
 * Domain Path: /i18n/languages/
 * Requires at least: 5.8
 * Requires PHP: 7.4
 *
 * @package WooCommerce
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'WC_PLUGIN_FILE' ) ) {
	define( 'WC_PLUGIN_FILE', __FILE__ );
}

// Load core packages and the autoloader.
require __DIR__ . '/src/Autoloader.php';
require __DIR__ . '/src/Packages.php';

if ( ! \Automattic\WooCommerce\Autoloader::init() ) {
	return;
}
\Automattic\WooCommerce\Packages::init();

// Include the main WooCommerce class.
if ( ! class_exists( 'WooCommerce', false ) ) {
	include_once dirname( WC_PLUGIN_FILE ) . '/includes/class-woocommerce.php';
}

// Initialize dependency injection.
$GLOBALS['wc_container'] = new Automattic\WooCommerce\Container();

/**
 * Returns the main instance of WC.
 *
 * @since  2.1
 * @return WooCommerce
 */
function WC() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	return WooCommerce::instance();
}

/**
 * Returns the WooCommerce object container.
 * Code in the `includes` directory should use the container to get instances of classes in the `src` directory.
 *
 * @since  4.4.0
 * @return \Automattic\WooCommerce\Container The WooCommerce object container.
 */
function wc_get_container() {
	return $GLOBALS['wc_container'];
}

// Global for backwards compatibility.
$GLOBALS['woocommerce'] = WC();
add_filter( 'woocommerce_available_variation', 'custom_variation_min_max_qty', 10, 3 );
function custom_variation_min_max_qty( $data, $product, $variation ) {
    // Your variable product ID
    $variable_id = 18875;

    if( $product->get_id() == $variable_id ) {
        // Define your product attribute (always start with "pa_" + the slug)
        $taxonomy = 'pa_discount-offer';

        foreach($data['attributes'] as $attribute => $value_slug ){
            if( $attribute == 'attribute_' . $taxonomy ) {
                // set your color slugs below with the correct quantity
                if ( $value_slug == 'single-bottle' ) 
                {
                    $qty = 1; // Set the quantity for "Red" color
                    break;
                }
                elseif ( $value_slug == '3-bottles' )
                {
                    $qty = 3; // Set the quantity for "Blue" color
                    break;
                }
                elseif ( $value_slug == '5-bottles' )
                {
                    $qty = 5; // Set the quantity for "Green" color
                    break;
                }
            }
        }
    }

    if( isset($qty) ) {
        $data['min_qty'] = $qty;
        $data['max_qty'] = $qty;
    }

    return $data;
}
