<?php

add_action( 'add_meta_boxes', 'economic_meta' );
function economic_meta() {
	global $post;
	if(!empty($post)){
		$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
		if($pageTemplate == 'templates/economic-empowerment.php') {
			$types = array('post', 'page');
			foreach($types as $type) {
				add_meta_box( 'economic_emp_meta', __( 'Economic Empowerment Content', '100-black-men-ba' ), 'econ_emp_callback', $type, 'normal', 'high' );
			}
		}
	}
}

// Outputs the content of the meta box
function econ_emp_callback( $post ) {
wp_nonce_field( basename( __FILE__ ), 'econom_nonce' );
$econom_stored_meta = get_post_meta( $post->ID );
?>

	<div style="margin-top: 1.618em;">
		<h1>Economic Empowerment Content</h1>
	</div>

	<p>

		<!-- Upper Container -->
		<strong><label for="upper-container" class="basic-row-title"><?php _e( 'Upper Container', 'tfs-basic-textdomain' )?></label></strong>
		<textarea style="width: 100%;" rows="4" name="upper-container" id="upper-container"><?php if ( isset ( $econom_stored_meta['upper-container'] ) ) echo $econom_stored_meta['upper-container'][0]; ?></textarea>

	</p>
	<p>

		<!-- Lower Container -->
		<strong><label for="lower-container" class="basic-row-title"><?php _e( 'Grid Container &#35;2', 'tfs-basic-textdomain' )?></label></strong>
		<textarea style="width: 100%;" rows="4" name="lower-container" id="lower-container"><?php if ( isset ( $econom_stored_meta['lower-container'] ) ) echo $econom_stored_meta['lower-container'][0]; ?></textarea>

	</p>


<?php }

add_action('save_post', 'eco_nomic_sanitize');
function eco_nomic_sanitize($post_id) {

	// Checks save status
	$is_autosave    = wp_is_post_autosave( $post_id );
	$is_revision    = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['econom_nonce'] ) && wp_verify_nonce( $_POST['econom_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	if (isset($_POST['upper-container'])) {
		update_post_meta($post_id, 'upper-container', ($_POST['upper-container']));
	}

	if (isset($_POST['lower-container'])) {
		update_post_meta($post_id, 'lower-container', ($_POST['lower-container']));
	}
}
