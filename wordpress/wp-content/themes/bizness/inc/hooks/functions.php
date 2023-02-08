<?php
/**
 * Bizness functions to be hooked
 *
 * @package Bizness
 */


/* ------------------------------ HEADER ------------------------------ */

if ( ! function_exists( 'bizness_head_meta' ) ) :
    /**
     * Meta head
     */
    function bizness_head_meta() {
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php
    }
endif;

if ( ! function_exists( 'bizness_header_main' ) ) :
    /**
     * Header main for the site branding and navigation
     */
    function bizness_header_main() {

        bizness_header_builder();
    }
endif;

if ( ! function_exists( 'bizness_site_content_start' ) ) :
    /**
     * Site Content Wrapper Start
     */
    function bizness_site_content_start() {

        echo '<div id="content" class="site-content">';
    }
endif;


/* ------------------------------  CONTENT ------------------------------ */
if ( ! function_exists( 'bizness_site_page_head' ) ) :
    /**
     * Primary Content Wrapper Start
     */
    function bizness_site_page_head() {

        if ( is_home() || is_front_page() || is_404() )
            return;

        if ( is_single() ) {
            if ( ! get_theme_mod('single_post_top_banner_enable') ) { return; }
            $elements = get_theme_mod('single_post_top_banner_elements',[
                'post-title',
                'breadcrumb'
            ]);
        }
        elseif ( is_page() ) {
            if ( ! get_theme_mod('single_page_top_banner_enable') ) { return; }
            $elements = get_theme_mod('single_page_top_banner_elements',[
                'post-title',
                'breadcrumb'
            ]);
        }
        else {
            if ( ! get_theme_mod('blog_post_top_banner_enable' ) ) { return; }
            $elements = get_theme_mod('blog_post_top_banner_elements',[
                'post-title',
                'breadcrumb'
            ]);
        }

        if (!empty($elements)) { ?>
            <section class="page-top-banner">
                <div class="container">
                    <header class="d-flex flex-column page-header">
                        <?php
                        foreach ($elements as $key => $value) {
                            echo '<div class="banner-element element-'.esc_attr($value).'">';
                            // Is page title
                            if ($value === 'post-title') {
                                bizness_page_title();
                            }
                            // Is breadcrumb
                            elseif ($value === 'breadcrumb') {
                                bizness_trail_breadcrumb();
                            }
                            // Is description
                            elseif ($value === 'post-excerpt') {
                                bizness_page_description();
                            }
                            // Is Post Meta
                            elseif ( $value === 'post-meta' ) {
                                $post_meta = get_theme_mod('blog_post_meta_layout',['post-date','post-author']);
                                if ( !empty( $post_meta )) {
                                    bizness_the_post_meta( get_the_ID(),'', $post_meta );
                                }
                            }
                            echo '</div>';
                        }
                        ?>
                    </header><!-- .page-header -->
                </div><!-- .container -->
            </section><!-- .page-top-banner -->
            <?php
        }
    }
endif;



if ( ! function_exists( 'bizness_site_primary_content_start' ) ) :
    /**
     * Primary Content Wrapper Start
     */
    function bizness_site_primary_content_start() {
        $row_class = ( bizness_get_sidebar_layout() === 'right' ) 
        ? 'row flex-row' 
        : ( bizness_get_sidebar_layout() === 'none' 
            ? 'row' 
            : 'row flex-row-reverse' 
        );
        echo '<section class="section-post-container">';
        echo '<div class="container">';
        echo '<div class="'.esc_attr($row_class).'">';
    }
endif;

if ( ! function_exists( 'bizness_site_primary_content_end' ) ) :
    /**
     * Primary Content Wrapper End
     */
    function bizness_site_primary_content_end() {
        echo '</div><!-- .row -->';
        echo '</div><!-- .container -->';
        echo '</section><!-- .section-post-container -->';
    }
endif;


