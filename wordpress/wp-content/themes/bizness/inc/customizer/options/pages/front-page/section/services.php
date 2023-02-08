<?php
/**
 * Add Front Page -> Services settings.
 *
 * @package Bizness
 */
$settings = array(
	'desktop' => array(
		'nicename'   => esc_html__( '&gt; 1200px', 'bizness' ),
		'preview'    => 'desktop',
		'active_tab' => true,
		'controls'   => array(
			'front_page_service_sep_1',
			'front_page_service_heading',
			'front_page_service_sub_heading',
			'front_page_service_btn_sep',
			'front_page_service_button_setting_inherit',
			'front_page_service_button_text',
			'front_page_service_button_link',
			'front_page_service_button_url_open',
			'front_page_service_button_border_radius',
			'front_page_service_sep_2',
			'front_page_service_background',
			'front_page_service_container_padding',
		),
	),
	'tablet'  => array(
		'nicename'   => esc_html__( '&gt; 768px', 'bizness' ),
		'preview'    => 'tablet',
		'active_tab' => false,
		'controls'   => array(
			'front_page_service_sep_2',
			'front_page_service_container_md_padding',
		),
	),
	'mobile'  => array(
		'nicename'   => esc_html__( '&lt; 576px', 'bizness' ),
		'preview'    => 'mobile',
		'active_tab' => false,
		'controls'   => array(
			'front_page_service_sep_2',
			'front_page_service_container_sm_padding',
		),
	),
);

for ( $i = 1; $i <= 3; $i++ ) {
	$settings['desktop']['controls'][] = 'front_page_service_page_' . $i;
	$settings['desktop']['controls'][] = 'front_page_service_icon_' . $i;
}

