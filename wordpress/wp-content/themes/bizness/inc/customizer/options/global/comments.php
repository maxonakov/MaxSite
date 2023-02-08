<?php
/**
 * Add Customizer -> General -> Comments settings.
 *
 * @package Bizness
 */

$fields = [
    'comment_elements' => [
        'type'              => 'sortable',
        'label'             => esc_html__( 'Elements', 'bizness' ),
        'section'           => 'general_comments_section',
        'description'       => esc_html__( 'Enable/Disable comment section elements and re-arrange their orders by sorting theme.', 'bizness' ),
        'default'           => ['comment-list','comment-response'],
        'choices'           => [
            'comment-list'      => esc_html__( 'Comment List', 'bizness' ),
            'comment-response'  => esc_html__( 'Comment Form', 'bizness' ),
        ],
        'priority'      => 10,
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}