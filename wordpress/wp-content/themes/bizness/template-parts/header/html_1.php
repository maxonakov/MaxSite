<?php
/**
 * Template part for displaying header HTML content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

$html_content = get_theme_mod('header_html_content', esc_html__( 'Sample Text', 'bizness' ))
?>
<div class="d-flex align-items-center site-html-item">
    <div class="header-html-inner"><?php echo wp_kses_post( $html_content ); ?></div>
</div>
