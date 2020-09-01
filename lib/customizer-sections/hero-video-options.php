<?php

// Add Front Page Section
$wp_customize->add_section( 'heroVideo', array(
	'title' => __( 'Hero Video', 'bootstrap-for-genesis' ),
	'priority' => 10
));

/// ====== Video ====== ///

// Hero Section Overlay Text
$wp_customize->add_setting( 'hero_h1', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'hero_h1', array(
	'label'	=>	__('Add title to hero section', 'bootstrap-for-genesis' ),
	'section'	=>	'heroVideo',
	'settings'	=>	'hero_h1',
	'type'	=> 'text'
));

// Hero section overlay description
$wp_customize->add_setting( 'hero_desc', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'hero_desc', array(
	'label'	=>	__('Add description to hero section', 'bootstrap-for-genesis' ),
	'section'	=>	'heroVideo',
	'settings'	=>	'hero_desc',
	'type'	=> 'text'
));

// Hero Video
$wp_customize->add_setting ( 'hero_video_url', array(
	'default'	=> '',
	'type'		=> 'theme_mod',
	'sanitize_callback' => 'esc_url',
));
$wp_customize->add_control ( 'hero_video_url' , array(
	'type'	=>	'url',
	'section'	=>	'heroVideo',
	'label'	=>	__( 'Hero Video', 'bootstrap-for-genesis' ),
	'description'	=>	__('Add video url'),
));

/// ====== End Video ====== ///
