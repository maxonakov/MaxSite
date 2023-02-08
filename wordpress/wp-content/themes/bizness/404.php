<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bizness
 */

get_header();
?>

<?php
/**
 * Functions hooked into bizness_content_before action
 *
 */
do_action( 'bizness_content_before' );
?>

    <main id="primary"<?php bizness_primary_class(); ?>>

        <?php
        /**
         * Functions hooked into bizness_404_content_top action
         *
         */
        do_action( 'bizness_404_enntry_header' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_404_entry_content action
         *
         */
        do_action( 'bizness_404_entry_content' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_404_content_bottom action
         *
         */
        do_action( 'bizness_404_enntry_footer' );
        ?>

	</main><!-- #main -->

<?php
/**
 * Functions hooked into bizness_content_after action
 *
 * @hooked bizness_site_primary_content_end - 10
 * @hooked bizness_site_content_sidebar     - 15
 */
do_action( 'bizness_content_after' );
?>

<?php get_footer(); ?>
