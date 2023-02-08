<?php
/**
 * This file adds a custom section in the customizer that recommends the installation of the Kirki plugin.
 * It can be used as-is in themes (drop-in).
 *
 * @package Bizness
 */

if ( ! function_exists( 'bizness_kirki_installer_register' ) ) {
	/**
	 * Registers the section, setting & control for the Kirki installer.
	 *
	 * @param object $wp_customize The main customizer object.
	 */

	function bizness_kirki_installer_register( $wp_customize ) {

		// Early exit if Kirki exists.
		if ( bizness_kirki_plugin() ) {
			// Header Image
			$wp_customize->get_section( 'colors' )->panel    = 'global_panel';
			$wp_customize->get_section( 'colors' )->priority = 10;
		}

		if ( class_exists( 'WP_Customize_Section' ) && ! class_exists( 'Kirki_Installer_Section' ) ) {

			/**
			 * Recommend the installation of Kirki using a custom section.
			 *
			 * @see WP_Customize_Section
			 */

			class Kirki_Installer_Section extends WP_Customize_Section {

				/**
				 * Customize section type.
				 *
				 * @access public
				 * @var string
				 */

				public $type = 'kirki_installer';

				/**
				 * The plugin install URL.
				 *
				 * @access private
				 * @var string
				 */

				public $plugin_install_url;

				/**
				 * Render the section.
				 *
				 * @access protected
				 */
				protected function render() {

					if ( bizness_kirki_plugin() ) {
						?>
						<!-- Upgrade to PRO -->
						<li id="accordion-section-upgrade-pro" class="cannot-expand accordion-section control-section control-section-themes accordion-section-pro" style="border-top:none;border-bottom:1px solid #ddd;padding:7px 14px 16px 14px;text-align:right;">
							<?php $this->upgrade_button(); ?>
						</li>
						
						<?php
					} else {
						// Don't proceed any further if the user has dismissed this.
						if ( $this->is_dismissed() ) {
							return;
						}

						// Determine if the plugin is not installed, or just inactive.
						$plugins   = get_plugins();
						$installed = false;
						foreach ( $plugins as $plugin ) {
							if ( 'Kirki' === $plugin['Name'] || 'Kirki Toolkit' === $plugin['Name'] || 'Kirki Customizer Framework' === $plugin['Name'] ) {
								$installed = true;
							}
						}
						$plugin_install_url = $this->get_plugin_install_url();
						$classes            = 'cannot-expand accordion-section control-section control-section-themes control-section-' . $this->type;
						?>
						<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="<?php echo esc_attr( $classes ); ?>" style="border-top:none;border-bottom:1px solid #ddd;padding:7px 14px 16px 14px;text-align:right;">
							<?php if ( ! $installed ) : ?>
								<?php $this->install_button(); ?>
							<?php else : ?>
								<?php $this->activate_button(); ?>
							<?php endif; ?>
							<?php $this->dismiss_button(); ?>
						</li>
						<?php
					}
				}

				/**
				 * Check if the user has chosen to hide this.
				 *
				 * @static
				 * @access public
				 * @since 1.0.0
				 * @return bool
				 */

				public static function is_dismissed() {
					// Get the user-meta.
					$user_id   = get_current_user_id();
					$user_meta = get_user_meta( $user_id, 'dismiss-kirki-recommendation', true );
					return ( true === $user_meta || '1' === $user_meta || 1 === $user_meta );

				}

				/**
				 * Adds the install button.
				 *
				 * @since 1.0.0
				 * @return void
				 */

				protected function install_button() {
					?>
					<p style="text-align:left;margin-top:0;">
						<?php esc_html_e( 'Please install the Kirki plugin to take full advantage of this theme\'s customizer capabilities', 'bizness' ); ?>
					</p>
					<a class="install-now button-primary button" data-slug="kirki" href="<?php echo esc_url_raw( $this->get_plugin_install_url() ); ?>" aria-label="<?php esc_attr_e( 'Install Kirki Toolkit now', 'bizness' ); ?>" data-name="Kirki Toolkit">
						<?php esc_html_e( 'Install Now', 'bizness' ); ?>
					</a>
					<?php

				}

				/**
				 * Adds the install button.
				 *
				 * @since 1.0.0
				 * @return void
				 */

				protected function activate_button() {
					?>
					<p style="text-align:left;margin-top:0;">
						<?php esc_html_e( 'You have installed Kirki. Activate it to take advantage of this theme\'s features in the customizer.', 'bizness' ); ?>
					</p>

					<a class="activate-now button-primary button" data-slug="kirki" href="<?php echo esc_url_raw( self_admin_url( 'plugins.php' ) ); ?>" aria-label="<?php esc_attr_e( 'Activate Kirki Toolkit now', 'bizness' ); ?>" data-name="Kirki Toolkit">
						<?php esc_html_e( 'Activate Now', 'bizness' ); ?>
					</a>
					<?php
				}

				protected function upgrade_button() {
					?>
					
					<h5 style="text-align:left;margin-top:0;">
						<?php esc_html_e( 'Upgrade to PRO', 'bizness' ); ?>
						<a class="activate-now button-primary button button-pro" data-slug="kirki" href="https://excelthemes.com/bizness-pro/" aria-label="<?php esc_attr_e( 'Upgrade to pro', 'bizness' ); ?>" data-name="Kirki Toolkit" target="_blank">
							<?php esc_html_e( 'Click', 'bizness' ); ?>
						</a>
					</h5>
					<?php
				}

				/**
				 * Adds the dismiss button and script.
				 *
				 * @since 1.0.0
				 * @return void
				 */

				protected function dismiss_button() {
					// Create the nonce.
					$ajax_nonce = wp_create_nonce( 'dismiss-kirki-recommendation' );
					// Show confirmation dialog on dismiss?
					$show_confirm = true;
					?>

					<a class="kirki-installer-dismiss button-secondary button" data-slug="kirki" href="#" aria-label="<?php esc_attr_e( 'Don\'t show this again', 'bizness' ); ?>" data-name="<?php esc_attr_e( 'Dismiss', 'bizness' ); ?>">
						<?php esc_html_e( 'Don\'t show this again', 'bizness' ); ?>
					</a>
					<script type="text/javascript">
						jQuery( document ).ready( function() {
							jQuery( '.kirki-installer-dismiss' ).on( 'click', function( event ) {
								event.preventDefault();

								<?php if ( $show_confirm ) : ?>
								if ( ! confirm( '<?php esc_html_e( 'Are you sure? Dismissing this message will hide the installation recommendation and you will have to manually install and activate the plugin in the future.', 'bizness' ); ?>' ) ) {
									return;
								}
								<?php endif; ?>

								jQuery.post( ajaxurl, {
									action: 'bizness_kirki_installer_dismiss',
									security: '<?php echo esc_html( $ajax_nonce ); ?>',
								}, function( response ) {
									jQuery( '#accordion-section-kirki_installer' ).remove();
								} );
							} );
						} );

					</script>
					<?php
				}

				/**

				 * Get the plugin install URL.
				 *
				 * @access private
				 * @return string
				 */

				private function get_plugin_install_url() {
					if ( ! $this->plugin_install_url ) {

						// Get the plugin-installation URL.
						$this->plugin_install_url = add_query_arg(
							array(
								'action' => 'install-plugin',
								'plugin' => 'kirki',
							),
							self_admin_url( 'update.php' )
						);
						$this->plugin_install_url = wp_nonce_url( $this->plugin_install_url, 'install-plugin_kirki' );
					}
					return $this->plugin_install_url;
				}
			}
		}

		// Early exit if the user has dismissed the notice.
		if ( is_callable( array( 'Kirki_Installer_Section', 'is_dismissed' ) ) && Kirki_Installer_Section::is_dismissed() ) {
			return;
		}

		$wp_customize->add_section(
			new Kirki_Installer_Section(
				$wp_customize,
				'kirki_installer',
				array(
					'title'      => '',
					'capability' => 'install_plugins',
					'priority'   => 0,
				)
			)
		);

		$wp_customize->add_setting(
			'kirki_installer_setting',
			array(
				'sanitize_callback' => '__return_true',
			)
		);

		$wp_customize->add_control(
			'kirki_installer_control',
			array(
				'section'  => 'kirki_installer',
				'settings' => 'kirki_installer_setting',
			)
		);
	}
}

