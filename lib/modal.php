<?php
/*
 * Front Page Modal
 */

add_action('wp_footer', 'add_modal_front_page');
function add_modal_front_page() {
	if ( is_front_page() ) {
		$modalfp_textarea = get_theme_mod('modalfp-textarea');
		$modalfp_title    = get_theme_mod('modalfp-title');
		$modal_image      = get_theme_mod('modal-image');
		$feature1_id = attachment_url_to_postid($modal_image);
		$image1_alt = get_post_meta( $feature1_id, '_wp_attachment_image_alt', true );
		echo '<div class="modal fade" id="100bmba-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
						  <div class="modal-content">
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						     <span aria-hidden="true">&times;</span>
						   </button>
						  <div class="modal-img-wrapper d-flex justify-content-center">
						  		<div id="modal-logo" class="col-6">
						  		<img class="image-fluid" src="'. $modal_image .'" title="'. $image1_alt .'" alt="'. $image1_alt .'">
						  		</div>
						  	</div>
						    <div class="modal-header">
						      <h5 class="modal-title" id="exampleModalLabel">'. $modalfp_title .'</h5>
						    </div>
						    <div class="modal-body">
									'. $modalfp_textarea .'
						    </div>
						  </div>
						</div>
					</div>';
	}
}
