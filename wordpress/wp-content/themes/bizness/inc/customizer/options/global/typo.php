<?php
/**
 * Add Customizer -> General -> Typography settings.
 *
 * @package Bizness
 */

$fields = [
    // Base
    'base_group_settings' => [
        'type'              => 'group-field',
        'section'           => 'base_typo_section',
        'priority'          => 10,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'base_typo_sep',
                    'base_typography',
                    'base_heading_sep',
                    'base_heading_typography',
                    'base_content_sep',
                    'base_content_typography'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'base_typo_sep',
                    'base_md_typography',
                    'base_heading_sep',
                    'base_heading_md_typography',
                    'base_content_sep',
                    'base_content_md_typography'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'base_typo_sep',
                    'base_sm_typography',
                    'base_heading_sep',
                    'base_heading_sm_typography',
                    'base_content_sep',
                    'base_content_sm_typography'
                ]
            ]
        ],
    ],
    'base_typo_sep' => [
        'type'              => 'custom',
        'section'           => 'base_typo_section',
        'label'             => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Base', 'bizness' ) . '</h3>',
        'priority'          => 15
    ],
    'base_typography' => [
        'type'              => 'typography',
        'section'           => 'base_typo_section',
        'priority'          => 15,
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => 'Raleway',
            'variant'           => 'regular',
            'font-style'        => '',
            'font-size'         => '14px',
            'line-height'       => '',
            'letter-spacing'    => '',
            'text-transform'    => 'none',
        ],
        'output'            => [
            [
                'element'       => 'body, p',
            ],
        ]
    ],
    'base_md_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'base_typo_section',
        'transport'         => 'auto',
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
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => 'body, p'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => 'body, p'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => 'body, p'
            ],
        ],
    ],
    'base_sm_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'base_typo_section',
        'transport'         => 'auto',
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
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => 'body, p'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => 'body, p'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => 'body, p'
            ],
        ],
    ],
    'base_heading_sep' => [
        'type'              => 'custom',
        'section'           => 'base_typo_section',
        'label'             => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Heading', 'bizness' ) . '</h3>',
        'priority'          => 20
    ],
    'base_heading_typography' => [
        'type'              => 'typography',
        'section'           => 'base_typo_section',
        'priority'          => 20,
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => '',
            'variant'           => '',
            'font-style'        => '',
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
            'text-transform'    => 'none',
        ],
        'output'            => [
            [
                'element'       => 'h1,h2,h3,h4,h5,h6'
            ],
        ]
    ],
    'base_heading_md_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'base_typo_section',
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
                'element'       => 'h1,h2,h3,h4,h5,h6'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => 'h1,h2,h3,h4,h5,h6'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => 'h1,h2,h3,h4,h5,h6'
            ],
        ],
    ],
    'base_heading_sm_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'base_typo_section',
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
                'element'       => 'h1,h2,h3,h4,h5,h6'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => 'h1,h2,h3,h4,h5,h6'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => 'h1,h2,h3,h4,h5,h6'
            ],
        ],
    ],
    'base_content_sep' => [
        'type'              => 'custom',
        'section'           => 'base_typo_section',
        'label'             => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Content', 'bizness' ) . '</h3>',
        'priority'          => 25
    ],
    'base_content_typography' => [
        'type'              => 'typography',
        'section'           => 'base_typo_section',
        'priority'          => 25,
        'transport'         => 'auto',
        'default'           => [
            'font-family'       => '',
            'variant'           => '',
            'font-style'        => '',
            'font-size'         => '',
            'line-height'       => '',
            'letter-spacing'    => '',
            'text-transform'    => 'none',
        ],
        'output'            => [
            [
                'element'       => '.entry-content,.extry-excerpt'
            ],
        ]
    ],
    'base_content_md_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'base_typo_section',
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
        'priority'          => 25,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.entry-content,.extry-excerpt'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.entry-content,.extry-excerpt'
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.entry-content,.extry-excerpt'
            ],
        ],
    ],
    'base_content_sm_typography'  => [
        'type'              => 'dimensions',
        'section'           => 'base_typo_section',
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
        'priority'          => 25,
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'font-size',
	            'property'      => 'font-size',
                'element'       => '.entry-content,.extry-excerpt'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'line-height',
	            'property'      => 'line-height',
                'element'       => '.entry-content,.extry-excerpt'
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'letter-spacing',
	            'property'      => 'letter-spacing',
                'element'       => '.entry-content,.extry-excerpt'
            ],
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}