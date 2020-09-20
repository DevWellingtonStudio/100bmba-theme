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

// Social media
$wp_customize->add_setting( 'social-media-1', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-1', array(
	'label'	=>	__('Social Media Icon #1', '100-black-men-ba' ),
	'description' => __('Add FontAwesome code ex: fa-facebook-square'),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-1',
	'type'	=> 'text'
));

// Social media Link
$wp_customize->add_setting( 'social-media-1-link', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-1-link', array(
	'label'	=>	__('Social Media Icon #1 Link', '100-black-men-ba' ),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-1-link',
	'type'	=> 'url'
));

// Social media
$wp_customize->add_setting( 'social-media-2', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-2', array(
	'label'	=>	__('Social Media Icon #2', '100-black-men-ba' ),
	'description' => __('Add FontAwesome code ex: fa-facebook-square'),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-2',
	'type'	=> 'text'
));

// Social media Link
$wp_customize->add_setting( 'social-media-2-link', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-2-link', array(
	'label'	=>	__('Social Media Icon #2 Link', '100-black-men-ba' ),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-2-link',
	'type'	=> 'url'
));

// Social media
$wp_customize->add_setting( 'social-media-3', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-3', array(
	'label'	=>	__('Social Media Icon #3', '100-black-men-ba' ),
	'description' => __('Add FontAwesome code ex: fa-facebook-square'),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-3',
	'type'	=> 'text'
));

// Social Media Link
$wp_customize->add_setting( 'social-media-3-link', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-3-link', array(
	'label'	=>	__('Social Media Icon #3 Link', '100-black-men-ba' ),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-3-link',
	'type'	=> 'url'
));

// Social media
$wp_customize->add_setting( 'social-media-4', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-4', array(
	'label'	=>	__('Social Media Icon #4', '100-black-men-ba' ),
	'description' => __('Add FontAwesome code ex: fa-facebook-square'),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-4',
	'type'	=> 'text'
));

// Social Media Link
$wp_customize->add_setting( 'social-media-4-link', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'social-media-4-link', array(
	'label'	=>	__('Social Media Icon #4 Link', '100-black-men-ba' ),
	'section'	=>	'side-nav-logo-social',
	'settings'	=>	'social-media-4-link',
	'type'	=> 'url'
));





