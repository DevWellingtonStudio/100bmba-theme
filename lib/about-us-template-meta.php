<?php
/**
 * About Us template custom meta fields
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         http://wellington-studio.com
 * @author       Chris Parsons <wellington-studio.com>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


include 'sanitize/sanitize_fields.php';

add_action( 'add_meta_boxes', 'bmba_about_us_meta' );
function bmba_about_us_meta() {
  global $post;
  if(!empty($post)){
	$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
	if($pageTemplate == 'templates/about-us.php') {
	  $types = array('post', 'page');
	  foreach($types as $type) {
		add_meta_box( 'basic_meta', __( 'About US Grid Content', '100-black-men-ba' ), 'bmba_basic_callback', $type, 'normal', 'high' );
	  }
	}
  }
}

// Outputs the content of the meta box
function bmba_basic_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'bmba_nonce' );
  $bmba_stored_basic_meta = get_post_meta( $post->ID );
  ?>
  <div style="margin-top: 1.618em;">
	<h1>About Us Grid Content</h1>
  </div>

  <p>

	<!-- Grid Container #1 -->
	<strong><label for="about-us-container-one" class="basic-row-title"><?php _e( 'Grid Container &#35;1', 'tfs-basic-textdomain' )?></label></strong>
	<textarea style="width: 100%;" rows="4" name="about-us-container-one" id="about-us-container-one"><?php if ( isset ( $bmba_stored_basic_meta['about-us-container-one'] ) ) echo $bmba_stored_basic_meta['about-us-container-one'][0]; ?></textarea>

  </p>
  <p>

	<!-- Grid Container #2 -->
	<strong><label for="about-us-container-two" class="basic-row-title"><?php _e( 'Grid Container &#35;2', 'tfs-basic-textdomain' )?></label></strong>
	<textarea style="width: 100%;" rows="4" name="about-us-container-two" id="about-us-container-two"><?php if ( isset ( $bmba_stored_basic_meta['about-us-container-two'] ) ) echo $bmba_stored_basic_meta['about-us-container-two'][0]; ?></textarea>

  </p>

  <p>

	<!-- Grid Container #3 -->
	<strong><label for="about-us-container-three" class="basic-row-title"><?php _e( 'Grid Container &#35;3', 'tfs-basic-textdomain' )?></label></strong>
	<textarea style="width: 100%;" rows="4" name="about-us-container-three" id="about-us-container-three"><?php if ( isset ( $bmba_stored_basic_meta['about-us-container-three'] ) ) echo $bmba_stored_basic_meta['about-us-container-three'][0]; ?></textarea>

  </p>

  <p>

	<!-- Grid Container #4 -->
	<strong><label for="about-us-container-four" class="basic-row-title"><?php _e( 'Grid Container &#35;3', 'tfs-basic-textdomain' )?></label></strong>
	<textarea style="width: 100%;" rows="4" name="about-us-container-four" id="about-us-container-four"><?php if ( isset ( $bmba_stored_basic_meta['about-us-container-four'] ) ) echo $bmba_stored_basic_meta['about-us-container-four'][0]; ?></textarea>

  </p>

<?php }
