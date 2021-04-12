<?php
	/**
	 * Description: Donation Template
	 *
	 * @package		tfsBlog
	 * @since		1.3.0
	 * @author		Chris Parsons
	 * @link		http://steelbridge.io
	 * @license		GNU General Public License
	 */

	include('inc/sanitize_donation_shortcode.php');

	// Adds a meta box to the post editing screen on the template named basic-page-template
	function hundredbmba_donation_entry() {
		global $post;
		if(!empty($post)){
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
			if($pageTemplate == 'templates/donations-template.php') {
				$types = array( 'post', 'page' );
				foreach ( $types as $type ) {
					add_meta_box( 'donations_meta', __( 'Add Campaigns', '100-black-men-ba' ), 'donations_callback', $type, 'normal', 'high' );
				}
			  // Enqueues Bootstrap and Bootstrap.js for meta field tabs
			  add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );
			  function wpdocs_enqueue_custom_admin_style($hook) {

				wp_register_style('donations-bootstrap', get_stylesheet_directory_uri() . '/assets/css/editorstyle.css', false, '4.4.5' );
				wp_enqueue_style('donations-bootstrap');

				// Register Popper JS and enqueue it
				wp_register_script( 'app-popper-js', BFG_THEME_JS . 'popper.min.js', array( 'jquery' ), $version, true );
				wp_enqueue_script( 'app-popper-js' );

				// Register Bootstrap JS and enqueue it
				wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), $version, true );
				wp_enqueue_script( 'app-bootstrap-js' );

			  }
			}
		}
	}
	add_action( 'add_meta_boxes', 'hundredbmba_donation_entry' );

	// Outputs the content of the meta box
	function donations_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'donations_nonce' );
	$donations_meta = get_post_meta( $post->ID );

	  //$screen = get_current_screen();
	  //print_r($screen);
