<?php
// Copy of genesis_custom_loop() with the addition of a line to access Relevanssi's query engine directly
function sk_custom_loop( $args = array() ) {

global $wp_query, $more;

$defaults = array(); //* For forward compatibility
$args     = apply_filters( 'genesis_custom_loop_args', wp_parse_args( $args, $defaults ), $args, $defaults );

$wp_query = new WP_Query( $args );

// added this based on http://www.relevanssi.com/knowledge-base/relevanssi_do_query/
relevanssi_do_query( $wp_query );

//* Only set $more to 0 if we're on an archive
$more = is_singular() ? $more : 0;

genesis_standard_loop();

//* Restore original query
wp_reset_query();

}
