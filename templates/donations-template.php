<?php
	/**
	 * Template Name: Donations Template
	 *
	 * @package      Wellington Studio Theme
	 * @since        1.0
	 * @link         https://github.com/DevWellingtonStudio/100bmba-theme
	 * @author       Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 *
	 */

	//remove_action( 'genesis_entry_content', 'genesis_do_post_content' );


	//* Add custom body class
	add_filter( 'body_class', 'donation_body_class' );
	function donation_body_class( $classes ) {
		$classes[] = 'donations-template';
		return $classes;
	}

	add_action('genesis_before_footer', 'add_donations_options', 5);
	function add_donations_options()
	{
		$default = '';
		$donation_1_label 	= get_post_meta(get_the_ID(), 'donation-1-label', true);
		$donation_1 				= get_post_meta(get_the_ID(), 'donation-1', true);
		$donation_2_label 	= get_post_meta(get_the_ID(), 'donation-2-label', true);
		$donation_2 				= get_post_meta(get_the_ID(), 'donation-2', true);
		$donation_3_label 	= get_post_meta(get_the_ID(), 'donation-3-label', true);
		$donation_3 				= get_post_meta(get_the_ID(), 'donation-3', true);
		$donation_4_label 	= get_post_meta(get_the_ID(), 'donation-4-label', true);
		$donation_4 				= get_post_meta(get_the_ID(), 'donation-4', true);
		$donation_5_label 	= get_post_meta(get_the_ID(), 'donation-5-label', true);
		$donation_5 				= get_post_meta(get_the_ID(), 'donation-5', true);
		$donation_6_label 	= get_post_meta(get_the_ID(), 'donation-6-label', true);
		$donation_6 				= get_post_meta(get_the_ID(), 'donation-6', true);
		$donation_7_label 	= get_post_meta(get_the_ID(), 'donation-7-label', true);
		$donation_7 				= get_post_meta(get_the_ID(), 'donation-7', true);
		$donation_8_label 	= get_post_meta(get_the_ID(), 'donation-8-label', true);
		$donation_8 				= get_post_meta(get_the_ID(), 'donation-8', true);
		$donation_9_label 	= get_post_meta(get_the_ID(), 'donation-9-label', true);
		$donation_9 				= get_post_meta(get_the_ID(), 'donation-9', true);
		$donation_10_label 	= get_post_meta(get_the_ID(), 'donation-10-label', true);
		$donation_10 				= get_post_meta(get_the_ID(), 'donation-10', true);
		$donation_11_label 	= get_post_meta(get_the_ID(), 'donation-11-label', true);
		$donation_11 				= get_post_meta(get_the_ID(), 'donation-11', true);
		$donation_12_label 	= get_post_meta(get_the_ID(), 'donation-12-label', true);
		$donation_12 				= get_post_meta(get_the_ID(), 'donation-12', true);


		if ($donation_1_label !== $default) {
			echo '
		<div id="donation-template-cont" class="container mb-5">
		<h2 class="give-form-title">Donate</h2>
		<p class="lead">Please select one of our campaign fund options below (default: General)</p>
				<div id="donate-btns" class="row">
				<div class="col-md-3">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong1">
						' . $donation_1_label . '
					</button>
				</div>';

			if ($donation_2_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target ="#exampleModalLong2">
								' . $donation_2_label . '
								</button>
							</div>';
			}

			if ($donation_3_label !== $default) {
				echo '<div class="col-md-3">
								<button type = "button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong3">
								' . $donation_3_label . '
								</button>
							</div>';
			}

			if ($donation_4_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong4">
									' . $donation_4_label . '
								</button>
							</div>';
			}

			if ($donation_5_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong5">
									' . $donation_5_label . '
								</button>
							</div>';
			}

			if ($donation_6_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong6">
									' . $donation_6_label . '
								</button>
							</div>';
			}

			if ($donation_7_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong7">
									' . $donation_7_label . '
								</button>
							</div>';
			}

			if ($donation_8_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong8">
									' . $donation_8_label . '
								</button>
							</div>';
			}

			if ($donation_9_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong9">
									' . $donation_9_label . '
								</button>
							</div>';
			}

			if ($donation_10_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong10">
									' . $donation_10_label . '
								</button>
							</div>';
			}

			if ($donation_11_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong11">
									' . $donation_11_label . '
								</button>
							</div>';
			}

			if ($donation_12_label !== $default) {
				echo '<div class="col-md-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong12">
									' . $donation_12_label . '
								</button>
							</div>';
			}

			echo '
			</div>
		</div>';

			// Modal 1
			if ($donation_1 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong1Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_1']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 2
			if ($donation_2 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong2Title" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content donations-modal">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modaal-body donations-modal-body">
									 ' . do_shortcode("[give_form id='$donation_2']") . '
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>';
			}

			// Modal 3
			if ($donation_3 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong3Title" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content donations-modal">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modaal-body donations-modal-body">
									' . do_shortcode("[give_form id='$donation_3']") . '
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>';
			}

			// Modal 4
			if ($donation_4 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong4Title" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content donations-modal">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modaal-body donations-modal-body">
									' . do_shortcode("[give_form id='$donation_4']") . '
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>';
			}

			// Modal 5
			if ($donation_5 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong5Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_5']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 6
			if ($donation_6 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong6Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_6']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 7
			if ($donation_7 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong7Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_7']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 8
			if ($donation_8 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong8Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_8']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 9
			if ($donation_9 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong9Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_9']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 10
			if($donation_10 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong10Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_10']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 11
			if($donation_11 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong11Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_11']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}

			// Modal 12
			if($donation_12 !== $default) {
				echo '<div class="modal fade" id="exampleModalLong12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong12Title" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content donations-modal">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modaal-body donations-modal-body">
											' . do_shortcode("[give_form id='$donation_12']") . '
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary btn-donations" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>';
			}
		}
	}

	genesis();
