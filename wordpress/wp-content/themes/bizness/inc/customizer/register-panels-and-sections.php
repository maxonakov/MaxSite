<?php
/**
 * Register customizer panels and sections.
 *
 * @package Bizness
 */

/**
 * Panel
 */
$panels = [
    'global_panel'      => [
        'title'             => esc_html__( 'Global', 'bizness' ),
        'priority'          => 5
    ],
    'global_typo_panel' => [
        'title'             => esc_html__( 'Typography', 'bizness' ),
        'panel'             => 'global_panel',
        'priority'          => 10
    ],

    'social_panel'  => [
        'title'         => esc_html__( 'Social', 'bizness' ),
        'priority'      => 10
    ],

    // Header
    'header_panel'  => [
        'title'         => esc_html__( 'Header', 'bizness' ),
        'priority'      => 20
    ],

    // Front Page
    'front_panel'  => [
        'title'         => esc_html__( 'Front Page', 'bizness' ),
        'priority'      => 21
    ],

    // Blog
    'blog_panel'  => [
        'title'         => esc_html__( 'Blog', 'bizness' ),
        'priority'      => 25
    ],
    'blog_archive_panel'  => [
        'title'         => esc_html__( 'Blog Archives', 'bizness' ),
        'panel'         => 'blog_panel',
        'priority'      => 10
    ],
    'blog_single_panel'  => [
        'title'         => esc_html__( 'Single Post', 'bizness' ),
        'panel'         => 'blog_panel',
        'priority'      => 15
    ],
    
    // Pages
    'pages_panel'  => [
        'title'         => esc_html__( 'Pages', 'bizness' ),
        'priority'      => 30
    ],
    'page_panel'  => [
        'title'         => esc_html__( 'Single Page', 'bizness' ),
        'panel'         => 'pages_panel',
        'priority'      => 15
    ],

    // Footer
    'footer_panel'  => [
        'title'         => esc_html__( 'Footer', 'bizness' ),
        'priority'      => 40
    ],
    'footer_rows_panel' => [
        'title'         => esc_html__( 'Footer Rows', 'bizness' ),
        'priority'      => 10,
        'panel'         => 'footer_panel'
    ],
    'footer_elements_panel' => [
        'title'         => esc_html__( 'Footer Elements', 'bizness' ),
        'priority'      => 15,
        'panel'         => 'footer_panel'
    ],


];
foreach ( $panels as $panel_id => $panel_args ) {
    Kirki::add_panel( str_replace( '-', '_', $panel_id ), $panel_args );
}

/**
 * Sections
 */
