<?php

remove_action ('genesis_loop', 'genesis_do_loop'); // Remove the standard loop
add_action( 'genesis_loop', 'members_grid_loop' ); // Add custom loop

remove_action('genesis_archive_title_descriptions', 'genesis_do_archive_headings_intro_text', 12);

add_action('genesis_after_content', 'add_description_content', 6);
function add_description_content() {
	global $wp_query;
	$term = is_tax() ? get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ) : $wp_query->get_queried_object();
	$intro_text = get_term_meta( $term->term_id, 'intro_text', true );
	echo '<div id="intro-text-members" class="container">
	'. $intro_text .'
	</div>
	';
}

 function members_grid_loop() {
	global $post;
	$args = array(
		'post_type'         => 'member_cpt', // enter your custom post type
		'orderby'           => 'title',
		'post_status'       => 'publish',
		'order'             => 'ASC',
		'cat'               => 'members',
		'posts_per_page'    => '9',  // overrides posts per page in theme settings
		'paged'             => get_query_var( 'paged' )
	);

	$loop = new WP_Query( $args );
	if( $loop->have_posts() ):
	 echo '<div id="member-archive" class="container-fluid member-container">
					<div class="container mb-5">

					'. do_shortcode('[search_field]') .'

					</div>
					<div class="container member-listing">
					<div class="row">';


	 while( $loop->have_posts() ): $loop->the_post(); global $post;

		 $members_img_url = get_the_post_thumbnail_url( $post->ID, 'full' );
		 $members_thumbnail_id = get_post_thumbnail_id( $post->ID );
		 $members_alt = get_post_meta($members_thumbnail_id, '_wp_attachment_image_alt', true);


		echo '<div class="member-column col-md-4">' .
				 '<div class="card">' .
				 '<a href="'. get_permalink( $post->ID ) .'" title=""><img class="image-fluid" src="' . $members_img_url .'" alt="' . $members_alt . '"></a>' .
				 '<div class="no-show-content-image card-text">' .
				 		get_the_content() .
				 '</div>' .
				 '</div>' .
				 '</div>';

	 endwhile;
	 echo '</div></div></div>';
	 do_action('genesis_after_endwhile');
	endif;
	wp_reset_query();
 }

 /** Remove Post Info */
 remove_action('genesis_before_post_content','genesis_post_info');
 remove_action('genesis_after_post_content','genesis_post_meta');

genesis();
