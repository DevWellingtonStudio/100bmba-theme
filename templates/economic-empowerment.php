<?php

/**
 * Template Name: Economic Empowerment
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/wellington-studio-theme.git
 * @author       Chris Parsons <chris@steelbridge.io>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action('genesis_before_content_sidebar_wrap', 'add_featured_image');

add_action('genesis_before_content_sidebar_wrap', 'add_economic_header');
function add_economic_header() {
	global $post;
	$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
	echo '<div id="economic-jumbotron" class="jumbotron jumbotron-fluid" style="background-image: url('. $featured_img_url .');">
		  <div class="container">
		    <h1 class="display-4">'. get_the_title() .'</h1>
		  </div>
		</div>';
}

add_action( 'genesis_after_content', 'add_ed_meta', 5 );
function add_ed_meta() {
	$upper_container	        = get_post_meta(get_the_ID(), 'upper-container', true);
	$lower_container	        = get_post_meta(get_the_ID(), 'lower-container', true);

	$full_body_image            = get_post_meta(get_the_ID(), 'full-body-image', true );
	$fullbody_image_id          = attachment_url_to_postid($full_body_image); // Get's Alt for full-body-image
	$fullbody_img_alt           = get_post_meta (  $fullbody_image_id, '_wp_attachment_image_alt', true);

	$eco_bottom_content         = get_post_meta(get_the_ID(), 'eco-bottom-content', true );
	$eco_bottom_content_title   = get_post_meta(get_the_ID(), 'eco-bottom-content-title', true );


	echo '	<div id="upperlower">
				<div class="container">
					<div class="row">
					<div class="col-md-8 upper">
					<div class="card">
					  <div class="card-body">
						'. $upper_container .'
					  </div>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-8 lower offset-md-3">
					<div class="card">
					  <div class="card-body">
						'. $lower_container .'
					  </div>
					</div>
					</div>
					</div>
			    </div>
			</div>';
	echo   '<div id="bodyimage-wide">
	            <div class="container-fluid">
	            <img class="image-fluid" src="'. $full_body_image .'" alt="'. $fullbody_img_alt .'">
				</div>
			</div>
			<div id="economic-empowerment-bottom-content" class="container-fluid">
				 <div class="container">
					 <div class="card">
					 <h2>'. $eco_bottom_content_title .'</h2>
					 <div class="card-body">
						'. $eco_bottom_content .'
					 </div>
					 </div>
				 </div>
			 </div>';
}

genesis();
