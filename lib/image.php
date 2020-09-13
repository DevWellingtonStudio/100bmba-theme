<?php

// Register a custom image size for images on search result archives
add_image_size( 'search-image', 280, 180, true );

// Force full content layout on search result archives
add_action( 'get_header', 'sk_force_layout' );
function sk_force_layout() {

	if ( ! is_search() ) {
		return;
	}

	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

}


