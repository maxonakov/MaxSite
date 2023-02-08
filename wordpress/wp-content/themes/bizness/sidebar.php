<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bizness
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}

/**
 * Functions hooked into bizness_sidebar_before action
 *
 */
do_action( 'bizness_sidebar_before' );
?>

    <aside id="secondary" class="widget-area col-lg-4">

        <?php
        /**
         * Functions hooked into bizness_sidebar_top action
         *
         */
        do_action( 'bizness_sidebar_top' );
        ?>

        <?php dynamic_sidebar( 'sidebar-1' ); ?>

        <?php
        /**
         * Functions hooked into bizness_sidebar_bottom action
         *
         */
        do_action( 'bizness_sidebar_bottom' );
        ?>

    </aside><!-- #secondary -->

<?php
/**
 * Functions hooked into bizness_sidebar_before action
 *
 */
do_action( 'bizness_sidebar_after' );
?>