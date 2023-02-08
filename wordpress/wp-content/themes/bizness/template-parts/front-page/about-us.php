<?php
/**
 * Template part for displaying front page featured slider section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */
$page_id 	= get_theme_mod('front_page_about_us_page',2);
$pages 		= get_pages();
$args 		= array(
	'post_type' 		=> 'page',
	'posts_per_page' 	=> 1,
	'orderby'   		=> 'ID',
	'order' 			=> 'DESC',
	'post_status' 		=> 'publish',		
	'ignore_sticky_posts' => 1,
);
if ( $page_id && !empty( $pages ) && in_array( $page_id, wp_list_pluck( $pages, 'ID' ) ) ) {
	$args['page_id'] = absint($page_id);
}

$about_us_query = new WP_Query( $args );

if ( $about_us_query->have_posts() ) :
    $image_2    = get_theme_mod('front_page_about_image_2','');
    while ( $about_us_query->have_posts() ) :
    $about_us_query->the_post();
    $btn_text = get_theme_mod( 'front_page_about_button_text', esc_html__( 'Learn More', 'bizness' ) );
    ?>
    <section class="bizness-about-section">
        <!-- About Section Start -->
        <div class="container">
            <div class="bizness-about-inner">
                <div class="bizness-about-images">
                    <div class="images">
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
                        <?php if( $image_2 !== '' ) { ?>
                            <img src="<?php echo esc_url( $image_2 );?>" alt="<?php esc_attr_e( 'Featured Image', 'bizness'); ?>" />
                        <?php } ?>
                    </div>
                    <div class="circle-1"></div>
                    <div class="circle-2"></div>
                    <div class="circle-3"></div>
                </div><!-- left side content -->

                <div class="bizness-about-content">

                    <h2 class="bizness-section-title title-left"><?php the_title(); ?></h2>

                    <?php the_excerpt(); ?>

                    <?php if ($btn_text) : ?>
                    <div class="bizness-button-wrapper">
                        <a class="bizness-btn-primary" href="<?php the_permalink(); ?>" target="_self">
                            <?php echo esc_html( $btn_text ); ?>
                        </a>
                    </div><!-- button -->
                    <?php endif; ?>
                </div> <!-- right side content -->
            </div><!-- about inner -->
        </div><!-- container -->
    </section><!-- About Section End -->
    <?php
    endwhile;
    wp_reset_postdata();
endif;
