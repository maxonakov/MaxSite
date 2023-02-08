<?php
/**
 * Add Customizer -> Header -> Elements -> Site Identify settings.
 *
 * @package Bizness
 */

$fields = [
    'header_title_tagline_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'header_site_identify_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'header_site_identity_default_settings',
                    'header_site_logo_sep_note',
                    'header_site_logo_enable',
                    'header_site_title_sep_note',
                    'header_site_title_enable',
                    'header_site_title_color',
                    'header_site_title_hover_color',
                    'header_site_title_typography',
                    'header_site_tagline_sep_note',
                    'header_site_tagline_enable',
                    'header_site_tagline_color',
                    'header_site_tagline_typography',
                    'header_site_container_sep_note',
                    'header_site_container_padding',
                    'header_site_container_margin'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'header_site_logo_sep_note',
                    'header_site_title_sep_note',
                    'header_site_title_md_typography',
                    'header_site_tagline_sep_note',
                    'header_site_tagline_md_typography',
                    'header_site_container_sep_note',
                    'header_site_container_md_padding',
                    'header_site_container_md_margin'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'header_site_logo_sep_note',
                    'header_site_title_sep_note',
                    'header_site_title_sm_typography',
                    'header_site_tagline_sep_note',
                    'header_site_tagline_sm_typography',
                    'header_site_container_sep_note',
                    'header_site_container_sm_padding',
                    'header_site_container_sm_margin'
                ]
            ]
        ],
    ],
    'header_site_identity_default_settings' => [
        'type'              => 'custom',
        'section'           => 'header_site_identify_section',
        'default'           => '<h3 data-type="section" data-id="title_tagline" class="customizer-focus" style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0;padding: 8px 12px;background: #fff;">' . esc_html__( 'Default Settings &raquo;', 'bizness' ) . '</h3>',
        'description'       => esc_html__( 'INFO:- To set site logo, title, tagline and site icon go to Customizer&raquo;Site Identify section.', 'bizness' ),
        'priority'          => 10
    ],
    'header_site_logo_sep_note' => [
        'type'              => 'custom',
        'section'           => 'header_site_identify_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'Site Logo', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'header_site_logo_enable' => [
        'type'          => 'toggle',
        'default'       => '1',
        'label'         => esc_html__( 'Enable', 'bizness' ),
        'description'   => esc_html__( 'Toggle to enable/disable site logo.', 'bizness' ),
        'section'       => 'header_site_identify_section',
        'priority'      => 10,
        'partial_refresh'    => [
            'header_site_logo_enable' => [
                'selector'        => '.site-header',
                'render_callback' => 'bizness_header_main',
            ],
        ],
    ],
    'header_site_title_sep_note' => [
        'type'              => 'custom',
        'section'           => 'header_site_identify_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'Site Title', 'bizness' ) . '</h3>',
        'priority'          => 45
    ],
    'header_site_title_enable' => [
        'type'          => 'toggle',
        'default'       => '1',
        'label'         => esc_html__( 'Enable', 'bizness' ),
        'description'   => esc_html__( 'Toggle to enable/disable site title.', 'bizness' ),
        'section'           => 'header_site_identify_section',
        'priority'      => 45,
        'partial_refresh'    => [
            'header_site_title_enable' => [
                'selector'        => '.site-header',
                'render_callback' => 'bizness_header_main',
            ],
        ],
    ],
    'header_site_title_color'  => [
        'type'              => 'color',
        'label'             => esc_html__( 'Title Color', 'bizness' ),
        'description'       => esc_html__( 'Set site title normal colors', 'bizness' ),
        'section'           => 'header_site_identify_section',
        'default'           => '',
        'choices'           => [
            'alpha'         => true,
        ],
        'priority'          => 45,
        'transport'         => 'auto',
        'output'            => [
            [
                'element'   => '.site-header .header-site-identify .site-title,.site-header .header-site-identify .site-title a',
                'property' => 'color',
            ]
        ]
    ],
    'header_site_title_hover_color'  => [
        'type'              => 'color',
        'label'             => esc_html__( 'Title Hover Color', 'bizness' ),
        'description'       => esc_html__( 'Set site title hover colors', 'bizness' ),
        'section'           => 'header_site_identify_section',
        'default'           => '',
        'choices'           => [
            'alpha'         => true,
        ],
        'priority'          => 45,
        'transport'         => 'auto',
        'output'            => [
            [
                'element'   => '.site-header .header-site-identify .site-title a:hover',
                'property' => 'color',
            ]
        ]
    ],
    'header_site_title_typography' => [
        'type'              => 'typography',
        'section'           => 'header_site_identify_section',
        'label'             => esc_html__( 'Title Typography', 'bizness' ),
        'description'       => esc_html__( 'Set site title typography properties.', 'bizness' ),
        'priority'          => 45,
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => '',
            'variant'           => '',
            'font-style'        => '',
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
            'text-transform'    => 'none',
        ],
        'output'            => [
            [
                'element'       => '.site-header .header-site-identify .site-title'
            ],
        ]
    ],
    'header_site_title_md_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'header_site_identify_section',
        'label'             => esc_html__( 'Title Typography', 'bizness' ),
        'description'       => esc_html__( 'Set site title typography properties.', 'bizness' ),
        'default'           => [
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
        ],
        'choices'           => [
            'labels'            => [
                'font-size'         => esc_html__( 'Font Size', 'bizness' ),
                'line-height'       => esc_html__( 'Line Height', 'bizness' ),
                'letter-spacing'    => esc_html__( 'Letter Spacing', 'bizness' ),
            ],
        ],
        'priority'          => 45,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.site-header .header-site-identify .site-title'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.site-header .header-site-identify .site-title'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.site-header .header-site-identify .site-title'
            ],
        ],
    ],
    'header_site_title_sm_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'header_site_identify_section',
        'label'             => esc_html__( 'Title Typography', 'bizness' ),
        'description'       => esc_html__( 'Set site title typography properties.', 'bizness' ),
        'default'           => [
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
        ],
        'choices'           => [
            'labels'            => [
                'font-size'         => esc_html__( 'Font Size', 'bizness' ),
                'line-height'       => esc_html__( 'Line Height', 'bizness' ),
                'letter-spacing'    => esc_html__( 'Letter Spacing', 'bizness' ),
            ],
        ],
        'priority'          => 45,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.site-header .header-site-identify .site-title'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.site-header .header-site-identify .site-title'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.site-header .header-site-identify .site-title'
            ],
        ],
    ],
    'header_site_tagline_sep_note' => [
        'type'              => 'custom',
        'section'           => 'header_site_identify_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'Site Tagline', 'bizness' ) . '</h3>',
        'priority'          => 50
    ],
    'header_site_tagline_enable' => [
        'type'          => 'toggle',
        'default'       => '1',
        'label'         => esc_html__( 'Enable', 'bizness' ),
        'description'   => esc_html__( 'Toggle to enable/disable site tagline.', 'bizness' ),
        'section'       => 'header_site_identify_section',
        'priority'      => 50,
        'partial_refresh'    => [
            'header_site_tagline_enable' => [
                'selector'        => '.site-header',
                'render_callback' => 'bizness_header_main',
            ],
        ],
    ],
    'header_site_tagline_color'  => [
        'type'              => 'color',
        'label'             => esc_html__( 'Tagline Color', 'bizness' ),
        'description'       => esc_html__( 'Set site tagline color', 'bizness' ),
        'section'           => 'header_site_identify_section',
        'default'           => '',
        'priority'          => 50,
        'transport'         => 'auto',
        'choices'           => [
			'alpha'         => true,
		],
        'output'            => [
            [
                'element'  => '.site-header .header-site-identify .site-description',
                'property' => 'color',
            ]
        ]
    ],
    'header_site_tagline_typography' => [
        'type'              => 'typography',
        'section'           => 'header_site_identify_section',
        'label'             => esc_html__( 'Tagline Typography', 'bizness' ),
        'description'       => esc_html__( 'Set site tagline typography properties.', 'bizness' ),
        'priority'          => 50,
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => '',
            'variant'           => '',
            'font-style'        => '',
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
            'text-transform'    => 'none',
        ],
        'output'            => [
            [
                'element'       => '.site-header .header-site-identify .site-description'
            ],
        ]
    ],
    'header_site_tagline_md_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'header_site_identify_section',
        'label'             => esc_html__( 'Tagline Typography', 'bizness' ),
        'description'       => esc_html__( 'Set site tagline typography properties.', 'bizness' ),
        'default'           => [
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
        ],
        'choices'           => [
            'labels'            => [
                'font-size'         => esc_html__( 'Font Size', 'bizness' ),
                'line-height'       => esc_html__( 'Line Height', 'bizness' ),
                'letter-spacing'    => esc_html__( 'Letter Spacing', 'bizness' ),
            ],
        ],
        'priority'          => 50,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.site-header .header-site-identify .site-description'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.site-header .header-site-identify .site-description'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.site-header .header-site-identify .site-description'
            ],
        ],
    ],
    'header_site_tagline_sm_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'header_site_identify_section',
        'label'             => esc_html__( 'Tagline Typography', 'bizness' ),
        'description'       => esc_html__( 'Set site tagline typography properties.', 'bizness' ),
        'default'           => [
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
        ],
        'choices'           => [
            'labels'            => [
                'font-size'         => esc_html__( 'Font Size', 'bizness' ),
                'line-height'       => esc_html__( 'Line Height', 'bizness' ),
                'letter-spacing'    => esc_html__( 'Letter Spacing', 'bizness' ),
            ],
        ],
        'priority'          => 50,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.site-header .header-site-identify .site-description'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.site-header .header-site-identify .site-description'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.site-header .header-site-identify .site-description'
            ],
        ],
    ],
    'header_site_container_sep_note' => [
        'type'              => 'custom',
        'section'           => 'header_site_identify_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 55
    ],
    'header_site_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set site identify container padding..', 'bizness' ),
        'section'     => 'header_site_identify_section',
        'priority'    => 55,
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
                'element'   => '.site-header .header-site-identify',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.site-header .header-site-identify',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.site-header .header-site-identify',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.site-header .header-site-identify',
            ],
        ],
    ],
    'header_site_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set site identify container padding..', 'bizness' ),
        'section'     => 'header_site_identify_section',
        'priority'    => 55,
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
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-site-identify',
            ],
        ],
    ],
    'header_site_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set site identify container padding..', 'bizness' ),
        'section'     => 'header_site_identify_section',
        'priority'    => 55,
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
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-header .header-site-identify',
            ],
        ],
    ],
    'header_site_container_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set site identify container margin..', 'bizness' ),
        'section'     => 'header_site_identify_section',
        'priority'    => 55,
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
                'element'   => '.site-header .header-site-identify',
            ],
            [
                'choice'    => 'margin-bottom',
                'property'  => 'margin-bottom',
                'element'   => '.site-header .header-site-identify',
            ],
            [
                'choice'    => 'margin-left',
                'property'  => 'margin-left',
                'element'   => '.site-header .header-site-identify',
            ],
            [
                'choice'    => 'margin-right',
                'property'  => 'margin-right',
                'element'   => '.site-header .header-site-identify',
            ],
        ],
    ],
    'header_site_container_md_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set site identify container margin..', 'bizness' ),
        'section'     => 'header_site_identify_section',
        'priority'    => 55,
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
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-header .header-site-identify',
            ],
        ],
    ],
    'header_site_container_sm_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set site identify container margin..', 'bizness' ),
        'section'     => 'header_site_identify_section',
        'priority'    => 55,
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
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-header .header-site-identify',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-header .header-site-identify',
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}