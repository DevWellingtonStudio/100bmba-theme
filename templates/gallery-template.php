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

add_action( 'genesis_before_footer', 'add_gallery', 5 );
function add_gallery() {
	echo '
		<div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(118).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(132).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(132).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(133).jpg"
            class="img-fluid" />
        </a>
      </figure>

    </div>

  </div>
</div>
	';
}



genesis();


