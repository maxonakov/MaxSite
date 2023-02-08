<?php
/**
 * Add Customizer -> Single Post -> Author Box settings.
 *
 * @package Bizness
 */

$fields = [
    'single_post_author_box_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'single_post_author_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'single_post_author_box_section_heading',
                    'single_post_author_box_avatar_enable',
                    'single_post_author_box_avatar_size',
                    'single_post_author_box_avatar_border_radius',
                    'single_post_author_box_elements',
                    'single_post_author_box_elements_gap',
                    'single_post_author_box_sep_1',
                    'single_post_author_box_background_color',
                    'single_post_author_box_padding_sep',
                    'single_post_author_box_padding',
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_author_box_md_elements_gap',
                    'single_post_author_box_md_padding',
                    'single_post_author_box_md_margin'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_author_box_sm_elements_gap',
                    'single_post_author_box_sm_padding',
                    'single_post_author_box_sm_margin'
                ]
            ]
        ],
    ],
    'single_post_author_box_section_heading' => [
        'type'              => 'text',
        'label'             => esc_html__( 'Section Heading', 'bizness' ),
        'section'           => 'single_post_author_section',
        'description'       => esc_html__( 'Enter text to display section heading.', 'bizness' ),
        'priority'          => 10,
        'default'           => '',
    ],
    'single_post_author_box_avatar_enable' => [
        'type'        => 'toggle',
        'label'       => esc_html__( 'Profile Avatar', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable post author box profile avatar image.', 'bizness' ),
        'section'     => 'single_post_author_section',
        'default'     => '1',
        'priority'    => 10,
    ],
    'single_post_author_box_avatar_size' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Avatar Size', 'bizness' ),
        'description'       => esc_html__( 'Set author image width.', 'bizness' ),
        'section'           => 'single_post_author_section',
        'priority'          => 10,
        'default'           => 100,
        'choices'           => [
            'max'               => 150,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'active_callback'   => [
            [
                'setting'   => 'single_post_author_box_avatar_enable',
                'operator'  => '==',
                'value'     => '1'
            ]
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'   => '.single .section-post-container .element-author-box .author-avatar',
                'property'  => 'max-width',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_post_author_box_avatar_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Avatar Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set post author box avatar border radius.', 'bizness' ),
        'section'           => 'single_post_author_section',
        'priority'          => 10,
        'choices'           => [
            'max'               => 100,
            'step'              => 1,
            'suffix'            => '%'
        ],
        'active_callback'   => [
            [
                'setting'   => 'single_post_author_box_avatar_enable',
                'operator'  => '==',
                'value'     => '1'
            ]
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'   => '.single .section-post-container .element-author-box .author-avatar',
                'property'  => 'border-radius',
                'suffix'    => '%'
            ],
        ],
    ],

    'single_post_author_box_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Content Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable author box content elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_post_author_section',
        'default'     => [
            'name',
            'website',
            'bio-info',
            'articles'
        ],
        'choices'       => [
            'name'      => esc_html__( 'Author', 'bizness' ),
            'website'   => esc_html__( 'Website', 'bizness' ),
            'bio-info'  => esc_html__( 'Bio Info', 'bizness' ),
            'articles'  => esc_html__( 'Articles', 'bizness' ),
            
        ],
        'priority'    => 10,
    ],
    'single_post_author_box_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of author box content.', 'bizness' ),
        'section'           => 'single_post_author_section',
        'default'           => 15,
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
                'element'   => '.single .section-post-container .element-author-box .author-content.flex-column .author-avatar,.single .section-post-container .element-author-box .author-details >*.content-element:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_post_author_box_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of author box content.', 'bizness' ),
        'section'           => 'single_post_author_section',
        'default'           => 15,
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
                'element'       => '.single .section-post-container .element-author-box .author-content.flex-column .author-avatar,.single .section-post-container .element-author-box .author-details >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_post_author_box_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of author box content.', 'bizness' ),
        'section'           => 'single_post_author_section',
        'default'           => 15,
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
                'element'       => '.single .section-post-container .element-author-box .author-content.flex-column .author-avatar,.single .section-post-container .element-author-box .author-details >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_post_author_box_sep_1' => [
        'type'              => 'custom',
        'section'           => 'single_post_author_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 10
    ],
    'single_post_author_box_background_color'  => [
        'type'              => 'color',
        'label'             => esc_html__( 'Background Color', 'bizness' ),
        'description'       => esc_html__( 'Set author box background color.', 'bizness' ),
        'section'           => 'single_post_author_section',
        'priority'          => 10,
        'choices'           => [
			'alpha' => true,
		],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'       => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'property'      => 'background-color',
            ],
        ],
    ],
    'single_post_author_box_padding_sep' => [
        'type'              => 'custom',
        'section'           => 'single_post_author_section',
        'default'           => '<hr/>',
        'priority'          => 10
    ],
    'single_post_author_box_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set author box padding.', 'bizness' ),
        'section'           => 'single_post_author_section',
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
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
            ],
        ],
    ],
    'single_post_author_box_md_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set padding for current screen.', 'bizness' ),
        'section'           => 'single_post_author_section',
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
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'media_query'   => '@media (max-width: 768px)',
            ],
        ],
    ],
    'single_post_author_box_sm_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set padding for current screen.', 'bizness' ),
        'section'           => 'single_post_author_section',
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
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-author-box .author-box-wrapper .author-content',
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