<?php
/**
 * Add Customizer -> Pages -> Sidebar settings.
 *
 * @package Bizness
 */

$fields = [
    'pages_sidebar_note' => [
        'type'              => 'custom',
        'section'           => 'pages_sidebar_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'Single Page', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'page_sidebar_layout' => [
        'type'        => 'radio-image',
        'label'       => esc_html__( 'Sidebar Layout', 'bizness' ),
        'description' => esc_html__( 'Set default sidebar layout for single page.', 'bizness' ),
        'section'     => 'pages_sidebar_section',
        'default'     => 'right',
        'priority'    => 10,
        'choices'     => [
            'left'      => BIZNESS_THEME_URI . 'inc/customizer/assets/images/sidebar/left.svg',
            'right'     => BIZNESS_THEME_URI . 'inc/customizer/assets/images/sidebar/right.svg',
            'none'      => BIZNESS_THEME_URI . 'inc/customizer/assets/images/sidebar/none.svg'
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}