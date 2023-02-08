<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Bizness
 */


/**
 * Post Meta
 */

/**
 * Retrieves and displays the post meta.
 *
 * If it's a single post, outputs the post meta values specified in the Customizer settings.
 *
 * @param int    $post_id  The ID of the post for which the post meta should be output.
 * @param string $meta_type The location where the meta is shown.
 * @param array $post_meta list of mata to display
 */
function bizness_the_post_meta( $post_id = null, $meta_type = 'single-cats', $post_meta = null ) {

    echo bizness_get_post_meta( $post_id, $meta_type, $post_meta ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in bizness_get_post_meta().

}

/**
 * Retrieves the post meta.
 *
 * @param int    $post_id The ID of the post.
 * @param string $meta_type The location where the meta is shown.
 * @param array $post_meta list of mata to display
 */
function bizness_get_post_meta( $post_id = null, $meta_type = 'single-cats', $post_meta = null ) {

    // Require post ID.
    if ( ! $post_id ) {
        return;
    }
    $post_meta = ( $post_meta !== null ) ? $post_meta : ['post-author','post-date'];

    /**
     * Filters post types array.
     *
     * This filter can be used to hide post meta information of post, page or custom post type
     * registered by child themes or plugins.
     *
     * @since Twenty Twenty 1.0
     *
     * @param array Array of post types
     */
    $disallowed_post_types = apply_filters( 'bizness_disallowed_post_types_for_meta_output', array( 'page' ) );

    // Check whether the post type is allowed to output post meta.
    if ( in_array( get_post_type( $post_id ), $disallowed_post_types, true ) ) {
        return;
    }

    $post_meta_wrapper_classes = ['post-meta-wrapper'];

    // Get the post meta settings for the location specified.
    if ( 'single-cats' === $meta_type ) {
        $post_meta_wrapper_classes[] = 'post-meta-single post-meta-categories';
    } elseif ( 'single-tags' === $meta_type ) {
        $post_meta_wrapper_classes[] = 'post-meta-single post-meta-tags';
    } else {
        $post_meta_wrapper_classes[] = 'post-meta-group';
        $post_meta_wrapper_classes[] = $meta_type;
    }

    // If the post meta setting has the value 'empty', it's explicitly empty and the default post meta shouldn't be output.
    if ( $post_meta && ! in_array( 'empty', $post_meta, true ) ) {

        // Make sure we don't output an empty container.
        $has_meta = false;

        global $post;
        $the_post = get_post( $post_id );
        setup_postdata( $the_post );

        ob_start();
        ?>

        <div class="<?php echo esc_attr( implode(' ', $post_meta_wrapper_classes) ); ?>">

            <ul class="d-flex align-items-center flex-wrap post-meta">

                <?php
                foreach ( $post_meta as $meta ) {

                    // Author.
                    if ( post_type_supports( get_post_type( $post_id ), 'author' ) && $meta == 'post-author' ) {
                        $has_meta       = true;
                        ?>
                        <li class="post-author meta-wrapper">
                            <span class="meta-text">
							<?php
                            printf(
                            /* translators: %s: Author name. */
                                __( '%1$s %2$s', 'bizness' ),
                                '',
                                '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a>'
                            );
                            ?>
						</span>
                        </li>
                        <?php

                    }

                    // Post date.
                    elseif ( $meta == 'post-date' ) {
                        $has_meta = true;
                        ?>
                        <li class="post-date meta-wrapper">
                            <span class="meta-text">
                                <a href="<?php the_permalink(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
                            </span>
                        </li>
                        <?php

                    }

                    // Categories.
                    elseif ( $meta == 'post-cats' && has_category() ) {
                        $has_meta = true;
                        ?>
                        <li class="post-categories meta-wrapper">
                            <span class="meta-text">
                                <?php the_category( ', ' ); ?>
                            </span>
                        </li>
                        <?php

                    }

                    // Tags.
                    elseif ( $meta == 'post-tags' && has_tag() ) {
                        $has_meta = true;
                        ?>
                        <li class="post-tags meta-wrapper">
                            <span class="meta-text">
                                <?php the_tags( '', ', ', '' ); ?>
                            </span>
                        </li>
                        <?php

                    }

                    // Comments link.
                    elseif ( $meta == 'post-comments' && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
                        $has_meta = true;
                        ?>
                        <li class="post-comment-link meta-wrapper">
                            <span class="meta-text">
                            <?php comments_popup_link( 
                                esc_html__( 'Leave a comment', 'bizness' ),
                                esc_html__( '1 Comment', 'bizness' ),
                                esc_html__( '% Comments', 'bizness' ) );
                            ?>
						</span>
                        </li>
                        <?php

                    }
                }
                ?>

            </ul><!-- .post-meta -->

        </div><!-- .post-meta-wrapper -->

        <?php

        wp_reset_postdata();

        $meta_output = ob_get_clean();

        // If there is meta to output, return it.
        if ( $has_meta && $meta_output ) {

            return $meta_output;

        }
    }

}

if ( ! function_exists( 'bizness_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function bizness_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'bizness' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'bizness_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function bizness_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%1$s %2$s', 'post author', 'bizness' ),
            '<label>By</label>',
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'bizness_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function bizness_entry_footer() {

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'bizness' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;


if ( ! function_exists( 'bizness_post_thumbnail' ) ) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     * 
     * @param $size string
     */
    function bizness_post_thumbnail($size='thumbnail') {
        if ( post_password_required() || is_attachment() || ! post_type_supports( get_post_type(), 'thumbnail' ) ) {
            return;
        }

        if ( is_singular() ) : ?>

            <div class="post-thumbnail">
                <?php 
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail(
                        $size,
                        array(
                            'alt' => the_title_attribute(
                                array(
                                    'echo' => false,
                                )
                            ),
                        )
                    );
                } 
                elseif (get_theme_mod('single_post_image_placeholder_enable',false) && is_single() ) {
                    bizness_image_placeholder('large');
                }
                elseif (get_theme_mod('single_page_image_placeholder_enable',false) && is_page() ) {
                    bizness_image_placeholder('large');
                }
                ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail(
                        $size,
                        array(
                            'alt' => the_title_attribute(
                                array(
                                    'echo' => false,
                                )
                            ),
                        )
                    );
                }
                elseif (get_theme_mod('blog_post_image_placeholder_enable',false)) {
                    bizness_image_placeholder('large');
                }
                ?>
            </a>

        <?php
        endif; // End is_singular().
    }
endif;

if ( ! function_exists( 'bizness_post_title' ) ) :
    /**
     * Displays an optional post title.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function bizness_post_title() {
        $html_tag = 'h1';
        if ( is_singular() ) :
            $html_tag = is_page() ? get_theme_mod('single_page_title_html_tag','h1') : get_theme_mod('single_post_title_html_tag','h1');
            the_title( '<' . esc_attr($html_tag) . ' class="entry-title">', '</' . esc_attr($html_tag) . '>' );
        else :
            $html_tag = get_theme_mod('blog_post_title_html_tag','h2');
            the_title( '<' . esc_attr($html_tag) . ' class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></' . esc_attr($html_tag) . '>' );
        endif;
    }
endif;