<?php
/**
 * Add Front Page -> Featured Slider settings.
 *
 * @package Bizness
 */

$fields = [
    'front_page_featured_slider_group_settings' => [
        'type'              => 'group-field',
        'section'           => 'front_page_slider_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                   'front_page_slider_cat_id',
                   'front_page_slider_limit',
                   'front_page_slider_title_sep',
                   'front_page_slider_title_typography',
                   'front_page_slider_content_sep',
                   'front_page_slider_content_typography',
                   'front_page_slider_read_more_btn_sep',
                   'front_page_slider_read_more_btn_enable',
                   'front_page_slider_read_more_btn_text',
                   'front_page_slider_btn_sep',
                   'front_page_slider_btn_border_radius'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'front_page_slider_title_sep',
                    'front_page_slider_title_md_typography',
                    'front_page_slider_content_sep',
                    'front_page_slider_content_md_typography'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'front_page_slider_title_sep',
                    'front_page_slider_title_sm_typography',
                    'front_page_slider_content_sep',
                    'front_page_slider_content_sm_typography'
                ]
            ]
        ],
    ],
    'front_page_slider_cat_id'  => [
        'type'              => 'select',
        'label'             => esc_html__( 'Select Category', 'bizness' ),
        'section'           => 'front_page_slider_section',
        'default'           => '',
	    'multiple'          => 1,
        'choices'           => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
        'priority'          => 10
    ],
    'front_page_slider_limit' => [
        'type'              => 'slider',
        'default'           => 3,
        'label'             => esc_html__( 'Slide Limit', 'bizness' ),
        'description'       => esc_html__( 'Set total number of slide in slider.', 'bizness' ),
        'section'           => 'front_page_slider_section',
        'priority'          => 10,
        'choices'           => [
            'min'               => 1,
            'max'               => 3,
        ]
    ],
    'front_page_slider_title_sep' => [
        'type'              => 'custom',
        'section'           => 'front_page_slider_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Heading', 'bizness' ) . '</h3>',
        'priority'          => 15
    ],
    'front_page_slider_title_typography' => [
        'type'              => 'typography',
        'section'           => 'front_page_slider_section',
        'priority'          => 15,
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => '',
            'variant'           => '',
            'font-size'         => '',
            'font-style'        => '',
            'line-height'       => '',
            'letter-spacing'    => '',
            'color'             => '#fff',
            'text-transform'    => 'none',
        ],
        'output'            => [
            [
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-title',
            ],
        ]
    ],
    'front_page_slider_title_md_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'front_page_slider_section',
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
        'priority'          => 15,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-title',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-title',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-title',
            ],
        ],
    ],
    'front_page_slider_title_sm_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'front_page_slider_section',
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
        'priority'          => 15,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-title',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-title',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-title',
            ],
        ],
    ],
    'front_page_slider_content_sep' => [
        'type'              => 'custom',
        'section'           => 'front_page_slider_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Content', 'bizness' ) . '</h3>',
        'priority'          => 20
    ],
    'front_page_slider_content_typography' => [
        'type'              => 'typography',
        'section'           => 'front_page_slider_section',
        'priority'          => 20,
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => '',
            'variant'           => '',
            'font-size'         => '',
            'font-style'        => '',
            'line-height'       => '',
            'letter-spacing'    => '',
            'color'             => '#fff',
            'text-transform'    => 'none',
        ],
        'output'            => [
            [
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-content p',
            ],
        ]
    ],
    'front_page_slider_content_md_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'front_page_slider_section',
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
        'priority'          => 20,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-content p',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-content p',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-content p',
            ],
        ],
    ],
    'front_page_slider_content_sm_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'front_page_slider_section',
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
        'priority'          => 20,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-content p',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-content p',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider .bizness-slider-content p',
            ],
        ],
    ],
    'front_page_slider_read_more_btn_sep' => [
        'type'              => 'custom',
        'section'           => 'front_page_slider_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Read More', 'bizness' ) . '</h3>',
        'priority'          => 25
    ],
    'front_page_slider_read_more_btn_enable'  => [
        'type'              => 'toggle',
        'label'             => esc_html__( 'Enable', 'bizness' ),
        'description'       => esc_html__( 'Toggle to enable read more button in slider.', 'bizness' ),
        'section'           => 'front_page_slider_section',
        'default'           => true,
        'priority'          => 25,
    ],
    'front_page_slider_read_more_btn_text'  => [
        'type'              => 'text',
        'label'             => esc_html__( 'Text', 'bizness' ),
        'description'       => esc_html__( 'Set read more button text.', 'bizness' ),
        'section'           => 'front_page_slider_section',
        'default'           => esc_html__( 'Learn More', 'bizness' ),
        'priority'          => 30,
    ],
    'front_page_slider_btn_sep' => [
        'type'              => 'custom',
        'section'           => 'front_page_slider_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Button', 'bizness' ) . '</h3>',
        'priority'          => 55
    ],
    'front_page_slider_btn_border_radius' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Border Radius', 'bizness' ),
        'description'       => esc_html__( 'Set button border radius', 'bizness' ),
        'section'           => 'front_page_slider_section',
        'default'           => '',
        'choices'           => [
            'min'               => 0,
            'max'               => 100,
            'step'              => 1,
            'suffix'            => 'px'
        ],
        'priority'          => 55,
        'transport'         => 'auto',
        'output'            => [
            [
	            'property'      => 'border-radius',
                'element'       => '.bizness-featured-slider-wrapper .bizness-slider-button .bizness-btn-primary',
                'suffix'        => 'px'
            ]
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}