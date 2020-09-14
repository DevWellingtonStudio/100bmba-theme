<?php

/**
 * Author: Sridhar Katakam
 * Link: https://sridharkatakam.com/
 */

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'sk_do_search_loop' );
/**
 * Outputs a custom loop
 *
 * @global mixed $paged current page number if paginated
 * @return void
 */
function sk_do_search_loop() {

	// create an array variable with specific post types in your desired order
	$post_types = array( 'member_cpt' );

	echo '<div class="search-content">';

	foreach ( $post_types as $post_type ) {
		// get the search term entered by user
		$s = isset( $_GET["s"] ) ? $_GET["s"] : "";

		// accepts any wp_query args
		$args = (array(
			's' => $s,
			'post_type' => $post_type,
			'posts_per_page' => 5,
			'order' => 'ASC',
			'orderby' => 'title'
		));

		echo '<div class="post-type '. $post_type .'"><div class="post-type-heading"><h2>Members Search Results</h2></div><div class="row justify-content-center">

					<div class="container mb-5">

					'. do_shortcode('[search_field]') .'

					</div>';


		// remove post info
		remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

		//add_action( 'genesis_entry_header', 'sk_featured_image', 7 );

		// remove post image (from theme settings)
		//remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

		// remove entry content
		//remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

		// remove post content nav
		remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );
		remove_action( 'genesis_entry_content', 'genesis_do_post_permalink', 14 );

		// remove entry footer
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
		remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

		// remove archive pagination
		remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );

		// custom genesis loop with the above query parameters and hooks
		//genesis_custom_loop( $args );
		sk_custom_loop( $args );
		echo '</div>';
	}

	echo '<div class="container">
					<div class="row justify-content-center members-search-results">
					<div class="col-md-3 d-flex justify-content-center">
					<button type="button" class="btn btn-dark"><a href="/members/" title="Back to memebers page">Members Page</a></button>
					</div>
					<div class="col-md-3 d-flex justify-content-center">
						<button type="button" class="btn btn-dark"><a href="/members-100blackmen/members/" title="Back to memebers page">Members Archive</a></button>
					</div>
			 		</div>
			 </div>';

	echo '</div></div>'; // .search-content

}

function sk_featured_image() {

	// if featured image is not present, abort.
	if ( ! has_post_thumbnail() ) {
		return;
	}

	// get the URL of featured image
	$image = genesis_get_image( 'format=url&size=search-image' );

	// get the alt text of featured image
	$thumb_id = get_post_thumbnail_id( get_the_ID() );
	$alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );

	// if no alt text is present for featured image, set it to entry title
	if ( '' == $alt ) {
		$alt = the_title_attribute( 'echo=0' );
	}

	// display the featured image
	printf( '<div class="search-image"><a href="%s"><img src="%s" alt="%s" /></a></div>', get_the_permalink(), esc_url( $image ), $alt );

}

genesis();
