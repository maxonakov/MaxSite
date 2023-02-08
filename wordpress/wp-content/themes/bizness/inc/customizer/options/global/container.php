<?php
/**
 * Add Customizer -> General -> Container settings.
 *
 * @package Bizness
 */

$fields = [
    'container_max_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Max Width', 'bizness' ),
        'description'       => esc_html__( 'Set container max width in %.', 'bizness' ),
        'section'           => 'general_container_section',
        'default'           => 80,
        'priority'          => 10,
        'choices'           => [
            'min'               => 50,
            'suffix'            => '%'
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'       => '.site.is-boxed,.site .container',
                'property'      => 'max-width',
                'suffix'        => '%'
            ]
        ]
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}