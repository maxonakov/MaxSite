/**
 * Customizer Grouping Custom Control
 *
 * @package Bizness
 */
var elan_customize_control_tabs = function ( $ ) {
    'use strict';

    $( function () {
        var customize = wp.customize;

        // Switch tab based on customizer partial edit links.
        customize.previewer.bind(
            'tab-previewer-edit', function( data ) {
                $( data.selector ).trigger( 'click' );
            }
        );

        customize.previewer.bind(
            'focus-control',  function( data ) {
                /**
                 * This timeout is here because in firefox this happens before customizer animation of changing panels.
                 * After it change panels with the input focused, the customizer was moved to right 12px. We have to make sure
                 * that the customizer animation of changing panels in customizer is done before focusing the input.
                 */
                setTimeout( function(){
                    wp.customize.control(data).focus();
                } , 100 );
            }
        );

        // Hide all controls
        $( '.group-field-tabs-wrap' ).each(
            function () {
                var customizerSection = $( this ).closest( '.accordion-section' );
                // Hide all controls in section.
                hideAllExceptCurrent( customizerSection );

                // Show controls under first radio button.
                var shownCtrls = $( this ).find( '.group-field-tab > .active' ).data( 'controls' );
                showControls( customizerSection, shownCtrls );
            }
        );

        $( '.group-field-tab > label' ).on(
            'click', function () {
                var customizerSection = $( this ).closest( '.accordion-section' );
                var controls          = $( this ).prev().data( 'controls' );
                var preview           = $( this ).prev().data( 'preview' );
                var $body             = $( '.wp-full-overlay' );

                // Wrapper class
                $body.removeClass( 'preview-desktop preview-tablet preview-mobile' ).addClass( 'preview-' + preview );

                // Hide all controls in section
                hideAllExceptCurrent( customizerSection );
                showControls( customizerSection, controls );

            }
        );

        // Onclick Change Active Class for custom tabs
        $( '.group-field-tab > input' ).on(

            'click', function( event ) {
                event.preventDefault();

                // Set up variables
                var $device         = $( event.currentTarget ).data( 'preview' ),
                    $footer_devices = $( '.wp-full-overlay-footer .devices' ),
                    $parent_id      = $(this).parents('.group-field-tabs-wrap').attr('id');

                // Customizer Custom Tabs
                $('#'+ $parent_id +' .group-field-tab > input').removeClass('active').addClass('inactive');
                $(this).removeClass('inactive').addClass('active');

                // Panel footer buttons
                $footer_devices.find( 'button' ).removeClass( 'active' ).attr( 'aria-pressed', false );
                $footer_devices.find( 'button.preview-' + $device ).trigger('click');
            }
        );

    } );
};

elan_customize_control_tabs( jQuery );

(function ($) {

    // Footer Switcher to Change Custom Tabs class
    $( '#customize-footer-actions .devices button' ).on(
        'click', function( event ) {
            event.preventDefault();

            // Set up variables
            var device  = $( this ).data( 'device' );

            // Change tabs class
            $('.group-field-tabs-wrap .group-field-tab > input').removeClass('active').addClass('inactive');
            $('.group-field-tabs-wrap .group-field-tab.'+ device +' > input').removeClass('inactive').addClass('active');

            // Trigger on load for tabs control
            $('.group-field-tabs-wrap .group-field-tab.'+ device +' > label').trigger('click');

        }
    );
})(jQuery);

/**
 * Handles showing the controls when the tab is clicked.
 *
 * @param customizerSection
 * @param controlsToShowArray
 */
function showControls( customizerSection, controlsToShowArray ) {
    'use strict';
    jQuery.each(
        controlsToShowArray, function ( index, controlId ) {
            let wpDefaultFields = ['blogname','blogdescription','custom_logo','site_icon'];

            var parentSection   = customizerSection[ 0 ];
            if ( controlId === 'widgets' ) {
                jQuery( parentSection ).children( 'li[class*="widget"]' ).css( 'display', '' );
                return true;
            }

            jQuery( 'li[data-kirki-setting*="' + controlId + '"]' ).css( 'display', '' );
            //jQuery( '#customize-control-' + controlId ).css( 'display', '' );
        }
    );
}

/**
 * Utility function that hides all the controls in the panel except the tabs control.
 *
 * @param customizerSection
 * @param controlId
 */
function hideAllExceptCurrent( customizerSection ) {
    'use strict';
    jQuery( customizerSection ).children( 'li.customize-control' ).css( 'display', 'none' );
}