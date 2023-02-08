<?php
/**
 * Template part for displaying footer HTML content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

$html_content = get_theme_mod('footer_html_content', esc_html__( 'Sample Text', 'bizness' ))
?>
<div class="d-flex align-items-center site-footer-item">
    <div class="site-html-item">
        <div class="footer-html-inner"><?php echo wp_kses_post( $html_content ); ?></div>
    </div>
</div>
