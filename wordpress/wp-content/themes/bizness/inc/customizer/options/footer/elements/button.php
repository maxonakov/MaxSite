<?php
/**
 * Add footer button element settings.
 *
 * @package Bizness
 */

$fields = [
    'footer_button_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'footer_button_element_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'footer_button_setting_inherit',
                    'footer_button_sep_1',
                    'footer_button_text',
                    'footer_button_url',
                    'footer_button_link_nofollow',
                    'footer_button_url_open',
                    'footer_button_sep_three',
                    'footer_button_colors',
                    'footer_button_bg_colors',
                    'footer_button_border_radius',
                    'footer_button_sep_2',
                    'footer_button_container_padding',
                    'footer_button_container_margin'  
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'footer_button_sep_1',
                    'footer_button_md_border_radius',
                    'footer_button_sep_2',
                    'footer_button_container_md_padding',
                    'footer_button_container_md_margin'

                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'footer_button_sep_1',
                    'footer_button_sm_border_radius',
                    'footer_button_sep_2',
                    'footer_button_container_sm_padding',
                    'footer_button_container_sm_margin'
                ]
            ]
        ],
    ],
    'footer_button_setting_inherit' => [
        'type'              => 'custom',
        'section'           => 'footer_button_element_section',
        'default'           => '<h3 data-type="section" data-id="general_button_section" class="customizer-focus" style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0;padding: 8px 12px;background: #fff;">' . esc_html__( 'Default Settings &raquo;', 'bizness' ) . '</h3>',
        'description'       => esc_html__( 'INFO:- Default settings inherit from global&raquo;button. Set below settings to override default one.', 'bizness' ),
        'priority'          => 10
    ],
    'footer_button_sep_1' => [
        'type'              => 'custom',
        'section'           => 'footer_button_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'Content', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'footer_button_text' => [
        'type'              => 'text',
        'label'             => esc_html__( 'Button Text', 'bizness' ),
        'section'           => 'footer_button_element_section',
        'priority'          => 10,
        'default'           => esc_html__( 'Button', 'bizness' ),
        'transport'     =>  'postMessage',
        'js_vars'            => [
            [
                'element'       => '.site-footer .site-footer-wrap .footer-button-wrap a span',
                'function'      => 'html'
            ]
        ]
    ],
    'footer_button_url' => [
        'type'              => 'link',
        'label'             => esc_html__( 'Button URL', 'bizness' ),
        'section'           => 'footer_button_element_section',
        'priority'          => 10,
        'transport'         => 'auto',
        'default'           => '#',
        'partial_refresh'    => [
            'footer_button_url' => [
                'selector'        => '.site-footer',
                'render_callback' => 'bizness_footer_main',
            ],
        ],
    ],
    'footer_button_url_open' => [
        'type'              => 'radio',
        'label'             => esc_html__( 'Link Open', 'bizness' ),
        'section'           => 'footer_button_element_section',
        'default'           => '_blank',
        'priority'          => 10,
        'choices'           => [
            '__self'            => esc_html__( 'Self Window Tab', 'bizness' ),
            '_blank'           => esc_html__( 'New Window Tab', 'bizness' )
        ],
        'partial_refresh'    => [
            'footer_button_url_open' => [
                'selector'        => '.site-footer',
                'render_callback' => 'bizness_footer_main',
            ],
        ],
    ],
    'footer_button_link_nofollow' => [
        'type'              => 'toggle',
        'label'             => esc_html__( 'Set links to nofollow', 'bizness' ),
        'section'           => 'footer_button_element_section',
        'default'           => '1',
        'priority'          => 10,
        'partial_refresh'    => [
            'footer_button_link_nofollow' => [
                'selector'        => '.site-footer',
                'render_callback' => 'bizness_footer_main',
            ],
        ],
    ],
    'footer_button_sep_three' => [
        'type'              => 'custom',
        'section'           => 'footer_button_element_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 10
    ],
    'footer_button_colors'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Font Colors', 'bizness' ),
        'description'       => esc_html__( 'Set button text and icon normal and hover colors.', 'bizness' ),
        'section'           => 'footer_button_element_section',
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
                'choice'    => 'color_1',
                'element'   => '.site-footer .footer-button-wrap .footer-button',
                'property'  => 'color',
            ],
            [
                'choice'    => 'color_2',
                'element'   => '.site-footer .footer-button-wrap .footer-button:hover',
                'property'  => 'color',
            ],
        ],
    ],
    'footer_button_bg_colors'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Background Colors', 'bizness' ),
        'description'       => esc_html__( 'Set button background normal and hover colors.', 'bizness' ),
        'section'           => 'footer_button_element_section',
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
                'choice'    => 'color_1',
                'element'   => '.site-footer .footer-button-wrap .footer-button',
                'property'  => 'background',
            ],
            [
                'choice'    => 'color_2',
                'element'   => '.site-footer .footer-button-wrap .footer-button:hover',
                'property'  => 'background',
            ],
        ],
    ],
    'footer_button_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set button border radius', 'bizness' ),
        'section'           => 'footer_button_element_section',
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
                'element'       => '.site-footer .footer-button-wrap .footer-button',
                'suffix'        => 'px'
            ]
        ],
    ],
    'footer_button_md_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set button border radius', 'bizness' ),
        'section'           => 'footer_button_element_section',
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
                'element'       => '.site-footer .footer-button-wrap .footer-button',
                'suffix'        => 'px'
            ]
        ],
    ],
    'footer_button_sm_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set button border radius', 'bizness' ),
        'section'           => 'footer_button_element_section',
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
                'element'       => '.site-footer .footer-button-wrap .footer-button',
                'suffix'        => 'px'
            ]
        ],
    ],
    'footer_button_sep_2' => [
        'type'              => 'custom',
        'section'           => 'footer_button_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'footer_button_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set button container padding.', 'bizness' ),
        'section'     => 'footer_button_element_section',
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
                'element'   => '.site-footer .footer-button-wrap',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.site-footer .footer-button-wrap',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.site-footer .footer-button-wrap',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.site-footer .footer-button-wrap',
            ],
        ],
    ],
    'footer_button_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set button container padding.', 'bizness' ),
        'section'     => 'footer_button_element_section',
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
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-footer .footer-button-wrap',
            ],
        ],
    ],
    'footer_button_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set button container padding.', 'bizness' ),
        'section'     => 'footer_button_element_section',
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
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-footer .footer-button-wrap',
            ],
        ],
    ],
    'footer_button_container_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set button container margin.', 'bizness' ),
        'section'     => 'footer_button_element_section',
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
                'element'   => '.site-footer .footer-button-wrap',
            ],
            [
                'choice'    => 'margin-bottom',
                'property'  => 'margin-bottom',
                'element'   => '.site-footer .footer-button-wrap',
            ],
            [
                'choice'    => 'margin-left',
                'property'  => 'margin-left',
                'element'   => '.site-footer .footer-button-wrap',
            ],
            [
                'choice'    => 'margin-right',
                'property'  => 'margin-right',
                'element'   => '.site-footer .footer-button-wrap',
            ],
        ],
    ],
    'footer_button_container_md_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set button container margin.', 'bizness' ),
        'section'     => 'footer_button_element_section',
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
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-footer .footer-button-wrap',
            ],
        ],
    ],
    'footer_button_container_sm_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set button container margin.', 'bizness' ),
        'section'     => 'footer_button_element_section',
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
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-footer .footer-button-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-footer .footer-button-wrap',
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}