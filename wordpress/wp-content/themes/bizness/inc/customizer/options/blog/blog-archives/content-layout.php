<?php
/**
 * Add Customizer -> Blog Posts -> Content settings.
 *
 * @package Bizness
 */

$fields = [
    'blog_content_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'blog_content_layout_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'blog_post_content_elements',
                    'blog_post_content_elements_gap'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'blog_post_content_md_elements_gap'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'blog_post_content_sm_elements_gap'
                ]
            ]
        ],
    ],
    'blog_post_content_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable blog post content elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'blog_content_layout_section',
        'default'     => [
            'post-image',
            'post-title',
            'post-meta',
            'post-excerpt'
        ],
        'choices'     => [
            'post-image'    => esc_html__( 'Featured Image', 'bizness' ),
            'post-title'    => esc_html__( 'Post Title', 'bizness' ),
            'post-meta'     => esc_html__( 'Post Meta', 'bizness' ),
            'post-excerpt'  => esc_html__( 'Post Excerpt', 'bizness' ),
            'read-more'     => esc_html__( 'Read More', 'bizness' ),
            'post-cats'     => esc_html__( 'Categories', 'bizness' ),
            'post-tags'     => esc_html__( 'Tags', 'bizness' ),
            
        ],
        'priority'    => 10,
    ],
    'blog_post_content_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of blog post for the current device only.', 'bizness' ),
        'section'           => 'blog_content_layout_section',
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
                'element'   => '.bizness-blog .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'blog_post_content_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of blog post for the current device only.', 'bizness' ),
        'section'           => 'blog_content_layout_section',
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
                'element'   => '.bizness-blog .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'blog_post_content_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of blog post for the current device only.', 'bizness' ),
        'section'           => 'blog_content_layout_section',
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
                'element'   => '.bizness-blog .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
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