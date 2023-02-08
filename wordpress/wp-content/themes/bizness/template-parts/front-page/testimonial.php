<?php
/**
 * Template part for displaying front page featured slider section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

$args   = [
    'post_type'             => 'page',
    'posts_per_page'        => 3,
    'orderby'               =>'post__in',
    'no_rows_found'         => true,
	'ignore_sticky_posts'   => true
];
for ($i=1; $i <= 3; $i++) { 
    $page_id = get_theme_mod('front_page_testimonial_page_'.$i,'');
    if($page_id !== ''){
        $args['post__in'][] = absint($page_id);
    }
}
$the_query  = new WP_Query( $args );

if ( $the_query->have_posts() ) :

    $heading        = get_theme_mod('front_page_testimonial_heading',esc_html__( 'Testimonials', 'bizness' ));
    $subheading     = get_theme_mod('front_page_testimonial_sub_heading','');
    ?>
    <section class="bizness-testimonials-section"><!-- Testimonials Section Start -->
        <div class="container">
        <div class="bizness-testimonials">
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
            
            <div class="testimonials-carousel-wrap">
                <div class="testimonials-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $count = 1; while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            $rating     = get_theme_mod( 'front_page_testimonial_rate_'. $count, 4.5 );
                            ?>
                                <div class="swiper-slide">
                                    <div class="testi-item">
										<div class="testimonials-avatar-wrapper">
                                        <div class="testi-avatar">
                                            <?php
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
                                            ?>
                                            <div class="bizness-image-overlay"> </div>
                                        </div>
                                        <div class="testimonials-author-wrap">
                                                <h3 class="author-title"><?php the_title(); ?></h3>
                                            </div>
											</div>
                                        <div class="testimonials-text">
                                            <?php if( !empty($rating) ) : ?>
                                                <div class="star-ratings">
                                                    <div class="star-ratings-top" style="width: <?php echo esc_attr($rating * 20);?>%;">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class="star-ratings-bottom">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
											
											<div class="entry-content">
                                            	<?php the_excerpt(); ?>
											</div>
                                        </div>
                                    </div>
                                </div>
                            <?php $count++; endwhile;?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="tc-pagination"></div>
            </div>						
        </div>
        </div>
    </section><!-- Testimonials Section End -->
<?php endif;