$fields = array(
	'front_page_service_group_settings'         => array(
		'type'     => 'group-field',
		'section'  => 'front_page_service_section',
		'priority' => 5,
		'tabs'     => $settings,
	),
	'front_page_service_sep_1'                  => array(
		'type'     => 'custom',
		'section'  => 'front_page_service_section',
		'default'  => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTENT', 'bizness' ) . '</h3>',
		'priority' => 10,
	),
	'front_page_service_heading'                => array(
		'type'     => 'text',
		'default'  => esc_html__( 'Why Us?', 'bizness' ),
		'label'    => esc_html__( 'Heading', 'bizness' ),
		'section'  => 'front_page_service_section',
		'default'  => '',
		'priority' => 10,
	),
	'front_page_service_sub_heading'            => array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Sub Heading', 'bizness' ),
		'section'  => 'front_page_service_section',
		'default'  => '',
		'priority' => 10,
	),
	'front_page_service_btn_sep'                => array(
		'type'     => 'custom',
		'section'  => 'front_page_service_section',
		'default'  => '<h3 style="border-width:1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 8px 0;">' . esc_html__( 'Button', 'bizness' ) . '</h3>',
		'priority' => 25,
	),
	'front_page_service_button_setting_inherit' => array(
		'type'        => 'custom',
		'section'     => 'front_page_service_section',
		'default'     => '<h3 data-type="section" data-id="general_button_section" class="customizer-focus" style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0;padding: 8px 12px;background: #fff;">' . esc_html__( 'Default Settings &raquo;', 'bizness' ) . '</h3>',
		'description' => esc_html__( 'INFO:- Default settings inherit from global&raquo;button. Set below settings to override default one.', 'bizness' ),
		'priority'    => 25,
	),
	'front_page_service_button_text'            => array(
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'bizness' ),
		'section'  => 'front_page_service_section',
		'priority' => 25,
		'default'  => esc_html__( 'See All Services', 'bizness' ),
	),
	'front_page_service_button_link'            => array(
		'type'     => 'url',
		'label'    => esc_html__( 'link', 'bizness' ),
		'section'  => 'front_page_service_section',
		'priority' => 25,
		'default'  => '#',
	),
	'front_page_service_button_url_open'        => array(
		'type'     => 'radio',
		'label'    => esc_html__( 'Link Open', 'bizness' ),
		'section'  => 'front_page_service_section',
		'default'  => '_self',
		'priority' => 25,
		'choices'  => array(
			'_self'  => esc_html__( 'Self Window Tab', 'bizness' ),
			'_blank' => esc_html__( 'New Window Tab', 'bizness' ),
		),
	),
	'front_page_service_button_sep_three'       => array(
		'type'     => 'custom',
		'section'  => 'front_page_service_section',
		'default'  => '<h3 style="border-width:0 0 1px 0; border-style: solid; border-color: #dddddd; margin:0; padding: 0;"></h3>',
		'priority' => 25,
	),
	'front_page_service_button_border_radius'   => array(
		'type'        => 'slider',
		'label'       => esc_html__( 'Border Radius', 'bizness' ),
		'description' => esc_html__( 'Set button border radius', 'bizness' ),
		'section'     => 'front_page_service_section',
		'default'     => '',
		'choices'     => array(
			'min'    => 0,
			'max'    => 100,
			'step'   => 1,
			'suffix' => 'px',
		),
		'priority'    => 25,
		'transport'   => 'auto',
		'output'      => array(
			array(
				'property' => 'border-radius',
				'element'  => '.bizness-service-section .bizness-button-wrapper a.bizness-btn-primary',
				'suffix'   => 'px',
			),
		),
	),
	'front_page_service_sep_2'                  => array(
		'type'     => 'custom',
		'section'  => 'front_page_service_section',
		'default'  => '<h3 style="border-width:1px 0;border-style: solid;border-color: #fff;margin:0 -11px;padding: 8px 12px;background: #fff;">' . esc_html__( 'CONTAINER SETTING', 'bizness' ) . '</h3>',
		'priority' => 30,
	),
	'front_page_service_background'             => array(
		'type'      => 'background',
		'section'   => 'front_page_service_section',
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
				'element' => '.bizness-service-section',
			),
		),
	),
	'front_page_service_container_padding'      => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set container padding.', 'bizness' ),
		'section'     => 'front_page_service_section',
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
				'element'  => '.bizness-service-section',
			),
			array(
				'choice'   => 'padding-bottom',
				'property' => 'padding-bottom',
				'element'  => '.bizness-service-section',
			),
			array(
				'choice'   => 'padding-left',
				'property' => 'padding-left',
				'element'  => '.bizness-service-section',
			),
			array(
				'choice'   => 'padding-right',
				'property' => 'padding-right',
				'element'  => '.bizness-service-section',
			),
		),
	),
	'front_page_service_container_md_padding'   => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set container padding.', 'bizness' ),
		'section'     => 'front_page_service_section',
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
				'element'     => '.bizness-service-section',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.bizness-service-section',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-left',
				'property'    => 'padding-left',
				'element'     => '.bizness-service-section',
			),
			array(
				'media_query' => '@media (max-width: 768px)',
				'choice'      => 'padding-right',
				'property'    => 'padding-right',
				'element'     => '.bizness-service-section',
			),
		),
	),
	'front_page_service_container_sm_padding'   => array(
		'type'        => 'dimensions',
		'label'       => esc_html__( 'Padding', 'bizness' ),
		'description' => esc_html__( 'Set container padding.', 'bizness' ),
		'section'     => 'front_page_service_section',
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
				'element'     => '.bizness-service-section',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-bottom',
				'property'    => 'padding-bottom',
				'element'     => '.bizness-service-section',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-left',
				'property'    => 'padding-left',
				'element'     => '.bizness-service-section',
			),
			array(
				'media_query' => '@media (max-width: 576px)',
				'choice'      => 'padding-right',
				'property'    => 'padding-right',
				'element'     => '.bizness-service-section',
			),
		),
	),
);

for ( $i = 1; $i <= 3; $i++ ) {
	$fields[ 'front_page_service_page_' . $i ] = array(
		'type'     => 'dropdown-pages',
		'label'    => sprintf( esc_html__( 'Service Page: %d', 'bizness' ), $i ),
		'section'  => 'front_page_service_section',
		'default'  => '',
		'priority' => 11,
	);
	// Service Icon
	$fields[ 'front_page_service_icon_' . $i ] = array(
		'type'        => 'text',
		'label'       => esc_html__( 'Service Icon', 'bizness' ),
		'description' => sprintf( __( '<a href="%s" target="_blank">Refer here</a> for icon class. For example: <strong>far fa-file</strong>. Default featured image will display if filed is empty.', 'bizness' ), 'https://fontawesome.com/v5/icons/file?s=regular' ),
		'section'     => 'front_page_service_section',
		'default'     => '',
		'priority'    => 11,
	);
}
foreach ( $fields as $field_id => $field_args ) {
	// Settings
	$field_args['settings'] = str_replace( '-', '_', $field_id );

	Kirki::add_field( 'bizness', $field_args );
}
