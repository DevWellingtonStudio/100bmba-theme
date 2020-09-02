<?php

 remove_action ('genesis_loop', 'genesis_do_loop'); // Remove the standard loop
 add_action( 'genesis_loop', 'members_grid_loop' ); // Add custom loop
 
 function members_grid_loop() {
	
	$args = array(
		'post_type' => 'member_cpt', // enter your custom post type
		'orderby' => 'title',
		'post_status'    => 'publish',
		'order' => 'ASC',
		'cat' => 'members',
		'posts_per_page'=> '12',  // overrides posts per page in theme settings
		'paged'          => get_query_var( 'paged' )
	);
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ):
	 echo '<div id="member-archive" class="container-fluid"><div class="row">';
	 while( $loop->have_posts() ): $loop->the_post(); global $post;
	 
		echo '<div class="member-column col-md-4">' .
				 '<div class="card">' .
				 '<div class="card-text">' .
				 		get_the_content() .
				 '</div>' .
				 '</div>' .
				 '</div>';
		
	 endwhile;
	 echo '</div></div>';
	 do_action('genesis_after_endwhile');
	endif;
	wp_reset_query();
 }
 
 /** Remove Post Info */
 remove_action('genesis_before_post_content','genesis_post_info');
 remove_action('genesis_after_post_content','genesis_post_meta');
 
genesis();
