<?php
/**
 * Add Front Page General settings.
 *
 * @package Bizness
 */

$fields = [
    'front_page_setup' => [
        'type'              => 'custom',
        'section'           => 'front_page_content_section',
        'default'           => '<h3 data-type="section" data-id="static_front_page" class="customizer-focus" style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0;padding: 8px 12px;background: #fff;">' . esc_html__( 'Static Home Page &raquo;', 'bizness' ) . '</h3>',
        'description'       => esc_html__( 'Note:- Need to create a page with template as Front Page. Then you can set your static home page through customizer.', 'bizness' ),
        'priority'          => 10
    ],
    'front_page_content_elements'  => [
        'type'              => 'sortable',
        'section'           => 'front_page_content_section',
        'default'           => ['featured-slider','about-us','services','cta','blog','testimonial'],
        'choices'           => [
            'featured-slider'       => esc_html__( 'Featured Slider', 'bizness' ),
            'services'              => esc_html__( 'Services', 'bizness' ),
            'about-us'              => esc_html__( 'About Us', 'bizness' ),
            'cta'                   => esc_html__( 'Call To Action', 'bizness' ),
            'blog'                  => esc_html__( 'Latest News', 'bizness' ),
            'testimonial'           => esc_html__( 'Testimonials', 'bizness' )
        ],
        'priority'          => 20
    ],
];
foreach ( $fields as $field_id => $field_args ) {
    // Settings
    $field_args['settings'] = str_replace( '-', '_', $field_id );

    Kirki::add_field( 'bizness', $field_args );
}