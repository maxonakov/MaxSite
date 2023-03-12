<?php

use \SearchWPModalFormSettingsApi as SettingsApi;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class SearchWPModalFormUtils.
 *
 * @since 0.5.0
 */
class SearchWPModalFormUtils {

	/**
	 * Plugin general prefix.
	 *
	 * @since 0.5.1
	 */
	const SEARCHWP_MODAL_FORM_PREFIX = 'searchwp_modal_form_';

	/**
	 * Check if SearchWP plugin is active.
	 *
	 * @since 0.5.0
	 */
	public static function is_searchwp_active() {

		return class_exists( 'SearchWP', false );
	}

	/**
	 * Check if SearchWP Live Ajax Search plugin is active.
	 *
	 * @since 0.5.0
	 */
	public static function is_live_search_active() {

		return function_exists( 'searchwp_live_search' );
	}

	/**
	 * Helper function to determine if loading a Modal Search Form admin settings page.
	 *
	 * @since 0.5.0
	 *
	 * @return bool
	 */
	public static function is_settings_page() {

		if ( ! is_admin() ) {
			return false;
		}

		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$page = isset( $_REQUEST['page'] ) ? sanitize_key( $_REQUEST['page'] ) : '';

		if ( empty( $page ) ) {
			return false;
		}

		return $page === 'searchwp-modal-form';
	}

	/**
	 * Sanitize array/string of CSS classes.
	 *
	 * @since 0.5.0
	 *
	 * @param array|string $classes
	 * @param array        $args {
	 *     Optional arguments.
	 *
	 *     @type bool       $convert Whether to suppress filters. Default true.
	 * }
	 *
	 * @return string|array
	 */
	public static function sanitize_classes( $classes, $args = [] ) {

		$is_array = is_array( $classes );
		$convert  = ! empty( $args['convert'] );
		$css      = [];

		if ( ! empty( $classes ) ) {
			$classes = $is_array ? $classes : explode( ' ', trim( $classes ) );
			foreach ( $classes as $class ) {
				if ( ! empty( $class ) ) {
					$css[] = sanitize_html_class( $class );
				}
			}
		}

		if ( $is_array ) {
			return $convert ? implode( ' ', $css ) : $css;
		}

		return $convert ? $css : implode( ' ', $css );
	}

	/**
	 * Localizes a script using a standard set of variables.
	 *
	 * @since 0.5.1
	 *
	 * @param string $handle   The script handle to localize.
	 * @param array  $settings Additional settings to localize.
	 */
	public static function localize_script( string $handle, array $settings = [] ) {

		$l10n = [
			'nonce'  => current_user_can( SettingsApi::get_capability() ) ? wp_create_nonce( self::SEARCHWP_MODAL_FORM_PREFIX . 'settings' ) : '',
			'prefix' => self::SEARCHWP_MODAL_FORM_PREFIX,
		];

		if ( ! empty( $settings ) && is_array( $settings ) ) {
			$l10n = array_merge( $l10n , $settings );
		}

		wp_localize_script( $handle, '_SEARCHWP', $l10n );
	}

	/**
	 * Check if the AJAX call has all the necessary permissions (nonce and capability).
	 *
	 * @since 0.5.1
	 *
	 * @param array $args Arguments to change method's behaviour.
	 *
	 * @return bool
	 */
	public static function check_ajax_permissions( $args = [] ) {

		$defaults = [
			'capability' => SettingsApi::get_capability(),
			'query_arg'  => false,
			'die'        => true,
		];

		$args = wp_parse_args( $args, $defaults );

		$result = check_ajax_referer( self::SEARCHWP_MODAL_FORM_PREFIX . 'settings', $args['query_arg'], $args['die'] );

		if ( $result === false ) {
			return false;
		}

		if ( ! current_user_can( $args['capability'] ) ) {
			$result = false;
		}

		if ( $result === false && $args['die'] ) {
			wp_die( -1, 403 );
		}

		return (bool) $result;
	}
}
