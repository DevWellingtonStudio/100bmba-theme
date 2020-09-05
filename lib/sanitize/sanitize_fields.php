<?php
add_action('save_post', 'bmba_about_us_sanitize');
function bmba_about_us_sanitize($post_id) {

	// Checks save status
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);
	$is_valid_nonce = (isset($_POST['bmba_nonce']) && wp_verify_nonce($_POST['bmba_nonce'], basename(__FILE__))) ? 'true' : 'false';

	// Exits script depending on save status
	if ($is_autosave || $is_revision || !$is_valid_nonce) {
		return;
	}

	// Checks for input and sanitizes/saves if needed
	if (isset($_POST['about-us-container-one'])) {
		update_post_meta($post_id, 'about-us-container-one', wp_kses_post($_POST['about-us-container-one']));
	}
}
