<?php
/**
 * Template part for displaying menu 1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

?>
<div class="d-flex align-items-center site-header-item">
    <nav id="top-navigation" class="top-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-3',
                'menu_id'        => 'top-menu',
				'items_wrap'     => '<div id="top-menu" class="%2$s"><ul>%3$s</ul></div>',
                'depth'          => 1,
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</div>
