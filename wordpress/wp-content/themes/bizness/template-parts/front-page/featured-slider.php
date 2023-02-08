<?php

/**
 * Template part for displaying front-page featured slider section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

global $post;
$featured_cats = get_theme_mod(
	'front_page_slider_cat_id',
	''
);
$posts_limit = get_theme_mod(
	'front_page_slider_limit',
	3
);
$terms = get_terms( array('taxonomy' => 'category') );

// Arguments
$args = [
	'post_type'             => 'post',
	'posts_per_page'        => absint($posts_limit),
	'no_found_rows'         => true,
	'ignore_sticky_posts'   => true
];

if ( $featured_cats && !empty( $terms ) && in_array( $featured_cats, wp_list_pluck( $terms, 'term_id' ) ) ) {
	
	$args['category__in'] = absint($featured_cats);
}

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

	<section class="bizness-featured-slider-wrapper"><!-- Featured Slider Section Start -->
		<div class="swiper bizness-slider-warapper">
			<div class="swiper-wrapper">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="bizness-slider swiper-slide">
						<?php bizness_post_thumbnail('bizness-1920-1080'); ?>
						<div class="overlay"> </div>
						<div class="bizness-slider">
							<div class="bizness-slider-wrapper">
								<div class="one">
									<div class="bizness-slider-title"><?php the_title(); ?></div>
									<div class="bizness-slider-content"><?php the_excerpt(); ?></div>
									<?php
									$read_more_enable   = get_theme_mod('front_page_slider_read_more_btn_enable',true);
									
									if ($read_more_enable ) {
									?>

									<div class="bizness-slider-button">
										<?php
										if ($read_more_enable) {
											$read_more_text = get_theme_mod('front_page_slider_read_more_btn_text',esc_html__( 'Learn More', 'bizness' ));
											?>
											<div class="bizness-button-wrapper"><a href="<?php the_permalink(); ?>" class="bizness-btn-primary"><?php echo esc_html($read_more_text);?></a></div>
											<?php
										}
										?>
										</div>
									<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endwhile; ?>
			</div>
			<!-- Swiper Pagination -->
			<div class="bizness-swiper-pagination"></div>
			<!-- Swiper Navigation -->
			<div class="swiper-button-next"></div>
      		<div class="swiper-button-prev"></div>

		</div>

		</section><!-- Featured Slider Section End -->

<?php endif;
