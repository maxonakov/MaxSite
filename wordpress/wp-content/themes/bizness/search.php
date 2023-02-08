<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'bizness' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
            /**
             * Functions hooked into bizness_posts_content_loop_before action
             *
             */
            do_action('bizness_posts_content_loop_before');

			/* Start the Loop */
			while ( have_posts() ) : the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'template-parts/content', 'search' );

			endwhile;

            /**
             * Functions hooked into bizness_posts_content_loop_after action
             *
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
