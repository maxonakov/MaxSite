<?php
/**
 * Required Plugins File
 *
 * Include the TGM_Plugin_Activation class.
 *
 * @since    1.0.0
 * @package Bizness
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require BIZNESS_THEME_DIR . 'inc/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'bizness_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function bizness_theme_register_required_plugins() {
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
            'name'      => esc_html__( 'One Click Demo Import', 'bizness' ),
            'slug'      => 'one-click-demo-import',
            'required'  => false,
        ),
		array(
			'name'      => esc_html__( 'Kirki Customizer Framework', 'bizness' ),
			'slug'      => 'kirki',
			'required'  => false,
		),
		array(
            'name'      => esc_html__( 'WooCommerce', 'bizness' ),
            'slug'      => 'woocommerce',
            'required'  => false,
        ),
		array(
            'name'      => esc_html__( 'Contact Form 7', 'bizness' ),
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'bizness', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '', // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true, // Show admin notices or not.
		'dismissable'  => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false, // Automatically activate plugins after installation or not.
		'message'      => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}