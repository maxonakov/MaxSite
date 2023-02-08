<?php
/**
 * Template part for displaying front page featured slider section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */
$posts_limit = get_theme_mod(
	'front_page_blog_posts_limit',
	3
);

$args = [
    'posts_per_page'    => 3,
    'no_rows_found'     => true,
    'no_found_rows'     => true,
    'ignore_sticky_posts' => true
];
$the_query  = new WP_Query( $args );

if ( $the_query->have_posts() ) : 

    $heading        = get_theme_mod('front_page_blog_heading',esc_html__( 'Our Latest Posts', 'bizness' ));
    $subheading     = get_theme_mod('front_page_blog_sub_heading','');
    ?>
     <section class="bizness-blog-section"><!-- Latest News Section Start -->
        <div class="container">
            <div class="bizness-blog-posts">
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
							
                <div class="bizness-latest-posts">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="bizness-posts-box">    
                            <div class="bizness-post-thumb">
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
                                <a href="<?php the_permalink() ?>"><div class="bizness-image-overlay"> </div></a>
                            </div>
                            <div class="bizness-post-details"> 
                                <div class="bizness-post-metas">
                                    <div class="bizness-post-metas-author">
                                        <?php
                                        printf(
                                        /* translators: %s: Author name. */
                                            __( 'By %1$s', 'bizness' ),
                                            '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a>'
                                        );
                                        ?>
                                    </div>
                                    <div class="bizness-post-metas-date">
                                        <?php echo esc_html( get_the_date( 'd - M - Y' ) ); ?>
                                    </div>
                                </div>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div><!-- latest 3 blog posts -->
            </div><!-- blog posts -->
        </div><!-- container -->
    </section><!-- Latest News Section End -->
<?php endif;