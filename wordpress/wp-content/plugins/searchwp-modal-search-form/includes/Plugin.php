<?php

use \SearchWPModalFormUtils as Utils;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class SearchWP_Modal_Form.
 */
class SearchWP_Modal_Form {

	private $modal_template_input = 'swpmfe';

	/**
	 * Initial setup.
	 *
	 * @since 0.5.0
	 */
	public function setup() {

		searchwp_modal_form()
			->incl( 'Install.php' )
			->register( 'Install' )
			->setup();

		$this->hooks();
	}

	/**
	 * Hooks.
	 *
	 * @since 0.5.0
	 */
    public function hooks() {

	    add_action( 'init', array( $this, 'init' ) );

	    add_action( 'init', array( $this, 'register_block_type' ) );

	    if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
		    add_filter( 'block_categories_all', array( $this, 'block_categories' ) );
	    } else {
		    add_filter( 'block_categories', array( $this, 'block_categories' ) );
        }

	    add_action( 'plugins_loaded', function() {
		    $this->includes();

		    add_action( 'wp_footer', array( $this, 'render_modals' ) );
	    });

	    // By default all generated modal forms will be using the Default SearchWP engine
	    // when applicable, but we're tagging each form with a reference to the modal
	    // configuration, and we can peek at that during runtime and swap out the engine
	    // configuration with the defined engine during the request.
	    add_filter( 'searchwp\query\args', array( $this, 'maybe_swap_engine' ), 99 );
	    add_filter( 'searchwp_engine_settings_default', array( $this, 'maybe_swap_engine' ), 99 );

