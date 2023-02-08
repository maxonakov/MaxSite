<?php
/**
 * Template part for displaying menu 1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

?>
<div class="d-flex align-items-center site-footer-item">
    <div class="footer-menu-wrap">
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-2',
                    'menu_id'        => 'footer-menu',
                    'items_wrap'     => '<div id="footer-menu" class="%2$s"><ul>%3$s</ul></div>',
                    'depth'          => 1
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </div>
</div>
