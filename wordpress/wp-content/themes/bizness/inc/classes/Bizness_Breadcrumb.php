<?php
/**
 * Bizness Breadcrumb
 *
 * @package Bizness
 */

/**
 * class for breadcrumb
 *
 * @access public
 */
class Bizness_Breadcrumb {

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
     * Constructor method.
     *
     * @access private
     * @return void
     */
    private function __construct() {
        
        // Include trial breadcrumb
        require BIZNESS_THEME_DIR . 'inc/classes/Bizness_Breadcrumb_Trail.php';
        
    }

}

Bizness_Breadcrumb::get_instance();