$sections = [
    'base_typo_section' => [
        'panel'             => 'global_typo_panel',
        'title'             => esc_html__( 'Base', 'bizness' ),
        'priority'          => 5
    ],
    'heading_typo_section' => [
        'panel'             => 'global_typo_panel',
        'title'             => esc_html__( 'Heading H1 - H6', 'bizness' ),
        'priority'          => 10
    ],
    'widget_typo_section' => [
        'panel'             => 'global_typo_panel',
        'title'             => esc_html__( 'Widgets', 'bizness' ),
        'priority'          => 15
    ],
    'button_typo_section' => [
        'panel'             => 'global_typo_panel',
        'title'             => esc_html__( 'Button', 'bizness' ),
        'priority'          => 15
    ],
    'general_body_section'  => [
        'panel'         => 'global_panel',
        'title'         => esc_html__( 'Body', 'bizness' ),
        'priority'      => 15
    ],
    'general_container_section'  => [
        'panel'         => 'global_panel',
        'title'         => esc_html__( 'Container', 'bizness' ),
        'priority'      => 15
    ],
    'general_content_area_section'  => [
        'panel'         => 'global_panel',
        'title'         => esc_html__( 'Content Area', 'bizness' ),
        'priority'      => 15
    ],
    'general_button_section'  => [
        'panel'         => 'global_panel',
        'title'         => esc_html__( 'Button', 'bizness' ),
        'priority'      => 20
    ],
    'general_comments_section'  => [
        'panel'         => 'global_panel',
        'title'         => esc_html__( 'Comments', 'bizness' ),
        'priority'      => 20
    ],
    'general_image_placeholder_section'  => [
        'panel'         => 'global_panel',
        'title'         => esc_html__( 'Image Placeholder', 'bizness' ),
        'priority'      => 20
    ],

    // Header
    'header_general_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'General Settings', 'bizness' ),
        'priority'      => 10
    ],
    'header_top_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Top Header', 'bizness' ),
        'priority'      => 15
    ],
    'header_main_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Main Header', 'bizness' ),
        'priority'      => 20
    ],
    'header_bottom_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Bottom Header', 'bizness' ),
        'priority'      => 25
    ],

    'header_site_identify_section'  => [
        'panel'         => 'header_panel',
        'title'         => __( 'Logo, Title & Tagline', 'bizness' ),
        'priority'      => 30
    ],
    'header_top_menu_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Top Menu', 'bizness' ),
        'priority'      => 40
    ],
    'header_menu_1_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Primary Menu', 'bizness' ),
        'priority'      => 40
    ],
    'header_button_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Button', 'bizness' ),
        'priority'      => 45
    ],
    'header_search_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Search', 'bizness' ),
        'priority'      => 50
    ],
    'header_search_icon_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Search Icon', 'bizness' ),
        'priority'      => 55
    ],
    'header_account_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Account', 'bizness' ),
        'priority'      => 60
    ],
    'header_social_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'Social', 'bizness' ),
        'priority'      => 65
    ],
    'header_html_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'HTML', 'bizness' ),
        'priority'      => 70
    ],
    'header_wc_cart_element_section'  => [
        'panel'         => 'header_panel',
        'title'         => esc_html__( 'WC Cart', 'bizness' ),
        'priority'      => 70
    ],
    // Breadcrumb
    'breadcrumb_section'  => [
        'title'         => esc_html__( 'Breadcrumb', 'bizness' ),
        'priority'      => 20
    ],

    // Blog
    'blog_post_top_banner_section'  => [
        'title'         => esc_html__( 'Top Banner', 'bizness' ),
        'panel'         => 'blog_archive_panel',
        'priority'      => 10
    ],
    'blog_content_layout_section'  => [
        'title'         => esc_html__( 'Content Layout', 'bizness' ),
        'panel'         => 'blog_archive_panel',
        'priority'      => 10
    ],
    'blog_post_title_section'  => [
        'title'         => esc_html__( 'Post Title', 'bizness' ),
        'panel'         => 'blog_archive_panel',
        'priority'      => 10
    ],
    'blog_featured_image_section'  => [
        'title'         => esc_html__( 'Featured Image', 'bizness' ),
        'panel'         => 'blog_archive_panel',
        'priority'      => 10
    ],
    'blog_post_excerpt_section'  => [
        'title'         => esc_html__( 'Post Excerpt', 'bizness' ),
        'panel'         => 'blog_archive_panel',
        'priority'      => 10
    ],
    'blog_read_more_btn_section'  => [
        'title'         => esc_html__( 'Read More', 'bizness' ),
        'panel'         => 'blog_archive_panel',
        'priority'      => 10
    ],
    'blog_pagination_section'  => [
        'title'         => esc_html__( 'Pagination', 'bizness' ),
        'panel'         => 'blog_archive_panel',
        'priority'      => 10
    ],

    // Single Post
    'single_post_top_banner_section'  => [
       'title'         => esc_html__( 'Top Banner', 'bizness' ),
       'panel'         => 'blog_single_panel',
       'priority'      => 10
    ],
    'single_post_content_layout_section'  => [
        'title'         => esc_html__( 'Content Layout', 'bizness' ),
        'panel'         => 'blog_single_panel',
        'priority'      => 10
    ],
    'single_post_title_section'  => [
        'title'         => esc_html__( 'Post Title', 'bizness' ),
        'panel'         => 'blog_single_panel',
        'priority'      => 10
    ],
    
    'single_post_image_section'  => [
        'title'         => esc_html__( 'Featured Image', 'bizness' ),
        'panel'         => 'blog_single_panel',
        'priority'      => 10
    ],
    'single_post_meta_section'  => [
        'title'         => esc_html__( 'Post Meta', 'bizness' ),
        'panel'         => 'blog_single_panel',
        'priority'      => 10
    ],
    'single_post_navigation_section'  => [
        'title'         => esc_html__( 'Post Navigation', 'bizness' ),
        'panel'         => 'blog_single_panel',
        'priority'      => 10
    ],
    'single_post_author_section'  => [
        'title'         => esc_html__( 'Author Box', 'bizness' ),
        'panel'         => 'blog_single_panel',
        'priority'      => 10
    ],
    'single_related_posts_section'  => [
        'title'         => esc_html__( 'Related Posts', 'bizness' ),
        'panel'         => 'blog_single_panel',
        'priority'      => 10
    ],

    // Blog -> Post Meta
    'post_meta_section'  => [
        'title'         => esc_html__( 'Post Meta', 'bizness' ),
        'panel'         => 'blog_panel',
        'priority'      => 10
    ],
    // Blog -> Sidebar
    'blog_sidebar_section'  => [
        'title'         => esc_html__( 'Sidebar Layout', 'bizness' ),
        'panel'         => 'blog_panel',
        'priority'      => 10
    ],

    // Pages -> Front Page
    'front_page_content_section'  => [
        'title'         => esc_html__( 'Page Content', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 10
    ],
    'front_page_slider_section'  => [
        'title'         => esc_html__( 'Featured Slider', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 15
    ],
    'front_page_service_section'  => [
        'title'         => esc_html__( 'Services', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 20
    ],
    'front_page_about_section'  => [
        'title'         => esc_html__( 'About Us', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 25
    ],
    'front_page_cta_section'  => [
        'title'         => esc_html__( 'Call To Action', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 30
    ],
    'front_page_portfolio_section'  => [
        'title'         => esc_html__( 'Portfolio', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 35
    ],
    'front_page_team_section'  => [
        'title'         => esc_html__( 'Team Memebers', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 40
    ],
    'front_page_blog_section'  => [
        'title'         => esc_html__( 'Blog Posts', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 45
    ],
    'front_page_testimonial_section'  => [
        'title'         => esc_html__( 'Testimonials', 'bizness' ),
        'panel'         => 'front_panel',
        'priority'      => 50
    ],
    
    
    // Pages -> Single Page
    'single_page_top_banner_section'  => [
        'title'         => esc_html__( 'Top Banner', 'bizness' ),
        'panel'         => 'page_panel',
        'priority'      => 10
     ],
    'single_page_content_layout_section'  => [
        'title'         => esc_html__( 'Content Layout', 'bizness' ),
        'panel'         => 'page_panel',
        'priority'      => 10
    ],
    'single_page_title_section'  => [
        'title'         => esc_html__( 'Page Title', 'bizness' ),
        'panel'         => 'page_panel',
        'priority'      => 10
    ],
    'single_page_image_section'  => [
        'title'         => esc_html__( 'Featured Image', 'bizness' ),
        'panel'         => 'page_panel',
        'priority'      => 10
    ],
    // Pages -> Error Page
    'error_page_top_banner_section'  => [
        'title'         => esc_html__( 'Top Banner', 'bizness' ),
        'panel'         => '404_panel',
        'priority'      => 10
    ],
    'error_page_content_layout_section'  => [
        'title'         => esc_html__( 'Content Layout', 'bizness' ),
        'panel'         => '404_panel',
        'priority'      => 10
    ],
    // Pages -> Sidebar
    'pages_sidebar_section'  => [
        'title'         => esc_html__( 'Sidebar Layout', 'bizness' ),
        'panel'         => 'pages_panel',
        'priority'      => 10
    ],

    // Social
    'social_network_section'  => [
        'panel'         => 'social_panel',
        'title'         => esc_html__( 'Social Network', 'bizness' ),
        'priority'      => 15
    ],

    // Footer
    'footer_general_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'General Settings', 'bizness' ),
        'priority'      => 10
    ],
    'footer_top_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Top Footer', 'bizness' ),
        'priority'      => 15
    ],
    'footer_main_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Main Footer', 'bizness' ),
        'priority'      => 20
    ],
    'footer_bottom_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Bottom Footer', 'bizness' ),
        'priority'      => 25
    ],

    'footer_copyright_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Copyright', 'bizness' ),
        'priority'      => 40
    ],
    'footer_menu_1_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Footer Menu', 'bizness' ),
        'priority'      => 40
    ],
    'footer_button_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Button', 'bizness' ),
        'priority'      => 45
    ],
    'footer_social_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Social', 'bizness' ),
        'priority'      => 65
    ],
    'footer_html_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'HTML', 'bizness' ),
        'priority'      => 70
    ],
    'footer_widget_1_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Widget Area 1', 'bizness' ),
        'priority'      => 70
    ],
    'footer_widget_2_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Widget Area 2', 'bizness' ),
        'priority'      => 70
    ],
    'footer_widget_3_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Widget Area 3', 'bizness' ),
        'priority'      => 70
    ],
    'footer_widget_4_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Widget Area 4', 'bizness' ),
        'priority'      => 70
    ],
    'footer_widget_5_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Widget Area 5', 'bizness' ),
        'priority'      => 70
    ],
    'footer_widget_6_element_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Widget Area 6', 'bizness' ),
        'priority'      => 70
    ],
    'footer_back_to_top_section'  => [
        'panel'         => 'footer_panel',
        'title'         => esc_html__( 'Back to Top', 'bizness' ),
        'priority'      => 100
    ],

];


foreach ( $sections as $section_id => $section_args ) {
    Kirki::add_section( str_replace( '-', '_', $section_id ), $section_args );
}