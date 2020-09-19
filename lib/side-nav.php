<?php

add_action( 'genesis_before', 'add_side_nav' );
function add_side_nav() {
	do_action('bmba_sidebar_navigation');
}


function register_sidebar_menu() {
	register_nav_menu( 'side-bar-menu' ,__( 'Side Bar Nav' ));
}
add_action( 'init', 'register_sidebar_menu' );

// Adds Footer Navigation
add_action( 'bmba_sidebar_navigation', 'add_bmba_sidebar_nav' );
function add_bmba_sidebar_nav() {

	$menu_locations = get_nav_menu_locations();
// Sub nav renders is assigned in Menu editor
	if($menu_locations && $menu_locations['side-bar-menu'] !=0) :
		?>
		<div id="bmbaSidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="row side-nav-row">
		  <div class="col-6 slide-nav-left-side">
			<img class="w-100 side-slider-nav-logo" src="https://100.local/wp-content/uploads/2020/09/Logo-100BMBA-white.png" alt="100 Black Men Of The Bay Area Logo">

			<div class="social-media-side-slider">
			  <i class="fab fa-2x fa-facebook-square"></i><i class="fab fa-2x fa-instagram-square"></i><i class="fab fa-2x fa-twitter-square"></i><i class="fab fa-2x fa-pinterest-square"></i>
			</div>
		  </div>
		  <div class="col-6 slide-nav-right-side">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'side-bar-menu',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'slidein-nav',
					'container_id'      => 'bmba-sidemenu',
					'menu'              => 'nav-slider',
					'menu_class'        => 'nav-slidein',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>
		  </div>
		</div>
		</div>
	<?php endif; ?>

<?php }

