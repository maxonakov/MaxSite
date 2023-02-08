<?php
/**
 * Template part for displaying front page featured slider section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

$cta_page 	= get_theme_mod('front_page_cta_page',2);
$pages 		= get_pages();
$args 		= array(
	'post_type' 		=> 'page',
	'posts_per_page' 	=> 1,
	'orderby'   		=> 'ID',
	'order' 			=> 'DESC',
	'post_status' 		=> 'publish',		
	'ignore_sticky_posts' => 1,
);
if ( $cta_page && !empty( $pages ) && in_array( $cta_page, wp_list_pluck( $pages, 'ID' ) ) ) {
	$args['page_id'] = absint($cta_page);
}

$cta_page_query = new WP_Query( $args );

if ( $cta_page_query->have_posts() ) :

	while ( $cta_page_query->have_posts() ) :
		$cta_page_query->the_post();
		$btn_text = get_theme_mod( 'front_page_cta_button_text', esc_html__( 'Read More', 'bizness' ) );
		?>
	<section class="bizness-cta-section"><!-- Call To Action Section Start -->
		<div class="container">
			<div class="bizness-cta-content">

				<div class="bizness-cta-content-left">
					<div class="section-title-wrapper bizness-text-left">
						<h2 class="bizness-section-title"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>

						<?php if( $btn_text != '' ) :  ?>
							<div class="bizness-button-wrapper">
								<a href="<?php the_permalink(); ?>'" class="bizness-btn-primary" target="_self">
									<?php echo esc_html( $btn_text ); ?>
								</a>
							</div><!-- button -->
						<?php endif; ?>
					</div>
				</div><!-- left -->
				<div class="bizness-cta-content-right">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail(
							'large',
							array(
								'alt' => the_title_attribute(
									array(
										'echo' => false,
									)
								),
							)
						);
					} else {
						bizness_image_placeholder( 'large' );
					}
					?>
				</div><!-- right -->
			</div><!-- content -->
		</div><!-- container -->
	</section><!-- Call To Action Section End -->
		<?php
	endwhile;
	wp_reset_postdata();
	
endif;



