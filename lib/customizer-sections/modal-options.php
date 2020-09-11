<?php
/*
 * Adds a modal section
 */

// Adds the modal section to customizer
$wp_customize->add_section( 'modal-front-page', array(
	'title' => __( 'Modal Options', '100-black-men-ba' ),
	'priority' => 10
));

function theme_slug_sanitize_checkbox( $input ) {

	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}
//add setting to your section
$wp_customize->add_setting( 'modal-checkbox', array(
	'default' => '',
	'sanitize_callback' => 'theme_slug_sanitize_checkbox'
));

$wp_customize->add_control( 'modal-checkbox', array(
	'label' => esc_html__( 'Activate Modal', 'theme_slug' ),
	'section' => 'modal-front-page',
	'settings'	=>	'modal-checkbox',
	'type' => 'checkbox'
));

$wp_customize -> add_setting ( 'modal-image', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'modal-image',
		array (
			'label'             => __('Logo, Two'),
			'section'           => 'modal-front-page',
			'settings'          => 'modal-image',
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Modal Title
$wp_customize->add_setting( 'modalfp-title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'modalfp-title', array(
	'label'	=>	__('Add modal title', '100-black-men-ba' ),
	'section'	=>	'modal-front-page',
	'settings'	=>	'modalfp-title',
	'type'	=> 'text'
));

// Modal Text Area
$wp_customize->add_setting( 'modalfp-textarea', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'modalfp-textarea', array(
	'label'	=>	__('Add content to modal', '100-black-men-ba' ),
	'section'	=>	'modal-front-page',
	'settings'	=>	'modalfp-textarea',
	'type'	=> 'textarea'
));




