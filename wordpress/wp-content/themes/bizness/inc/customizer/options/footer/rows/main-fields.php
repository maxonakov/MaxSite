<?php
/**
 * Add Customizer -> Footer -> Footer Rows -> Main Row settings.
 *
 * @package Bizness
 */

$fields = array(
	'footer_main_group_fields'       => array(
		'type'     => 'group-field',
		'section'  => 'footer_main_section',
		'priority' => 5,
		'tabs'     => array(
			'desktop' => array(
				'nicename'   => esc_html__( '&gt; 1200px', 'bizness' ),
				'preview'    => 'desktop',
				'active_tab' => true,
				'controls'   => array(
					'footer_main_left_elements',
					'footer_main_center_elements',
					'footer_main_right_elements',
					'footer_main_background',
					'footer_main_section_padding',
				),
			),
			'tablet'  => array(
				'nicename'   => esc_html__( '&gt; 768px', 'bizness' ),
				'preview'    => 'tablet',
				'active_tab' => false,
				'controls'   => array(
					'footer_main_section_md_padding',
				),
			),
			'mobile'  => array(
				'nicename'   => esc_html__( '&lt; 576px', 'bizness' ),
				'preview'    => 'mobile',
				'active_tab' => false,
				'controls'   => array(
					'footer_main_section_sm_padding',
				),
			),
		),
	),
	'footer_main_left_elements'      => array(
		'type'              => 'repeater',
		'label'             => esc_html__( 'Left Elements', 'bizness' ),
		'description'       => esc_html__( 'Click button to add new elements on lef column of main footer section and re-arrange element orders by sorting them.', 'bizness' ),
		'section'           => 'footer_main_section',
		'row_label'         => array(
			'type'  => 'field',
			'value' => esc_html__( 'Element', 'bizness' ),
			'field' => 'element_id',
		),
		'footer_main_label' => esc_html__( 'Add Element', 'bizness' ),
		'default'           => array(
			array(
				'element_id' => 'copyright',
			),
		),
		'fields'            => array(
			'element_id' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Selected Element', 'bizness' ),
				'default' => 'none',
				'choices' => array(
					'none'      => esc_html__( 'None', 'bizness' ),
					'copyright' => esc_html__( 'Copyright', 'bizness' ),
					'menu_1'    => esc_html__( 'Footer Menu', 'bizness' ),
					'social'    => esc_html__( 'Social', 'bizness' ),
					'button'    => esc_html__( 'Button', 'bizness' ),
					'html_1'    => esc_html__( 'HTML', 'bizness' ),
					'widget_1'  => esc_html__( 'Widget Area 1', 'bizness' ),
					'widget_2'  => esc_html__( 'Widget Area 2', 'bizness' ),
					'widget_3'  => esc_html__( 'Widget Area 3', 'bizness' ),
					'widget_4'  => esc_html__( 'Widget Area 4', 'bizness' ),
					'widget_5'  => esc_html__( 'Widget Area 5', 'bizness' ),
					'widget_6'  => esc_html__( 'Widget Area 6', 'bizness' ),
				),
			),
		),
		'priority'          => 10,
	),
	'footer_main_center_elements'    => array(
		'type'              => 'repeater',
		'label'             => esc_html__( 'Center Elements', 'bizness' ),
		'description'       => esc_html__( 'Click button to add new elements on center column of main footer section and re-arrange element orders by sorting them.', 'bizness' ),
		'section'           => 'footer_main_section',
		'row_label'         => array(
			'type'  => 'field',
			'value' => esc_html__( 'Element', 'bizness' ),
			'field' => 'element_id',
		),
		'footer_main_label' => esc_html__( 'Add Element', 'bizness' ),
		'fields'            => array(
			'element_id' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Selected Element', 'bizness' ),
				'default' => 'none',
				'choices' => array(
					'none'      => esc_html__( 'None', 'bizness' ),
					'copyright' => esc_html__( 'Copyright', 'bizness' ),
					'menu_1'    => esc_html__( 'Footer Menu', 'bizness' ),
					'social'    => esc_html__( 'Social', 'bizness' ),
					'button'    => esc_html__( 'Button', 'bizness' ),
					'html_1'    => esc_html__( 'HTML', 'bizness' ),
					'widget_1'  => esc_html__( 'Widget Area 1', 'bizness' ),
					'widget_2'  => esc_html__( 'Widget Area 2', 'bizness' ),
					'widget_3'  => esc_html__( 'Widget Area 3', 'bizness' ),
					'widget_4'  => esc_html__( 'Widget Area 4', 'bizness' ),
					'widget_5'  => esc_html__( 'Widget Area 5', 'bizness' ),
					'widget_6'  => esc_html__( 'Widget Area 6', 'bizness' ),
				),
			),
		),
		'priority'          => 10,
	),
	'footer_main_right_elements'     => array(
		'type'              => 'repeater',
		'label'             => esc_html__( 'Right Elements', 'bizness' ),
		'description'       => esc_html__( 'Click button to add new elements on right column of main footer section and re-arrange element orders by sorting them.', 'bizness' ),
		'section'           => 'footer_main_section',
		'row_label'         => array(
			'type'  => 'field',
			'value' => esc_html__( 'Element', 'bizness' ),
			'field' => 'element_id',
		),
		'footer_main_label' => esc_html__( 'Add Element', 'bizness' ),
		'fields'            => array(
			'element_id' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Selected Element', 'bizness' ),
				'default' => 'none',
				'choices' => array(
					'none'      => esc_html__( 'None', 'bizness' ),
					'copyright' => esc_html__( 'Copyright', 'bizness' ),
					'menu_1'    => esc_html__( 'Footer Menu', 'bizness' ),
					'social'    => esc_html__( 'Social', 'bizness' ),
					'button'    => esc_html__( 'Button', 'bizness' ),
					'html_1'    => esc_html__( 'HTML', 'bizness' ),
					'widget_1'  => esc_html__( 'Widget Area 1', 'bizness' ),
					'widget_2'  => esc_html__( 'Widget Area 2', 'bizness' ),
					'widget_3'  => esc_html__( 'Widget Area 3', 'bizness' ),
					'widget_4'  => esc_html__( 'Widget Area 4', 'bizness' ),
					'widget_5'  => esc_html__( 'Widget Area 5', 'bizness' ),
					'widget_6'  => esc_html__( 'Widget Area 6', 'bizness' ),
				),
			),
		),
		'priority'          => 10,
	),
	'footer_main_background'         => array(
		'type'      => 'background',
		'section'   => 'footer_main_section',
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
				'element' => '.site-footer .site-footer-main-row',
			),
		),
	),
	'footer_main_section_padding'    => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set footer top section top and bottom padding.', 'bizness' ),
		'section'     => 'footer_main_section',
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
				'element'  => '.site-footer .site-footer-main-row',
			),
			array(
				'choice'   => 'padding-bottom',
				'property' => 'padding-bottom',
				'element'  => '.site-footer .site-footer-main-row',
			),
		),
	),
	'footer_main_section_md_padding' => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set footer top section top and bottom padding.', 'bizness' ),
		'section'     => 'footer_main_section',
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
				'element'     => '.site-footer .site-footer-main-row',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.site-footer .site-footer-main-row',
			),
		),
	),
	'footer_main_section_sm_padding' => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set footer top section top and bottom padding.', 'bizness' ),
		'section'     => 'footer_main_section',
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
				'element'     => '.site-footer .site-footer-main-row',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.site-footer .site-footer-main-row',
			),
		),
	),

);
foreach ( $fields as $field_id => $field_args ) {
	// Settings
	$field_args['settings'] = str_replace( '-', '_', $field_id );

	Kirki::add_field( 'bizness', $field_args );
}
