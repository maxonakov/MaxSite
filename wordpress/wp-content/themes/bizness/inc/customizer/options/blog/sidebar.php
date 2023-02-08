<?php
/**
 * Add Customizer -> Blog Posts -> Sidebar settings.
 *
 * @package Bizness
 */

$fields = [
    'blog_sidebar_note' => [
        'type'              => 'custom',
        'section'           => 'blog_sidebar_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'Blog Archives', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'blog_sidebar_layout' => [
        'type'        => 'radio-image',
        'label'       => esc_html__( 'Sidebar Layout', 'bizness' ),
        'description' => esc_html__( 'Set default sidebar layout for the blog archive pages.', 'bizness' ),
        'section'     => 'blog_sidebar_section',
        'default'     => 'right',
        'priority'    => 10,
        'choices'     => [
            'left'      => BIZNESS_THEME_URI . 'inc/customizer/assets/images/sidebar/left.svg',
            'right'     => BIZNESS_THEME_URI . 'inc/customizer/assets/images/sidebar/right.svg',
            'none'      => BIZNESS_THEME_URI . 'inc/customizer/assets/images/sidebar/none.svg'
        ],
    ],
    'blog_sidebar_note_one' => [
        'type'              => 'custom',
        'section'           => 'blog_sidebar_section',
        'default'           => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'Single Post', 'bizness' ) . '</h3>',
        'priority'          => 10
    ],
    'post_sidebar_layout' => [
        'type'        => 'radio-image',
        'label'       => esc_html__( 'Sidebar Layout', 'bizness' ),
        'description' => esc_html__( 'Set default sidebar layout for the single post page.', 'bizness' ),
        'section'     => 'blog_sidebar_section',
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