?>

		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="donation-1-tab" data-toggle="tab" href="#donation-1" role="tab" aria-controls="donation-1" aria-selected="true">Donation &#35;1</a>
			<a class="nav-item nav-link" id="donaion-2-tab" data-toggle="tab" href="#donaion-2" role="tab" aria-controls="donaion-2" aria-selected="false">Donation &#35;2</a>
			<a class="nav-item nav-link" id="donaion-3-tab" data-toggle="tab" href="#donaion-3" role="tab" aria-controls="donaion-3" aria-selected="false">Donation &#35;3</a>
			<a class="nav-item nav-link" id="donaion-4-tab" data-toggle="tab" href="#donaion-4" role="tab" aria-controls="donaion-4" aria-selected="false">Donation &#35;4</a>
			<a class="nav-item nav-link" id="donaion-5-tab" data-toggle="tab" href="#donaion-5" role="tab" aria-controls="donaion-5" aria-selected="false">Donation &#35;5</a>
			<a class="nav-item nav-link" id="donaion-6-tab" data-toggle="tab" href="#donaion-6" role="tab" aria-controls="donaion-6" aria-selected="false">Donation &#35;6</a>
			<a class="nav-item nav-link" id="donaion-7-tab" data-toggle="tab" href="#donaion-7" role="tab" aria-controls="donaion-7" aria-selected="false">Donation &#35;7</a>
			<a class="nav-item nav-link" id="donaion-8-tab" data-toggle="tab" href="#donaion-8" role="tab" aria-controls="donaion-8" aria-selected="false">Donation &#35;8</a>
			<a class="nav-item nav-link" id="donaion-9-tab" data-toggle="tab" href="#donaion-9" role="tab" aria-controls="donaion-9" aria-selected="false">Donation &#35;9</a>
			<a class="nav-item nav-link" id="donaion-10-tab" data-toggle="tab" href="#donaion-10" role="tab" aria-controls="donaion-10" aria-selected="false">Donation &#35;10</a>
			<a class="nav-item nav-link" id="donaion-11-tab" data-toggle="tab" href="#donaion-11" role="tab" aria-controls="donaion-11" aria-selected="false">Donation &#35;11</a>
			<a class="nav-item nav-link" id="donaion-12-tab" data-toggle="tab" href="#donaion-12" role="tab" aria-controls="donaion-12" aria-selected="false">Donation &#35;12</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="donation-1" role="tabpanel" aria-labelledby="donation-1-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				<p>
				  <strong><label for="donation-1-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
				  <input style="width: 100%;" type="text" name="donation-1-label" id="donation-1-label" value="<?php if (isset($donations_meta['donation-1-label'])) echo $donations_meta['donation-1-label'][0]; ?>" />
				</p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-1" class="donation-row-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-1" id="donation-1" value="<?php if (isset($donations_meta['donation-1'])) echo $donations_meta['donation-1'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-2" role="tabpanel" aria-labelledby="donaion-2-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-2-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-2-label" id="donation-2-label" value="<?php if (isset($donations_meta['donation-2-label'])) echo $donations_meta['donation-2-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-2" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-2" id="donation-2" value="<?php if (isset($donations_meta['donation-2'])) echo $donations_meta['donation-2'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-3" role="tabpanel" aria-labelledby="donaion-3-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-3-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-3-label" id="donation-3-label" value="<?php if (isset($donations_meta['donation-3-label'])) echo $donations_meta['donation-3-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-3" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-3" id="donation-3" value="<?php if (isset($donations_meta['donation-3'])) echo $donations_meta['donation-3'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-4" role="tabpanel" aria-labelledby="donaion-4-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-4-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-4-label" id="donation-4-label" value="<?php if (isset($donations_meta['donation-4-label'])) echo $donations_meta['donation-4-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-4" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-4" id="donation-4" value="<?php if (isset($donations_meta['donation-4'])) echo $donations_meta['donation-4'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-5" role="tabpanel" aria-labelledby="donaion-5-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-5-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-5-label" id="donation-5-label" value="<?php if (isset($donations_meta['donation-5-label'])) echo $donations_meta['donation-5-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-5" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-5" id="donation-5" value="<?php if (isset($donations_meta['donation-5'])) echo $donations_meta['donation-5'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-6" role="tabpanel" aria-labelledby="donaion-6-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-6-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-6-label" id="donation-6-label" value="<?php if (isset($donations_meta['donation-6-label'])) echo $donations_meta['donation-6-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-6" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-6" id="donation-6" value="<?php if (isset($donations_meta['donation-6'])) echo $donations_meta['donation-6'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-7" role="tabpanel" aria-labelledby="donaion-7-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-7-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-7-label" id="donation-7-label" value="<?php if (isset($donations_meta['donation-7-label'])) echo $donations_meta['donation-7-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-7" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-7" id="donation-7" value="<?php if (isset($donations_meta['donation-7'])) echo $donations_meta['donation-7'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-8" role="tabpanel" aria-labelledby="donaion-8-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-8-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-8-label" id="donation-8-label" value="<?php if (isset($donations_meta['donation-8-label'])) echo $donations_meta['donation-8-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-8" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-8" id="donation-8" value="<?php if (isset($donations_meta['donation-8'])) echo $donations_meta['donation-8'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-9" role="tabpanel" aria-labelledby="donaion-9-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-9-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-9-label" id="donation-9-label" value="<?php if (isset($donations_meta['donation-9-label'])) echo $donations_meta['donation-9-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-9" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-9" id="donation-9" value="<?php if (isset($donations_meta['donation-9'])) echo $donations_meta['donation-9'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-10" role="tabpanel" aria-labelledby="donaion-10-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-10-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-10-label" id="donation-10-label" value="<?php if (isset($donations_meta['donation-10-label'])) echo $donations_meta['donation-10-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-10" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-10" id="donation-10" value="<?php if (isset($donations_meta['donation-10'])) echo $donations_meta['donation-10'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-11" role="tabpanel" aria-labelledby="donaion-11-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-11-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-11-label" id="donation-11-label" value="<?php if (isset($donations_meta['donation-11-label'])) echo $donations_meta['donation-11-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-11" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-11" id="donation-11" value="<?php if (isset($donations_meta['donation-11'])) echo $donations_meta['donation-11'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="tab-pane fade" id="donaion-12" role="tabpanel" aria-labelledby="donaion-12-tab">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-12-label" class="donation-label"><?php _e('Button Label','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-12-label" id="donation-12-label" value="<?php if (isset($donations_meta['donation-12-label'])) echo $donations_meta['donation-12-label'][0]; ?>" />
				  </p>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="card">
				  <p>
					<strong><label for="donation-12" class="donation-title"><?php _e('Donation Short Code ID','100-black-men-ba')?></label></strong>
					<input style="width: 100%;" type="text" name="donation-12" id="donation-12" value="<?php if (isset($donations_meta['donation-12'])) echo $donations_meta['donation-12'][0]; ?>" />
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
<?php }

