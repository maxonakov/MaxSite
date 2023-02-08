<?php
/**
 * Add Front Page -> Blog Posts settings.
 *
 * @package Bizness
 */

$fields = [
    'front_page_blog_group_settings' => [
        'type'              => 'group-field',
        'section'           => 'front_page_blog_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                   'front_page_blog_sep_1',
                   'front_page_blog_heading',
                   'front_page_blog_sub_heading',
                   'front_page_blog_posts_limit',
                   'front_page_blog_sep_2',
                   'front_page_blog_background',
                   'front_page_blog_container_padding',
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'front_page_blog_sep_2',
                    'front_page_blog_container_md_padding',
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'front_page_blog_sep_2',
                    'front_page_blog_container_sm_padding',
                ]
            ]
        ]
    ],
    'front_page_blog_sep_1' => [
        'type'              => 'custom',
        'section'           => 'front_page_blog_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],

    'front_page_blog_heading'  => [
        'type'              => 'text',
        'default'           => esc_html__( 'Our Latest Posts', 'bizness' ),
        'label'             => esc_html__( 'Heading', 'bizness' ),
        'section'           => 'front_page_blog_section',
        'default'           => '',
        'priority'          => 10
    ],
    'front_page_blog_sub_heading'  => [
        'type'              => 'textarea',
        'label'             => esc_html__( 'Sub Heading', 'bizness' ),
        'section'           => 'front_page_blog_section',
        'default'           => '',
        'priority'          => 10
    ],
    'front_page_blog_posts_limit' => [
        'type'              => 'slider',
        'default'           => 3,
        'label'             => esc_html__( 'Post Limit', 'bizness' ),
        'section'           => 'front_page_blog_section',
        'priority'          => 10,
        'choices'           => [
            'min'               => 3,
            'max'               => 6,
        ]
    ],
    'front_page_blog_sep_2' => [
        'type'              => 'custom',
        'section'           => 'front_page_blog_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 30
    ],
    'front_page_blog_background' => [
        'type'              => 'background',
        'section'           => 'front_page_blog_section',
        'priority'          => 30,
        'default'           => [
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'element'       => '.bizness-blog-section',
            ],
        ],
    ],
    'front_page_blog_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'front_page_blog_section',
        'priority'    => 30,
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
                'element'   => '.bizness-blog-section',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.bizness-blog-section',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.bizness-blog-section',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.bizness-blog-section',
            ],
        ],
    ],
    'front_page_blog_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'front_page_blog_section',
        'priority'    => 30,
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
                'element'       => '.bizness-blog-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.bizness-blog-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.bizness-blog-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.bizness-blog-section',
            ],
        ],
    ],
    'front_page_blog_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'front_page_blog_section',
        'priority'    => 30,
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
                'element'       => '.bizness-blog-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.bizness-blog-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.bizness-blog-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.bizness-blog-section',
            ],
        ],
    ],
];



foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}