<?php

//* Hooks after-entry widget area to single posts
add_action( 'genesis_before_footer', 'bmba_after_entry_widget', 1 );
function bmba_after_entry_widget() {
	//if ( ! is_singular( 'post' ) || ! is_front_page() || ! is_home() )
	if (  is_singular('post') || is_page(20691)) {
		genesis_widget_area( 'after-entry', array(
			'before' => '<div class="after-entry widget-area"><div class="wrap">',
			'after'  => '</div></div>',
		) );
	}
}

add_action('genesis_before_footer', 'add_testimonials_members', 5 );
function add_testimonials_members() {
	if ( is_tax( 'member-category', 'members' ) ) {
		genesis_widget_area( 'after-entry', array(
			'before' => '<div class="after-entry widget-area"><div class="wrap">',
			'after'  => '</div></div>',
		) );
	}
}
