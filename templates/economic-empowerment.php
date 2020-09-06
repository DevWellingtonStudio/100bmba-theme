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

add_action( 'genesis_after_content', 'add_ed_meta', 5 );
function add_ed_meta() {
	$upper_container	    = get_post_meta(get_the_ID(), 'upper-container', true);
	$lower_container	    = get_post_meta(get_the_ID(), 'lower-container', true);
	echo '<div id="upperlower" class="container">
			<div class="row">
			<div class="col-md-6 upper offset-md-1">
			<div class="card">
			  <div class="card-body">
				'. $upper_container .'
			  </div>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6 lower offset-md-4">
			<div class="card">
			  <div class="card-body">
				'. $lower_container .'
			  </div>
			</div>
			</div>
			</div>
		</div>';
}

genesis();
