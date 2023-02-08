<?php
/**
 * Template part for displaying page content in page.php
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
         * Functions hooked into bizness_page_entry_header action
         *
         */
        do_action( 'bizness_page_entry_header' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_page_entry_content action
         *
         * @hooked bizness_page_content_elements - 10
         */
        do_action( 'bizness_page_entry_content' );
        ?>

        <?php
        /**
         * Functions hooked into bizness_page_entry_footer action
         *
         * @hooked bizness_page_after_content_elements() - 10
         */
        do_action( 'bizness_page_entry_footer' );
        ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
