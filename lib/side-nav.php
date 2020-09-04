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
	<?php endif; ?>

<?php }

