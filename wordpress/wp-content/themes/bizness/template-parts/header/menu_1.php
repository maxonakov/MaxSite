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
    <nav id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
				'items_wrap'     => '<div id="primary-menu" class="%2$s"><ul>%3$s</ul></div>',
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</div>
