<?php
/**
 * Add Front Page -> Featured Slider settings.
 *
 * @package Bizness
 */

$fields = array(
	'front_page_cta_group_settings'         => array(
		'type'     => 'group-field',
		'section'  => 'front_page_cta_section',
		'priority' => 5,
		'tabs'     => array(
			'desktop' => array(
				'nicename'   => esc_html__( '&gt; 1200px', 'bizness' ),
				'preview'    => 'desktop',
				'active_tab' => true,
				'controls'   => array(
					'front_page_cta_sep_1',
					'front_page_cta_page',
					'front_page_cta_btn_sep',
					'front_page_cta_button_setting_inherit',
					'front_page_cta_button_text',
					'front_page_cta_button_padding',
					'front_page_cta_sep_2',
					'front_page_cta_background',
					'front_page_cta_container_padding',
				),
			),
			'tablet'  => array(
				'nicename'   => esc_html__( '&gt; 768px', 'bizness' ),
				'preview'    => 'tablet',
				'active_tab' => false,
				'controls'   => array(
					'front_page_cta_sep_2',
					'front_page_cta_container_md_padding',
				),
			),
			'mobile'  => array(
				'nicename'   => esc_html__( '&lt; 576px', 'bizness' ),
				'preview'    => 'mobile',
				'active_tab' => false,
				'controls'   => array(
					'front_page_cta_sep_2',
					'front_page_cta_container_sm_padding',
				),
			),
		),
	),
	'front_page_cta_sep_1'                  => array(
		'type'     => 'custom',
		'section'  => 'front_page_cta_section',
		'default'  => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
		'priority' => 10,
	),

	'front_page_cta_page'                   => array(
		'type'     => 'dropdown-pages',
		'label'    => esc_html__( 'Select Page', 'bizness' ),
		'section'  => 'front_page_cta_section',
		'default'  => '2',
		'priority' => 10,
	),
	'front_page_cta_btn_sep'                => array(
		'type'     => 'custom',
		'section'  => 'front_page_cta_section',
		'default'  => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Button', 'bizness' ) . '</h3>',
		'priority' => 25,
	),
	'front_page_cta_button_setting_inherit' => array(
		'type'        => 'custom',
		'section'     => 'front_page_cta_section',
		'default'     => '<h3 data-type="section" data-id="general_button_section" class="customizer-focus" style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0;padding: 8px 12px;background: #fff;">' . esc_html__( 'Default Settings &raquo;', 'bizness' ) . '</h3>',
		'description' => esc_html__( 'INFO:- Default settings inherit from global&raquo;button. Set below settings to override default one.', 'bizness' ),
		'priority'    => 25,
	),
	'front_page_cta_button_text'            => array(
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'bizness' ),
		'section'  => 'front_page_cta_section',
		'priority' => 25,
		'default'  => esc_html__( 'Read More', 'bizness' ),
	),
	'front_page_cta_sep_2'                  => array(
		'type'     => 'custom',
		'section'  => 'front_page_cta_section',
		'default'  => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
		'priority' => 30,
	),
	'front_page_cta_background'             => array(
		'type'      => 'background',
		'section'   => 'front_page_cta_section',
		'priority'  => 30,
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
				'element' => '.bizness-cta-section',
			),
		),
	),
	'front_page_cta_container_padding'      => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set container padding.', 'bizness' ),
		'section'     => 'front_page_cta_section',
		'priority'    => 30,
		'default'     => array(
			'padding-top'    => '',
			'padding-bottom' => '',
			'padding-left'   => '',
			'padding-right'  => '',
		),
		'choices'     => array(
			'labels' => array(
				'padding-top'    => esc_html__( 'Top', 'bizness' ),
				'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
				'padding-left'   => esc_html__( 'Left', 'bizness' ),
				'padding-right'  => esc_html__( 'Right', 'bizness' ),
			),
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'choice'   => 'padding-top',
				'property' => 'padding-top',
				'element'  => '.bizness-cta-section',
			),
			array(
				'choice'   => 'padding-bottom',
				'property' => 'padding-bottom',
				'element'  => '.bizness-cta-section',
			),
			array(
				'choice'   => 'padding-left',
				'property' => 'padding-left',
				'element'  => '.bizness-cta-section',
			),
			array(
				'choice'   => 'padding-right',
				'property' => 'padding-right',
				'element'  => '.bizness-cta-section',
			),
		),
	),
	'front_page_cta_container_md_padding'   => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set container padding.', 'bizness' ),
		'section'     => 'front_page_cta_section',
		'priority'    => 30,
		'default'     => array(
			'padding-top'    => '',
			'padding-bottom' => '',
			'padding-left'   => '',
			'padding-right'  => '',
		),
		'choices'     => array(
			'labels' => array(
				'padding-top'    => esc_html__( 'Top', 'bizness' ),
				'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
				'padding-left'   => esc_html__( 'Left', 'bizness' ),
				'padding-right'  => esc_html__( 'Right', 'bizness' ),
			),
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-top',
				'property'    => 'padding-top',
				'element'     => '.bizness-cta-section',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.bizness-cta-section',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-left',
				'property'    => 'padding-left',
				'element'     => '.bizness-cta-section',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-right',
				'property'    => 'padding-right',
				'element'     => '.bizness-cta-section',
			),
		),
	),
	'front_page_cta_container_sm_padding'   => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set container padding.', 'bizness' ),
		'section'     => 'front_page_cta_section',
		'priority'    => 30,
		'default'     => array(
			'padding-top'    => '',
			'padding-bottom' => '',
			'padding-left'   => '',
			'padding-right'  => '',
		),
		'choices'     => array(
			'labels' => array(
				'padding-top'    => esc_html__( 'Top', 'bizness' ),
				'padding-bottom' => esc_html__( 'Bottom', 'bizness' ),
				'padding-left'   => esc_html__( 'Left', 'bizness' ),
				'padding-right'  => esc_html__( 'Right', 'bizness' ),
			),
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-top',
				'property'    => 'padding-top',
				'element'     => '.bizness-cta-section',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.bizness-cta-section',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-left',
				'property'    => 'padding-left',
				'element'     => '.bizness-cta-section',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-right',
				'property'    => 'padding-right',
				'element'     => '.bizness-cta-section',
			),
		),
	),
);
foreach ( $fields as $field_id => $field_args ) {
	// Settings
	$field_args['settings'] = str_replace( '-', '_', $field_id );

	Kirki::add_field( 'bizness', $field_args );
}
