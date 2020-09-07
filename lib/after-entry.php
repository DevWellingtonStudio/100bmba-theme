<?php

//* Hooks after-entry widget area to single posts
add_action( 'genesis_entry_footer', 'bmba_after_entry_widget' );
function bmba_after_entry_widget() {
	if ( ! is_singular( 'post' ) )
		return;
	genesis_widget_area( 'after-entry', array(
		'before' => '<div class="after-entry widget-area"><div class="wrap">',
		'after' => '</div></div>',
	) );
}
