<?php

add_action( 'init', 'add_gallery_post_type' );
function add_gallery_post_type() {
	register_post_type( 'bmba_gallery',
		array(
			'labels' => array(
				'name' => __( 'Gallery' ),
				'singular_name' => __( 'Gallery' ),
				'all_items' => __( 'All Images')
			),
			'public' => true,
			'has_archive' => false,
			'exclude_from_search' => true,
			'rewrite' => array('slug' => 'gallery-item'),
			'supports' => array( 'title', 'thumbnail', 'page-attributes' ),
			'menu_position' => 4,
			'show_in_admin_bar'   => false,
			'show_in_nav_menus'   => false,
			'publicly_queryable'  => false,
			'query_var'           => false
		)
	);
}

/* Taxonomy */
add_action('init', 'gallery_taxonomy_type');
function gallery_taxonomy_type() {

	register_taxonomy(
		'gallery-category',
		'bmba_gallery',
		array(
			'label' => __( 'Category' ),
			'rewrite' => array( 'slug' => 'gallery-category' ),
			'hierarchical' => true,
			'show_ui'   => true,
		)
	);
}

function bmba_get_backend_preview_thumb($post_ID) {
	$post_thumbnail_id = get_post_thumbnail_id($post_ID);
	if ($post_thumbnail_id) {
		$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
		return $post_thumbnail_img[0];
	}
}

function bmba_preview_thumb_column_head($defaults) {
	$defaults['featured_image'] = 'Image';
	return $defaults;
}
add_filter('manage_posts_columns', 'bmba_preview_thumb_column_head');

function bmba_preview_thumb_column($column_name, $post_ID) {
	if ($column_name == 'featured_image') {
		$post_featured_image = bmba_get_backend_preview_thumb($post_ID);
		if ($post_featured_image) {
			echo '<img src="' . $post_featured_image . '" />';
		}
	}
}
add_action('manage_posts_custom_column', 'bmba_preview_thumb_column', 10, 2);

function bmba_gallery_meta() {
	global $post;
	if(!empty($post)){
		$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
		if($pageTemplate == 'templates/gallery-template.php') {
			$types = array('post', 'page', 'zm_gallery');
			foreach($types as $type) {
				add_meta_box( 'basic_meta', __( 'Gallery Options', '100-black-men-ba' ), 'bmba_gallery_callback', $type, 'normal', 'high' );
			}
		}
	}
}
add_action( 'add_meta_boxes', 'bmba_gallery_meta' );

function bmba_gallery_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'gallery_nonce' );
	$bmba_gallery_meta = get_post_meta( $post->ID );
	?>

	<div style="margin-top: 1.618em;">
		<h1>Select Image Category Options</h1>
	</div>

	<!-- Category Name -->
	<div class="mt-1618 mb-1618">
		<strong><label for="category-name" class="basic-row-title"><?php _e('Gallery Category ','100-balck-men-ba')?></label></strong>
		<input style="width: 100%;" type="text" name="category-name" id="category-name" value="<?php if (isset($bmba_gallery_meta['category-name'])) echo $bmba_gallery_meta['category-name'][0]; ?>" />
	</div>

	<!-- Gallery Name -->
	<div class="mt-1618 mb-1618">
	  <strong><label for="gallery-name" class="basic-row-title"><?php _e('Gallery Name','100-black-men-ba')?></label></strong>
	  <input style="width: 100%;" type="text" name="gallery-name" id="gallery-name" value="<?php if (isset($bmba_gallery_meta['gallery-name'])) echo $bmba_gallery_meta['gallery-name'][0]; ?>" />
	</div>

	<!-- Gallery Title -->
	<div class="mt-1618 mb-1618">
	  <strong><label for="gallery-title" class="basic-row-title"><?php _e('Gallery Name','100-black-men-ba')?></label></strong>
	  <input style="width: 100%;" type="text" name="gallery-title" id="gallery-title" value="<?php if (isset($bmba_gallery_meta['gallery-title'])) echo $bmba_gallery_meta['gallery-title'][0]; ?>" />
	</div>


<?php }


add_action('save_post', 'gallery_meta_save');
function gallery_meta_save($post_id) {

	// Checks save status
	$is_autosave    = wp_is_post_autosave( $post_id );
	$is_revision    = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['gallery_nonce'] ) && wp_verify_nonce( $_POST['gallery_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	// Checks for input and sanitizes/saves if needed
	if (isset($_POST['category-name'])) {
		update_post_meta($post_id, 'category-name', sanitize_text_field($_POST['category-name']));
	}

	if (isset($_POST['gallery-name'])) {
	  update_post_meta($post_id, 'gallery-name', sanitize_text_field($_POST['gallery-name']));
	}

	if (isset($_POST['gallery-title'])) {
	  update_post_meta($post_id, 'gallery-title', sanitize_text_field($_POST['gallery-title']));
	}

}

