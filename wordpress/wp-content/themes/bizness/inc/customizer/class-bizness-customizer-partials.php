<?php
/**
 * Bizness Customizer partials.
 *
 * @package Bizness
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * class for customizer partials
 *
 * @access public
 */
class Bizness_Customizer_Partials {

    /**
     * Instance
     *
     * @access private
     * @var object
     */
    private static $instance;

    /**
     * Returns the instance.
     *
     * @access public
     * @return object
     */
    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Render the site title for the selective refresh partial.
     *
     * @return void
     */
    public function bizness_customize_partial_blogname() {
        bloginfo( 'name' );
    }

    /**
     * Render the site tagline for the selective refresh partial.
     *
     * @return void
     */
    public function bizness_customize_partial_blogdescription() {
        bloginfo( 'description' );
    }
}

Bizness_Customizer_Partials::get_instance();