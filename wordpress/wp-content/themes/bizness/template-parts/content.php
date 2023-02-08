<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content-wrap">
        <?php
        /**
         * Functions hooked into bizness_posts_entry_header action
         * 
         */
        do_action( 'bizness_posts_entry_header' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_posts_entry_content action
         *
         * @hooked bizness_posts_content_elements - 10
         */
        do_action( 'bizness_posts_entry_content' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_posts_entry_footer action
         *
         */
        do_action( 'bizness_posts_entry_footer' );
        ?>
    </div><!-- .entry-content-wrap -->

</article><!-- #post-<?php the_ID(); ?> -->

