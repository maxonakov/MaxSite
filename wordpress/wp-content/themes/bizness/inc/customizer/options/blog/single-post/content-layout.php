<?php
/**
 * Add Customizer -> Single Post -> Content Layout settings.
 *
 * @package Bizness
 */

$fields = [
    'single_post_content_layout_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'single_post_content_layout_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'single_post_content_elements_sep',
                    'single_post_content_elements',
                    'single_post_content_elements_gap',
                    'single_post_after_content_elements_sep',
                    'single_post_after_content_elements',
                    'single_post_after_content_elements_gap'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_content_elements_sep',
                    'single_post_content_md_elements_gap',
                    'single_post_after_content_elements_sep',
                    'single_post_after_content_md_elements_gap'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_content_elements_sep',
                    'single_post_content_sm_elements_gap',
                    'single_post_after_content_elements_sep',
                    'single_post_after_content_sm_elements_gap'
                ]
            ]
        ],
    ],
    'single_post_content_elements_sep' => [
        'type'              => 'custom',
        'section'           => 'single_post_content_layout_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],

    'single_post_content_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable single post content elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_post_content_layout_section',
        'default'     => [
            'post-image',
            'post-title',
            'post-meta',
            'post-content'
        ],
        'choices'     => [
            'post-image'    => esc_html__( 'Featured Image', 'bizness' ),
            'post-title'    => esc_html__( 'Title', 'bizness' ),
            'post-meta'     => esc_html__( 'Meta Tags', 'bizness' ),
            'post-content'  => esc_html__( 'Content', 'bizness' ),
            'post-tags'     => esc_html__( 'Post Tags', 'bizness' ),
            'post-cats'     => esc_html__( 'Post Category', 'bizness' )
        ],
        'priority'    => 10,
    ],
    'single_post_content_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single post content elements.', 'bizness' ),
        'section'           => 'single_post_content_layout_section',
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
                'element'   => '.single .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_post_content_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single post content elements.', 'bizness' ),
        'section'           => 'single_post_content_layout_section',
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
                'element'       => '.single .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_post_content_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single post content elements.', 'bizness' ),
        'section'           => 'single_post_content_layout_section',
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
                'element'       => '.single .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_post_after_content_elements_sep' => [
        'type'              => 'custom',
        'section'           => 'single_post_content_layout_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'AFTER CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'single_post_after_content_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable single post after content elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_post_content_layout_section',
        'default'     => [
            'navigation',
            'comments'
        ],
        'choices'     => [
            'related-posts' => esc_html__( 'Related Posts', 'bizness' ),
            'navigation'    => esc_html__( 'Navigation', 'bizness' ),
            'author-box'    => esc_html__( 'Author Box', 'bizness' ),
            'comments'      => esc_html__( 'Comments', 'bizness' )
        ],
        'priority'    => 10,
    ],
    'single_post_after_content_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single post after content elements.', 'bizness' ),
        'section'           => 'single_post_content_layout_section',
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
                'element'   => '.single .section-post-container .site-main >*.content-block:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_post_after_content_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single post after content elements.', 'bizness' ),
        'section'           => 'single_post_content_layout_section',
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
                'element'       => '.single .section-post-container .site-main >*.content-block:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_post_after_content_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single post after content elements.', 'bizness' ),
        'section'           => 'single_post_content_layout_section',
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
                'element'       => '.single .section-post-container .site-main >*.content-block:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}