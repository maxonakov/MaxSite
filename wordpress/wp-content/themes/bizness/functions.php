<?php
/**
 * Bizness functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bizness
 */

/**
 * Define Constants
 */
define( 'BIZNESS_THEME_VERSION', '1.0.0' );
define( 'BIZNESS_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'BIZNESS_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

if ( ! function_exists( 'bizness_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bizness_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bizness, use a find and replace
		 * to change 'bizness' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bizness', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/* Slider Thumbnail */
		add_image_size( 'bizness-1920-1080', 1920, 1080, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary Menu', 'bizness' ),
				'menu-2' => esc_html__( 'Footer Menu', 'bizness' ),
				'menu-3' => esc_html__( 'Top Menu', 'bizness' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Adding excerpt option box for pages as well.
		add_post_type_support( 'page', 'excerpt' );

		// Enable support Gutenberg and Block styles.
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'bizness_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bizness_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizness_content_width', 640 );
}
add_action( 'after_setup_theme', 'bizness_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bizness_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bizness' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bizness' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	for ( $i = 1; $i <= 6; $i++ ) {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Widget Area', 'bizness' ) . ' ' . $i,
				'id'            => 'footer-sidebar-' . $i,
				'description'   => esc_html__( 'Add widgets here.', 'bizness' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer-item">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
add_action( 'widgets_init', 'bizness_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function bizness_scripts() {

	// Google Fonts
	$fonts_url = bizness_fonts_url();
    if ( $fonts_url ) {
		require BIZNESS_THEME_DIR . 'inc/wptt-webfont-loader.php';
		wp_enqueue_style( 'bizness-google-fonts', wptt_get_webfont_url( $fonts_url ) );
    	
    }

	// Bootstrap Style
	wp_enqueue_style( 'bootstrap', BIZNESS_THEME_URI . 'assets/bootstrap/css/bootstrap.min.css' );

	// Font Awesome Style
	wp_enqueue_style( 'fontawesome', BIZNESS_THEME_URI . '/assets/font-awesome/css/all.min.css' );

	// Meanmenu Style
	wp_enqueue_style( 'meanmenu', BIZNESS_THEME_URI . '/assets/meanMenu/meanmenu.css' );

	// Theme Style
	wp_enqueue_style( 'bizness-style', get_stylesheet_uri(), array(), BIZNESS_THEME_VERSION );
	wp_enqueue_style( 'bizness-main-style', BIZNESS_THEME_URI . 'assets/css/bizness-style.css' );
	wp_enqueue_style( 'bizness-responsive', BIZNESS_THEME_URI . 'assets/css/responsive.css' );

	// Add output of Customizer settings as inline style.
	wp_add_inline_style( 'bizness-main-style', Bizness_Customizer_Inline_Style::css_output( 'front-end' ) );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Scripts
	$scripts = array(
		array(
			'id'      => 'swiper-bundle',
			'url'     => BIZNESS_THEME_URI . 'assets/js/swiper-bundle.min.js',
			'version' => '7.4.1',
			'footer'  => true,
		),
		array(
			'id'      => 'meanmenu',
			'url'     => BIZNESS_THEME_URI . 'assets/meanMenu/jquery.meanmenu.min.js',
			'version' => '2.0.8',
			'footer'  => true,
		),
		array(
			'id'      => 'bizness-skip-link-focus-fix',
			'url'     => BIZNESS_THEME_URI . 'assets/js/skip-link-focus-fix.js',
			'version' => BIZNESS_THEME_VERSION,
			'footer'  => true,
		),
		array(
			'id'      => 'bizness-custom',
			'url'     => BIZNESS_THEME_URI . 'assets/js/custom.js',
			'version' => BIZNESS_THEME_VERSION,
			'footer'  => true,
		),
		array(
			'id'      => 'bizness-navigation',
			'url'     => BIZNESS_THEME_URI . 'assets/js/navigation.js',
			'version' => BIZNESS_THEME_VERSION,
			'footer'  => true,
		),
	);
	bizness_add_scripts( $scripts );
}

add_action( 'wp_enqueue_scripts', 'bizness_scripts' );

/**
 * Add script
 *
 * @since 1.0.0
 */
function bizness_add_scripts( $scripts ) {
	foreach ( $scripts as $key => $value ) {
		wp_enqueue_script( $value['id'], $value['url'], array( 'jquery' ), $value['version'], $value['footer'] );
	}
}

/**
 * Custom template tags for this theme.
 */
require BIZNESS_THEME_DIR . 'inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require BIZNESS_THEME_DIR . 'inc/template-functions.php';

/**
 * Trail Breadcrumb
 */
require BIZNESS_THEME_DIR . 'inc/classes/Bizness_Breadcrumb_Trail.php';

/**
 * Helper Functions
 */
require BIZNESS_THEME_DIR . 'inc/helper-functions.php';

/**
 * Load theme meta box
 */
require BIZNESS_THEME_DIR . 'inc/meta-boxes/Bizness_Meta_Boxes.php';

/**
 * Required Plugins
 */
require BIZNESS_THEME_DIR . 'inc/tgm/bizness-required-plugins.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require BIZNESS_THEME_DIR . 'inc/compatibility/jetpack/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require BIZNESS_THEME_DIR . 'inc/compatibility/woocommerce/woocommerce.php';
}

/**
 * Load hooks file.
 */
require BIZNESS_THEME_DIR . 'inc/hooks/hooks.php';
require BIZNESS_THEME_DIR . 'inc/hooks/functions.php';


/**
 * Customizer additions.
 */
require BIZNESS_THEME_DIR . 'inc/customizer/class-bizness-customizer.php';

/**
 * Customizer outputs
 */
require BIZNESS_THEME_DIR . 'inc/customizer/Bizness_Customizer_Inline_Style.php';

/**
 * Kirki
 */
require BIZNESS_THEME_DIR . 'inc/compatibility/kirki/Bizness_Kirki.php';
