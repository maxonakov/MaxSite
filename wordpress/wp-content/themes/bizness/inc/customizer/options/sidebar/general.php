<?php
/**
 * Add Customizer -> Sidebar -> General settings.
 *
 * @package Bizness
 */

$fields = [
    'sidebar_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'sidebar_general_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'sidebar_sticky',
                    'sidebar_width',
                    'sidebar_sep_1',
                    'sidebar_background',
                    'sidebar_border',
                    'sidebar_box_shadow',
                    'sidebar_padding',
                    'sidebar_margin'

                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'sidebar_md_width',
                    'sidebar_md_gap',
                    'sidebar_md_padding',
                    'sidebar_md_margin'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'sidebar_sm_width',
                    'sidebar_sm_gap',
                    'sidebar_sm_padding',
                    'sidebar_sm_margin'
                ]
            ]
        ],
    ],
    'sidebar_sticky'  => [
        'type'              => 'toggle',
        'label'             => esc_html__( 'Sticky', 'bizness' ),
        'description'       => esc_html__( 'Toggle to enable/disable sticky sidebar.', 'bizness' ),
        'section'           => 'sidebar_general_section',
        'default'           => '',
        'priority'          => 10,
    ],
    'sidebar_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Width', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar width.', 'bizness' ),
        'section'           => 'sidebar_general_section',
        'default'           => 15,
        'choices'           => [
            'min'               => 0,
            'max'               => 100,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
    ],
    'sidebar_md_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Width', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar width for the tablet device only.', 'bizness' ),
        'section'           => 'sidebar_general_section',
        'default'           => 15,
        'choices'           => [
            'min'               => 0,
            'max'               => 100,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
    ],
    'sidebar_sm_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Width', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar width for the mobile device only.', 'bizness' ),
        'section'           => 'sidebar_general_section',
        'default'           => 15,
        'choices'           => [
            'min'               => 0,
            'max'               => 100,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
    ],
    'sidebar_sep_1' => [
        'type'              => 'custom',
        'section'           => 'sidebar_general_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 10
    ],
    'sidebar_background'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Background Color', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar background color.', 'bizness' ),
        'section'           => 'sidebar_general_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' ),
            'color_2'           => esc_html__( 'Hover', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '',
            'color_2'            => ''
        ],
        'priority'          => 10
    ],
    'sidebar_border'  => [
        'type'              => 'border',
        'label'             => esc_html__( 'Border', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar border.', 'bizness' ),
        'section'           => 'sidebar_general_section',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'priority'          => 10
    ],
    'sidebar_box_shadow'  => [
        'type'              => 'box-shadow',
        'label'             => esc_html__( 'Box Shadow', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar box shadow.', 'bizness' ),
        'section'           => 'sidebar_general_section',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'priority'          => 10
    ],
    'sidebar_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set sidebar area padding.', 'bizness' ),
        'section'     => 'sidebar_general_section',
        'default'     => [
            'padding-top'    => '1em',
            'padding-bottom' => '10rem',
            'padding-left'   => '1vh',
            'padding-right'  => '10px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
    ],
    'sidebar_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set sidebar area padding for tablet device only', 'bizness' ),
        'section'     => 'sidebar_general_section',
        'default'     => [
            'padding-top'    => '1em',
            'padding-bottom' => '10rem',
            'padding-left'   => '1vh',
            'padding-right'  => '10px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
    ],
    'sidebar_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set sidebar area padding for mobile device only', 'bizness' ),
        'section'     => 'sidebar_general_section',
        'default'     => [
            'padding-top'    => '1em',
            'padding-bottom' => '10rem',
            'padding-left'   => '1vh',
            'padding-right'  => '10px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
    ],
    'sidebar_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set sidebar margin.', 'bizness' ),
        'section'     => 'sidebar_general_section',
        'default'     => [
            'padding-top'    => '1em',
            'padding-bottom' => '10rem',
            'padding-left'   => '1vh',
            'padding-right'  => '10px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
    ],
    'sidebar_md_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set sidebar margin for tablet device only', 'bizness' ),
        'section'     => 'sidebar_general_section',
        'default'     => [
            'padding-top'    => '1em',
            'padding-bottom' => '10rem',
            'padding-left'   => '1vh',
            'padding-right'  => '10px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
    ],
    'sidebar_sm_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set sidebar margin for mobile device only', 'bizness' ),
        'section'     => 'sidebar_general_section',
        'default'     => [
            'padding-top'    => '1em',
            'padding-bottom' => '10rem',
            'padding-left'   => '1vh',
            'padding-right'  => '10px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}