<?php

/**
 * Add Customizer -> General -> Image Placeholder settings.
 *
 * @package Bizness
 */

$fields = [
    'image_placeholder_note_1' => [
        'type'              => 'custom',
        'description'       => esc_html__( 'Set default image placeholder image, if no featured image is set on post or page.', 'bizness' ),
        'section'           => 'general_image_placeholder_section',
        'priority'          => 10
    ],
    'image_placeholder_image'  => [
        'type'              => 'image',
        'label'             => esc_html__( 'Image', 'bizness' ),
        'section'           => 'general_image_placeholder_section',
        'default'           => '',
        'priority'          => 10
    ],

];
foreach ($fields as $field_id => $field_args) {
    // Settings
    $field_args['settings'] = str_replace('-', '_', $field_id);

    Kirki::add_field('bizness', $field_args);
}