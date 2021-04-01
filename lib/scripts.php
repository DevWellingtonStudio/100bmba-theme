<?php
/**
 * Scripts
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         http://wellington-studio.com
 * @author       Chris Parsons <wellington-studio.com>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Theme Scripts & Stylesheet
add_action( 'wp_enqueue_scripts', 'bfg_theme_scripts' );
function bfg_theme_scripts() {
	wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/custom.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'custom-theme-css', get_stylesheet_directory_uri() . '/assets/css/custom-theme.css', array(), '', 'all');

	//wp_register_style('mailchimp-css', '//cdn-images.mailchimp.com/embedcode/classic-10_7.css', array(), '', 'all');
	//wp_enqueue_style('mailchimp-css');

 if(function_exists('load_wst_customizer_css')) {
	wp_add_inline_style('custom-css', load_wst_customizer_css());
 }

 /*wp_register_style('gallery-style', '//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', array(), '', 'all');
 wp_enqueue_style('gallery-style');*/

//	wp_register_script('jquery321', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '', true );
//	wp_enqueue_script('jquery321');

	$version = wp_get_theme()->Version;
	if ( !is_admin() ) {

		// Deregister jQuery and use Bootstrap supplied version
		/* wp_register_script( 'jquery_3.2.1', BFG_THEME_JS . 'jquery.slim.min.js', array(), $version, true );
		if(is_front_page() || is_home()) {
		wp_deregister_script( 'jquery' );
		wp_enqueue_script('jquery_3.2.1');
		} */
		// MailChimp JS
			wp_register_script('mailchimp-js', 'https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array(), '', true);
			if(is_front_page() || is_home()) {
				wp_enqueue_script( 'mailchimp-js' );
			}

		// Disable the superfish script
		wp_deregister_script( 'superfish' );
		wp_deregister_script( 'superfish-args' );

		// Register Custom JS
		wp_register_script( 'custom-js', BFG_THEME_JS . 'custom.js', array(), $version, true );
		wp_enqueue_script('custom-js');

		// Register Popper JS and enqueue it
		wp_register_script( 'app-popper-js', BFG_THEME_JS . 'popper.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-popper-js' );

		// Register Bootstrap JS and enqueue it
		wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-bootstrap-js' );

		// Register theme JS and enqueue it
		wp_register_script( 'app-js', BFG_THEME_JS . 'app.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-js' );

		// Register Font Awesome
		wp_register_script('font-awesome', 'https://kit.fontawesome.com/76342ff491.js', array(), '', true );
		wp_enqueue_script('font-awesome');

		wp_register_script( 'bootstrap-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', array(), '', true);
		wp_enqueue_script('bootstrap-lightbox');

		wp_register_script('gallery-js', BFG_THEME_JS . 'gallery.js', array(), $version, true );
		wp_enqueue_script('gallery-js');
	}
}

add_action( 'admin_enqueue_scripts', 'load_metafield_js' );
function load_metafield_js() {
	//$version = wp_get_theme()->Version;
	//wp_enqueue_script( 'meta-field-js', BFG_THEME_JS . 'meta-field.js', array('jquery'), $version, true );

	// Registers and enqueues the required javascript for image management within wp dashboard.
	wp_register_script( 'meta-box-image', BFG_THEME_JS . 'meta-field.js', array( 'jquery' ) );
	wp_localize_script( 'meta-box-image', 'meta_image',
		array(
			'title' => __( 'Choose or Upload an Image', '100-black-men-ba' ),
			'button' => __( 'Use this image', '100-black-men-ba' ),
		)
	);
	wp_enqueue_script( 'meta-box-image' );
}

// Editor Styles
add_action( 'init', 'bfg_custom_editor_css' );
function bfg_custom_editor_css() {
	add_editor_style( get_stylesheet_uri() );
}
