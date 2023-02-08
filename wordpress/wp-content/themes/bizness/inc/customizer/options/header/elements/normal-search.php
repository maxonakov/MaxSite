<?php
/**
 * Add header normal search element settings.
 *
 * @package Bizness
 */

$fields = [
    'header_search_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'header_search_element_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'header_search_sep_1',
                    'header_search_input_font_color',
                    'header_search_input_bg_color',
                    'header_search_sep_2',
                    'header_search_button_border_radius',
                    'header_search_sep_3',
                    'header_search_container_padding',
                    'header_search_container_margin'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'header_search_sep_3',
                    'header_search_container_md_padding',
                    'header_search_container_md_margin'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'header_search_sep_3',
                    'header_search_container_sm_padding',
                    'header_search_container_sm_margin'
                ]
            ]
        ],
    ],
    'header_search_sep_1' => [
        'type'              => 'custom',
        'section'           => 'header_search_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;padding:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'INPUT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'header_search_input_font_color' => [
        'type'              => 'color',
        'label'             => esc_html__( 'Color', 'bizness' ),
        'section'           => 'header_search_element_section',
        'choices'           => [
			'alpha'         => true,
		],
        'default'           => '',
        'priority'          => 10,
        'transport'         => 'auto',
        'priority'          => 10,
        'output'            => [
            [
                'element'   => '.site-header .header-search-wrap input.search-field,.site-header .header-search-wrap input.search-field::placeholder',
                'property'  => 'color',
            ],
        ],
        
    ],
    'header_search_input_bg_color' => [
        'type'              => 'color',
        'label'             => esc_html__( 'Background', 'bizness' ),
        'section'           => 'header_search_element_section',
        'choices'           => [
			'alpha'         => true,
		],
        'default'           => '',
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'element'   => '.site-header .header-search-wrap input.search-field',
                'property'  => 'background-color',
            ],
        ],
        
    ],
    'header_search_sep_2' => [
        'type'              => 'custom',
        'section'           => 'header_search_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;padding:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'BUTTON', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'header_search_button_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'section'           => 'header_search_element_section',
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
	            'property'      => 'border-radius',
                'element'       => '.site-header .header-search-wrap .search-form input.search-submit',
                'suffix'        => 'px'
            ]
        ],
    ],
    'header_search_sep_3' => [
        'type'              => 'custom',
        'section'           => 'header_search_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;padding:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'header_search_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set search container padding.', 'bizness' ),
        'section'     => 'header_search_element_section',
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
                'element'   => '.site-header .header-search-wrap',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.site-header .header-search-wrap',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.site-header .header-search-wrap',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.site-header .header-search-wrap',
            ],
        ],
    ],
    'header_search_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set search container padding.', 'bizness' ),
        'section'     => 'header_search_element_section',
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
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-search-wrap',
            ],
        ],
    ],
    'header_search_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set search container padding.', 'bizness' ),
        'section'     => 'header_search_element_section',
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
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-search-wrap',
            ],
        ],
    ],
    'header_search_container_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set search container margin.', 'bizness' ),
        'section'     => 'header_search_element_section',
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
                'element'   => '.site-header .header-search-wrap',
            ],
            [
                'choice'    => 'margin-bottom',
                'property'  => 'margin-bottom',
                'element'   => '.site-header .header-search-wrap',
            ],
            [
                'choice'    => 'margin-left',
                'property'  => 'margin-left',
                'element'   => '.site-header .header-search-wrap',
            ],
            [
                'choice'    => 'margin-right',
                'property'  => 'margin-right',
                'element'   => '.site-header .header-search-wrap',
            ],
        ],
    ],
    'header_search_container_md_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set search container margin.', 'bizness' ),
        'section'     => 'header_search_element_section',
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
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-header .header-search-wrap',
            ],
        ],
    ],
    'header_search_container_sm_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set search container margin.', 'bizness' ),
        'section'     => 'header_search_element_section',
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
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-header .header-search-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-header .header-search-wrap',
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}