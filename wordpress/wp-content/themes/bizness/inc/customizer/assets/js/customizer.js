/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 */

/**
 * Customizer control active callback function JS
 *
 * @param control
 * @param selectors
 * @param compare
 */
function bizness_active_callback( control, selectors, compares ) {

	wp.customize.bind( 'ready', function() {

		wp.customize( control, function( value ) {

			let controlSelectors = function( control ) {

				let active = function() {

					let objVal = value.get();

					if ( objVal !== undefined && ( jQuery.inArray( objVal, compares ) !== -1 ) ) {
						control.container.removeClass('bizness-hidden');
					} else {
						control.container.addClass('bizness-hidden');
					}
				};

				// Set initial active state.
				active();

				// Update activate state whenever the setting is changed.
				value.bind( active );
			};

			// Trigger Selected Controls
			jQuery.each( selectors, function( index, id ) {
				wp.customize.control( id, controlSelectors );
			} );

		} );

	} );
}

function bizness_toggle_active_callback( control, selectors ) {

	wp.customize.bind( 'ready', function() {

		wp.customize( control, function( value ) {

			let controlSelectors = function( control ) {

				let active = function() {

					let objVal = value.get();

					if ( objVal !== undefined && objVal === true ) {
						control.container.removeClass('bizness-hidden');
					} else {
						control.container.addClass('bizness-hidden');
					}
				};

				// Set initial active state.
				active();

				// Update activate state whenever the setting is changed.
				value.bind( active );
			};

			// Trigger Selected Controls
			jQuery.each( selectors, function( index, id ) {
				wp.customize.control( id, controlSelectors );
			} );

		} );

	} );
}


( function( $, api ) {
	'use strict';
	// Blog
	bizness_active_callback(
		'blog_page_header_background_type',
		[
			'blog_page_header_background_gradient_colors'
		],
		['colors_gradient']
	);
	bizness_active_callback(
		'blog_page_header_background_type',
		[
			'blog_page_header_background_color_image'
		],
		['color_image']
	);
	// single post
	bizness_active_callback(
		'single_post_page_header_background_type',
		[
			'single_post_top_banner_overlay_background'
		],
		['colors_gradient']
	);
	bizness_active_callback(
		'single_post_page_header_background_type',
		[
			'single_post_top_banner_background'
		],
		['color_image']
	);
	bizness_toggle_active_callback(
		'single_post_navigation_label_enable',
		[
			'single_post_navigation_next_label',
			'single_post_navigation_prev_label'
		]
	);
	// Bind customizer focus target link
	api.bind( 'ready', function() {
		$('.customizer-focus').on('click', function (e) {
			e.preventDefault();

			let type 	= $(this).data('type'),
				id		= $(this).data('id');

			if ( ! id || ! type ) {
				return;
			}
			api[type]( id, function( instance ) {
				instance.deferred.embedded.done( function() {
					api.previewer.deferred.active.done( function() {
						instance.focus();
					});
				});
			});

		});
	});

}) ( jQuery, wp.customize );
