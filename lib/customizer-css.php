<?php

function load_wst_customizer_css() {
	$css_wst = '';
	$subnav_bgcolor 				= get_theme_mod( 'subnav_bgcolor');
	$subnav_fcolor					= get_theme_mod('subnav_fcolor');
	$subnav_hover						= get_theme_mod('subnav_hover');

	$slider1_bg							= get_theme_mod('slider1_bg');
	$slider1_title_color		= get_theme_mod('slider1_title_color');
	$slider1_text_color			= get_theme_mod('slider1_text_color');
	$slider1_btn_text_color	= get_theme_mod('slider1_btn_text_color');
	$slider1_btn_color			= get_theme_mod('slider1_btn_color');

 	$slider2_bg							= get_theme_mod('slider2_bg');
	$slider2_title_color		= get_theme_mod('slider2_title_color');
	$slider2_text_color			= get_theme_mod('slider2_text_color');
	$slider2_btn_text_color	= get_theme_mod('slider2_btn_text_color');
	$slider2_btn_color			= get_theme_mod('slider2_btn_color');

 	$slider3_bg							= get_theme_mod('slider3_bg');
	$slider3_title_color		= get_theme_mod('slider3_title_color');
	$slider3_text_color			= get_theme_mod('slider3_text_color');
	$slider3_btn_text_color	= get_theme_mod('slider3_btn_text_color');
	$slider3_btn_color			= get_theme_mod('slider3_btn_color');

	$slider4_bg							= get_theme_mod('slider4_bg');
	$slider4_title_color		= get_theme_mod('slider4_title_color');
	$slider4_text_color			= get_theme_mod('slider4_text_color');
	$slider4_btn_text_color	= get_theme_mod('slider4_btn_text_color');
	$slider4_btn_color			= get_theme_mod('slider4_btn_color');

	$slider5_bg							= get_theme_mod('slider5_bg');
	$slider5_title_color		= get_theme_mod('slider5_title_color');
	$slider5_text_color			= get_theme_mod('slider5_text_color');
	$slider5_btn_text_color	= get_theme_mod('slider5_btn_text_color');
	$slider5_btn_color			= get_theme_mod('slider5_btn_color');

	$slider6_bg							= get_theme_mod('slider6_bg');
	$slider6_title_color		= get_theme_mod('slider6_title_color');
	$slider6_text_color			= get_theme_mod('slider6_text_color');
	$slider6_btn_text_color	= get_theme_mod('slider6_btn_text_color');
	$slider6_btn_color			= get_theme_mod('slider6_btn_color');

	$css_wst .= '
		.btn-1 h5 {
			color: '. $slider1_btn_text_color .';
		}
		.btn-2 h5 {
			color: '. $slider2_btn_text_color .';
		}
		.btn-3 h5 {
			color: '. $slider3_btn_text_color .';
		}
		.btn-4 h5 {
			color: '. $slider4_btn_text_color .';
		}
		.btn-5 h5 {
			color: '. $slider5_btn_text_color .';
		}
		.btn-6 h5 {
			color: '. $slider6_btn_text_color .';
		}
		.btn-1 {
			background-color: '. $slider1_btn_color .';
		}
		.btn-2 {
			background-color: '. $slider2_btn_color .';
		}
		.btn-3 {
			background-color: '. $slider3_btn_color .';
		}
		.btn-4 {
			background-color: '. $slider4_btn_color .';
		}
		.btn-5 {
			background-color: '. $slider5_btn_color .';
		}
		.btn-6 {
			background-color: '. $slider6_btn_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider1_title_color .';
		}
		#portrait-item-two .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider2_title_color .';
		}
		#portrait-item-three .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider3_title_color .';
		}
		#portrait-item-four .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider4_title_color .';
		}
		#portrait-item-five .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider5_title_color .';
		}
		#portrait-item-six .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider6_title_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper .card-body p {
			color: '. $slider1_text_color .';
		}
		#portrait-item-two .card .row .card-body-wrapper .card-body p {
			color: '. $slider2_text_color .';
		}
		#portrait-item-three .card .row .card-body-wrapper .card-body p {
			color: '. $slider3_text_color .';
		}
		#portrait-item-four .card .row .card-body-wrapper .card-body p {
			color: '. $slider4_text_color .';
		}
		#portrait-item-five .card .row .card-body-wrapper .card-body p {
			color: '. $slider5_text_color .';
		}
		#portrait-item-six .card .row .card-body-wrapper .card-body p {
			color: '. $slider6_text_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper {
			background-color: '. $slider1_bg .';
		}
		#portrait-item-two .card .row .card-body-wrapper {
			background-color: '. $slider2_bg .';
		}
		#portrait-item-three .card .row .card-body-wrapper {
			background-color: '. $slider3_bg .';
		}
		#portrait-item-four .card .row .card-body-wrapper {
			background-color: '. $slider4_bg .';
		}
		#portrait-item-five .card .row .card-body-wrapper {
			background-color: '. $slider5_bg .';
		}
		#portrait-item-six .card .row .card-body-wrapper {
			background-color: '. $slider6_bg .';
		}
		#sub-nav-fp,
		#wstPortraitSlider .carousel-indicators li {
			background-color: ' . $subnav_bgcolor . ';
		}
		.navbar-light .navbar-nav.subnav .nav-link {
			color: '. $subnav_fcolor .';
		}
		.navbar-light .navbar-nav.subnav .nav-link:hover {
			color: '. $subnav_hover .';
		}
	';
	return $css_wst;
}
