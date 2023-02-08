<?php
/**
 * Add Customizer -> Singe Page -> Page Top Banner settings.
 *
 * @package Bizness
 */

$fields = [
    'single_page_top_banner_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'single_page_top_banner_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'single_page_top_banner_enable',
                    'single_page_top_banner_elements',
                    'single_page_top_banner_elements_gap',
                    'single_page_top_banner_sep_1',
                    'single_page_top_banner_background',
                    'single_page_top_banner_overlay_background',
                    'single_page_top_banner_padding'

                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'single_page_top_banner_md_elements_gap',
                    'single_page_top_banner_sep_1',
                    'single_page_top_banner_md_padding'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'single_page_top_banner_sm_elements_gap',
                    'single_page_top_banner_sep_1',
                    'single_page_top_banner_sm_padding'
                ]
            ]
        ],
    ],
    'single_page_top_banner_enable'  => [
        'type'              => 'toggle',
        'label'             => esc_html__( 'Enable', 'bizness' ),
        'description'       => esc_html__( 'Toggle to enable/disable page top banner section.', 'bizness' ),
        'section'           => 'single_page_top_banner_section',
        'default'           => '',
        'priority'          => 10,
    ],
    'single_page_top_banner_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable page top banner elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_page_top_banner_section',
        'default'     => [
            'post-title',
            'breadcrumb'
        ],
        'choices'     => [
            'breadcrumb'    => esc_html__( 'Breadcrumb', 'bizness' ),
            'post-title'    => esc_html__( 'Post Title', 'bizness' ),
            'post-excerpt'  => esc_html__( 'Post Excerpt', 'bizness' )
        ],
        'priority'    => 10,
    ],
    'single_page_top_banner_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of page top banner section.', 'bizness' ),
        'section'           => 'single_page_top_banner_section',
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
                'element'   => '.page .page-top-banner header >*:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_page_top_banner_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of of page top banner section only for the tablet device only.', 'bizness' ),
        'section'           => 'single_page_top_banner_section',
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
                'element'       => '.page .page-top-banner header >*:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_page_top_banner_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Elements Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of of page top banner section only for the mobile device only.', 'bizness' ),
        'section'           => 'single_page_top_banner_section',
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
                'element'       => '.page .page-top-banner header >*:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_page_top_banner_sep_1' => [
        'type'              => 'custom',
        'section'           => 'single_page_top_banner_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'single_page_top_banner_background' => [
        'type'              => 'background',
        'label'             => esc_html__( 'Background', 'bizness' ),
        'description'       => esc_html__( 'Set page top banner background.', 'bizness' ),
        'section'           => 'single_page_top_banner_section',
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
                'element'       => '.page .page-top-banner',
            ],
        ],
    ],
    'single_page_top_banner_overlay_background'  => [
        'type'              => 'multicolor',
        'label'             => esc_html__( 'Background Overlay', 'bizness' ),
        'description'       => esc_html__( 'Set page top banner background overalay gradient colors.', 'bizness' ),
        'section'           => 'single_page_top_banner_section',
        'priority'          => 10,
        'choices'           => [
            'color_1'           => esc_html__( 'Color 1', 'bizness' ),
            'color_2'           => esc_html__( 'Color 2', 'bizness' )
        ],
        'default'           => [
            'color_1'            => '',
            'color_2'            => ''
        ],
        'transport'         => 'refresh',
    ],
    'single_page_top_banner_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set page top banner section top and bottom padding.', 'bizness' ),
        'section'     => 'single_page_top_banner_section',
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
                'element'   => '.page .page-top-banner header.page-header',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.page .page-top-banner header.page-header',
            ],
        ],
    ],
    'single_page_top_banner_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set page top banner section top and bottom padding.', 'bizness' ),
        'section'     => 'single_page_top_banner_section',
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
                'element'       => '.page .page-top-banner header.page-header',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.page .page-top-banner header.page-header',
            ],
        ],
    ],
    'single_page_top_banner_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set page top banner section top and bottom padding.', 'bizness' ),
        'section'     => 'single_page_top_banner_section',
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
                'element'       => '.page .page-top-banner header.page-header',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
	            'property'      => 'padding-bottom',
                'element'       => '.page .page-top-banner header.page-header',
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}