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


add_action( 'genesis_after_content', 'add_bootstrap_grid_four', 15 );
function add_bootstrap_grid_four() {
	$about_us_container_one	= get_post_meta(get_the_ID(), 'about-us-container-one', true);
	echo '<div class="container-fluid">
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
			   '. $about_us_container_one .'
			  </div>
			</div>
			</div>
		    <div class="w-100"></div>
		    <div class="col about-grid-three">
		    <div class="card">
			  <div class="card-body">
			   '. $about_us_container_one .'
			  </div>
			</div>
			</div>
		    <div class="col about-grid-four">
		    <div class="card">
			  <div class="card-body">
			   '. $about_us_container_one .'
			  </div>
			</div>
			</div>
			</div>
		  </div>
		</div>';
}
genesis();

