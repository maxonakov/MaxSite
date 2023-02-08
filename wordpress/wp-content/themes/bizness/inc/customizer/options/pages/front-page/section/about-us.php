<?php
/**
 * Add Front Page -> About Us settings.
 *
 * @package Bizness
 */

$fields = [
    'front_page_about_group_settings' => [
        'type'              => 'group-field',
        'section'           => 'front_page_about_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                   'front_page_about_sep_1',
                   'front_page_about_us_page',
                   'front_page_about_image_2',
                   'front_page_about_btn_sep',
                   'front_page_about_button_setting_inherit',
                   'front_page_about_button_text',
                   'front_page_about_sep_2',
                   'front_page_about_background',
                   'front_page_about_container_padding',
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'front_page_about_sep_2',
                    'front_page_about_container_md_padding',
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'front_page_about_sep_2',
                    'front_page_about_container_sm_padding',
                ]
            ]
        ],
    ],
    'front_page_about_sep_1' => [
        'type'              => 'custom',
        'section'           => 'front_page_about_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'front_page_about_us_page'  => array(
		'type'              => 'dropdown-pages',
		'label'             => esc_html__( 'Select Page', 'bizness' ),
		'section'           => 'front_page_about_section',
		'default'           => '2',
		'priority'          => 10,
	),
    
    'front_page_about_image_2' => [
        'type'        => 'image',
        'label'       => esc_html__( 'Featured Image 2', 'bizness' ),
        'section'     => 'front_page_about_section',
        'default'     => '',
        'priority'    => 10,
    ],
    'front_page_about_btn_sep' => [
        'type'              => 'custom',
        'section'           => 'front_page_about_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Button', 'bizness' ) . '</h3>',
        'priority'          => 25
    ],
    'front_page_about_button_setting_inherit' => [
        'type'              => 'custom',
        'section'           => 'front_page_about_section',
        'default'           => '<h3 data-type="section" data-id="general_button_section" class="customizer-focus" style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0;padding: 8px 12px;background: #fff;">' . esc_html__( 'Default Settings &raquo;', 'bizness' ) . '</h3>',
        'description'       => esc_html__( 'INFO:- Default settings inherit from global&raquo;button. Set below settings to override default one.', 'bizness' ),
        'priority'          => 25
    ],
    'front_page_about_button_text' => [
        'type'              => 'text',
        'label'             => esc_html__( 'Text', 'bizness' ),
        'section'           => 'front_page_about_section',
        'priority'          => 25,
        'default'           => esc_html__( 'Learn More', 'bizness' ),
    ],
    'front_page_about_sep_2' => [
        'type'              => 'custom',
        'section'           => 'front_page_about_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 30
    ],
    'front_page_about_background' => [
        'type'              => 'background',
        'section'           => 'front_page_about_section',
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
                'element'       => '.bizness-about-section',
            ],
        ]
    ],
    'front_page_about_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'front_page_about_section',
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
                'element'   => '.bizness-about-section',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.bizness-about-section',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.bizness-about-section',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.bizness-about-section',
            ],
        ],
    ],
    'front_page_about_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'front_page_about_section',
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
                'element'       => '.bizness-about-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.bizness-about-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.bizness-about-section',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.bizness-about-section',
            ],
        ],
    ],
    'front_page_about_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'front_page_about_section',
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
                'element'       => '.bizness-about-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.bizness-about-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.bizness-about-section',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.bizness-about-section',
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}