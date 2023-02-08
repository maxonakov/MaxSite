<?php
/**
 * Add Customizer -> Blog Posts -> Pagination settings.
 *
 * @package Bizness
 */

$fields = [
    'blog_pagination_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'blog_pagination_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'blog_pagination_note',
                    'blog_pagination_type',
                    'blog_pagination_top_spacing'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'blog_pagination_md_top_spacing'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'blog_pagination_sm_top_spacing'
                ]
            ]
        ],
    ],
    'blog_pagination_note' => [
        'type'              => 'custom',
        'section'           => 'blog_pagination_section',
        'description'       => '<p style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'NOTE:- All settings will apply for the archive,category,tags,search,author and custom taxonomy pages.', 'bizness' ) . '</p>',
        'priority'          => 10
    ],
    'blog_pagination_type' => [
        'type'        => 'select',
        'settings'    => 'blog_pagination_section',
        'label'       => esc_html__( 'Pagination Type', 'bizness' ),
        'section'     => 'blog_pagination_section',
        'default'     => 'standard',
        'placeholder' => esc_html__( 'Select an option...', 'bizness' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'          => esc_html__( 'Standard', 'bizness' ),
            'next-prev'         => esc_html__( 'Next/Prev', 'bizness' ),
        ],
    ],
    'blog_pagination_top_spacing' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Top Spacing', 'bizness' ),
        'description'       => esc_html__( 'Set pagination top spacing.', 'bizness' ),
        'section'           => 'blog_pagination_section',
        'priority'          => 10,
        'default'           => '21',
        'choices'           => [
            'suffix'            => 'px',
            'min'               => 0,
            'max'               => 100,
            'step'              => 1
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'       => '.site-main .posts-navigation,.site-main .pagination',
                'property'      => 'margin-top',
                'suffix'        => 'px'
            ],
        ],
    ],
    'blog_pagination_md_top_spacing' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Top Spacing', 'bizness' ),
        'description'       => esc_html__( 'Set pagination top spacing for the current screen size.', 'bizness' ),
        'section'           => 'blog_pagination_section',
        'priority'          => 10,
        'default'           => '21',
        'choices'           => [
            'suffix'            => 'px',
            'min'               => 0,
            'max'               => 100,
            'step'              => 1
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'element'       => '.site-main .posts-navigation,.site-main .pagination',
                'property'      => 'margin-top',
                'suffix'        => 'px'
            ],
        ],
    ],
    'blog_pagination_sm_top_spacing' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Top Spacing', 'bizness' ),
        'description'       => esc_html__( 'Set pagination top spacing for the current screen size.', 'bizness' ),
        'section'           => 'blog_pagination_section',
        'priority'          => 10,
        'default'           => '21',
        'choices'           => [
            'suffix'            => 'px',
            'min'               => 0,
            'max'               => 100,
            'step'              => 1
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'element'       => '.site-main .posts-navigation,.site-main .pagination',
                'property'      => 'margin-top',
                'suffix'        => 'px'
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}