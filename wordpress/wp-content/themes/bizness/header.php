<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bizness
 */

?>


<!doctype html>

<?php
/**
 * Functions hooked into bizness_html_before action
 *
 */
do_action( 'bizness_html_before' );
?>

<html <?php language_attributes(); ?>>

<head>

    <?php
    /**
     * Functions hooked into bizness_head_top action
     *
     */
    do_action( 'bizness_head_top' );
    ?>

    <?php
    /**
     * Functions hooked into bizness_head action
     *
     * @hooked bizness_head_meta - 10
     */
    do_action( 'bizness_head' );
    ?>

    <?php
    /**
     * Functions hooked into bizness_head_bottom action
     *
     */
    do_action( 'bizness_head_bottom' );
    ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
/**
 * Functions hooked into bizness_body_top action
 *
 */
do_action( 'bizness_body_top' );
?>

<?php wp_body_open(); ?>

<div id="page" <?php bizness_site_class(); ?>>

    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bizness' ); ?></a>

    <?php
    /**
     * Functions hooked into bizness_header_before action
     *
     */
    do_action( 'bizness_header_before' );
    ?>

    <header id="masthead" class="site-header">

        <?php
        /**
         * Functions hooked into bizness_header_top action
         *
         */
        do_action( 'bizness_header_top' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_header action
         *
         * @hooked bizness_header_main - 10
         */
        do_action( 'bizness_header' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_header_bottom action
         *
         */
        do_action( 'bizness_header_bottom' );

        ?>

    </header><!-- #masthead -->

    <?php
    /**
     * Functions hooked into bizness_header_after action
     *
     */
    do_action( 'bizness_header_after' );