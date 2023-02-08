<?php
/**
 * Add header Account element settings.
 *
 * @package Bizness
 */

$fields = [
    'header_social_network_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'header_social_element_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'header_social_network_setting_inherit',
                    'header_social_network_sep_3',
                    'header_social_network_sep_two',
                    'header_social_network_border_width',
                    'header_social_network_border_radius',
                    'header_social_network_padding',
                    'header_social_network_sep_4',
                    'header_social_network_container_padding',
                    'header_social_network_container_margin'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'header_social_network_sep_3',
                    'header_social_network_md_border_width',
                    'header_social_network_md_border_radius',
                    'header_social_network_md_padding',
                    'header_social_network_sep_4',
                    'header_social_network_container_md_padding',
                    'header_social_network_container_md_margin'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'header_social_network_sep_3',
                    'header_social_network_sm_border_width',
                    'header_social_network_sm_border_radius',
                    'header_social_network_sm_padding',
                    'header_social_network_sep_4',
                    'header_social_network_container_sm_padding',
                    'header_social_network_container_sm_margin'
                ]
            ]
        ],
    ],
    'header_social_network_setting_inherit' => [
        'type'              => 'custom',
        'section'           => 'header_social_element_section',
        'default'           => '<h3 data-type="section" data-id="social_network_section" class="customizer-focus" style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0;padding: 8px 12px;background: #fff;">' . esc_html__( 'Default Settings &raquo;', 'bizness' ) . '</h3>',
        'description'       => esc_html__( 'INFO:- Default settings inherit from social&raquo;social network. Set below settings to override default one.', 'bizness' ),
        'priority'          => 10
    ],
    'header_social_network_sep_3' => [
        'type'              => 'custom',
        'section'           => 'header_social_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTENT SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'header_social_network_sep_two' => [
        'type'              => 'custom',
        'section'           => 'header_social_element_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 10
    ],
    'header_social_network_border_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Width', 'bizness' ),
        'description'       => esc_html__( 'Set social network border width', 'bizness' ),
        'section'           => 'header_social_element_section',
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 20,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
	            'property'      => 'border-width',
                'element'       => '.site-header .header-social-inner li >*',
                'suffix'        => 'px'
            ]
        ],
    ],
    'header_social_network_md_border_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Width', 'bizness' ),
        'description'       => esc_html__( 'Set social network border width', 'bizness' ),
        'section'           => 'header_social_element_section',
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 20,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
	            'property'      => 'border-width',
                'element'       => '.site-header .header-social-inner li >*',
                'suffix'        => 'px'
            ]
        ],
    ],
    'header_social_network_sm_border_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Width', 'bizness' ),
        'description'       => esc_html__( 'Set social network border width', 'bizness' ),
        'section'           => 'header_social_element_section',
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 20,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
	            'property'      => 'border-width',
                'element'       => '.site-header .header-social-inner li >*',
                'suffix'        => 'px'
            ]
        ],
    ],
    'header_social_network_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set social network border radius', 'bizness' ),
        'section'           => 'header_social_element_section',
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 100,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
	            'property'      => 'border-radius',
                'element'       => '.site-header .header-social-inner li >*',
                'suffix'        => 'px'
            ]
        ],
    ],
    'header_social_network_md_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set social network border radius', 'bizness' ),
        'section'           => 'header_social_element_section',
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 100,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
	            'property'      => 'border-radius',
                'element'       => '.site-header .header-social-inner li >*',
                'suffix'        => 'px'
            ]
        ],
    ],
    'header_social_network_sm_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set social network border radius', 'bizness' ),
        'section'           => 'header_social_element_section',
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 100,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
	            'property'      => 'border-radius',
                'element'       => '.site-header .header-social-inner li >*',
                'suffix'        => 'px'
            ]
        ],
    ],
    'header_social_network_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set social network padding.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
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
                'element'   => '.site-header .header-social-inner li >*',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.site-header .header-social-inner li >*',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.site-header .header-social-inner li >*',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.site-header .header-social-inner li >*',
            ],
        ],
    ],
    'header_social_network_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set social network padding.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
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
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-top',
                'property'      => 'padding-top',
                'element'       => '.site-header .header-social-inner li >*',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-social-inner li >*',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-social-inner li >*',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-social-inner li >*',
            ],
        ],
    ],
    'header_social_network_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set social network padding.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
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
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-top',
                'property'      => 'padding-top',
                'element'       => '.site-header .header-social-inner li >*',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-social-inner li >*',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-social-inner li >*',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-social-inner li >*',
            ],
        ],
    ],
    'header_social_network_sep_4' => [
        'type'              => 'custom',
        'section'           => 'header_social_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'header_social_network_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set social network container padding.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
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
                'element'   => '.site-header .header-social-inner',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.site-header .header-social-inner',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.site-header .header-social-inner',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.site-header .header-social-inner',
            ],
        ],
    ],
    'header_social_network_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set social network container padding.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
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
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-top',
                'property'      => 'padding-top',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-social-inner',
            ],
        ],
    ],
    'header_social_network_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set social network container padding.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
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
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-top',
                'property'      => 'padding-top',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-social-inner',
            ],
        ],
    ],
    'header_social_network_container_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set social network container margin.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
        'default'     => [
            'margin-top'    => '',
            'margin-bottom' => '',
            'margin-left'   => '',
            'margin-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'margin-top'    => esc_html__( 'Top', 'bizness' ),
                'margin-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'margin-left'   => esc_html__( 'Left', 'bizness' ),
                'margin-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'margin-top',
                'property'  => 'margin-top',
                'element'   => '.site-header .header-social-inner',
            ],
            [
                'choice'    => 'margin-bottom',
                'property'  => 'margin-bottom',
                'element'   => '.site-header .header-social-inner',
            ],
            [
                'choice'    => 'margin-left',
                'property'  => 'margin-left',
                'element'   => '.site-header .header-social-inner',
            ],
            [
                'choice'    => 'margin-right',
                'property'  => 'margin-right',
                'element'   => '.site-header .header-social-inner',
            ],
        ],
    ],
    'header_social_network_container_md_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set social network container margin.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
        'default'     => [
            'margin-top'    => '',
            'margin-bottom' => '',
            'margin-left'   => '',
            'margin-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'margin-top'    => esc_html__( 'Top', 'bizness' ),
                'margin-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'margin-left'   => esc_html__( 'Left', 'bizness' ),
                'margin-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-top',
                'property'      => 'margin-top',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-header .header-social-inner',
            ],
        ],
    ],
    'header_social_network_container_sm_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set social network container margin.', 'bizness' ),
        'section'     => 'header_social_element_section',
        'priority'    => 10,
        'default'     => [
            'margin-top'    => '',
            'margin-bottom' => '',
            'margin-left'   => '',
            'margin-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'margin-top'    => esc_html__( 'Top', 'bizness' ),
                'margin-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'margin-left'   => esc_html__( 'Left', 'bizness' ),
                'margin-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-top',
                'property'      => 'margin-top',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-header .header-social-inner',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-header .header-social-inner',
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}