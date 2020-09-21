<?php

add_shortcode('side-bar-nav', 'bmba_sidebar_nav');
function bmba_sidebar_nav() {
	//return '<span class="sidebar-icon" onclick="openNav()">&#9776;</span>';
	return '<div class="sidebar-icon" onclick="openNav()">
					<div class="hamburger-icon"></div>
					<div class="hamburger-icon icon-2"></div>
					<div class="hamburger-icon"></div>
					</div>';
}

add_shortcode('search_field', 'custom_search');
function custom_search() {


		 return '
		<div class="container member-search-container">
		<div class="row">
		<div class="col-md-6 member-search-col">
		<div id="mem-cat-search-cont" class="mem-search-cat">
			<!-- Start SearchForm For Member Categories -->
			<form method="get" class="member-category searchform" role="search" action="'. home_url('/') .'">
			<fieldset id="members-search-field">
			<input name="s" type="text" class="members-cpt-search s small-12" placeholder="Search Members | Industry" style="font-family:Arial, FontAwesome">
			<input type="hidden" name="post_type" value="member_cpt"/><input type="submit" class="btn btn-dark" style="text-transform:uppercase;" align="center" value="Search" />
			</fieldset>
			</form>
			<!-- End SearchForm -->
		</div>
		</div>
		</div>
		</div>';

 }