add_action( 'customize_register', 'bizness_kirki_installer_register', 999 );

if ( ! function_exists( 'bizness_kirki_installer_dismiss' ) ) {

	/**
	 * Handles dismissing the plugin-install/activate recommendation.
	 * If the user clicks the "Don't show this again" button, save as user-meta.
	 *
	 * @since 1.0.0
	 * @return void
	 */

	function bizness_kirki_installer_dismiss() {
		check_ajax_referer( 'dismiss-kirki-recommendation', 'security' );
		$user_id = get_current_user_id();
		if ( update_user_meta( $user_id, 'dismiss-kirki-recommendation', true ) ) {
			echo 'success! :-)';
			wp_die();
		}
		echo 'failed :-(';
		wp_die();
	}
}
add_action( 'wp_ajax_kirki_installer_dismiss', 'bizness_kirki_installer_dismiss' );

/**
 * Registers the control with Kirki.
 *
 * @since 1.0
 * @param array $controls An array of controls registered with the Kirki Toolkit.
 * @return array
 */

add_filter(
	'kirki_control_types',
	function( $controls ) {

		// Register Custom Control -> Group Fields
		require BIZNESS_THEME_DIR . 'inc/customizer/controls/group-field/Bizness_Customize_Group_Field_Control.php';
		$controls['group-field'] = 'Bizness_Customize_Group_Field_Control';
		return $controls;
	}
);



