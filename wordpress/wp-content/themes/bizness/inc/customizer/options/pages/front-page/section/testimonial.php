<?php
/**
 * Add Front Page -> Set Testimonial settings.
 *
 * @package Bizness
 */
$tabs = [
    'desktop'            => [
        'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
        'preview'       => 'desktop',
        'active_tab'    => true,
        'controls'      => [
           'front_page_testimonial_sep_1',
           'front_page_testimonial_heading',
           'front_page_testimonial_sub_heading',
           'front_page_testimonial_sep_2',
           'front_page_testimonial_background',
           'front_page_testimonial_container_padding',
        ]
    ],
    'tablet'            => [
        'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
        'preview'       => 'tablet',
        'active_tab'    => false,
        'controls'      => [
            'front_page_testimonial_sep_2',
            'front_page_testimonial_container_md_padding',
        ]
    ],
    'mobile'            => [
        'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
        'preview'       => 'mobile',
        'active_tab'    => false,
        'controls'      => [
            'front_page_testimonial_sep_2',
            'front_page_testimonial_container_sm_padding',
        ]
    ]
];

for ($i=1; $i <= 3; $i++) { 
    $tabs['desktop']['controls'][] = 'front_page_testimonial_page_'.$i;
    $tabs['desktop']['controls'][] = 'front_page_testimonial_rate_'.$i;
}

$fields = [
    'front_page_testimonial_group_settings' => [
        'type'              => 'group-field',
        'section'           => 'front_page_testimonial_section',
        'priority'          => 5,
        'tabs'              => $tabs,
    ],
    'front_page_testimonial_sep_1' => [
        'type'              => 'custom',
        'section'           => 'front_page_testimonial_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],

    'front_page_testimonial_heading'  => [
        'type'              => 'text',
        'default'           => esc_html__( 'Testimonials', 'bizness' ),
        'label'             => esc_html__( 'Heading', 'bizness' ),
        'section'           => 'front_page_testimonial_section',
        'default'           => '',
        'priority'          => 10
    ],
    
    'front_page_testimonial_sub_heading'  => [
        'type'              => 'textarea',
        'label'             => esc_html__( 'Sub Heading', 'bizness' ),
        'section'           => 'front_page_testimonial_section',
        'default'           => '',
        'priority'          => 10
    ],
    'front_page_testimonial_sep_2' => [
        'type'              => 'custom',
        'section'           => 'front_page_testimonial_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 30
    ],
    'front_page_testimonial_background' => [
        'type'              => 'background',
        'section'           => 'front_page_testimonial_section',
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
                'element'       => '.bizness-testimonials-section',
            ],
        ],
    ],
    'front_page_testimonial_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Seta Set container padding.', 'bizness' ),
        'section'     => 'front_page_testimonial_section',
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
                'element'   => '.bizness-testimonials-section',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.bizness-testimonials-section',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.bizness-testimonials-section',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.bizness-testimonials-section',
            ],
        ],
    ],
    'front_page_testimonial_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Seta Set container padding.', 'bizness' ),
        'section'     => 'front_page_testimonial_section',
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
                'element'       => '.bizness-testimonials-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.bizness-testimonials-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.bizness-testimonials-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.bizness-testimonials-section',
            ],
        ],
    ],
    'front_page_testimonial_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Seta Set container padding.', 'bizness' ),
        'section'     => 'front_page_testimonial_section',
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
                'element'       => '.bizness-testimonials-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.bizness-testimonials-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.bizness-testimonials-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.bizness-testimonials-section',
            ],
        ],
    ],
];

for ($i=1; $i <= 3; $i++) { 
    $fields['front_page_testimonial_page_'.$i] = [
        'type'              => 'dropdown-pages',
        'label'             => sprintf( esc_html__( 'Member Page: %d', 'bizness' ), $i ),
        'section'           => 'front_page_testimonial_section',
        'default'           => '',
        'priority'          => 11
    ];
    // Social Network Facebok
    $fields['front_page_testimonial_rate_'.$i] = [
        'type'              => 'number',
        'label'             => sprintf( esc_html__( 'Rating: %d', 'bizness' ), $i ),
        'section'           => 'front_page_testimonial_section',
        'default'           => 4.5,
        'choices'           => [
            'min'               => 0,
            'max'               => 5,
            'step'              => .5,
        ],
        'priority'          => 11
    ];
}

foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}