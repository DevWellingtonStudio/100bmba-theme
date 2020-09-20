<?php

do_action( 'give_before_single_form' );

if ( has_post_thumbnail() ) {

	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

	//$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'donate-header' );
	//$headerbkgrnd = "url('" . $image[0] . "');";
//} else {
	//$headerbkgrnd = '#777;';
}

?>

	<!--<h1 itemprop="name" class="give-form-title entry-title" style="background: <?php //echo $headerbkgrnd; ?>"><?php //the_title(); ?></h1>-->
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<img class="w-100 give-featured-image" src="<?php echo $featured_img_url; ?>" alt="Donation featured image">
			<div id="give-form-<?php the_ID(); ?>-content" <?php post_class(); ?>>
				<div class="<?php echo apply_filters( 'give_forms_single_summary_classes', 'summary entry-summary' ); ?>">

					<?php give_get_donation_form( $args = array() ); ?>

				</div>
				<!-- .summary -->

				<?php	do_action( 'give_after_single_form_summary' );	?>

			</div><!-- #give-form-<?php the_ID(); ?> -->
		</div>
	</div>
</div>

<?php do_action( 'give_after_single_form' ); ?>
