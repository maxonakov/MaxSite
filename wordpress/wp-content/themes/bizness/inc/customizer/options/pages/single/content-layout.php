<?php
/**
 * Add Customizer -> Single Page -> Content Layout settings.
 *
 * @package Bizness
 */

$fields = [
    'single_page_content_layout_group_fields' => [
        'type'              => 'group-field',
        'section'           => 'single_page_content_layout_section',
        'priority'          => 5,
        'tabs'              => [
            'desktop'            => [
                'nicename'      => esc_html__( '&gt; 1200px', 'bizness' ),
                'preview'       => 'desktop',
                'active_tab'    => true,
                'controls'      => [
                    'single_page_content_elements_sep',
                    'single_page_content_elements',
                    'single_page_content_elements_gap',
                    'single_page_after_content_elements_sep',
                    'single_page_after_content_elements'
                ]
            ],
            'tablet'            => [
                'nicename'      => esc_html__( '&gt; 768px', 'bizness' ),
                'preview'       => 'tablet',
                'active_tab'    => false,
                'controls'      => [
                    'single_page_content_elements_sep',
                    'single_page_content_md_elements_gap'
                ]
            ],
            'mobile'            => [
                'nicename'      => esc_html__( '&lt; 576px', 'bizness' ),
                'preview'       => 'mobile',
                'active_tab'    => false,
                'controls'      => [
                    'single_page_content_elements_sep',
                    'single_page_content_sm_elements_gap'
                ]
            ]
        ],
    ],
    'single_page_content_elements_sep' => [
        'type'              => 'custom',
        'section'           => 'single_page_content_layout_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],

    'single_page_content_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable single page content elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_page_content_layout_section',
        'default'     => [
            'post-image',
            'post-title',
            'post-content'
        ],
        'choices'     => [
            'post-image'    => esc_html__( 'Featured Image', 'bizness' ),
            'post-title'    => esc_html__( 'Title', 'bizness' ),
            'post-content'  => esc_html__( 'Content', 'bizness' ),
        ],
        'priority'    => 10,
    ],
    'single_page_content_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single page content elements.', 'bizness' ),
        'section'           => 'single_page_content_layout_section',
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
                'element'   => '.page .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'  => 'margin-bottom',
                'suffix'    => 'px'
            ],
        ],
    ],
    'single_page_content_md_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single page content elements.', 'bizness' ),
        'section'           => 'single_page_content_layout_section',
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
                'element'       => '.page .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_page_content_sm_elements_gap' => [
        'type'              => 'slider',
        'label'             => esc_html__( 'Gap', 'bizness' ),
        'description'       => esc_html__( 'Set gap between each elements of single page content elements.', 'bizness' ),
        'section'           => 'single_page_content_layout_section',
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
                'element'       => '.page .section-post-container .entry-content-wrap >*.content-element:not(:last-child)',
                'property'      => 'margin-bottom',
                'suffix'        => 'px'
            ],
        ],
    ],
    'single_page_after_content_elements_sep' => [
        'type'              => 'custom',
        'section'           => 'single_page_content_layout_section',
        'default'           => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'AFTER CONTENT', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'single_page_after_content_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Elements', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable single page after content elements and re-arrange their orders by sorting them.', 'bizness' ),
        'section'     => 'single_page_content_layout_section',
        'default'     => [
            'comments'
        ],
        'choices'     => [
            'comments'      => esc_html__( 'Comments', 'bizness' )
        ],
        'priority'    => 10,
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}