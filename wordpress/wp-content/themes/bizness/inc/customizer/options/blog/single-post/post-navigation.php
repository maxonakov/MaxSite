<?php
/**
 * Add Customizer -> Single Post -> Post Navigation settings.
 *
 * @package Bizness
 */

$fields = [
    'single_post_navigation_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'single_post_navigation_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'single_post_navigation_sep_1',
                    'single_post_navigation_padding'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_navigation_sep_1',
                    'single_post_navigation_md_padding'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'single_post_navigation_sep_1',
                    'single_post_navigation_sm_padding'
                ]
            ]
        ],
    ],
    'single_post_navigation_sep_1' => [
        'type'              => 'custom',
        'section'           => 'single_post_navigation_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Next/Prev', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'single_post_navigation_padding' => [
        'type'        => 'dimensions',
        'section'     => 'single_post_navigation_section',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'priority'    => 30,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
            'padding-left'   => '',
            'padding-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
            ],
        ],
    ],
    'single_post_navigation_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'section'     => 'single_post_navigation_section',
        'priority'    => 30,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
            'padding-left'   => '',
            'padding-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
                'media_query'   => '@media (max-width: 768px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
                'media_query'   => '@media (max-width: 768px)',
            ],
        ],
    ],
    'single_post_navigation_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'section'     => 'single_post_navigation_section',
        'priority'    => 30,
        'default'     => [
            'padding-top'    => '',
            'padding-bottom' => '',
            'padding-left'   => '',
            'padding-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'padding-top'       => esc_html__( 'Top', 'bizness' ),
                'padding-bottom'    => esc_html__( 'Bottom', 'bizness' ),
                'padding-left'      => esc_html__( 'Left', 'bizness' ),
                'padding-right'     => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'padding-top',
	            'property'  => 'padding-top',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-bottom',
	            'property'  => 'padding-bottom',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-left',
	            'property'  => 'padding-left',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
                'media_query'   => '@media (max-width: 576px)',
            ],
            [
                'choice'    => 'padding-right',
	            'property'  => 'padding-right',
                'element'   => '.single .section-post-container .element-navigation .post-navigation .nav-links a',
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