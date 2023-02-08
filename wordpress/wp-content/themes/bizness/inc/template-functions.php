<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Bizness
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bizness_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

    // Add class for blog,archive and search pages
    if ( is_front_page() && is_home() || is_home() || is_search() || is_archive() ) {

        $classes[] = 'bizness-blog';
    }

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( bizness_get_sidebar_layout() !== 'none' && ! is_page_template( 'page-templates/front-page.php' ) && ! is_page_template( 'page-templates/pagebuilder.php' ) ) {
		$classes[] = 'has-sidebar';
	}

    // Singular page
	if ( is_singular() && bizness_get_sidebar_layout() == 'none' ) {
		$classes[] = 'single-post-wrapper';
	}

    // Transparent Header
	if ( is_page_template( 'page-templates/front-page.php' ) && get_theme_mod('header_transparent','') ) {
		$classes[] = 'has-transparent-header';
	}
    
	return $classes;
}
add_filter( 'body_class', 'bizness_body_classes' );


/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
function bizness_post_classes( $classes ) {
    $classes[] = 'post';
    if ( ! has_post_thumbnail() ) {
        $classes[] = 'no-image';
    }
    else {
        $classes[] = 'has-image';
    }

    return array_unique($classes);
}
add_filter( 'post_class', 'bizness_post_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bizness_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'bizness_pingback_header' );

/**
 * Add post excerpt limit
 */
function bizness_post_excerpt_limit( $length ) {
    if ( is_admin() ) {
        return $length;
    }
    return 40;
}
add_filter( 'excerpt_length', 'bizness_post_excerpt_limit', 99 );

/**
 * Add post excerpt suffix text
 */

function bizness_post_excerpt_suffix_text( $more ) {
    if ( is_admin() ) {
        return $more;
    }
    return ' ...';
}
add_filter( 'excerpt_more', 'bizness_post_excerpt_suffix_text', 99 );

/**
 * Update the archives to a better naming.
 *
 * @param string $title the name of the archive.
 */
function bizness_filter_archive_title($title ) {
    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
    if ( is_home() && is_front_page() ) {
        $title = get_bloginfo( 'name' );
    } elseif ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        /* translators: 1: Author Name */
        $title = sprintf( esc_html__( 'Author: %s', 'bizness' ), get_the_author() );
    } elseif ( is_day() ) {
        /* translators: 1: Day */
        $title = sprintf( esc_html__( 'Day: %s', 'bizness' ), get_the_date() );
    } elseif ( is_month() ) {
        /* translators: 1: Month */
        $title = sprintf( esc_html__( 'Month: %s', 'bizness' ), get_the_date( 'F Y' ) );
    } elseif ( is_year() ) {
        /* translators: 1: Year */
        $title = sprintf( esc_html__( 'Year: %s', 'bizness' ), get_the_date( 'Y' ) );
    } elseif ( class_exists( 'woocommerce' ) && is_shop() ) {
        $shop_page_id = wc_get_page_id( 'shop' );
        $title        = get_the_title( $shop_page_id );
    } elseif ( is_tax( array( 'product_cat', 'product_tag' ) ) ) {
        $title = single_term_title( '', false );
    } elseif ( $term ) {
        $title = $term->name;
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'bizness_filter_archive_title', 10, 1 );


/**
 * Add custom archive description
 *
 * @param string $description custom description of the archive.
 */
function bizness_filter_archive_description( $description ) {
    if ( empty( $description ) ) {
        $custom_archive_desc = get_theme_mod('archive_title_short_desc', '');
        return sprintf('<p>%s</p>', wp_kses_post( $custom_archive_desc ) );
    }
    else {
        return $description;
    }
}
add_filter( 'get_the_archive_description', 'bizness_filter_archive_description', 10, 1 );
