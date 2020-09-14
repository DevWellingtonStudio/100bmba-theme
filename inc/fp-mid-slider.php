<?php
$default = '';
$wst_mid_slider1	= get_theme_mod('wst_mid_slider1', $default );
$midslider1title	= get_theme_mod('midslider1title', $default);
$midsldr1text		= get_theme_mod('midsldr1text', $default);
$wst_mid_slider2	= get_theme_mod('wst_mid_slider2', $default);
$midslider2title	= get_theme_mod('midslider2title', $default);
$midsldr2text		= get_theme_mod('midsldr2text', $default);
$wst_mid_slider3	= get_theme_mod('wst_mid_slider3', $default);
$midslider3title	= get_theme_mod('midslider3title', $default);
$midsldr3text		= get_theme_mod('midsldr3text', $default);
$wst_mid_slider4	= get_theme_mod('wst_mid_slider4', $default);
$midslider4title	= get_theme_mod('midslider4title', $default);
$midsldr4text		= get_theme_mod('midsldr4text', $default);


$wst_mid_slider5	= get_theme_mod('wst_mid_slider5', $default);
$midslider5title	= get_theme_mod('midslider5title', $default);
$midsldr5text		= get_theme_mod('midsldr5text', $default);

$wst_mid_slider6	= get_theme_mod('wst_mid_slider6', $default);
$midslider6title	= get_theme_mod('midslider6title', $default);
$midsldr6text		= get_theme_mod('midsldr6text', $default);

?>
<div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
	  <ol class="carousel-indicators">
        <?php if($wst_mid_slider1 !== $default) : ?>
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <?php endif;
        if($wst_mid_slider2 !== $default) : ?>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <?php endif;
        if($wst_mid_slider3 !== $default) : ?>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <?php endif;
        if($wst_mid_slider4 !== $default) : ?>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <?php endif;
        if($wst_mid_slider5 !== $default) : ?>
		<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
		<?php endif;
		if($wst_mid_slider6 !== $default) : ?>
		<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
		<?php endif; ?>



	  </ol>
	  <div class="carousel-inner">
        <?php if($wst_mid_slider1 !== $default) : ?>
	    <div id="mid-slider-fp-1" class="carousel-item active align-items-center">
	      <img src="<?php if($wst_mid_slider1 !== $default){echo $wst_mid_slider1;} ?>" class="d-block w-100" alt="">
	      <div class="carousel-caption col-md-4">
	        <h3><?php if($midslider1title !== $default){echo $midslider1title;} ?></h3>
	        <p><?php if($midsldr1text !== $default){echo $midsldr1text;} ?></p>
	      </div>
	    </div>
        <?php endif;
        if($wst_mid_slider2 !== $default) : ?>
	    <div id="mid-slider-fp-2" class="carousel-item align-items-center">
	      <img src="<?php if($wst_mid_slider2 !== $default){echo $wst_mid_slider2;} ?>" class="d-block w-100" alt="">
	      <div class="carousel-caption col-md-4">
	        <h3><?php if($midslider2title !== $default){echo $midslider2title;} ?></h3>
	        <p><?php if($midsldr2text !== $default){echo $midsldr2text;} ?></p>
	      </div>
	    </div>
        <?php endif;
        if($wst_mid_slider3 !== $default) : ?>
	    <div id="mid-slider-fp-3" class="carousel-item align-items-center">
	      <img src="<?php if($wst_mid_slider3 !== $default){echo $wst_mid_slider3;} ?>" class="d-block w-100" alt="">
	      <div class="carousel-caption col-md-4">
	        <h3><?php if($midslider3title !== $default){echo $midslider3title;} ?></h3>
	        <p><?php if($midsldr3text !== $default){echo $midsldr3text;} ?></p>
	      </div>
	    </div>
        <?php endif;
        if($wst_mid_slider4 !== $default) : ?>
        <div id="mid-slider-fp-4" class="carousel-item align-items-center">
          <img src="<?php if($wst_mid_slider4 !== $default){echo $wst_mid_slider4;} ?>" class="d-block w-100" alt="">
          <div class="carousel-caption col-md-4">
            <h3><?php if($midslider4title !== $default){echo $midslider4title;} ?></h3>
            <p><?php if($midsldr4text !== $default){echo $midsldr4text;} ?></p>
          </div>
        </div>
        <?php endif;
		if($wst_mid_slider5 !== $default) : ?>
		<div id="mid-slider-fp-4" class="carousel-item align-items-center">
		  <img src="<?php if($wst_mid_slider5 !== $default){echo $wst_mid_slider5;} ?>" class="d-block w-100" alt="">
		  <div class="carousel-caption col-md-4">
			<h3><?php if($midslider5title !== $default){echo $midslider5title;} ?></h3>
			<p><?php if($midsldr5text !== $default){echo $midsldr5text;} ?></p>
		  </div>
		</div>
		<?php endif;
		if($wst_mid_slider6 !== $default) : ?>
		<div id="mid-slider-fp-4" class="carousel-item align-items-center">
		  <img src="<?php if($wst_mid_slider6 !== $default){echo $wst_mid_slider6;} ?>" class="d-block w-100" alt="">
		  <div class="carousel-caption col-md-4">
			<h3><?php if($midslider6title !== $default){echo $midslider6title;} ?></h3>
			<p><?php if($midsldr6text !== $default){echo $midsldr6text;} ?></p>
		  </div>
		</div>
		<?php endif; ?>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
