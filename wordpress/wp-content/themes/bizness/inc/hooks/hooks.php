<?php
/**
 * Bizness hooks
 *
 * @package Bizness
 */

/* ------------------------------ HEADER ------------------------------ */
/**
 * Meta head.
 *
 * @see bizness_head_meta()
 */
add_action( 'bizness_head', 'bizness_head_meta', 10 );

/**
 * Header main to display site branding and navigation.
 *
 * @see bizness_header_main()
 */
add_action( 'bizness_header', 'bizness_header_main', 10 );


/**
 * Site Content Wrapper Start
 *
 * @see bizness_site_content_start()
 */
add_action( 'bizness_header_after', 'bizness_site_content_start', 10 );

/* ------------------------------ CONTENT ------------------------------ */

/**
 * Primary Content Wrapper Start
 *
 * @see bizness_site_primary_content_start()
 */
add_action( 'bizness_content_before', 'bizness_site_page_head', 5 );
add_action( 'bizness_content_before', 'bizness_site_primary_content_start', 10 );

/**
 * Primary Content Wrapper Start
 *
 * @see bizness_site_content_sidebar()
 * @see bizness_site_primary_content_end()
 */
add_action( 'bizness_content_after', 'bizness_site_content_sidebar', 10 );
add_action( 'bizness_content_after', 'bizness_site_primary_content_end', 15 );

/* ------------------------------ BLOG/ARCHIVE PAGE ------------------------------ */
/**
 * Before Posts Content
 *
 * @see bizness_posts_cols_per_row_start()
 */
add_action( 'bizness_posts_content_loop_before', 'bizness_posts_cols_per_row_start', 10 );

/**
 * After Posts Content
 *
 * @see bizness_posts_cols_per_row_close()
 * @see bizness_posts_navigation()
 */
add_action( 'bizness_posts_content_loop_after', 'bizness_posts_cols_per_row_close', 5 );
add_action( 'bizness_posts_content_loop_after', 'bizness_posts_navigation', 10 );

/**
 * Entry Content
 *
 * @see bizness_posts_content_elements()
 */
add_action( 'bizness_posts_entry_content', 'bizness_posts_content_elements', 10 );


/* ------------------------------ SINGLE POST ------------------------------ */

/**
 * Entry Content Elements
 *
 * @see bizness_post_content_elements()
 */
add_action( 'bizness_post_entry_content', 'bizness_post_content_elements', 10 );

/**
 * After Post content
 *
 * @see bizness_post_after_content_elements()
 */
add_action( 'bizness_post_content_after', 'bizness_post_after_content_elements', 10 );

/* ------------------------------ SEARCH PAGE ------------------------------ */

/**
 * Entry Header
 *
 * @see bizness_search_posts_header()
 */
add_action( 'bizness_search_posts_entry_header', 'bizness_search_posts_header', 10 );

/**
 * Entry Content
 *
 * @see bizness_search_posts_content()
 */
add_action( 'bizness_search_posts_entry_content', 'bizness_search_posts_content', 10 );

/**
 * Entry Footer
 *
 * @see bizness_search_posts_footer()
 */
add_action( 'bizness_search_posts_entry_footer', 'bizness_search_posts_footer', 10 );




/* ------------------------------ SINGLE PAGE ------------------------------ */

/**
 * Entry Content Elements
 *
 * @see bizness_page_content_elements()
 */
add_action( 'bizness_page_entry_content', 'bizness_page_content_elements', 10 );

/**
 * After Page content
 *
 * @see bizness_page_after_content_elements()
 */
add_action( 'bizness_page_content_after', 'bizness_page_after_content_elements', 10 );

/* ------------------------------ Comments ------------------------------ */

/**
 * Comments
 *
 * @see bizness_comments_element()
 */
add_action( 'bizness_comments', 'bizness_comments_element', 10 );

/* ------------------------------ 404 PAGE ------------------------------ */

/**
 * Entry Content Elements
 *
 * @see bizness_404_content_elements()
 */
add_action( 'bizness_404_entry_content', 'bizness_404_content_elements', 10 );

/* ------------------------------ FOOTER ------------------------------ */

/**
 * Site Content Wrapper End
 *
 * @see bizness_site_content_end()
 */
add_action( 'bizness_footer_before', 'bizness_site_content_end', 10 );


/**
 * Footer Main.
 *
 * @see bizness_footer_main()
 */
add_action( 'bizness_footer', 'bizness_footer_main', 10 );

/**
 * After footer.
 *
 * @see bizness_footer_back_to_top_button()
 */
add_action( 'bizness_footer_after', 'bizness_footer_back_to_top_button', 10 );