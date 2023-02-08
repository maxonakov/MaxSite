<?php
/**
 * Template part for displaying footer widget 5 content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

?>

<?php if ( is_active_sidebar( 'footer-sidebar-5' ) ) : ?>
    <div class="d-flex align-items-center site-footer-item">
		<div class="footer-sidebar-wrap footer-widget-5-wrap">
			<?php dynamic_sidebar( 'footer-sidebar-5' ); ?>
		</div><!-- .footer-sidebar-wrap -->
	</div>
<?php else : ?>
    <p><?php esc_html_e( 'Drag and drop widgets in footer widget area 5.','bizness'); ?></p>
<?php endif; ?>
