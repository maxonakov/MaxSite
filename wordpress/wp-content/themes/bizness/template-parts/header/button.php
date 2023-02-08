<?php
/**
 * Template part for displaying header button
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

$label_text     = get_theme_mod('header_button_text',esc_html__( 'Button', 'bizness' ));
$button_url     = get_theme_mod('header_button_url','#');
$link_target    = get_theme_mod('header_button_url_open','_self');
$link_no_follow = get_theme_mod('header_button_link_nofollow',true) ? ' rel=nofollow' : '';
?>
<div class="d-flex align-items-center site-header-item">
    <div class="d-flex align-items-center header-button-wrap">
        <a class="bizness-btn-primary header-button" href="<?php echo esc_url($button_url);?>" target="<?php echo esc_attr($link_target);?>"<?php echo esc_attr($link_no_follow);?>>
            <span class="label-text"><?php echo esc_html($label_text);?></span>
        </a>
    </div>
</div>
