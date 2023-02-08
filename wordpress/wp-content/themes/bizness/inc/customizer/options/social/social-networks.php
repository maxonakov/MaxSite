<?php
/**
 * Add Customizer -> Social -> Social networks settings.
 *
 * @package Bizness
 */

$fields = [
    'social_network_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'social_network_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'social_network_lists',
                    'social_network_link_open',
                    'social_network_sep_1',
                    'social_network_color',
                    'social_network_background',
                    'social_network_border_sep',
                    'social_network_border_width',
                    'social_network_border_style',
                    'social_network_border_color',
                    'social_network_border_radius',
                    'social_network_sep_2',
                    'social_network_item_padding'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'social_network_md_item_padding'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'social_network_sm_item_padding'
                ]
            ]
        ],
    ],
    'social_network_lists' => [
        'type'              => 'repeater',
        'label'             => esc_html__( 'Social Network', 'bizness' ),
        'description'       => esc_html__( 'It allow you to add new social network and re-arrange their order by sorting them.', 'bizness' ),
        'section'           => 'social_network_section',
        'priority'          => 5,
        'row_label'         => [
            'type'              => 'field',
            'value'             => esc_html__( 'Social Network', 'bizness' ),
            'field'             => 'social_type',
        ],
        'button_label'      => esc_html__('Add Social Network', 'bizness' ),
        'default'           => [
            [
                'social_type'   => 'fa-facebook',
                'social_link'   => '#',
                'social_icon'   => '',
                'social_label'  => '',
            ],
            [
                'social_type'   => 'fa-twitter',
                'social_link'   => '#',
                'social_icon'   => '',
                'social_label'  => '',
            ],
            [
                'social_type'   => 'fa-instagram',
                'social_link'   => '#',
                'social_icon'   => '',
                'social_label'  => '',
            ]
        ],
        'fields'            => [
            'social_type'       => [
                'type'              => 'select',
                'label'             => esc_html__( 'Select Network', 'bizness' ),
                'default'           => 'fa-facebook',
                'choices'           => bizness_social_network_list(),
            ],
            'social_link'          => [
                'type'              => 'text',
                'label'             => esc_html__( 'URL', 'bizness' ),
                'default'           => '#',
            ],
            'social_icon'         => [
                'type'              => 'text',
                'label'             => esc_html__( 'Icon', 'bizness' ),
                'description'       => sprintf( __( "To replace the default icon, enter full %s icon class. For example:- fab fa-facebook","bizness" ), "<a href='https://fontawesome.com/v5.15/icons?d=gallery&p=2&m=free' target='_blank'><strong>" . __("Font Awesome", "bizness") . "</strong> &raquo;</a>" ),
                'default'           => '',
            ],
            'social_label'         => [
                'type'              => 'text',
                'label'             => esc_html__( 'Label', 'bizness' ),
                'description'       => esc_html__( 'Enter text to replace default label text.', 'bizness' ),
                'default'           => '',
            ]
        ],
        'partial_refresh'    => [
            'social_network_lists' => [
                'selector'        => '.site-header',
                'render_callback' => 'bizness_header_main',
            ],
        ]
    ],
    'social_network_link_open' => [
        'type'              => 'radio',
        'label'             => esc_html__( 'Link Open', 'bizness' ),
        'section'           => 'social_network_section',
        'default'           => '_self',
        'choices'           => [
            '_self'             => esc_html__( 'Self Window', 'bizness' ),
            '_blank'            => esc_html__( 'New Window', 'bizness' )
        ],
        'priority'          => 10,
        'partial_refresh'    => [
            'social_network_link_open' => [
                'selector'        => '.site-header',
                'render_callback' => 'bizness_header_main',
            ],
        ],
    ],
    'social_network_sep_1' => [
        'type'              => 'custom',
        'section'           => 'social_network_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 10
    ],
    'social_network_color'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Color', 'bizness' ),
        'description'       => esc_html__( 'Set social network icon and text color.', 'bizness' ),
        'section'           => 'social_network_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' ),
            'color_2'           => esc_html__( 'Hover', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '',
            'color_2'            => ''
        ],
        'alpha'             => true,
        'priority'          => 10,
        'output'            => [
            [
                'choice'   => 'color_1',
                'element'  => '.social-icons li >*',
                'property' => 'color',
            ],
            [
                'choice'   => 'color_2',
                'element'  => '.social-icons li:hover a',
                'property' => 'color',
            ]
        ]
    ],
    'social_network_background'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Background', 'bizness' ),
        'description'       => esc_html__( 'Set social network background color.', 'bizness' ),
        'section'           => 'social_network_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' ),
            'color_2'           => esc_html__( 'Hover', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '',
            'color_2'            => ''
        ],
        'alpha'             => true,
        'priority'          => 10,
        'output'            => [
            [
                'choice'   => 'color_1',
                'element'  => '.social-icons li >*',
                'property' => 'background',
            ],
            [
                'choice'   => 'color_2',
                'element'  => '.social-icons li:hover a',
                'property' => 'background',
            ]
        ]
    ],
    'social_network_border_sep' => [
        'type'              => 'custom',
        'section'           => 'social_network_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Border', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'social_network_border_width' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Width', 'bizness' ),
        'section'           => 'social_network_section',
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
                'element'       => '.social-icons li a',
                'property'      => 'border-width',
                'suffix'        => 'px'
            ],
        ],
    ],
    'social_network_border_style'   => [
        'type'              => 'select',
        'label'             => esc_html__( 'Style', 'bizness' ),
        'section'           => 'social_network_section',
        'default'           => 'none',
        'multiple'          => 1,
        'choices'           => [
            'none'              => esc_html__( 'None', 'bizness' ),
            'dotted'            => esc_html__( 'Dotted', 'bizness' ),
            'solid'             => esc_html__( 'Solid', 'bizness' ),
            'double'            => esc_html__( 'Double', 'bizness' ),
            'dashed'            => esc_html__( 'Dashed', 'bizness' ),
        ],
        'transport'         => 'auto',
        'priority'          => 10,
        'output'            => [
            [
                'element'   => '.social-icons li a',
                'property'  => 'border-style'
            ],
        ],
    ],
    'social_network_border_color'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Color', 'bizness' ),
        'section'           => 'social_network_section',
        'choices'           => [
            'color_1'           => esc_html__( 'Normal', 'bizness' ),
            'color_2'           => esc_html__( 'Hover', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '',
            'color_2'            => ''
        ],
        'alpha'             => true,
        'priority'          => 10,
        'output'            => [
            [
                'choice'   => 'color_1',
                'element'  => '.social-icons li >*',
                'property' => 'border-color',
            ],
            [
                'choice'   => 'color_2',
                'element'  => '.social-icons li:hover a',
                'property' => 'border-color',
            ]
        ]
    ],
    'social_network_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Radius', 'bizness' ),
        'section'           => 'social_network_section',
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
                'element'       => '.social-icons li a',
                'property'      => 'border-radius',
                'suffix'        => 'px'
            ],
        ],
    ],
    'social_network_sep_2' => [
        'type'              => 'custom',
        'section'           => 'social_network_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 10
    ],
    'social_network_item_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set each social network item padding.', 'bizness' ),
        'section'           => 'social_network_section',
        'default'           => [
            'padding-top'       => '',
            'padding-bottom'    => '',
            'padding-left'      => '',
            'padding-right'     => '',
        ],
        'choices'           => [
            'labels'            => [
                'padding-top'         => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'      => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'        => esc_html__( 'Left', 'bizness' ),
                'padding-right'       => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.social-icons li a',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.social-icons li a',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.social-icons li a',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.social-icons li a',
            ],
        ],
    ],
    'social_network_md_item_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set each social network item padding.', 'bizness' ),
        'section'           => 'social_network_section',
        'default'           => [
            'padding-top'       => '',
            'padding-bottom'    => '',
            'padding-left'      => '',
            'padding-right'     => '',
        ],
        'choices'           => [
            'labels'            => [
                'padding-top'         => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'      => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'        => esc_html__( 'Left', 'bizness' ),
                'padding-right'       => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 768px)',
            ],
        ],
    ],
    'social_network_sm_item_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set each social network item padding.', 'bizness' ),
        'section'           => 'social_network_section',
        'default'           => [
            'padding-top'       => '',
            'padding-bottom'    => '',
            'padding-left'      => '',
            'padding-right'     => '',
        ],
        'choices'           => [
            'labels'            => [
                'padding-top'         => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'      => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'        => esc_html__( 'Left', 'bizness' ),
                'padding-right'       => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'priority'          => 10,
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.social-icons li a',
                'media_query'   => '@media (max-width: 576px)',
            ],
        ],
    ],
];

foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}