<?php
/**
 * Add Customizer -> Header -> Header Rows -> Main Row settings.
 *
 * @package Bizness
 */

$fields = array(
	'header_main_group_fields'       => array(
		'type'     => 'group-field',
		'section'  => 'header_main_section',
		'priority' => 5,
		'tabs'     => array(
			'desktop' => array(
				'nicename'   => esc_html__( '&gt; 1200px', 'bizness' ),
				'preview'    => 'desktop',
				'active_tab' => true,
				'controls'   => array(
					'header_main_left_elements',
					'header_main_center_elements',
					'header_main_right_elements',
					'header_main_background',
					'header_main_section_padding',
				),
			),
			'tablet'  => array(
				'nicename'   => esc_html__( '&gt; 768px', 'bizness' ),
				'preview'    => 'tablet',
				'active_tab' => false,
				'controls'   => array(
					'header_main_section_md_padding',
				),
			),
			'mobile'  => array(
				'nicename'   => esc_html__( '&lt; 576px', 'bizness' ),
				'preview'    => 'mobile',
				'active_tab' => false,
				'controls'   => array(
					'header_main_section_sm_padding',
				),
			),
		),
	),
	'header_main_left_elements'      => array(
		'type'              => 'repeater',
		'label'             => esc_html__( 'Left Elements', 'bizness' ),
		'description'       => esc_html__( 'Click button to add new elements on lef column of main header section and re-arrange element orders by sorting them.', 'bizness' ),
		'section'           => 'header_main_section',
		'row_label'         => array(
			'type'  => 'field',
			'value' => esc_html__( 'Element', 'bizness' ),
			'field' => 'element_id',
		),
		'header_main_label' => esc_html__( 'Add Element', 'bizness' ),
		'default'           => array(
			array(
				'element_id' => 'identity',
			),
		),
		'fields'            => array(
			'element_id' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Selected Element', 'bizness' ),
				'default' => 'none',
				'choices' => apply_filters( 'bizness_header_elements', array(
					'none'     => esc_html__( 'None', 'bizness' ),
					'identity' => esc_html__( 'Logo and Title', 'bizness' ),
					'menu_1'   => esc_html__( 'Primary Menu', 'bizness' ),
					'social'   => esc_html__( 'Social', 'bizness' ),
					'search'   => esc_html__( 'Search', 'bizness' ),
					'button'   => esc_html__( 'Button', 'bizness' ),
					'html_1'   => esc_html__( 'HTML', 'bizness' ),
				) ),
			),
		),
		'priority'          => 10,
	),
	'header_main_center_elements'    => array(
		'type'              => 'repeater',
		'label'             => esc_html__( 'Center Elements', 'bizness' ),
		'description'       => esc_html__( 'Click button to add new elements on center column of main header section and re-arrange element orders by sorting them.', 'bizness' ),
		'section'           => 'header_main_section',
		'row_label'         => array(
			'type'  => 'field',
			'value' => esc_html__( 'Element', 'bizness' ),
			'field' => 'element_id',
		),
		'header_main_label' => esc_html__( 'Add Element', 'bizness' ),
		'fields'            => array(
			'element_id' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Selected Element', 'bizness' ),
				'default' => 'none',
				'choices' => apply_filters( 'bizness_header_elements', array(
					'none'     => esc_html__( 'None', 'bizness' ),
					'identity' => esc_html__( 'Logo and Title', 'bizness' ),
					'menu_1'   => esc_html__( 'Primary Menu', 'bizness' ),
					'social'   => esc_html__( 'Social', 'bizness' ),
					'search'   => esc_html__( 'Search', 'bizness' ),
					'button'   => esc_html__( 'Button', 'bizness' ),
					'html_1'   => esc_html__( 'HTML', 'bizness' ),
				) ),
			),
		),
		'priority'          => 10,
	),
	'header_main_right_elements'     => array(
		'type'              => 'repeater',
		'label'             => esc_html__( 'Right Elements', 'bizness' ),
		'description'       => esc_html__( 'Click button to add new elements on right column of main header section and re-arrange element orders by sorting them.', 'bizness' ),
		'section'           => 'header_main_section',
		'row_label'         => array(
			'type'  => 'field',
			'value' => esc_html__( 'Element', 'bizness' ),
			'field' => 'element_id',
		),
		'header_main_label' => esc_html__( 'Add Element', 'bizness' ),
		'default'           => array(
			array(
				'element_id' => 'menu_1',
			),
		),
		'fields'            => array(
			'element_id' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Selected Element', 'bizness' ),
				'default' => 'none',
				'choices' => apply_filters( 'bizness_header_elements', array(
					'none'     => esc_html__( 'None', 'bizness' ),
					'identity' => esc_html__( 'Logo and Title', 'bizness' ),
					'menu_1'   => esc_html__( 'Primary Menu', 'bizness' ),
					'social'   => esc_html__( 'Social', 'bizness' ),
					'search'   => esc_html__( 'Search', 'bizness' ),
					'button'   => esc_html__( 'Button', 'bizness' ),
					'html_1'   => esc_html__( 'HTML', 'bizness' ),
				) ),
			),
		),
		'priority'          => 10,
	),
	'header_main_background'         => array(
		'type'      => 'background',
		'section'   => 'header_main_section',
		'priority'  => 15,
		'default'   => array(
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element' => '.site-header .site-header-main-row',
			),
		),
	),
	'header_main_section_padding'    => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set header top section top and bottom padding.', 'bizness' ),
		'section'     => 'header_main_section',
		'priority'    => 20,
		'default'     => array(
			'padding-top'    => '',
			'padding-bottom' => '',
		),
		'choices'     => array(
			'labels' => array(
				'padding-top'    => esc_html__( 'Top', 'bizness' ),
				'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
			),
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'choice'   => 'padding-top',
				'property' => 'padding-top',
				'element'  => '.site-header .site-header-main-row',
			),
			array(
				'choice'   => 'padding-bottom',
				'property' => 'padding-bottom',
				'element'  => '.site-header .site-header-main-row',
			),
		),
	),
	'header_main_section_md_padding' => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set header top section top and bottom padding.', 'bizness' ),
		'section'     => 'header_main_section',
		'priority'    => 20,
		'default'     => array(
			'padding-top'    => '',
			'padding-bottom' => '',
		),
		'choices'     => array(
			'labels' => array(
				'padding-top'    => esc_html__( 'Top', 'bizness' ),
				'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
			),
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-top',
				'property'    => 'padding-top',
				'element'     => '.site-header .site-header-main-row',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.site-header .site-header-main-row',
			),
		),
	),
	'header_main_section_sm_padding' => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set header top section top and bottom padding.', 'bizness' ),
		'section'     => 'header_main_section',
		'priority'    => 20,
		'default'     => array(
			'padding-top'    => '',
			'padding-bottom' => '',
		),
		'choices'     => array(
			'labels' => array(
				'padding-top'    => esc_html__( 'Top', 'bizness' ),
				'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
			),
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-top',
				'property'    => 'padding-top',
				'element'     => '.site-header .site-header-main-row',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.site-header .site-header-main-row',
			),
		),
	),

);
foreach ( $fields as $field_id => $field_args ) {
	// Settings
	$field_args['settings'] = str_replace( '-', '_', $field_id );

	Kirki::add_field( 'bizness', $field_args );
}
