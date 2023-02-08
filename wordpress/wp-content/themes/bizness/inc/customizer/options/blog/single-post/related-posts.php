<?php
/**
 * Add Customizer -> Single Post -> Related Posts settings.
 *
 * @package Bizness
 */

$fields = [
    'single_related_post_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'single_related_posts_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'single_related_post_heading',
                    'single_related_post_limit',
                    'single_related_post_col_per_row',
                    'single_related_post_elements_structure',
                    'single_related_post_elements_gap',
                    'single_related_post_image_size',
                    'single_related_post_meta_elements',
                    'single_related_post_sep_1',
                    'single_related_post_background_color',
                    'single_related_post_padding_sep',
                    'single_related_post_padding'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'single_related_post_md_col_per_row',
                    'single_related_post_elements_md_gap',
                    'single_related_post_md_padding'
                    
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'single_related_post_sm_col_per_row',
                    'single_related_post_elements_sm_gap',
                    'single_related_post_sm_padding'
                    
                ]
            ]
        ],
    ],
    'single_related_post_heading' => [
        'type'              => 'text',
        'label'             => esc_html__( 'Section Heading', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'description'       => esc_html__( 'Enter text to display section heading.', 'bizness' ),
        'priority'          => 10,
        'default'           => esc_html__( 'Related Posts', 'bizness' ),
    ],
    'single_related_post_limit' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Posts Limit', 'bizness' ),
        'description'       => esc_html__( 'Set number of posts to load.', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'priority'          => 10,
        'default'           => 4,
        'choices'           => [
            'min'               => 2,
            'max'               => 12,
        ]
    ],
    'single_related_post_col_per_row' => [
        'type'              => 'radio_buttonset',
        'label'             => esc_html__( 'Columns Per Row', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'description'       => esc_html__( 'Set columns per row for the current screen size.', 'bizness' ),
        'priority'          => 10,
        'default'           => 'col-lg-6',
        'choices'           => [
            'col-lg-12'     => esc_html__( '1', 'bizness' ),
            'col-lg-6'      => esc_html__( '2', 'bizness' ),
            'col-lg-4'      => esc_html__( '3', 'bizness' ),
            'col-lg-3'      => esc_html__( '4', 'bizness' ),
        ],
    ],
    'single_related_post_md_col_per_row' => [
        'type'              => 'radio_buttonset',
        'label'             => esc_html__( 'Columns Per Row', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'description'       => esc_html__( 'Set columns per row for the current screen size.', 'bizness' ),
        'priority'          => 10,
        'default'           => 'col-md-6',
        'choices'           => [
            'col-md-12'     => esc_html__( '1', 'bizness' ),
            'col-md-6'      => esc_html__( '2', 'bizness' ),
            'col-md-4'      => esc_html__( '3', 'bizness' ),
            'col-md-3'      => esc_html__( '4', 'bizness' ),
        ],
    ],
    'single_related_post_sm_col_per_row' => [
        'type'              => 'radio_buttonset',
        'label'             => esc_html__( 'Columns Per Row', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'description'       => esc_html__( 'Set columns per row for the current screen size.', 'bizness' ),
        'priority'          => 10,
        'default'           => 'col-12',
        'choices'           => [
            'col-12'     => esc_html__( '1', 'bizness' ),
            'col-6'      => esc_html__( '2', 'bizness' ),
            'col-4'      => esc_html__( '3', 'bizness' ),
            'col-3'      => esc_html__( '4', 'bizness' ),
        ],
    ],
    
    'single_related_post_elements_structure' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Content Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable related posts content elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_related_posts_section',
        'default'     => [
            'post-image',
            'post-title',
            'post-excerpt'
        ],
        'choices'     => [
            'post-image'    => esc_html__( 'Featured Image', 'bizness' ),
            'post-title'    => esc_html__( 'Post Title', 'bizness' ),
            'post-excerpt'  => esc_html__( 'Post Excerpt', 'bizness' ),
            'meta-tags'     => esc_html__( 'Meta Tags', 'bizness' ),
            'read-more'     => esc_html__( 'Read More', 'bizness' )
        ],
        'priority'    => 10,
    ],
    'single_related_post_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of releated posts section.', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'default'           => 10,
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
                'element'   => '.single .section-post-container .element-related-posts .post-structure >*.content-element:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_related_post_elements_md_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of related posts section.', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'default'           => 10,
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
                'element'       => '.single .section-post-container .element-related-posts .post-structure >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_related_post_elements_sm_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of related posts section.', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'default'           => 10,
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
                'element'       => '.single .section-post-container .element-related-posts .post-structure >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_related_post_image_size' => [
        'type'              => 'select',
        'label'             => esc_html__( 'Featured Image Size', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'description'       => esc_html__( 'Set related post featured image size by selecting options.', 'bizness' ),
        'priority'          => 10,
        'default'           => 'medium_large',
        'choices'           => [
            'thumbnail'         => esc_html__( 'Small', 'bizness' ),
            'medium'            => esc_html__( 'Medium', 'bizness' ),
            'medium_large'      => esc_html__( 'Medium Large', 'bizness' ),
            'large'             => esc_html__( 'Large', 'bizness' ),
            'full'              => esc_html__( 'Original', 'bizness' )
        ],
    ],
    'single_related_post_meta_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Meta Tags', 'bizness' ),
        'description' => esc_html__( 'Enable/disable to show the list of post meta tags and sort them to re-arrange their order.', 'bizness' ),
        'section'     => 'single_related_posts_section',
        'default'     => [
            'post-date',
            'post-author'
        ],
        'choices'     => [
            'post-author'       => esc_html__( 'Post Author', 'bizness' ),
            'post-date'         => esc_html__( 'Post Date', 'bizness' ),
            'post-cats'         => esc_html__( 'Post Categories', 'bizness' ),
            'post-comments'     => esc_html__( 'post Comments', 'bizness' )
        ],
        'priority'    => 10,
    ],
    'single_related_post_sep_1' => [
        'type'              => 'custom',
        'section'           => 'single_related_posts_section',
        'default'           => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
        'priority'          => 10
    ],
    'single_related_post_background_color'  => [
        'type'              => 'color',
        'label'             => esc_html__( 'Background Color', 'bizness' ),
        'description'       => esc_html__( 'Set each related post background color.', 'bizness' ),
        'section'           => 'single_related_posts_section',
        'priority'          => 10,
        'choices'           => [
			'alpha' => true,
		],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'       => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'property'      => 'background-color',
            ],
        ],
    ],
    'single_related_post_padding_sep' => [
        'type'              => 'custom',
        'section'           => 'single_related_posts_section',
        'default'           => '<hr/>',
        'priority'          => 10
    ],

    'single_related_post_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set each post padding of related posts section.', 'bizness' ),
        'section'           => 'single_related_posts_section',
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
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
            ],
        ],
    ],
    'single_related_post_md_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set each post padding of related posts section.', 'bizness' ),
        'section'           => 'single_related_posts_section',
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
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'media_query'   => '@media (max-width: 768px)',
            ],
        ],
    ],
    'single_related_post_sm_padding'  => [
        'type'              => 'dimensions',
        'label'             => esc_html__( 'Padding', 'bizness' ),
        'description'       => esc_html__( 'Set each post padding of related posts section.', 'bizness' ),
        'section'           => 'single_related_posts_section',
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
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-related-posts .related-posts-section .post-structure',
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