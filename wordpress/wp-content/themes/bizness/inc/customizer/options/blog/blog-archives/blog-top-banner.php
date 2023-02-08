<?php
/**
 * Add Customizer -> Blog -> Blog Archive -> Page Top Banner settings.
 *
 * @package Bizness
 */

$fields = [
    'blog_post_top_banner_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'blog_post_top_banner_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'blog_post_top_banner_enable',
                    'blog_post_top_banner_elements',
                    'blog_post_top_banner_elements_gap',
                    'blog_post_top_banner_sep_1',
                    'blog_post_top_banner_background',
                    'blog_post_top_banner_padding'

                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'blog_post_top_banner_md_elements_gap',
                    'blog_post_top_banner_md_padding'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'blog_post_top_banner_sm_elements_gap',
                    'blog_post_top_banner_sm_padding'
                ]
            ]
        ],
    ],
    'blog_post_top_banner_enable'  => [
        'type'              => 'toggle',
        'label'             => esc_html__( 'Enable', 'bizness' ),
        'description'       => esc_html__( 'Toggle to enable/disable blog/archive top banner section.', 'bizness' ),
        'section'           => 'blog_post_top_banner_section',
        'default'           => '',
        'priority'          => 10,
    ],
    'blog_post_top_banner_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable top banner elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'blog_post_top_banner_section',
        'default'     => [
            'post-title',
            'breadcrumb',
        ],
        'choices'     => [
            'breadcrumb'    => esc_html__( 'Breadcrumb', 'bizness' ),
            'post-title'    => esc_html__( 'Title', 'bizness' ),
            'post-excerpt'  => esc_html__( 'Description', 'bizness' )
        ],
        'priority'    => 10,
    ],
    'blog_post_top_banner_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of top banner section.', 'bizness' ),
        'section'           => 'blog_post_top_banner_section',
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
                'element'   => '.bizness-blog .page-top-banner header >*:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'blog_post_top_banner_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of of top banner section only for the tablet device only.', 'bizness' ),
        'section'           => 'blog_post_top_banner_section',
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
                'element'       => '.bizness-blog .page-top-banner header >*:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'blog_post_top_banner_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of of top banner section only for the mobile device only.', 'bizness' ),
        'section'           => 'blog_post_top_banner_section',
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
                'element'       => '.bizness-blog .page-top-banner header >*:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'blog_post_top_banner_sep_1' => [
        'type'              => 'custom',
        'section'           => 'blog_post_top_banner_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'blog_post_top_banner_background' => [
        'type'              => 'background',
        'label'             => esc_html__( 'Background', 'bizness' ),
        'description'       => esc_html__( 'Set post banner background.', 'bizness' ),
        'section'           => 'blog_post_top_banner_section',
        'priority'          => 10,
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
                'element'       => '.bizness-blog .page-top-banner',
            ],
        ],
    ],
    'blog_post_top_banner_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set post banner section top and bottom padding.', 'bizness' ),
        'section'     => 'blog_post_top_banner_section',
        'priority'    => 10,
        'default'     => [
            'padding-top'    => '50px',
            'padding-bottom' => '50px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.bizness-blog .page-top-banner header.page-header',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.bizness-blog .page-top-banner header.page-header',
            ],
        ],
    ],
    'blog_post_top_banner_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set post banner section top and bottom padding.', 'bizness' ),
        'section'     => 'blog_post_top_banner_section',
        'priority'    => 10,
        'default'     => [
            'padding-top'    => '50px',
            'padding-bottom' => '50px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-top',
	            'property'      => 'padding-top',
                'element'       => '.bizness-blog .page-top-banner header.page-header',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.bizness-blog .page-top-banner header.page-header',
            ],
        ],
    ],
    'blog_post_top_banner_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set post banner section top and bottom padding.', 'bizness' ),
        'section'     => 'blog_post_top_banner_section',
        'priority'    => 10,
        'default'     => [
            'padding-top'    => '50px',
            'padding-bottom' => '50px',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-top',
	            'property'      => 'padding-top',
                'element'       => '.bizness-blog .page-top-banner header.page-header',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.bizness-blog .page-top-banner header.page-header',
            ],
        ],
    ]
];

foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}