/**
 * Include customizer options.
 */

add_action(
	'init',
	function() {

		// Early exit if Kirki exists.
		if ( bizness_kirki_plugin() ) {
			Kirki::add_config(
				'bizness',
				array(
					'capability'  => 'edit_theme_options',
					'option_type' => 'theme_mod',
				)
			);

			// Panels and Sections
			require BIZNESS_THEME_DIR . 'inc/customizer/register-panels-and-sections.php';
			// Global -> Typography
			require BIZNESS_THEME_DIR . 'inc/customizer/options/global/typo.php';
			// Global -> Colors
			require BIZNESS_THEME_DIR . 'inc/customizer/options/global/colors.php';
			// Global -> Background
			require BIZNESS_THEME_DIR . 'inc/customizer/options/global/body.php';
			// Global -> Container
			require BIZNESS_THEME_DIR . 'inc/customizer/options/global/container.php';
			// Global -> Buttons
			require BIZNESS_THEME_DIR . 'inc/customizer/options/global/buttons.php';
			// Global -> Comments
			require BIZNESS_THEME_DIR . 'inc/customizer/options/global/comments.php';
			// Global -> Image Placeholder
			require BIZNESS_THEME_DIR . 'inc/customizer/options/global/image-placeholder.php';

			// Header -> Rows -> Fields
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/rows/fields.php';
			// Header -> Rows -> Top Row
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/rows/top-fields.php';
			// Header -> Rows -> Middle Row
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/rows/main-fields.php';
			// Header -> Rows -> Bottom Row
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/rows/bottom-fields.php';
			// Header -> Button Element -> Bottom
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/button.php';
			// Header -> Search Element -> Search
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/normal-search.php';
			// Header -> Social Element -> Social
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/social.php';
			// Header -> Menu 2 Element -> Top Menu
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/top-menu.php';
			// Header -> Menu 1 Element -> Menu 1
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/menu-1.php';
			// Header -> Site identity Element -> Site identity
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/site-identity.php';
			// Header -> HTML 1 Element -> HTML 1
			require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/html-1.php';
			// Header -> WC Cart Element -> Cart
			if ( class_exists( 'WooCommerce' ) ) {
				require BIZNESS_THEME_DIR . 'inc/customizer/options/header/elements/cart.php';
			}

			/**
			 * Blog Nested Panel,section and settings
			 */
			// Blog -> Blog Archives -> Page Header
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/blog-archives/blog-top-banner.php';
			// Blog -> Blog Archives -> Content Layout
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/blog-archives/content-layout.php';
			// Blog -> Blog Archives -> Featured Image
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/blog-archives/featured-image.php';
			// Blog -> Blog Archives -> Post Title
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/blog-archives/post-title.php';
			// Blog -> Blog Archives -> Post Excerpt
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/blog-archives/read-more.php';
			// Blog -> Blog Archives -> Pagination
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/blog-archives/pagination.php';

			// Blog -> Single Post -> Page Title
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/single-post/post-top-banner.php';
			// Blog -> Single Post -> Content Layout
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/single-post/content-layout.php';
			// Blog -> Single Post -> Featured Image
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/single-post/post-title.php';
			// Blog -> Single Post -> Featured Image
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/single-post/featured-image.php';
			// Blog -> Single Post -> Post Navigation
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/single-post/post-navigation.php';
			// Blog -> Single Post -> Author Box
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/single-post/author.php';
			// Blog -> Single Post -> Related Posts
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/single-post/related-posts.php';
			// Blog -> Sidebar
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/sidebar.php';
			// Blog -> Post Meta
			require BIZNESS_THEME_DIR . 'inc/customizer/options/blog/post-meta.php';

			/**
			 * Pages Nested Panel
			 */
			// Pages -> Front Page -> Sorting Content
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/front-page/fields.php';
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/front-page/section/featured-slider.php';
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/front-page/section/about-us.php';
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/front-page/section/cta.php';
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/front-page/section/testimonial.php';
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/front-page/section/blog-posts.php';
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/front-page/section/services.php';

			// Pages -> Single Page -> Page Top Banner
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/single/banner.php';
			// Pages -> Single Page -> Content
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/single/content-layout.php';
			// Pages -> Single Page -> Featured Image
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/single/featured-image.php';
			// Pages -> Single Page -> Page Title
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/single/title.php';

			// Pages -> Sidebar
			require BIZNESS_THEME_DIR . 'inc/customizer/options/pages/sidebar.php';

			// Social -> Social Networks
			require BIZNESS_THEME_DIR . 'inc/customizer/options/social/social-networks.php';

			// Footer -> Rows -> Fields
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/rows/fields.php';
			// Footer -> Rows -> Top Row
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/rows/top-fields.php';
			// Footer -> Rows -> Middle Row
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/rows/main-fields.php';
			// Footer -> Rows -> Bottom Row
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/rows/bottom-fields.php';
			// Footer -> Button Element -> Bottom
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/button.php';
			// Footer -> Social Element -> Social
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/social.php';
			// Footer -> Menu 1 Element -> Menu 1
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/menu-1.php';
			// Footer -> HTML Element -> HTML
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/html.php';
			// Footer -> Element -> Copyright
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/copyright.php';
			// Footer -> Element -> Widget 1
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/widget-1.php';
			// Footer -> Element -> Widget 2
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/widget-2.php';
			// Footer -> Element -> Widget 3
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/widget-3.php';
			// Footer -> Element -> Widget 4
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/widget-4.php';
			// Footer -> Element -> Widget 5
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/widget-5.php';
			// Footer -> Element -> Widget 6
			require BIZNESS_THEME_DIR . 'inc/customizer/options/footer/elements/widget-6.php';

		}

	},
	999
);

