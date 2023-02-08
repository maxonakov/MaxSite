<?php
/**
 * Add Customizer -> Sidebar -> Widget settings.
 *
 * @package Bizness
 */

$fields = [
    'sidebar_widget_fields' => [
        'type'              => 'group-field',
        'section'           => 'sidebar_widget_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'sidebar_widget_heading_sep_1',
                    'sidebar_widget_heading_color',
                    'sidebar_widget_heading_typography',

                    'sidebar_widget_content_sep_1',
                    'sidebar_widget_content_color',
                    'sidebar_widget_content_link_color',
                    'sidebar_widget_content_typography',

                    'sidebar_widget_sep_1',
                    'sidebar_widget_background',
                    'sidebar_widget_border',
                    'sidebar_widget_box_shadow',
                    'sidebar_widget_padding',
                    'sidebar_widget_margin',




                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'sidebar_widget_heading_sep_2',
                    'sidebar_widget_heading_md_font_size',

                    'sidebar_widget_content_sep_2',
                    'sidebar_widget_content_md_font_size',

                    'sidebar_widget_sep_2',
                    'sidebar_widget_md_padding',
                    'sidebar_widget_md_margin',
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'sidebar_widget_heading_sep_3',
                    'sidebar_widget_heading_sm_font_size',

                    'sidebar_widget_content_sep_3',
                    'sidebar_widget_content_sm_font_size',

                    'sidebar_widget_sep_3',
                    'sidebar_widget_sm_padding',
                    'sidebar_widget_sm_margin',
                ]
            ]
        ],
    ],
    'sidebar_widget_heading_sep_1' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'HEADING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_heading_sep_2' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'HEADING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_heading_sep_3' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'HEADING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_heading_color'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Color', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget heading text color.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' )
        ],
        'default'           => [
            'color_1'            => ''
        ],
        'priority'          => 10
    ],
    'sidebar_widget_heading_typography' => [
        'type'              => 'typography',
        'label'             => esc_html__( 'Typography', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget heading typography properties.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => 'Raleway',
            'variant'           => 'regular',
            'font-size'         => '14px',
            'font-style'        => 'normal',
            'text-transform'    => 'none'
        ],
        'priority'          => 10,
    ],
    'sidebar_widget_heading_md_font_size' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Font Size', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget heading font size for the tablet device only.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'default'           => 12,
        'choices'           => [
            'min'               => 0,
            'max'               => 50,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
    ],
    'sidebar_widget_heading_sm_font_size' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Font Size', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget heading font size for the mobile device only.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'default'           => 10,
        'choices'           => [
            'min'               => 0,
            'max'               => 50,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
    ],

    'sidebar_widget_content_sep_1' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_content_sep_2' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_content_sep_3' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_content_color'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Color', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget content text color.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' )
        ],
        'default'           => [
            'color_1'            => ''
        ],
        'priority'          => 10
    ],
    'sidebar_widget_content_link_color'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Link Color', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget content link color.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
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
    'sidebar_widget_content_typography' => [
        'type'              => 'typography',
        'label'             => esc_html__( 'Typography', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget content typography properties.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => 'Raleway',
            'variant'           => 'regular',
            'font-size'         => '14px',
            'font-style'        => 'normal',
            'text-transform'    => 'none'
        ],
        'priority'          => 10,
    ],
    'sidebar_widget_content_md_font_size' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Font Size', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget content font size for the tablet device only.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'default'           => 12,
        'choices'           => [
            'min'               => 0,
            'max'               => 50,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
    ],
    'sidebar_widget_content_sm_font_size' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Font Size', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar widget content font size for the mobile device only.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'default'           => 10,
        'choices'           => [
            'min'               => 0,
            'max'               => 50,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
    ],



    'sidebar_widget_sep_1' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'WIDGET', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_sep_2' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'WIDGET', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_sep_3' => [
        'type'              => 'custom',
        'section'           => 'sidebar_widget_section',
        'default'           => '<h3 style="margin:0 -10px; padding: 8px 0 8px 10px; background: #fff">' . esc_html__( 'WIDGET', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'sidebar_widget_background'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Background Color', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar each widget background color.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
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
    'sidebar_widget_border'  => [
        'type'              => 'border',
        'label'             => esc_html__( 'Border', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar each widget border.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'priority'          => 10
    ],
    'sidebar_widget_box_shadow'  => [
        'type'              => 'box-shadow',
        'label'             => esc_html__( 'Box Shadow', 'bizness' ),
        'description'       => esc_html__( 'Set sidebar each widget box shadow.', 'bizness' ),
        'section'           => 'sidebar_widget_section',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'priority'          => 10
    ],
    'sidebar_widget_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set sidebar sidebar widget padding.', 'bizness' ),
        'section'     => 'sidebar_widget_section',
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
    'sidebar_widget_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set sidebar each widget padding for tablet device only', 'bizness' ),
        'section'     => 'sidebar_widget_section',
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
    'sidebar_widget_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set sidebar each widget padding for mobile device only', 'bizness' ),
        'section'     => 'sidebar_widget_section',
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
    'sidebar_widget_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set sidebar each widget margin.', 'bizness' ),
        'section'     => 'sidebar_widget_section',
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
    'sidebar_widget_md_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set sidebar each widet margin for tablet device only', 'bizness' ),
        'section'     => 'sidebar_widget_section',
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
    'sidebar_widget_sm_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set sidebar each widget margin for mobile device only', 'bizness' ),
        'section'     => 'sidebar_widget_section',
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




];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}