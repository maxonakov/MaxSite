<?php
/**
 * Add header rows settings.
 *
 * @package Bizness
 */

$fields = [
    'header_group_settings' => [
        'type'              => 'group-field',
        'section'           => 'header_general_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'header_transparent',
                    'header_background',
                    'header_section_padding'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'header_section_md_padding'  
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'header_section_sm_padding'
                ]
            ]
        ],
    ],
    'header_transparent'  => [
        'type'              => 'toggle',
        'label'             => esc_html__( 'Transparent Header', 'bizness' ),
        'description'       => esc_html__( 'Toggle to enable to set transparent header.', 'bizness' ),
        'section'           => 'header_general_section',
        'default'           => '',
        'priority'          => 10,
    ],
    'header_background' => [
        'type'              => 'background',
        'section'           => 'header_general_section',
        'priority'          => 15,
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
                'element'       => '.site-header',
            ],
        ],
    ],
    'header_section_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set entire header section padding.', 'bizness' ),
        'section'     => 'header_general_section',
        'priority'    => 20,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.site-header',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.site-header',
            ],
        ],
    ],
    'header_section_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set entire header section padding.', 'bizness' ),
        'section'     => 'header_general_section',
        'priority'    => 20,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-top',
	            'property'      => 'padding-top',
                'element'       => '.site-header',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.site-header',
            ],
        ],
    ],
    'header_section_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set entire header section padding.', 'bizness' ),
        'section'     => 'header_general_section',
        'priority'    => 20,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-top',
	            'property'      => 'padding-top',
                'element'       => '.site-header',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.site-header',
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}