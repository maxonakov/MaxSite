<?php
/**
 * Bizness Customizer Class
 *
 * @package Bizness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Bizness_Customizer class
 */
class Bizness_Customizer {

    /**
     * Setup class.
     *
     */
    public function __construct() {

        add_action( 'customize_register', [ $this, 'bizness_customize_register' ] );

        add_action( 'customize_register', [ $this, 'bizness_customize_helpers' ] );

        add_action( 'customize_preview_init', [ $this, 'bizness_customize_preview_js' ] );

        add_action( 'customize_controls_enqueue_scripts', [ $this, 'bizness_customize_js' ] );
    }


    /**
     * Include customizer helpers.
     */
    public function bizness_customize_helpers() {
        require BIZNESS_THEME_DIR . 'inc/customizer/class-bizness-customizer-partials.php';
    }

    /**
     * Add postMessage support for site title and description for the Theme Customizer.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function bizness_customize_register( $wp_customize ) {

        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

        $wp_customize->remove_control('header_textcolor');

        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial(
                'blogname',
                array(
                    'selector'        => '.site-title a',
                    'render_callback' => [ $this, 'bizness_customize_partial_blogname' ],
                )
            );
            $wp_customize->selective_refresh->add_partial(
                'blogdescription',
                array(
                    'selector'        => '.site-description',
                    'render_callback' => [ $this, 'bizness_customize_partial_blogdescription' ],
                )
            );
        }
    }

    /**
     * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
     */
    public function bizness_customize_preview_js() {

        wp_enqueue_script( 'bizness-customizer-preview', BIZNESS_THEME_URI . 'inc/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), BIZNESS_THEME_VERSION, true );
    }

    /**
     * heme Customizer JS
     */
    public function bizness_customize_js() {

        // Enqueue the style.
        wp_enqueue_style( 'bizness-customize-controls', BIZNESS_THEME_URI . 'inc/customizer/assets/css/customize-controls.css', null, BIZNESS_THEME_VERSION, 'all' );

        // Add output of Customizer settings as inline style.
        wp_add_inline_style( 'bizness-customize-controls', Bizness_Customizer_Inline_Style::css_output( 'customizer' ) );

        wp_enqueue_script( 'bizness-customizer', BIZNESS_THEME_URI . 'inc/customizer/assets/js/customizer.js', array( 'jquery', 'customize-controls' ), BIZNESS_THEME_VERSION, false );
    }
}
new Bizness_Customizer();