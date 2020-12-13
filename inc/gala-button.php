<?php
add_action ('genesis_before_content_sidebar_wrap', 'add_gala_button', 25);
function add_gala_button() {
	echo '
	<div id="gala-button">
		<div class="gala-button-wrap">
			<a href="https://100blackmenba.org/2020gala/" target="_blank"><button type="button" class="btn btn-gala"><h2>2020 32<span class="ordinal">nd</span>&nbsp;Annual Scholarship Benefit And Awards Virtual Gala Program</h2></button></a>
		</div>
	</div>
	';
}
