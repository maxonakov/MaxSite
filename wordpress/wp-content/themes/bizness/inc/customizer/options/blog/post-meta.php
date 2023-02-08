<?php
/**
 * Add Customizer -> Blog Posts -> Post Meta settings.
 *
 * @package Bizness
 */

$fields = [
    'post_meta_elements' => [
        'type'        => 'sortable',
        'label'       => esc_html__( 'Post Meta', 'bizness' ),
        'description' => esc_html__( 'Enable/disable to show the list of post meta and sort them to re-arrange their order.', 'bizness' ),
        'section'     => 'post_meta_section',
        'default'     => [
            'post-author',
            'post-cats',
            'post-date'
        ],
        'choices'     => [
            'post-author'       => esc_html__( 'Post Author', 'bizness' ),
            'post-date'         => esc_html__( 'Post Date', 'bizness' ),
            'post-cats'         => esc_html__( 'Post Categories', 'bizness' ),
            'post-comments'     => esc_html__( 'post Comments', 'bizness' )
        ],
        'priority'    => 10,
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}