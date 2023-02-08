<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
         * Functions hooked into bizness_post_content_loop_before action
         *
         */
        do_action('bizness_post_content_loop_before');

		while ( have_posts() ) : the_post();

            /**
             * Functions hooked into bizness_post_content action
             *
             */
            do_action('bizness_post_content_before');

            get_template_part( 'template-parts/content', 'single' );

            /**
             * Functions hooked into bizness_post_content action
             *
             * @hooked bizness_post_after_content_elements  - 10
             */
            do_action('bizness_post_content_after');

		endwhile; // End of the loop.

        /**
         * Functions hooked into bizness_post_content_loop_after action
         *
         */
        do_action('bizness_post_content_loop_after');

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