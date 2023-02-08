<?php
/**
 * Add Customizer -> General -> Button settings.
 *
 * @package Bizness
 */

$fields = [
    'button_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'general_button_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'button_text_color',
                    'button_background_color',
                    'button_border_sep',
                    'button_border_radius',
                    'button_separator_three',
                    'button_padding'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'button_md_padding'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'button_sm_padding'
                ]
            ]
        ],
    ],
    'button_text_color'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Text Color', 'bizness' ),
        'description'       => esc_html__( 'Set button text color.', 'bizness' ),
        'section'           => 'general_button_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' ),
            'color_2'           => esc_html__( 'Hover', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '',
            'color_2'            => ''
        ],
        'priority'          => 10,
        'output'            => [
            [
                'choice'   => 'color_1',
                'element'  => '
                input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button
                            ',
                'property' => 'color',

            ],
            [
                'choice'   => 'color_2',
                'element'  => '
                            input[type="button"]:hover :not(.slick-arrow >*),
                            input[type="reset"]:hover,
                            .bizness-btn-primary:hover,
                            .button:hover
                            ',
                'property' => 'color',
            ]
        ]
    ],
    'button_background_color'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Background Color', 'bizness' ),
        'description'       => esc_html__( 'Set button background color.', 'bizness' ),
        'section'           => 'general_button_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' ),
            'color_2'           => esc_html__( 'Hover', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '',
            'color_2'            => ''
        ],
        'priority'          => 15,
        'output'            => [
            [
                'choice'   => 'color_1',
                'element'  => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button
                            ',
                'property' => 'background-color',
            ],
            [
                'choice'   => 'color_2',
                'element'  => '
                            input[type="button"]:hover :not(.slick-arrow >*),
                            input[type="reset"]:hover,
                            .bizness-btn-primary:hover,
                            .bizness-btn-primary.bizness-btn-transparent:hover,
                            .button:hover
                            ',
                'property' => 'background-color',
            ]
        ]
    ],
    'button_border_sep' => [
        'type'              => 'custom',
        'section'           => 'general_button_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Border', 'bizness' ) . '</h3>',
        'priority'          => 20
    ],
    'button_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Radius', 'bizness' ),
        'section'           => 'general_button_section',
        'priority'          => 20,
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 50,
            'suffix'            => 'px'
        ],
        'transport'         => 'auto',
        'priority'          => 20,
        'output'            => [
            [
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button,
                            button, input[type="button"], input[type="reset"], input[type="submit"]
                            ',
                'property'  => 'border-radius',
                'suffix'    => 'px'
            ],
        ],
    ],
    'button_separator_three' => [
        'type'              => 'custom',
        'section'           => 'general_button_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 30
    ],
    'button_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set button padding.', 'bizness' ),
        'section'           => 'general_button_section',
        'priority'          => 30,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
            'padding-left'   => '',
            'padding-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'    => esc_html__( 'Top', 'bizness' ),
                'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'   => esc_html__( 'Left', 'bizness' ),
                'padding-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
                'property'  => 'padding-top',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
        ],
    ],
    'button_md_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set button padding.', 'bizness' ),
        'section'           => 'general_button_section',
        'priority'          => 30,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
            'padding-left'   => '',
            'padding-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'    => esc_html__( 'Top', 'bizness' ),
                'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'   => esc_html__( 'Left', 'bizness' ),
                'padding-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query' => '@media (max-width: 768px)',
                'choice'    => 'padding-top',
                'property'  => 'padding-top',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'media_query' => '@media (max-width: 768px)',
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'media_query' => '@media (max-width: 768px)',
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'media_query' => '@media (max-width: 768px)',
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
        ],
    ],
    'button_sm_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set button padding.', 'bizness' ),
        'section'           => 'general_button_section',
        'priority'          => 30,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
            'padding-left'   => '',
            'padding-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'    => esc_html__( 'Top', 'bizness' ),
                'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'   => esc_html__( 'Left', 'bizness' ),
                'padding-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query' => '@media (max-width: 576px)',
                'choice'    => 'padding-top',
                'property'  => 'padding-top',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'media_query' => '@media (max-width: 576px)',
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'media_query' => '@media (max-width: 576px)',
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
            [
                'media_query' => '@media (max-width: 576px)',
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '
                            input[type="button"] :not(.slick-arrow >*),
                            input[type="reset"],
                            .bizness-btn-primary,
                            .button',
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}