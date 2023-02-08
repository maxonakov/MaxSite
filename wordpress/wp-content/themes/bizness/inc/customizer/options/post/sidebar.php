<?php
/**
 * Add Customizer -> Single Post -> Sidebar settings.
 *
 * @package Bizness
 */

$fields = [
    'single_post_sidebar' => [
        'type'        => 'radio-image',
        'label'       => esc_html__( 'Sidebar Layout', 'bizness' ),
        'description' => esc_html__( 'Set default sidebar layout.', 'bizness' ),
        'section'     => 'single_post_section',
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