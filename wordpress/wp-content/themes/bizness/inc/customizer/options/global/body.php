<?php
/**
 * Add Customizer -> General -> Body settings.
 *
 * @package Bizness
 */

$fields = [
    'body_background_color_image' => [
        'type'              => 'background',
        'section'           => 'general_body_section',
        'priority'          => 30,
        'default'           => [
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'       => 'body',
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}