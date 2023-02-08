<?php
/**
 * Add Footer Widget 1 element settings.
 *
 * @package Bizness
 */

$fields = [
    'footer_widget_1_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'footer_widget_1_element_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'footer_widget_1_sep_2',
                    'footer_widget_1_container_padding',
                    'footer_widget_1_container_margin'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'footer_widget_1_sep_2',
                    'footer_widget_1_container_md_padding',
                    'footer_widget_1_container_md_margin'

                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'footer_widget_1_sep_2',
                    'footer_widget_1_container_sm_padding',
                    'footer_widget_1_container_sm_margin'
                ]
            ]
        ],
    ],
    'footer_widget_1_sep_2' => [
        'type'              => 'custom',
        'section'           => 'footer_widget_1_element_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'footer_widget_1_container_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'footer_widget_1_element_section',
        'priority'    => 10,
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
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'choice'    => 'padding-bottom',
                'property'  => 'padding-bottom',
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'choice'    => 'padding-left',
                'property'  => 'padding-left',
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'choice'    => 'padding-right',
                'property'  => 'padding-right',
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
        ],
    ],
    'footer_widget_1_container_md_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'footer_widget_1_element_section',
        'priority'    => 10,
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
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
        ],
    ],
    'footer_widget_1_container_sm_padding' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Padding', 'bizness' ),
        'description' => esc_html__( 'Set container padding.', 'bizness' ),
        'section'     => 'footer_widget_1_element_section',
        'priority'    => 10,
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
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-bottom',
                'property'      => 'padding-bottom',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-left',
                'property'      => 'padding-left',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'padding-right',
                'property'      => 'padding-right',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
        ],
    ],
    'footer_widget_1_container_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set container margin.', 'bizness' ),
        'section'     => 'footer_widget_1_element_section',
        'priority'    => 10,
        'default'     => [
            'margin-top'    => '',
            'margin-bottom' => '',
            'margin-left'   => '',
            'margin-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'margin-top'    => esc_html__( 'Top', 'bizness' ),
                'margin-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'margin-left'   => esc_html__( 'Left', 'bizness' ),
                'margin-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'choice'    => 'margin-top',
                'property'  => 'margin-top',
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'choice'    => 'margin-bottom',
                'property'  => 'margin-bottom',
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'choice'    => 'margin-left',
                'property'  => 'margin-left',
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'choice'    => 'margin-right',
                'property'  => 'margin-right',
                'element'   => '.site-footer .footer-widget-1-wrap',
            ],
        ],
    ],
    'footer_widget_1_container_md_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set container margin.', 'bizness' ),
        'section'     => 'footer_widget_1_element_section',
        'priority'    => 10,
        'default'     => [
            'margin-top'    => '',
            'margin-bottom' => '',
            'margin-left'   => '',
            'margin-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'margin-top'    => esc_html__( 'Top', 'bizness' ),
                'margin-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'margin-left'   => esc_html__( 'Left', 'bizness' ),
                'margin-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-top',
                'property'      => 'margin-top',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 768px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
        ],
    ],
    'footer_widget_1_container_sm_margin' => [
        'type'        => 'dimensions',
        'label'       => esc_html__( 'Margin', 'bizness' ),
        'description' => esc_html__( 'Set container margin.', 'bizness' ),
        'section'     => 'footer_widget_1_element_section',
        'priority'    => 10,
        'default'     => [
            'margin-top'    => '',
            'margin-bottom' => '',
            'margin-left'   => '',
            'margin-right'  => '',
        ],
        'choices'     => [
            'labels'    => [
                'margin-top'    => esc_html__( 'Top', 'bizness' ),
                'margin-bottom' => esc_html__( 'Bottom', 'bizness' ),
                'margin-left'   => esc_html__( 'Left', 'bizness' ),
                'margin-right'  => esc_html__( 'Right', 'bizness' ),
            ],
        ],
        'transport'         => 'auto',
        'output'            => [
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-top',
                'property'      => 'margin-top',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-bottom',
                'property'      => 'margin-bottom',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-left',
                'property'      => 'margin-left',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
            [
                'media_query'   => '@media (max-width: 576px)',
                'choice'        => 'margin-right',
                'property'      => 'margin-right',
                'element'       => '.site-footer .footer-widget-1-wrap',
            ],
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}