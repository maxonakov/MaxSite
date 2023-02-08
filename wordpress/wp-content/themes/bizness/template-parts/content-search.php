<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    /**
     * Functions hooked into bizness_search_posts_entry_header action
     *
     * @hooked bizness_search_posts_header - 10
     */
    do_action( 'bizness_search_posts_entry_header' );
    ?>

    <?php
    /**
     * Functions hooked into bizness_search_posts_entry_content action
     *
     * @hooked bizness_search_posts_content - 10
     */
    do_action( 'bizness_search_posts_entry_content' );
    ?>

    <?php
    /**
     * Functions hooked into bizness_search_posts_entry_footer action
     *
     * @hooked bizness_search_posts_footer - 10
     */
    do_action( 'bizness_search_posts_entry_footer' );
    ?>

</article><!-- #post-<?php the_ID(); ?> -->