<?php

/* Styles
=============================================================== */

function nm_child_theme_styles() {
	// Enqueue child theme styles

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'savoy-digid-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );

	// Add styles inline.
	//wp_add_inline_style( 'hotel-inside-theme-styles', hi_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'savoy-digid-styles' );

	wp_register_script(
		'savoy-digid-scripts',
		get_stylesheet_directory_uri() . '/dist/main.js',
		array(),
		$theme_version,
		true
	);

	wp_enqueue_script( 'savoy-digid-scripts' );

	wp_enqueue_style( 'nm-child-theme', get_stylesheet_directory_uri() . '/style.css', array(), $theme_version );

}
add_action( 'wp_enqueue_scripts', 'nm_child_theme_styles', 1000 );// Note: Use priority "1000" to include the stylesheet after the parent theme stylesheets


/*add_action('woocommerce_payment_complete','my_custom_function');

function my_custom_function( $order_id ) {
	$order = new WC_Order( $order_id );
}*/

add_filter( 'woocommerce_checkout_fields', 'digid_remove_checkout_fields' );

function digid_remove_checkout_fields( $fields ) {

	unset($fields['billing']['billing_state']);

return $fields;

}

//add_action( 'woocommerce_payment_complete', 'my_change_status_function' );

/*function my_change_status_function( $order_id ) {

	$order = wc_get_order( $order_id );
	$order->update_status( 'completed' );

}
