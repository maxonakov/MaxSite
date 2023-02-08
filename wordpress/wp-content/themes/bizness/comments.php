<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

    <?php
    /**
     * Functions hooked into bizness_comments_before action
     *
     */
    do_action( 'bizness_comments_before' );
    ?>

	<?php
    /**
     * Functions hooked into bizness_comments action
	 * 
	 * @hooked bizness_comments_element - 10
     *
     */
    do_action( 'bizness_comments' );
    ?>

    <?php
    /**
     * Functions hooked into bizness_comments_after action
     *
     */
    do_action( 'bizness_comments_after' );
    ?>

</div><!-- #comments -->
