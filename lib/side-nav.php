<?php

add_action( 'genesis_before', 'add_side_nav' );
function add_side_nav() {
	do_action('bmba_sidebar_navigation');
}

// Add this to other sections of the nav as a button, without the id=overlay to trigger close option.
echo '<div id="overlay" onclick="closeNav()"></div>';

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
		<div id="sidenavrow" class="row side-nav-row">
		  <div class="col-6 slide-nav-left-side">
			<?php $side_nav_logo = get_theme_mod('side-nav-logo');
			if($side_nav_logo !== '') {
			echo '<img class="w-100 side-slider-nav-logo" src="'. $side_nav_logo .'" alt="100 Black Men Of The Bay Area Logo">';
			} ?>
			<div class="social-media-side-slider">
			 <?php
			 $social_media_1 		= get_theme_mod('social-media-1');
			 $social_media_1_link 	= get_theme_mod('social-media-1-link');
			 $social_media_2 		= get_theme_mod('social-media-2');
			 $social_media_2_link 	= get_theme_mod('social-media-2-link');
			 $social_media_3 		= get_theme_mod('social-media-3');
			 $social_media_3_link 	= get_theme_mod('social-media-3-lnk');
			 $social_media_4 		= get_theme_mod('social-media-4');
			 $social_media_4_link 	= get_theme_mod('social-media-4-link');

			 if($social_media_1 !== ''){ echo '<a class="social-link" href="'. $social_media_1_link .'" title="Social Media"><i class="fab fa-2x '. $social_media_1 .'"></i></a>'; }
			 if($social_media_2 !== ''){ echo '<a class="social-link" href="'. $social_media_2_link .'" title="Social Media"><i class="fab fa-2x '. $social_media_2 .'"></i></a>'; }
			 if($social_media_3 !== ''){ echo '<a class="social-link" href="'. $social_media_3_link .'" title="Social Media"><i class="fab fa-2x '. $social_media_3 .'"></i></a>'; }
			 if($social_media_4 !== ''){ echo '<a class="social-link" href="'. $social_media_4_link .'" title="Social Media"><i class="fab fa-2x '. $social_media_4 .'"></i></a>'; }
			 ?>
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

