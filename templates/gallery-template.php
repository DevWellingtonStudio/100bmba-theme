<?php
/**
 * Template Name: Gallery Template
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/wellington-studio-theme.git
 * @author       Chris Parsons <chris@steelbridge.io>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action('genesis_entry_content', 'do_gallery_content', 5 );
function do_gallery_content() {
// Display Heading and Content
	echo '<div class="container">';
	the_content();
	echo '</div>';
}

add_action( 'genesis_after_entry_content', 'add_gallery', 15 );
function add_gallery() {
	global $post;
	$gallery_name = get_post_meta($post->ID, 'gallery-name', true);
	$gallery_title = get_post_meta($post->ID, 'gallery-title', true);

	echo '<div class="container" id="gallery">
  			<div class="row justify-content-center pb-5 mb-5">';

	if($gallery_name !== '' || $gallery_title !== '') {

  echo '<div class="col-12 text-center pt-5 mt-5 pb-5" >
		      <h4 class="headingsmall" > '. $gallery_name .'</h4 >
		      <h2 class="headingbig pb-3" > '. $gallery_title .'</h2 >
        </div>';
		      }
	echo '<div class="col-md-12">
      		<div class="row">';

					$category_name = get_post_meta($post->ID, 'category-name', true);
					// arguments, adjust as needed
					$args = array(
						'post_type'      => 'bmba_gallery',
						'post_status'    => 'publish',
						'tax_query' => array(
							array (
								'taxonomy' => 'gallery-category',
								'field' => 'slug',
								'terms' => $category_name,
							)
						)
					);

					global $wp_query;
					$wp_query = new WP_Query( $args );

					if ( have_posts() ) : while ( have_posts() ) : the_post();
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						$alt = get_the_title();


	echo '<a href="' . $featured_img_url . '" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 mb-4 thumbnail">' .
	     '<div class="bkground-gal">' .
	     '<img src="' . $featured_img_url . '" class="w-100 height-fit gallery-image" alt="'. $alt .'">' .
	     '</div>' .
	     '</a>';

	endwhile;

	endif;

	wp_reset_query();

	echo '
			</div>
    </div>
  </div>
</div>
	';

}

genesis();
