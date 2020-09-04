<?php

add_shortcode('side-bar-nav', 'bmba_sidebar_nav');
function bmba_sidebar_nav() {
	return '<span class="sidebar-icon" onclick="openNav()">&#9776;</span>';
}
