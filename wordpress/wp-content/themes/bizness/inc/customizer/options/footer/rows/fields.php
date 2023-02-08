<?php
/**
 * Add Footer rows settings.
 *
 * @package Bizness
 */

$fields = [
    'footer_group_settings' => [
        'type'              => 'group-field',
        'section'           => 'footer_general_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'footer_background',
                    'footer_section_padding'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'footer_section_md_padding'  
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'footer_section_sm_padding'
                ]
            ]
        ],
    ],
    'footer_bg_type' => [
        'type'              => 'radio_buttonset',
        'label'             => esc_html__( 'Background Type', 'bizness' ),
        'section'           => 'footer_general_section',
        'description'       => esc_html__( 'Set background type as color & image or gradient colors for the entire footer section. ', 'bizness' ),
        'priority'          => 15,
        'default'           => 'color_image',
        'choices'           => [
            'color_image'       => esc_html__( 'Color & Image', 'bizness' ),
            'colors_gradient'   => esc_html__( 'Gradiant Colors', 'bizness' ),
        ],
    ],
    'footer_background' => [
        'type'              => 'background',
        'section'           => 'footer_general_section',
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
                'element'       => '.site-footer',
            ],
        ],
    ],
    'footer_section_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set entire footer section padding.', 'bizness' ),
        'section'     => 'footer_general_section',
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
                'element'   => '.site-footer',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.site-footer',
            ],
        ],
    ],
    'footer_section_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set entire footer section padding.', 'bizness' ),
        'section'     => 'footer_general_section',
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
                'element'       => '.site-footer',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.site-footer',
            ],
        ],
    ],
    'footer_section_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set entire footer section padding.', 'bizness' ),
        'section'     => 'footer_general_section',
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
                'element'       => '.site-footer',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.site-footer',
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}