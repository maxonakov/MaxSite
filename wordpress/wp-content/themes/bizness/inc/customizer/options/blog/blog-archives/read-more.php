<?php
/**
 * Add Customizer -> Blog Posts -> Read More Button settings.
 *
 * @package Bizness
 */

$fields = [
    'blog_post_read_more_btn_note' => [
        'type'              => 'custom',
        'section'           => 'blog_read_more_btn_section',
        'description'       => '<p style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'NOTE:- All design related settings will be inherit from global -> button.', 'bizness' ) . '</p>',
        'priority'          => 10
    ],
    'blog_post_read_more_btn_type' => [
        'type'              => 'radio_buttonset',
        'label'             => esc_html__( 'Button Type', 'bizness' ),
        'section'           => 'blog_read_more_btn_section',
        'priority'          => 10,
        'default'           => 'link',
        'choices'           => [
            'link'              => esc_html__( 'Simple', 'bizness' ),
            'info'              => esc_html__( 'Background', 'bizness' ),
            'outline-info'      => esc_html__( 'Outline', 'bizness' )
        ],
    ]
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );
    Kirki::add_field( 'bizness', $field_args );
}