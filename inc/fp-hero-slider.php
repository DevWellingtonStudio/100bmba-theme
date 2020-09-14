<?php
$wst_slider1	= get_theme_mod('wst_slider1', $default );
$slider1title	= get_theme_mod('slider1title', $default );
$sldr1text		= get_theme_mod('sldr1text', $default );
$wst_slider2	= get_theme_mod('wst_slider2', $default );
$slider2title	= get_theme_mod('slider2title', $default );
$sldr2text		= get_theme_mod('sldr2text', $default );
$wst_slider3	= get_theme_mod('wst_slider3', $default );
$slider3title	= get_theme_mod('slider3title', $default );
$sldr3text		= get_theme_mod('sldr3text', $default );
$wst_slider4	= get_theme_mod('wst_slider4', $default );
$slider4title	= get_theme_mod('slider4title', $default );
$sldr4text		= get_theme_mod('sldr4text', $default );
$wst_slider5	= get_theme_mod('wst_slider5', $default );
$slider5title	= get_theme_mod('slider5title', $default );
$sldr5text		= get_theme_mod('sldr5text', $default );
$wst_slider6	= get_theme_mod('wst_slider6', $default );
$slider6title	= get_theme_mod('slider6title', $default );
$sldr6text		= get_theme_mod('sldr6text', $default );
?>
<div id="hero-section">
  <div id="wstTopSlider" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
	  <?php
	 	if($wst_slider2 !== $default) {
		  echo '<li data-target="#wstTopSlider" data-slide-to="0" class="active"></li>';
      	}
	 	if($wst_slider2 !== $default) {
		  echo '<li data-target="#wstTopSlider" data-slide-to="1"></li>';
      	}
	 	if($wst_slider3 !== $default) {
		  echo '<li data-target="#wstTopSlider" data-slide-to="2"></li>';
      	}
	 	if($wst_slider4 !== $default) {
	 	  echo '<li data-target="#wstTopSlider" data-slide-to="3"></li>';
	  	}
	 	if($wst_slider5 !== $default) {
	 	  echo '<li data-target="#wstTopSlider" data-slide-to="4"></li>';
	 	}
	 	if($wst_slider6 !== $default) {
		  echo '<li data-target="#wstTopSlider" data-slide-to="5"></li>';
		}
	  ?>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php if($wst_slider1 !== $default){echo $wst_slider1;} ?>" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php if($slider1title !== $default){echo $slider1title;} ?></h5>
          <p><?php if($sldr1text !== $default){echo $sldr1text;} ?></p>
        </div>
      </div>
		 <?php if($wst_slider2 !== $default) : ?>
       <div class="carousel-item">
         <img src="<?php if($wst_slider2 !== $default){echo $wst_slider2;} ?>" class="d-block w-100" alt="">
         <div class="carousel-caption d-none d-md-block">
           <h5><?php if($slider2title !== $default){echo $slider2title;} ?></h5>
           <p><?php if($sldr2text !== $default){echo $sldr2text;} ?></p>
         </div>
       </div>
		 <?php endif;
		 if($wst_slider3 !== $default) : ?>
       <div class="carousel-item">
         <img src="<?php if($wst_slider3 !== $default){echo $wst_slider3;} ?>" class="d-block w-100" alt="">
         <div class="carousel-caption d-none d-md-block">
           <h5><?php if($slider3title !== $default){echo $slider2title;} ?></h5>
           <p><?php if($sldr3text !== $default){echo $sldr3text;} ?></p>
         </div>
       </div>
		 <?php endif;
		 if($wst_slider4 !== $default) : ?>
		<div class="carousel-item">
		  <img src="<?php if($wst_slider4 !== $default){echo $wst_slider4;} ?>" class="d-block w-100" alt="">
		  <div class="carousel-caption d-none d-md-block">
			<h5><?php if($slider4title !== $default){echo $slider4title;} ?></h5>
			<p><?php if($sldr4text !== $default){echo $sldr4text;} ?></p>
		  </div>
		</div>
	  <?php endif;
	  if($wst_slider5 !== $default) : ?>
		<div class="carousel-item">
		  <img src="<?php if($wst_slider5 !== $default){echo $wst_slider5;} ?>" class="d-block w-100" alt="">
		  <div class="carousel-caption d-none d-md-block">
			<h5><?php if($slider5title !== $default){echo $slider5title;} ?></h5>
			<p><?php if($sldr5text !== $default){echo $sldr5text;} ?></p>
		  </div>
		</div>
	  <?php endif;
	  if($wst_slider6 !== $default) : ?>
		<div class="carousel-item">
		  <img src="<?php if($wst_slider6 !== $default){echo $wst_slider6;} ?>" class="d-block w-100" alt="">
		  <div class="carousel-caption d-none d-md-block">
			<h5><?php if($slider6title !== $default){echo $slider6title;} ?></h5>
			<p><?php if($sldr6text !== $default){echo $sldr6text;} ?></p>
		  </div>
		</div>
	  <?php endif; ?>
    </div>
    <a class="carousel-control-prev" href="#wstTopSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#wstTopSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
