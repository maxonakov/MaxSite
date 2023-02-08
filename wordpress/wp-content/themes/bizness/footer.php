<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bizness
 */

?>

<?php
/**
 * Functions hooked into bizness_footer_before action
 *
 */
do_action( 'bizness_footer_before' );
?>

<footer id="colophon" class="site-footer">

    <?php
    /**
     * Functions hooked into bizness_footer_before action
     *
     */
    do_action( 'bizness_footer_top' );
    ?>

    <?php
    /**
     * Functions hooked into bizness_footer action
     *
     * @hooked bizness_footer_main - 10
     */
    do_action( 'bizness_footer' );
    ?>

    <?php
    /**
     * Functions hooked into bizness_footer_before action
     *
     */
    do_action( 'bizness_footer_bottom' );
    ?>

</footer><!-- #colophon -->

<?php
/**
 * Functions hooked into bizness_footer_after action
 *
 */
do_action( 'bizness_footer_after' );
?>

</div><!-- #page -->


<?php
/**
 * Functions hooked into bizness_body_bottom action
 *
 */
do_action( 'bizness_body_bottom' );
?>

<?php wp_footer(); ?>

</body>
</html>
