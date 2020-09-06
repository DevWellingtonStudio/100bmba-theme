/* Manages the loading of images into meta fields found in templates */

jQuery(document).ready( function($){ "use strict";

  // Instantiates the variable that holds the media library frame.
  var featured1_image_frame;

  // Runs when the image button is clicked.
  $('#full-body-image-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( featured1_image_frame ) {
		featured1_image_frame.open();
		return;
	 }

	 // Sets up the media library frame
	 featured1_image_frame = wp.media.frames.featured1_image_frame = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 featured1_image_frame.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = featured1_image_frame.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#full-body-image').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 featured1_image_frame.open();
  });
});

