<?php
/**
 * Template part for displaying site identity
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */
$enable_site_logo       = get_theme_mod('header_site_logo_enable',true);
$enable_site_title      = get_theme_mod('header_site_title_enable',true);
$enable_site_tagline    = get_theme_mod('header_site_tagline_enable',true);
$site_title_class       = $enable_site_title ? 'site-title' : 'site-title screen-reader-text';
?>
<div class="site-header-item d-flex align-items-center flex-row header-site-identify site-branding">
    <?php if( $enable_site_logo ) { the_custom_logo(); } ?>
    <div class="site-title-wrap">
        <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="<?php echo esc_attr( $site_title_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
            <p class="<?php echo esc_attr( $site_title_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php endif; ?>

        <?php $bizness_description = get_bloginfo( 'description', 'display' );
        if ( $enable_site_tagline && ( $bizness_description || is_customize_preview() ) ) : ?>
            <p class="site-description"><?php echo $bizness_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
    </div><!-- . site-title-wrap -->
</div><!-- .site-branding -->