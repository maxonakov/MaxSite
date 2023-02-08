<?php
/**
 * Add General Colors Settings
 *
 * @package Bizness
 */

$fields = [
    'accent_light_colors'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Accent', 'bizness' ),
        'section'           => 'colors',
        'choices'           => [
            'color_1'           => esc_html__( 'Primary', 'bizness' ),
            'color_2'           => esc_html__( 'Secondary', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '#00c4b6',
            'color_2'            => '#009187'
        ],
        'transport' => 'auto',
        'output'    => [
            [
                'choice'   => 'color_1',
                'element'  => ':root',
                'property' => '--color-accent-1',
            ],
            [
                'choice'   => 'color_2',
                'element'  => ':root',
                'property' => '--color-accent-2',
            ],
        ],
    ],
    'heading_light_colors'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Heading H1 - H6', 'bizness' ),
        'section'           => 'colors',
        'choices'           => [
            'color_1'           => esc_html__( 'Color 1', 'bizness' )
        ],
        'default'           => [
            'color_1'           => '#3d4151'
        ],
        'transport' => 'auto',
        'output'    => [
            [
                'choice'   => 'color_1',
                'element'  => ':root',
                'property' => '--color-heading',
            ]
        ],
    ],
    'text_light_colors'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Text', 'bizness' ),
        'section'           => 'colors',
        'choices'           => [
            'color_1'           => esc_html__( 'Color 1', 'bizness' ),
            'color_2'           => esc_html__( 'Color 2', 'bizness' ),
            'color_3'           => esc_html__( 'Color 3', 'bizness' ),
            'color_4'           => esc_html__( 'Color 4', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '#555968',
            'color_2'            => '#6d707d',
            'color_3'            => '#9ea0a8',
            'color_4'            => '#ffffff',
        ],
        'transport' => 'auto',
        'output'    => [
            [
                'choice'   => 'color_1',
                'element'  => ':root',
                'property' => '--color-text-1',
            ],
            [
                'choice'   => 'color_2',
                'element'  => ':root',
                'property' => '--color-text-2',
            ],
            [
                'choice'   => 'color_3',
                'element'  => ':root',
                'property' => '--color-text-3',
            ],
            [
                'choice'   => 'color_4',
                'element'  => ':root',
                'property' => '--color-text-4',
            ]
        ],
    ],
    'background_light_colors'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Background', 'bizness' ),
        'section'           => 'colors',
        'choices'           => [
            'color_1'           => esc_html__( 'Bg Color 1', 'bizness' ),
            'color_2'           => esc_html__( 'Bg Color 2', 'bizness' ),
            'color_3'           => esc_html__( 'Bg Color 3', 'bizness' )
        ],
        'default'           => [
            'color_1'           => '#ffffff',
            'color_2'           => '#f5f6f6',
            'color_3'           => '#dbdcdf'
        ],
        'transport' => 'auto',
        'output'    => [
            [
                'choice'   => 'color_1',
                'element'  => ':root',
                'property' => '--color-bg-1',
            ],
            [
                'choice'   => 'color_2',
                'element'  => ':root',
                'property' => '--color-bg-2',
            ],
            [
                'choice'   => 'color_3',
                'element'  => ':root',
                'property' => '--color-bg-3',
            ]
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}