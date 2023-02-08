<?php
/**
 * Add Customizer -> Singe Post -> Page Top Banner settings.
 *
 * @package Bizness
 */

$fields = [
    'single_post_top_banner_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'single_post_top_banner_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'single_post_top_banner_enable',
                    'single_post_top_banner_elements',
                    'single_post_top_banner_elements_gap',
                    'single_post_top_banner_sep_1',
                    'single_post_top_banner_background',
                    'single_post_top_banner_padding'

                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_top_banner_md_elements_gap',
                    'single_post_top_banner_sep_1',
                    'single_post_top_banner_md_padding'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_top_banner_sm_elements_gap',
                    'single_post_top_banner_sep_1',
                    'single_post_top_banner_sm_padding'
                ]
            ]
        ],
    ],
    'single_post_top_banner_enable'  => [
        'type'              => 'toggle',
        'label'             => esc_html__( 'Enable', 'bizness' ),
        'description'       => esc_html__( 'Toggle to enable/disable post banner section.', 'bizness' ),
        'section'           => 'single_post_top_banner_section',
        'default'           => '',
        'priority'          => 10,
    ],
    'single_post_top_banner_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable post banner elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_post_top_banner_section',
        'default'     => [
            'post-title',
            'breadcrumb'
        ],
        'choices'     => [
            'breadcrumb'    => esc_html__( 'Breadcrumb', 'bizness' ),
            'post-title'    => esc_html__( 'Post Title', 'bizness' ),
            'post-meta'     => esc_html__( 'Meta Tags', 'bizness' ),
            'post-excerpt'  => esc_html__( 'Post Excerpt', 'bizness' )
        ],
        'priority'    => 10,
    ],
    'single_post_top_banner_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of post banner section.', 'bizness' ),
        'section'           => 'single_post_top_banner_section',
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
                'element'   => '.single .page-top-banner header >*:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_post_top_banner_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of of post banner section only for the tablet device only.', 'bizness' ),
        'section'           => 'single_post_top_banner_section',
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
                'element'       => '.single .page-top-banner header >*:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_post_top_banner_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of of post banner section only for the mobile device only.', 'bizness' ),
        'section'           => 'single_post_top_banner_section',
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
                'element'       => '.single .page-top-banner header >*:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_post_top_banner_sep_1' => [
        'type'              => 'custom',
        'section'           => 'single_post_top_banner_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'single_post_top_banner_background' => [
        'type'              => 'background',
        'label'             => esc_html__( 'Background', 'bizness' ),
        'description'       => esc_html__( 'Set post banner background.', 'bizness' ),
        'section'           => 'single_post_top_banner_section',
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
                'element'       => '.single .page-top-banner',
            ],
        ],
    ],
    'single_post_top_banner_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set post banner section top and bottom padding.', 'bizness' ),
        'section'     => 'single_post_top_banner_section',
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
                'element'   => '.single .page-top-banner header.page-header',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .page-top-banner header.page-header',
            ],
        ],
    ],
    'single_post_top_banner_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set post banner section top and bottom padding.', 'bizness' ),
        'section'     => 'single_post_top_banner_section',
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
                'element'       => '.single .page-top-banner header.page-header',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.single .page-top-banner header.page-header',
            ],
        ],
    ],
    'single_post_top_banner_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set post banner section top and bottom padding.', 'bizness' ),
        'section'     => 'single_post_top_banner_section',
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
                'element'       => '.single .page-top-banner header.page-header',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.single .page-top-banner header.page-header',
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}