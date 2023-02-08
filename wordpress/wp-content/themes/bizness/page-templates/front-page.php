<?php
/**
 *
 * Template Name: Front Page
 *
 * The template for displaying content from page builder.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

get_header();
?>

<div id="primary" class="content-area">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php 
        $front_page_sections = get_theme_mod('front_page_content_elements',['featured-slider','about-us','services','cta','blog','testimonial']);
        if (!empty($front_page_sections)) {
            foreach ($front_page_sections as $key => $value) {
                echo '<div class="content-element element-'.esc_attr($value).' index-'.esc_attr($key).'">';
                switch ($value) {
                        
                    case 'featured-slider':
                        get_template_part( 'template-parts/front-page/featured', 'slider' );
                        break; 
                    case 'about-us': 
                        get_template_part( 'template-parts/front-page/about', 'us' );
                        break; 
                    case 'services':
                        get_template_part( 'template-parts/front-page/services', '' );
                        break;
                    case 'cta': 
                        get_template_part( 'template-parts/front-page/cta', '' );
                        break; 
                    case 'blog':
                        get_template_part( 'template-parts/front-page/blog', '' );
                        break;

                    case 'testimonial':
                        get_template_part( 'template-parts/front-page/testimonial', '' );
                        break; 
                        
                    default: 
                        break; 
                } 
                
                echo '</div><!-- .content-element -->'; 
            }
                
        }
        ?>
    <?php endwhile; // End of the loop. ?>

</div><!-- #primary -->

<?php
get_footer();
