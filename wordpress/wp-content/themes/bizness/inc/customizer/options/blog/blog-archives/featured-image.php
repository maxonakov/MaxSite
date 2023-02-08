<?php
/**
 * Add Customizer -> Blog Posts -> Featured Image settings.
 *
 * @package Bizness
 */
$fields = [
    'blog_post_image_placeholder_enable' => [
        'type'        => 'toggle',
        'label'       => esc_html__( 'Featured Image Placeholder', 'bizness' ),
        'description' => esc_html__( 'Toggle to enable/disable blog post featured image placeholder if no featured image is found for post.', 'bizness' ),
        'section'     => 'blog_featured_image_section',
        'default'     => false,
        'priority'    => 10,
    ],
    'blog_post_image_size' => [
        'type'              => 'select',
        'label'             => esc_html__( 'Featured Image Size', 'bizness' ),
        'section'           => 'blog_featured_image_section',
        'description'       => esc_html__( 'Set blog post featured image size by selecting options.', 'bizness' ),
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