<?php
/**
 * Template part for displaying front page featured slider section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

global $post;
$limits = get_theme_mod('front_page_service_no_of_pages',3);
$args   = [
    'post_type'             => 'page',
    'posts_per_page'        => absint($limits),
    'orderby'               =>'post__in',
    'no_rows_found'         => true,
	'ignore_sticky_posts'   => true
];
for ($i=1; $i <= $limits; $i++) { 
    $page_id = get_theme_mod('front_page_service_page_'.$i,'');
    if($page_id !== ''){
        $args['post__in'][] = absint($page_id);
    }
}

$the_query  = new WP_Query( $args );

if ( $the_query->have_posts() ) : 
    $counter        = 1;
    $heading        = get_theme_mod('front_page_service_heading',esc_html__( 'Why Us?', 'bizness' ));
    $subheading     = get_theme_mod('front_page_service_sub_heading','');
    $btn_text       = get_theme_mod('front_page_service_button_text',esc_html__( 'See All Services', 'bizness' ));
    ?>
    <section class="bizness-service-section"><!-- Services Section Start -->
        <div class="container">
            <?php if(!empty($heading) || !empty($subheading)) : ?>
                <div class="section-title-wrapper bizness-text-center">
                    <?php if(!empty($heading)) : ?>
                        <h2 class="bizness-section-title"><?php echo esc_html( $heading )?></h2>
                    <?php endif; ?>
                    <?php if(!empty($subheading)) : ?>
                        <p><?php echo esc_html( $subheading )?></p>	
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="bizness-service-box-wrapper">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                    $icon       = get_theme_mod('front_page_service_icon_'.$counter,''); ?>
                    <a class="bizness-service-box" href="<?php the_permalink(); ?>">
                        <div class="bizness-service-box-inner">
                            <div class="bizness-service-box-icon">
                                <?php
                                if( $icon ) {
                                    echo '<i class="fas '.esc_html($icon).'"></i>';
                                }
                                else {
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail(
                                            'thumbnail',
                                            array(
                                                'alt' => the_title_attribute(
                                                    array(
                                                        'echo' => false,
                                                    )
                                                ),
                                            )
                                        );
                                    }
                                    else {
                                        bizness_image_placeholder('thumbnail');
                                    }
                                }
                                ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div><!-- box inner -->
                    </a><!-- box -->
                <?php $counter++; endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div><!-- box wrapper -->
            <?php if ($btn_text) : 
                $link_url       = get_theme_mod('front_page_service_button_link','#');
                $link_target    = get_theme_mod('front_page_service_button_url_open','_self');
                ?>
                <div class="bizness-button-wrapper">
                    <a class="bizness-btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html( $btn_text ); ?>
                    </a>
                </div><!-- button -->
            <?php endif; ?>

        </div><!-- container -->
    </section><!-- Services Section End -->
<?php endif;
