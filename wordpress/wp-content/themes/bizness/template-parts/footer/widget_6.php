<?php
/**
 * Template part for displaying footer widget 6 content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

?>

<?php if ( is_active_sidebar( 'footer-sidebar-6' ) ) : ?>
    <div class="footer-sidebar-wrap footer-widget-6-wrap site-footer-item">
        <?php dynamic_sidebar( 'footer-sidebar-6' ); ?>
    </div><!-- .footer-sidebar-wrap -->
<?php else : ?>
    <p><?php esc_html_e( 'Drag and drop widgets in footer widget area 6.','bizness'); ?></p>
<?php endif; ?>
r