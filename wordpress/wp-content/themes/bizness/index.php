<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
         * Functions hooked into bizness_content_before action
         *
         */
        do_action( 'bizness_content_top' );
        ?>

        <?php if ( have_posts() ) : ?>

            <?php
            /**
             * Functions hooked into bizness_posts_content_loop_before action
             *
             * @hooked bizness_posts_cols_per_row_start - 10
             */
            do_action('bizness_posts_content_loop_before');

            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_type() );

            endwhile;

            /**
             * Functions hooked into bizness_posts_content_loop_after action
             *
             * @hooked bizness_posts_cols_per_row_close - 5
             * @hooked bizness_posts_navigation - 10
             */
            do_action('bizness_posts_content_loop_after');

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

        <?php
        /**
         * Functions hooked into bizness_content_bottom action
         *
         */
        do_action( 'bizness_content_bottom' );
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
