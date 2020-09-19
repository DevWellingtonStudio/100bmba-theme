<?php
/*
 * Adds a modal section
 */

// Adds the modal section to customizer
$wp_customize->add_section( 'side-nav-logo-social', array(
	'title' => __( 'Side Nav Logo &amp; Social', '100-black-men-ba' ),
	'priority' => 10
));


$wp_customize -> add_setting ( 'side-nav-logo', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'side-nav-logo',
		array (
			'label'             => __('Logo'),
			'section'           => 'side-nav-logo-social',
			'settings'          => 'side-nav-logo',
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Modal Title
$wp_customize->add_setting( 'social-media-1', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-1', array(
	'label'	=>	__('Social Media Icon #1', '100-black-men-ba' ),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-1',
	'type'	=> 'text'
));

// Modal Text Area
/*$wp_customize->add_setting( 'modalfp-textarea', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'modalfp-textarea', array(
	'label'	=>	__('Add content to modal', '100-black-men-ba' ),
	'section'	=>	'modal-front-page',
	'settings'	=>	'modalfp-textarea',
	'type'	=> 'textarea'
));*/