	    add_filter( 'plugin_action_links_' . plugin_basename( SEARCHWP_MODAL_FORM_PLUGIN_FILE ), array( $this, 'settings_link' ), 10, 4 );
    }

	/**
	 * Init hook callback.
	 *
	 * @since 0.5.0
	 */
    public function init() {

	    $this->load_textdomain();

        searchwp_modal_form()
	        ->incl( 'Utils.php' );

        searchwp_modal_form()
	        ->incl( 'Settings.php' )
	        ->register( 'Settings' )
	        ->hooks();

        searchwp_modal_form()
	        ->incl( 'Notice.php' )
	        ->register( 'Notice' )
	        ->hooks();

        searchwp_modal_form()
	        ->incl( 'SettingsApi.php' )
	        ->register( 'SettingsApi' )
	        ->init();

	    searchwp_modal_form()
	        ->incl( 'Notifications.php' )
	        ->register( 'Notifications' )
	        ->init();

        searchwp_modal_form()
	        ->incl( 'AdminMenu.php' )
	        ->register( 'AdminMenu' )
	        ->hooks();
    }

	/**
	 * Load text domain.
	 *
	 * @since 0.5.0
	 */
	private function load_textdomain() {

		load_plugin_textdomain( 'searchwp-modal-search-form', false, dirname( plugin_basename( SEARCHWP_MODAL_FORM_PLUGIN_FILE ) ) . '/languages/' );
	}

	/**
	 * Callback to swap out SearchWP engine configuration during runtime when applicable.
	 */
	public function maybe_swap_engine( $engine_settings ) {
		if (
			! isset( $_REQUEST[ $this->modal_template_input ] ) // phpcs:ignore
			|| empty( $_REQUEST[ $this->modal_template_input ] ) ) { // phpcs:ignore
			return $engine_settings;
		}

		$modal_hash = $_REQUEST[ $this->modal_template_input ]; // phpcs:ignore
		$forms      = searchwp_modal_form_get_forms();

		if ( ! array_key_exists( $modal_hash, $forms ) ) {
			return $engine_settings;
		}

		$engine = $forms[ $modal_hash ]['engine_name'];

		// SearchWP 3.x compat.
		if ( class_exists( 'SearchWP\Settings' ) ) {
			$new_engine = \SearchWP\Settings::get_engine_settings( $engine );

			if ( $new_engine ) {
				$engine_settings['engine'] = $engine;
			}

			return $engine_settings;
		} else if ( function_exists( 'SWP' ) ) {
			$engines = SWP()->settings['engines'];
			return array_key_exists( $engine, $engines ) ? $engines[ $engine ] : $engine_settings;
		}
	}

	/**
	 * Callback to utilize all modals that have been enqueued for this page load
	 * and output all applicable assets to make them all work.
	 */
	public function render_modals() {

        $settings = searchwp_modal_form()->get( 'SettingsApi' );

        if ( ! $settings->get( 'enable-modal-form' ) ) {
            return;
        }

		// All modals use this hook to enqueue themselves when implemented.
		$enqueued_modals = apply_filters( 'searchwp_modal_form_queue', array() );

		if ( ! is_array( $enqueued_modals ) || empty( $enqueued_modals ) ) {
			return;
		}

		$debug = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG === true ) || ( isset( $_GET['script_debug'] ) ) ? '' : '.min'; // phpcs:ignore

		// Output the main trigger handler and modal framework.
		wp_enqueue_script(
			'searchwp-modal-form',
			SEARCHWP_MODAL_FORM_PLUGIN_URL . "assets/dist/searchwp-modal-form${debug}.js",
			array(),
			SEARCHWP_MODAL_FORM_VERSION,
			true
		);

		wp_localize_script(
			'searchwp-modal-form',
			'searchwp_modal_form_params',
			[ 'disableScroll' => $settings->get( 'modal-disable-scroll' ) ]
		);

		// Output all enqueued modal templates that are used on this page load.
		foreach ( array_unique( $enqueued_modals ) as $modal_hash ) {
			do_action( 'searchwp_modal_form_template_start', array( 'modal' => $modal_hash ) );
			$this->render_modal( $modal_hash );
			do_action( 'searchwp_modal_form_template_end', array( 'modal' => $modal_hash ) );
		}
	}

	/**
	 * Output the markup for a submitted modal hash.
	 */
	private function render_modal( $modal_hash ) {
		$modal = searchwp_modal_form_reverse_hash_lookup( $modal_hash );
		?>
        <div class="searchwp-modal-form" id="<?php echo esc_attr( 'searchwp-modal-' . $modal_hash ); ?>" aria-hidden="true">
			<?php
			if ( file_exists( $modal['template']['file'] ) ) {
				ob_start();
				include $modal['template']['file'];
				$modal_form_markup = ob_get_contents();
				ob_end_clean();

				// Tag the form with a hidden input of the modal hash for future reference.
				if ( false !== stripos( $modal_form_markup, '</form>' ) ) {
					$form_tag = '<input type="hidden" name="' . esc_attr( $this->modal_template_input ) . '" value="' . esc_attr( $modal_hash ) . '" />';

					$modal_form_markup = str_ireplace( '</form>', $form_tag . '</form>', $modal_form_markup );
				}

				// This markup is directly from the template file which is responsible for handling user input.
				echo $modal_form_markup; // phpcs:ignore
			} else {
				echo esc_html_e( 'Template not found!', 'searchwp-modal-search-form' );
			}
			?>
        </div>
		<?php
	}

	/**
	 * Relevant includes.
	 */
	public function includes() {

		searchwp_modal_form()
			->incl( 'functions.php' )
			->incl( 'Shortcode.php' )
			->incl( 'Menu.php' );
	}

	/**
	 * Register block if applicable.
	 */
	public static function register_block_type() {
		if ( ! function_exists( 'register_block_type' ) ) {
			// Gutenberg is not active.
			return;
		}

		wp_register_script(
			'searchwp-modal-form-block',
			SEARCHWP_MODAL_FORM_PLUGIN_URL . 'assets/dist/block.build.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-components', 'wp-data', 'wp-editor', 'wp-element' ),
			SEARCHWP_MODAL_FORM_VERSION,
			true
		);

		// Define our Template SelectControl data.
		$templates = array_values( array_map(
			function( $template ) {
				$template_label = $template['template_label'];

				if ( function_exists( 'SWP' ) ) {
					$template_label = $template['engine_label'] . ' Engine - ' . $template_label;
				}
				return array(
					'label' => $template_label,
					'value' => $template['name'],
				);
			},
			searchwp_modal_form_get_forms()
		) );

		wp_localize_script(
			'searchwp-modal-form-block',
			'_SEARCHWP_MODAL_FORM_DATA',
			array(
				'templates' => $templates,
				'searchwp'  => function_exists( 'SWP' ),
			)
		);

		register_block_type(
			'searchwp/modal-form',
			array(
				'editor_script'   => 'searchwp-modal-form-block',
				'editor_style'    => 'searchwp-modal-form-block',
				'attributes'      => array(
					'engine'   => array( 'type' => 'string' ),
					'template' => array( 'type' => 'string' ),
					'text'     => array( 'type' => 'string' ),
					'type'     => array( 'type' => 'string' ),
				),
				'render_callback' => array( __CLASS__, 'render_block_modal_form' ),
			)
		);

		// TODO: Implement i18n.
		// if ( function_exists( 'wp_set_script_translations' ) ) {
		// 	wp_set_script_translations( 'searchwp-modal-form-block', 'searchwp-modal-search-form', SEARCHWP_MODAL_FORM_PLUGIN_DIR . 'languages' );
		// }
	}

	/**
	 * Render the server-side block on the front-end.
	 *
	 * @param array  $attributes The block attributes.
	 * @param string $content The block inner content.
	 *
	 * @return string
	 */
	public static function render_block_modal_form( $attributes, $content ) {
		$args = array_merge(
			$attributes,
			array(
				'post_id' => empty( $_GET['post_id'] ) ? null : abs( $_GET['post_id'] ), // phpcs:ignore
			)
		);

		$args['echo'] = false;

		return searchwp_modal_form_trigger( $args );
	}

	/**
	 * Add a block category for SearchWP if it doesn't exist already.
	 *
	 * @param array $categories Array of block categories.
	 *
	 * @return array
	 */
	public static function block_categories( $categories ) {
		$category_slugs = wp_list_pluck( $categories, 'slug' );
		return in_array( 'searchwp', $category_slugs, true ) ? $categories : array_merge(
			$categories,
			array(
				array(
					'slug'  => 'searchwp',
					'title' => 'SearchWP',
					'icon'  => null,
				),
			)
		);
	}

	/**
	 * Add settings link to the Plugins page.
	 *
	 * @since 0.5.0
	 *
	 * @param array  $links       Plugin row links.
	 * @param string $plugin_file Path to the plugin file relative to the plugins directory.
	 * @param array  $plugin_data An array of plugin data. See `get_plugin_data()`.
	 * @param string $context     The plugin context.
	 *
	 * @return array $links
	 */
	public function settings_link( $links, $plugin_file, $plugin_data, $context ) {

		if ( ! Utils::is_searchwp_active() ) {
			$custom['pro'] = sprintf(
				'<a href="%1$s" aria-label="%2$s" target="_blank" rel="noopener noreferrer"
				style="color: #1da867; font-weight: 700;"
				onmouseover="this.style.color=\'#008a20\';"
				onmouseout="this.style.color=\'#00a32a\';"
				>%3$s</a>',
				esc_url(
					add_query_arg(
						[
							'utm_content'  => 'Get+SearchWP+Pro',
							'utm_campaign' => 'Modal+Search+Form',
							'utm_medium'   => 'Plugins+Table+Upgrade+Link',
							'utm_source'   => 'WordPress',
						],
						'https://searchwp.com/'
					)
				),
				esc_attr__( 'Upgrade to SearchWP Pro', 'searchwp-modal-search-form' ),
				esc_html__( 'Get SearchWP Pro', 'searchwp-modal-search-form' )
			);
		}

		$custom['settings'] = sprintf(
			'<a href="%s" aria-label="%s">%s</a>',
			esc_url(
				add_query_arg(
					[ 'page' => 'searchwp-modal-form' ],
					admin_url( 'admin.php' )
				)
			),
			esc_attr__( 'Go to SearchWP Settings page', 'searchwp-modal-search-form' ),
			esc_html__( 'Settings', 'searchwp-modal-search-form' )
		);

		$custom['docs'] = sprintf(
			'<a href="%1$s" aria-label="%2$s" target="_blank" rel="noopener noreferrer">%3$s</a>',
			esc_url(
				add_query_arg(
					[
						'utm_content'  => 'Docs',
						'utm_campaign' => 'Modal+Search+Form',
						'utm_medium'   => 'Plugins+Table+Docs+Link',
						'utm_source'   => 'WordPress',
					],
					'https://searchwp.com/extensions/modal-form/'
				)
			),
			esc_attr__( 'Read the documentation', 'searchwp-modal-search-form' ),
			esc_html__( 'Docs', 'searchwp-modal-search-form' )
		);

		return array_merge( $custom, (array) $links );
	}
}
