<?php

add_shortcode('social-icons', 'add_social_icons');
function add_social_icons() {
	return '
	<a href="https://www.facebook.com/100-Black-Men-of-the-Bay-Area-206857172769508/" title="Facebook 100 Black Men Of The Bay Area"><i class="fab fa-2x fa-facebook-square"></i></a>
	&nbsp;&nbsp;<a href="https://www.instagram.com/100blackmenofthebayarea/" title="Instagram 100 Black Men Of The Bay Area"><i class="fab fa-2x fa-instagram-square"></i></a>
	&nbsp;&nbsp;<a href="https://twitter.com/100BlackMenBA" title="Twitter 100 Black Men Of The Bay Area"><i class="fab fa-2x fa-twitter-square"></i></a>
	&nbsp;&nbsp;<a href="https://www.linkedin.com/company/100-black-men-of-the-bay-area/" title="LinkedIn 100 Black Men Of The Bay Area"><i class="fab fa-2x fa-linkedin"></i></a>
	';
}


add_shortcode('facebook-icon', 'add_facebook_icon');
function add_facebook_icon() {
	return '
	<a href="https://www.facebook.com/100-Black-Men-of-the-Bay-Area-206857172769508/" title="Facebook 100 Black Men Of The Bay Area"><i class="fab fa-2x fa-facebook-square"></i></a>
	';
}

add_shortcode('instagram-icon', 'add_instagram_icon');
function add_instagram_icon() {
	return '
	&nbsp;<a href="https://www.instagram.com/100blackmenofthebayarea/" title="Instagram 100 Black Men Of The Bay Area"><i class="fab fa-x2 fa-instagram-square"></i></a>
	';
}

add_shortcode('twitter-icon', 'add_twitter_icon');
function add_twitter_icon() {
	return '
	&nbsp;<a href="https://twitter.com/100BlackMenBA" title="Twitter 100 Black Men Of The Bay Area"><i class="fab fa-x2 fa-twitter-square"></i></a>
	';
}

add_shortcode('linkedin-icon', 'add_linkedin_icon');
function add_linkedin_icon() {
	return '
	&nbsp;<a href="https://www.linkedin.com/company/100-black-men-of-the-bay-area/" title="LinkedIn 100 Black Men Of The Bay Area"><i class="fab fa-x2 fa-linkedin"></i></a>
	';
}

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



