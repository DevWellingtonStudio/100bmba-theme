<?php

add_action( 'genesis_before', 'add_side_nav' );
function add_side_nav() {
	echo '<div id="bmbaSidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>';
}
