/**
 * File meta-box script.
 *
 * Theme Post/Page Meta Box enhancements for a better user experience.
 *
 * @package Business_Aarambha
 */
( function( $ ) {

    "use strict";

    // Welcome Page Tabs
    $('ul.metabox-tab-nav li').on( 'click', function (e) {
        window.localStorage.setItem('active_metabox_tab', $(e.target).data('tab'));
        let tab_id = $(this).data('tab');
        $('ul.metabox-tab-nav li').removeClass('active');
        $('.setting-tab').removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });

    // Store tab data value in local storage
    let active_metabox_tab = window.localStorage.getItem('active_metabox_tab');

    // Add Active Class in both tab and content with browser refresh
    if (active_metabox_tab) {
        $('ul.metabox-tab-nav li').removeClass('active');
        $('.setting-tab').removeClass('active');
        $('ul.metabox-tab-nav li[data-tab="'+active_metabox_tab+'"]').addClass('active');
        $("#"+active_metabox_tab).addClass('active');
        localStorage.removeItem('active_metabox_tab');
    } else {
        $('ul.metabox-tab-nav li[data-tab="setting-tab-1"]').addClass('active');
        $("#setting-tab-1").addClass('active');
    }

    // New Media Uploader
    $( document.body ).on( 'click', '.custom_media_upload', function( event ) {
        var $el = $( this );
        var $media_type = $el.data( 'multimedia' );

        // Image Uploader
        var file_frame;
        var file_target_input   = $el.parent().find( '.custom_media_input' ).val();
        var file_target_preview = $el.parent().find( '.custom_media_preview' );

        event.preventDefault();

        // Create the media frame.
        file_frame = wp.media.frames.media_file = wp.media({
            // Set the title of the modal.
            title: $el.data( 'choose' ),
            button: {
                text: $el.data( 'update' )
            },
            states: [
                new wp.media.controller.Library({
                    title: $el.data( 'choose' ),
                    library: wp.media.query({ type: 'image' }),
                    multiple: $media_type
                })
            ]
        });

        if ( $media_type === true ) { // For Gallery
            // When an image is selected, run a callback.
            file_frame.on( 'select', function() {
                // Get the attachment from the modal frame.
                var selection = file_frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    if ( attachment.id ) {
                        file_target_input = file_target_input ? file_target_input + "," + attachment.id : attachment.id;
                        file_target_preview.append('\
                            <li class="image" data-attachment_id="' + attachment.id + '">\
                                    <div class="thumbnail">\
                                        <img src="' + attachment.url + '" />\
                                   <a href="#" class="delete_media_image">X</a>\
                                </div>\
                            </li>'
                        );
                    }
                } );
                $el.parent().find( '.custom_media_input' ).val( file_target_input );
            });
        }
        else if( $media_type === false ) { // For Single Image
            // When an image is selected, run a callback.
            file_frame.on( 'select', function() {
                // Get the attachment from the modal frame.
                var attachment = file_frame.state().get( 'selection' ).first().toJSON();

                // Initialize input and preview change.
                if ( attachment.id ) {
                    $el.parent().find( '.custom_media_input' ).val( attachment.id ).trigger('change');
                    file_target_preview.css({ display: 'none' }).find( 'li' ).remove();
                    file_target_preview.css({ display: 'block' }).append('\
                            <li class="image" data-attachment_id="' + attachment.id + '">\
                                    <div class="thumbnail">\
                                        <img src="' + attachment.url + '" />\
                                   <a href="#" class="delete_media_image">X</a>\
                                </div>\
                            </li>'
                    );
                }

            });
        }

        // Finally, open the modal.
        file_frame.open();
    });

    // Remove Media Preview
    $( document.body ).on( 'click', '.delete_media_image', function(){
        var target_preview = $(this).parents('div.media-uploader').attr('id');
        $(this).closest('li.image').remove();
        var attachment_ids = '';
        $( '#'+target_preview+' .custom_media_preview li' ).css( 'cursor', 'default' ).each( function() {
            var attachment_id = $( this ).attr( 'data-attachment_id' );
            attachment_ids = attachment_ids + attachment_id + ',';
        });
        $( '#'+target_preview+' .custom_media_input' ).val( attachment_ids );
        return false;
    });

} ) ( jQuery );
