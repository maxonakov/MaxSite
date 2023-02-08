<?php
/**
 * Template part for displaying search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */
// Placeholder
$placeholder = get_theme_mod(
    'header_search_input_placeholder',
    esc_html__( 'Search...', 'bizness' )
);
$button_text = get_theme_mod(
    'header_search_button_text',
    esc_html__( 'Search', 'bizness' )
);
?>
<div class="d-flex align-items-center site-header-item">
    <div class="header-search-wrap d-flex">
        <a href="javascript:void(0)" class="search-toggle"></a>
        <div class="header-search-content">
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
                <input type="search" class="search-field" name='s' placeholder="<?php echo esc_attr( $placeholder ); ?>"  value="<?php echo esc_attr( get_search_query() ); ?>">
                <input class="search-submit" value="<?php echo esc_attr( $button_text ); ?>" type="submit">
            </form>
        </div>
    </div><!-- .header-search-wrap -->
</div>
