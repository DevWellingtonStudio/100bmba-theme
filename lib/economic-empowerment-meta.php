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
		<strong><label for="upper-container" class="basic-row-title"><?php _e( 'Upper Container', '100-black-men-ba' )?></label></strong>
		<textarea style="width: 100%;" rows="4" name="upper-container" id="upper-container"><?php if ( isset ( $econom_stored_meta['upper-container'] ) ) echo $econom_stored_meta['upper-container'][0]; ?></textarea>

	</p>
	<p>

		<!-- Lower Container -->
		<strong><label for="lower-container" class="basic-row-title"><?php _e( 'Grid Container &#35;2', '100-black-men-ba' )?></label></strong>
		<textarea style="width: 100%;" rows="4" name="lower-container" id="lower-container"><?php if ( isset ( $econom_stored_meta['lower-container'] ) ) echo $econom_stored_meta['lower-container'][0]; ?></textarea>

	</p>

  	<p>

	  <!-- Full Body Image -->
	  <label for="full-body-image" class="fish-camp-row-title"><?php _e( '<h3>Full Body Image</h3>', '100-black-men-ba' );?></label>
	  <input type="text" style="width:50%;" name="full-body-image" id="full-body-image" value="<?php if ( isset ( $econom_stored_meta['full-body-image'] ) ) echo $econom_stored_meta['full-body-image'][0];?>" />
	  <input type="button" id="full-body-image-button" class="button" value="<?php _e( 'Choose or Upload an Image', '100-black-men-ba' );?>" />

  	</p>

	<p>
	  <!-- Content Above Footer Title -->
	  <strong><label for="eco-bottom-content-title" class="basic-row-title"><?php _e('Call To Action Title','tfs-basic-textdomain')?></label></strong>
	  <input style="width: 100%;" type="text" name="eco-bottom-content-title" id="eco-bottom-content-title" value="<?php if (isset($econom_stored_meta['eco-bottom-content-title'])) echo $econom_stored_meta['eco-bottom-content-title'][0]; ?>" />

	</p>

	<p>

	  <!-- Content Above Footer -->
	  <strong><label for="eco-bottom-content" class="basic-row-title"><?php _e( 'Content Above Footer', '100-black-men-ba' )?></label></strong>
	  <textarea style="width: 100%;" rows="4" name="eco-bottom-content" id="eco-bottom-content"><?php if ( isset ( $econom_stored_meta['eco-bottom-content'] ) ) echo $econom_stored_meta['eco-bottom-content'][0]; ?></textarea>

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
		update_post_meta($post_id, 'upper-container', $_POST['upper-container']);
	}

	if (isset($_POST['lower-container'])) {
		update_post_meta($post_id, 'lower-container', $_POST['lower-container']);
	}

	if( isset( $_POST[ 'full-body-image' ] ) ) {
	  update_post_meta( $post_id, 'full-body-image', $_POST[ 'full-body-image' ] );
	}

	if( isset( $_POST[ 'eco-bottom-content' ] ) ) {
	  update_post_meta( $post_id, 'eco-bottom-content', $_POST[ 'eco-bottom-content' ] );
	}

	if( isset( $_POST[ 'eco-bottom-content-title' ] ) ) {
	  update_post_meta( $post_id, 'eco-bottom-content-title', $_POST[ 'eco-bottom-content-title' ] );
	}
}
