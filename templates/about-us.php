<?php

/**
 * Template Name: About Us
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/wellington-studio-theme.git
 * @author       Chris Parsons <chris@steelbridge.io>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


add_action( 'genesis_before_footer', 'add_bootstrap_grid_four', 5 );
function add_bootstrap_grid_four() {
	$about_us_container_one	    = get_post_meta(get_the_ID(), 'about-us-container-one', true);
	$about_us_container_two	    = get_post_meta(get_the_ID(), 'about-us-container-two', true);
	$about_us_container_three	    = get_post_meta(get_the_ID(), 'about-us-container-three', true);
	$about_us_container_four	    = get_post_meta(get_the_ID(), 'about-us-container-four', true);
	echo '<div id="about-us-grid" class="container-fluid">
		  <div class="row">
		    <div class="col about-grid-one">
		    <div class="card">
			  <div class="card-body">
			   '. $about_us_container_one .'
			  </div>
			</div>
			</div>
		    <div class="col about-grid-two">
		    <div class="card">
			  <div class="card-body">
			   '. $about_us_container_two .'
			  </div>
			</div>
			</div>
		    <div class="w-100"></div>
		    <div class="col about-grid-three">
		    <div class="card">
			  <div class="card-body">
			   '. $about_us_container_three .'
			  </div>
			</div>
			</div>
		    <div class="col about-grid-four">
		    <div class="card">
			  <div class="card-body">
			   '. $about_us_container_four .'
			  </div>
			</div>
			</div>
			</div>
		  </div>
		</div>';
}
genesis();

