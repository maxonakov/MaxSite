<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Bizness
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function bizness_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'bizness_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function bizness_woocommerce_scripts() {
	wp_enqueue_style( 'bizness-woocommerce-style', BIZNESS_THEME_URI . 'woocommerce.css', array(), BIZNESS_THEME_VERSION );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'bizness-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'bizness_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function bizness_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'bizness_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function bizness_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'bizness_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'bizness_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function bizness_woocommerce_wrapper_before() {
		bizness_site_primary_content_start();
		?>
			<main id="primary"<?php bizness_primary_class(); ?>>
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'bizness_woocommerce_wrapper_before' );

if ( ! function_exists( 'bizness_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function bizness_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
			<?php bizness_site_content_sidebar(); ?>
			</div><!-- .row -->
			</div><!-- .container -->
			</section><!-- .section-post-container -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'bizness_woocommerce_wrapper_after' );

if ( ! function_exists( 'bizness_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function bizness_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		?>
		<span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ); ?></span>
		<?php
		$fragments['span.cart-value'] = ob_get_clean();
		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'bizness_woocommerce_cart_link_fragment' );

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'bizness_wc_loop_columns', 999);
if (!function_exists('bizness_wc_loop_columns')) {
	function bizness_wc_loop_columns() {
		return 3; // 3 products per row
	}
}

add_filter('loop_shop_per_page', 'bizness_wc_no_of_products', 999);
if (!function_exists('bizness_wc_no_of_products')) {
	function bizness_wc_no_of_products() {
		return 9; // * products per row
	}
}

// Add extra option on header elements
add_filter( 'bizness_header_elements', 'bizness_wc_cart_option' );
function bizness_wc_cart_option( $options ){
	$value 			= $options;
	$value['cart'] 	= esc_html__( 'Woo Cart', 'bizness' );
	return $value;
}