if ( ! function_exists( 'bizness_site_content_sidebar' ) ) :
    /**
     * Sidebar Content
     */
    function bizness_site_content_sidebar() {

        if (bizness_get_sidebar_layout() === 'none') {
            return;
        }

        get_sidebar();
    }
endif;

/* ------------------------------ BLOG PAGE CONTENT ------------------------------ */

if ( ! function_exists( 'bizness_posts_cols_per_row_start' ) ) :
    /**
     * Blog Posts Columns Per Row Start
     */
    function bizness_posts_cols_per_row_start() {

        if ( is_singular() || is_404() ) {
            return;
        }
        $content_layout = get_theme_mod('blog_content_layout','posts-list-layout');
        ?>
        <div class="archive-posts <?php echo esc_attr( $content_layout ); ?>">
        <?php
    }
endif;

if ( ! function_exists( 'bizness_posts_cols_per_row_close' ) ) :
    /**
     * Blog Posts Columns Per Row Closed
     */
    function bizness_posts_cols_per_row_close() {
        if ( is_singular() || is_404() ) {
            return;
        }
        echo '</div><!-- .columns -->';
    }
endif;

if ( ! function_exists( 'bizness_posts_navigation' ) ) :
    /**
     * Blog Posts navigation
     */
    function bizness_posts_navigation() {
        $pagination_types = get_theme_mod('blog_pagination_type', 'standard');
        if ('standard' === $pagination_types ) {
            the_posts_pagination(
                array(
                    'before_page_number' => '<span class="screen-reader-text">' . esc_html__('Page', 'bizness') . ' </span>',
                    'mid_size'           => 2,
                    'prev_text'          => sprintf(
                            '<i class="fas fa-arrow-left"></i> <span class="nav-prev-text">%s</span>',
                        wp_kses(
                        __( '<span class="nav-short">Prev</span>', 'bizness' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        )
                    ),
                    'next_text'          => sprintf(
                            '<span class="nav-next-text">%s</span> <i class="fas fa-arrow-right"></i>',
                        wp_kses(
                        __( '<span class="nav-short">Next</span>', 'bizness' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        )
                    )
                )
            );
        } else {
            the_posts_navigation(
                 array(
                    'before_page_number' => '<span class="screen-reader-text">' . esc_html__('Page', 'bizness') . ' </span>',
                    'mid_size'           => 0,
                    'prev_text'          => sprintf(
                            '<i class="fas fa-arrow-left"></i> <span class="nav-prev-text">%s</span>',
                        wp_kses(
                        __( 'Older <span class="nav-short">posts</span>', 'bizness' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        )
                    ),
                    'next_text'          => sprintf(
                            '<span class="nav-next-text">%s</span> <i class="fas fa-arrow-right"></i>',
                        wp_kses(
                        __( 'Newer <span class="nav-short">posts</span>', 'bizness' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        )
                    )
                )
            );
        }
    }
endif;

if ( ! function_exists( 'bizness_posts_content_elements' ) ) :
    /**
     * Posts Content Elements
     */
    function bizness_posts_content_elements() {
        $elements = get_theme_mod('blog_post_content_elements',[
            'post-image',
            'post-title',
            'post-meta',
            'post-excerpt'
        ]);
        if ( ! empty( $elements ) ) {   

            foreach ( $elements as $index => $element ) {

                echo '<div class="content-element element-'.esc_attr($element).'">';
                // Is Post Categories
                if ( $element === 'post-image' ) {
                    $image_size = get_theme_mod('blog_post_image_size','medium_large');
                    bizness_post_thumbnail($image_size);
                }
                // Is Post Title
                elseif ( $element === 'post-title' ) {
                    bizness_post_title();
                }
                // Is Post Meta
                elseif ( $element === 'post-meta' ) {
                    $post_meta = get_theme_mod('post_meta_elements',['post-author', 'post-cats','post-date']);
                    if ( !empty( $post_meta )) {
                        bizness_the_post_meta( get_the_ID(),'blog-posts-meta', $post_meta );
                    }
                }
                // Is Post Categories
                elseif ( $element === 'post-cats' ) {
                    bizness_the_post_meta( get_the_ID(),'single-cats', ['post-cats'] );
                }
                // Is Post Tags
                elseif ( $element === 'post-tags' ) {
                    bizness_the_post_meta( get_the_ID(),'single-tags', ['post-tags'] );
                }
                // Is Post Content
                elseif ( $element === 'post-excerpt' ) {
                    bizness_posts_excerpt();
                }
                // Is Read More
                elseif ( $element === 'read-more' ){
                    bizness_read_more();
                }
                
                echo '</div>';
            }
        }
    }
endif;

if ( ! function_exists( 'bizness_posts_excerpt' ) ) :
    /**
     * Post Excerpt
     */
    function bizness_posts_excerpt() {
        ?>
        <div class="entry-content">

            <?php
            /**
             * Functions hooked in to bizness_post_content_top action.
             *
             */
            do_action( 'bizness_posts_content_top' );
            ?>

            <?php the_excerpt(); ?>

            <?php
            /**
             * Functions hooked in to bizness_post_content_bottom action.
             *
             */
            do_action( 'bizness_posts_content_bottom' );
            ?>

        </div><!-- .entry-content -->

        <?php
    }
endif;


/* ------------------------------ SEARCH PAGE CONTENT ------------------------------ */

if ( ! function_exists( 'bizness_search_posts_header' ) ) :
    /**
     * Posts Header
     */
    function bizness_search_posts_header() {
        ?>
        <header class="entry-header">

            <?php
            /**
             * Functions hooked in to bizness_search_posts_header_top action.
             */
            do_action( 'bizness_search_posts_header_top' );
            ?>

            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php
            if ( 'post' === get_post_type() ) :
                ?>
                <div class="entry-meta">
                    <?php
                    bizness_posted_on();
                    bizness_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>

            <?php bizness_post_thumbnail(); ?>

            <?php
            /**
             * Functions hooked in to bizness_search_posts_header_bottom action.
             */
            do_action( 'bizness_search_posts_header_bottom' );
            ?>

        </header><!-- .entry-header -->
        <?php
    }
endif;

if ( ! function_exists( 'bizness_search_posts_content' ) ) :
    /**
     * Posts Content
     */
    function bizness_search_posts_content() {
        ?>
        <div class="entry-summary">

            <?php
            /**
             * Functions hooked in to bizness_search_posts_content_top action.
             *
             */
            do_action( 'bizness_search_posts_content_top' );
            ?>

            <?php the_excerpt(); ?>

            <?php
            /**
             * Functions hooked in to bizness_search_posts_content_bottom action.
             *
             */
            do_action( 'bizness_search_posts_content_bottom' );
            ?>
        </div><!-- .entry-summary -->

        <?php
    }
endif;

if ( ! function_exists( 'bizness_search_posts_footer' ) ) :
    /**
     * Posts Footer
     */
    function bizness_search_posts_footer() {
        ?>
        <footer class="entry-footer">

            <?php
            /**
             * Functions hooked in to bizness_search_posts_footer_top action.
             *
             */
            do_action( 'bizness_search_posts_footer_top' );
            ?>

            <?php bizness_entry_footer(); ?>

            <?php
            /**
             * Functions hooked in to bizness_search_posts_footer_bottom action.
             *
             */
            do_action( 'bizness_search_posts_footer_bottom' );
            ?>

        </footer><!-- .entry-footer -->

        <?php
    }
endif;

/* ------------------------------ POST CONTENT ------------------------------ */

if ( ! function_exists( 'bizness_post_navigation' ) ) :
    /**
     * Single Post Navigation
     */
    function bizness_post_navigation() {

        // Only display for single post navigation
        if ( ! is_single() ) {
            return;
        }
        // Get next previous data
        $prev_post      = get_previous_post( false, '', 'category' );
        $next_post      = get_next_post( false, '', 'category' );
        $link_class     = ['has-no-thumbail'];
        ?>
        <nav class="navigation post-navigation" role="navigation" aria-label="Posts">
            <h2 class="screen-reader-text"><?php esc_html_e('Post navigation','bizness'); ?></h2>
            <div class="nav-links">

                <div class="nav-previous text-left">
                    <span class="screen-reader-text"><?php esc_html_e( 'Previous Post', 'bizness' ); ?></span>
                    <?php if ( ! empty( $prev_post ) ) : $link_class[]   = 'flex-row'; ?>
                        <a class="<?php echo esc_attr(implode(' ',$link_class)); ?>" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" rel="prev">

                            <div class="d-flex flex-column nav-content-wrap">
                                <span class="nav-title"><?php echo esc_html( $prev_post->post_title ); ?></span>
                            </div><!-- .nav-content-wrap -->
                        </a>
                    <?php endif; ?>
                </div><!-- .nav-previous -->

                <div class="nav-next text-right">
                    <span class="screen-reader-text"><?php esc_html_e( 'Next Post', 'bizness' ); ?></span>
                    <?php if ( ! empty( $next_post ) ) : $link_class[]   = 'flex-row-reverse';?>
                        <a class="<?php echo esc_attr(implode(' ',$link_class)); ?>" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" rel="next">
        
                            <div class="d-flex flex-column nav-content-wrap">
                                <span class="nav-title"><?php echo esc_html( $next_post->post_title ); ?></span>
                            </div><!-- .nav-content-wrap -->
                        </a>
                    <?php endif; ?>
                </div><!-- .nav-next -->

            </div><!-- .nav-links -->
        </nav><!-- .post-navigation -->
        <?php
    }
endif;

if ( ! function_exists( 'bizness_post_comment_template' ) ) :
    /**
     * Single Post Comment Template
     */
    function bizness_post_comment_template() {

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    }
endif;

if ( ! function_exists( 'bizness_post_content_elements' ) ) :
    /**
     * Post Content Elements
     */
    function bizness_post_content_elements() {
        $elements = get_theme_mod('single_post_content_elements',[
            'post-image',
            'post-title',
            'post-meta',
            'post-content'
        ]);

        if ( ! empty( $elements ) ) {   

            foreach ( $elements as $index => $element ) {

                echo '<div class="content-element element-'.esc_attr($element).'">';
                // Is Post Categories
                if ( $element === 'post-image' ) {
                    $image_size = get_theme_mod('single_post_image_size','medium_large');
                    bizness_post_thumbnail($image_size);
                }
                // Is Post Title
                elseif ( $element === 'post-title' ) {
                    bizness_post_title();
                }
                // Is Post Meta
                elseif ( $element === 'post-meta' ) {
                    $post_meta = get_theme_mod('post_meta_elements',['post-author', 'post-cats','post-date']);
                    if ( !empty( $post_meta )) {
                        bizness_the_post_meta( get_the_ID(),'single-posts-meta', $post_meta );
                    }
                }
                // Is Post Categories
                elseif ( $element === 'post-cats' ) {
                    bizness_the_post_meta( get_the_ID(),'single-cats', ['post-cats'] );
                }
                // Is Post Tags
                elseif ( $element === 'post-tags' ) {
                    bizness_the_post_meta( get_the_ID(),'single-tags', ['post-tags'] );
                }
                // Is Post Content
                elseif ( $element === 'post-content' ) {
                    bizness_post_content();
                }
                echo '</div>';
            }
        }
    }
endif;

if ( ! function_exists( 'bizness_post_content' ) ) :
    /**
     * Post Content
     */
    function bizness_post_content() {
        ?>
        <div class="entry-content">

            <?php
            /**
             * Functions hooked in to bizness_post_content_top action.
             *
             */
            do_action( 'bizness_post_content_top' );
            ?>

            <?php 
            the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bizness' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ) ); ?>

            <?php
            /**
             * Functions hooked in to bizness_post_content_bottom action.
             *
             */
            do_action( 'bizness_post_content_bottom' );
            ?>

            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizness' ),
                    'after'  => '</div>',
                )
            );
            ?>

        </div><!-- .entry-content -->

        <?php
    }
endif;

if ( ! function_exists( 'bizness_post_after_content_elements' ) ) :
    /**
     * Post After Content Elements
     */
    function bizness_post_after_content_elements() {
        $elements = get_theme_mod('single_post_after_content_elements',[
            'navigation',
            'comments'
        ]);

        if ( ! empty( $elements ) ) {   

            foreach ( $elements as $index => $element ) {

                echo '<div class="content-block element-'.esc_attr($element).'">';
                // Is Navigation
                if ( $element === 'navigation' ) {
                    bizness_post_navigation();
                }
                // Is Comments
                elseif ( $element === 'comments' ) {
                    bizness_post_comment_template();
                }
                // Is Author Box
                elseif ( $element === 'author-box' ) {
                    bizness_author_box();
                }
                // Is Related Posts
                elseif ( $element === 'related-posts' ) {
                    bizness_related_posts();
                }
                echo '</div><!-- .content-block -->';
            }
        }

        bizness_entry_footer();
    }
endif;

/* ------------------------------ PAGE CONTENT ------------------------------ */
if ( ! function_exists( 'bizness_page_content_elements' ) ) :
    /**
     * Page Content Elements
     */
    function bizness_page_content_elements() {
        $elements = get_theme_mod('single_page_content_elements',[
            'post-image',
            'post-title',
            'post-content'
        ]);

        if ( ! empty( $elements ) ) {   

            foreach ( $elements as $index => $element ) {

                echo '<div class="content-element element-'.esc_attr($element).'">';
                // Is Post Categories
                if ( $element === 'post-image' ) {
                    $image_size = get_theme_mod('single_page_image_size','medium_large');
                    bizness_post_thumbnail($image_size);
                }
                // Is Post Title
                elseif ( $element === 'post-title' ) {
                    bizness_post_title();
                }
                // Is Post Content
                elseif ( $element === 'post-content' ) {
                    bizness_post_content();
                }
                echo '</div>';
            }
        }
    }
endif;

if ( ! function_exists( 'bizness_page_after_content_elements' ) ) :
    /**
     * Page After Content Elements
     */
    function bizness_page_after_content_elements() {
        $elements = get_theme_mod('single_page_after_content_elements',[
            'comments'
        ]);

        if ( ! empty( $elements ) ) {   

            foreach ( $elements as $index => $element ) {

                echo '<div class="content-block element-'.esc_attr($element).'">';
                // Is Comments
                if ( $element === 'comments' ) {
                    bizness_post_comment_template();
                }
                echo '</div><!-- .content-block -->';
            }
        }

        bizness_entry_footer();
    }
endif;

/* ------------------------------ COMMENTS ------------------------------ */
if ( ! function_exists( 'bizness_comments_element' ) ) :
    /**
     * Comments
     */
    function bizness_comments_element() {
        $comments_element = get_theme_mod('comment_elements',['comment-list','comment-response']);
        if ( ! empty( $comments_element ) ) {   

            foreach ( $comments_element as $index => $element ) {

                echo '<div class="comment-block element-'.esc_attr($element).'">';
                // Is Comments List
                if ( $element === 'comment-list' ) {
                    // You can start editing here -- including this comment!
                    if ( have_comments() ) :
                        ?>
                        <h2 class="comments-title">
                            <?php
                            $bizness_comment_count = get_comments_number();
                            if ( '1' === $bizness_comment_count ) {
                                printf(
                                    /* translators: 1: title. */
                                    esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'bizness' ),
                                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                                );
                            } else {
                                printf( 
                                    /* translators: 1: comment count number, 2: title. */
                                    esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $bizness_comment_count, 'comments title', 'bizness' ) ),
                                    number_format_i18n( $bizness_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                                );
                            }
                            ?>
                        </h2><!-- .comments-title -->

                        <?php the_comments_navigation(); ?>

                        <ol class="comment-list">
                            <?php
                            wp_list_comments(
                                array(
                                    'style'      => 'ol',
                                    'short_ping' => true,
                                )
                            );
                            ?>
                        </ol><!-- .comment-list -->

                        <?php
                        the_comments_navigation();

                        // If comments are closed and there are comments, let's leave a little note, shall we?
                        if ( ! comments_open() ) :
                            ?>
                            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bizness' ); ?></p>
                            <?php
                        endif;

                    endif; // Check for have_comments().
                }
                // Is Comments Form
                elseif ( $element === 'comment-response' ) {
                    $comments_args = array(
                        // Change the title of send button 
                        'label_submit'  => esc_html__( 'Post Comment', 'bizness' ),
                        // Change the title of the reply section
                        'title_reply'   => esc_html__( 'Leave a Reply', 'bizness' )
                    );
                    comment_form( $comments_args );
                }

                echo '</div><!-- .content-block -->';
            }
        }
    }
