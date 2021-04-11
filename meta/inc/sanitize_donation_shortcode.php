<?php
	// Sanitize Fields
	add_action( 'save_post', 'donation_meta_save' );
	function donation_meta_save( $post_id ) {

		// Checks save status
		$is_autosave    = wp_is_post_autosave( $post_id );
		$is_revision    = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST['donations_nonce'] ) && wp_verify_nonce( $_POST['donations_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
			return;
		}

		// Checks for input and saves if needed
		if ( isset( $_POST['donation-1'] ) ) {
			update_post_meta( $post_id, 'donation-1', $_POST['donation-1'] );
		}
		if ( isset( $_POST['donation-1-label'] ) ) {
			update_post_meta( $post_id, 'donation-1-label', $_POST['donation-1-label'] );
		}

		if ( isset( $_POST['donation-2'] ) ) {
			update_post_meta( $post_id, 'donation-2', $_POST['donation-2'] );
		}
		if ( isset( $_POST['donation-2-label'] ) ) {
			update_post_meta( $post_id, 'donation-2-label', $_POST['donation-2-label'] );
		}

		if ( isset( $_POST['donation-3'] ) ) {
			update_post_meta( $post_id, 'donation-3', $_POST['donation-3'] );
		}
		if ( isset( $_POST['donation-3-label'] ) ) {
			update_post_meta( $post_id, 'donation-3-label', $_POST['donation-3-label'] );
		}

		if ( isset( $_POST['donation-4'] ) ) {
			update_post_meta( $post_id, 'donation-4', $_POST['donation-4'] );
		}
		if ( isset( $_POST['donation-4-label'] ) ) {
			update_post_meta( $post_id, 'donation-4-label', $_POST['donation-4-label'] );
		}

		if ( isset( $_POST['donation-5'] ) ) {
			update_post_meta( $post_id, 'donation-5', $_POST['donation-5'] );
		}
		if ( isset( $_POST['donation-5-label'] ) ) {
			update_post_meta( $post_id, 'donation-5-label', $_POST['donation-5-label'] );
		}

		if ( isset( $_POST['donation-6'] ) ) {
			update_post_meta( $post_id, 'donation-6', $_POST['donation-6'] );
		}
		if ( isset( $_POST['donation-6-label'] ) ) {
			update_post_meta( $post_id, 'donation-6-label', $_POST['donation-6-label'] );
		}

		if ( isset( $_POST['donation-7'] ) ) {
			update_post_meta( $post_id, 'donation-7', $_POST['donation-7'] );
		}
		if ( isset( $_POST['donation-7-label'] ) ) {
			update_post_meta( $post_id, 'donation-7-label', $_POST['donation-7-label'] );
		}

		if ( isset( $_POST['donation-8'] ) ) {
			update_post_meta( $post_id, 'donation-8', $_POST['donation-8'] );
		}
		if ( isset( $_POST['donation-8-label'] ) ) {
			update_post_meta( $post_id, 'donation-8-label', $_POST['donation-8-label'] );
		}

		if ( isset( $_POST['donation-9'] ) ) {
			update_post_meta( $post_id, 'donation-9', $_POST['donation-9'] );
		}
		if ( isset( $_POST['donation-9-label'] ) ) {
			update_post_meta( $post_id, 'donation-9-label', $_POST['donation-9-label'] );
		}

		if ( isset( $_POST['donation-10'] ) ) {
			update_post_meta( $post_id, 'donation-10', $_POST['donation-10'] );
		}
		if ( isset( $_POST['donation-10-label'] ) ) {
			update_post_meta( $post_id, 'donation-10-label', $_POST['donation-10-label'] );
		}
	}
