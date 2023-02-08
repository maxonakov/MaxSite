<?php
/**
 * Add Customizer -> Blog Posts -> Post title settings.
 *
 * @package Bizness
 */

$fields = [
    'blog_post_title_html_tag' => [
        'type'              => 'radio_buttonset',
        'label'             => esc_html__( 'HTML Tag', 'bizness' ),
        'section'           => 'blog_post_title_section',
        'description'       => esc_html__( 'Set post title heading html tag.', 'bizness' ),
        'priority'          => 10,
        'default'           => 'h2',
        'choices'           => [
            'h1'                => esc_html__( 'H1', 'bizness' ),
            'h2'                => esc_html__( 'H2', 'bizness' ),
            'h3'                => esc_html__( 'H3', 'bizness' ),
            'h4'                => esc_html__( 'H4', 'bizness' ),
            'h5'                => esc_html__( 'H5', 'bizness' ),
            'h6'                => esc_html__( 'H6', 'bizness' )
        ],
    ],
];

foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}