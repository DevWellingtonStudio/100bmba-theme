<?php
/**
 * The template for displaying all single Give Donation Forms
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			do_action( 'give_before_main_content' );

			// Start the loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'templates/content', 'single-give-form' );

				// End the loop.
			endwhile;

			do_action( 'give_after_main_content' );
			?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
//genesis();
get_footer(); ?>
