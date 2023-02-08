<?php
/**
 * Template part for displaying footer Copyright content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

$copyright      = get_theme_mod('footer_copyright_content',__( 'Copyright {copyright} {current_year} {site_title} - Powered by {theme_author}', 'bizness' ));
$copyright      = str_replace( '{copyright}', '&copy;', $copyright );
$copyright      = str_replace( '{current_year}', date_i18n( _x( 'Y', 'copyright date format; check date() on php.net', 'bizness' ) ), $copyright );
$copyright      = str_replace( '{site_title}', get_bloginfo( 'name' ), $copyright );
$copyright      = str_replace( '{theme_author}', '<a href="' . esc_url("https://excelthemes.com/") . '" rel="nofollow noopener" target="_self"> Excel Themes</a>', $copyright );
?>

<div class="d-flex align-items-center site-footer-item">
    <div class="site-coptyright-item site-footer-item">
        <div class="footer-copyright-inner"><?php echo wp_kses_post( $copyright ); ?></div>
    </div>
</div>