endif;


/* ------------------------------ 404 PAGE ------------------------------ */
if ( ! function_exists( 'bizness_404_content_elements' ) ) :
    /**
     * 404 Page Content Elements
     */
    function bizness_404_content_elements() {
        $elements = [
            'title',
            'subtitle',
            'description',
            'button',
            'search',
            'categories'
        ];
        
        if ( ! empty( $elements ) ) {

            echo '<section class="error-404 not-found">';

            foreach ( $elements as $index => $element ) {

                echo '<div class="content-element element-'.esc_attr($element).'">';
                // Is Title
                if ( $element === 'title' ) {
                    ?>
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bizness' ); ?></h1>
                    </header><!-- .page-header -->
                    <?php
                }
                // Is Subtitle
                elseif ( $element === 'subtitle' ) {
                    ?>
                    <h4 class="page-subtitle"><?php esc_html_e( 'This page doesn&rsquo;t seem to exist.', 'bizness' ); ?></h4>
                    <?php
                }
                // Is Description
                elseif ( $element === 'description' ) {
                    $description = esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bizness' );
                    echo wpautop( wp_kses_post($description) );
                }
                // Is Search
                elseif ( $element === 'search' ){
                    get_search_form();
                }
                // Is button
                elseif ( $element === 'button' ){
                    ?>
                    <a class="bizness-btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'bizness' ); ?></a>
                    <?php
                }
                // Is Categories
                elseif ( $element === 'categories' ){
                    ?>
                    <div class="widget widget_categories">
                        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'bizness' ); ?></h2>
                        <ul>
                            <?php
                            wp_list_categories(
                                array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                )
                            );
                            ?>
                        </ul>
                    </div><!-- .widget -->
                    <?php
                }
                echo '</div>';
            }

            echo '</section><!-- .error-404 -->';
        }
    }
endif;
/* ------------------------------ FOOTER ------------------------------ */

if ( ! function_exists( 'bizness_site_content_end' ) ) :
    /**
     * Site Content Wrapper End
     */
    function bizness_site_content_end() {

        echo '</div><!-- #content -->';
    }
endif;

if ( ! function_exists( 'bizness_footer_main' ) ) :
    /**
     * Footer main
     */
    function bizness_footer_main() {

        bizness_footer_builder();
    }
endif;


if ( ! function_exists( 'bizness_footer_back_to_top_button' ) ) :
    /**
     * Footer back to top button
     */
    function bizness_footer_back_to_top_button() {
        ?>
        <div class="back-to-top">
            <button href="#masthead" title="<?php esc_attr_e('Go to Top','bizness'); ?>"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
        </div><!-- .back-to-top -->
        <?php
    }
endif;




/* ------------------------------ CONTENT ------------------------------ */
