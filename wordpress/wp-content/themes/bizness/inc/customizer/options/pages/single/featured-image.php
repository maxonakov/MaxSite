<?php
/**
 * Add Customizer -> Single Page -> Featured Image settings.
 *
 * @package Bizness
 */

$fields = [
    'single_page_image_placeholder_enable' => [
        'type'        => 'toggle',
        'label'       => esc_html__( 'Featured Image Placeholder', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable single page featured image placeholder if no featured image is found for post.', 'bizness' ),
        'section'     => 'single_page_image_section',
        'default'     => false,
        'priority'    => 10,
    ],
    'single_page_image_size' => [
        'type'              => 'select',
        'label'             => esc_html__( 'Featured Image Size', 'bizness' ),
        'section'           => 'single_page_image_section',
        'description'       => esc_html__( 'Set post featured image size by selecting options.', 'bizness' ),
        'priority'          => 15,
        'default'           => 'medium_large',
        'choices'           => [
            'thumbnail'         => esc_html__( 'Small', 'bizness' ),
            'medium'            => esc_html__( 'Medium', 'bizness' ),
            'medium_large'      => esc_html__( 'Medium Large', 'bizness' ),
            'large'             => esc_html__( 'Large', 'bizness' ),
            'full'              => esc_html__( 'Original', 'bizness' )
        ],
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}