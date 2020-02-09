<?php

	$slider_8_title = propper_return_theme_option('slider_8_title');
	$slider_8_subtitle = propper_return_theme_option('slider_8_subtitle');
	$slider_8_video_url = propper_return_theme_option('slider_8_video_url');
	$slider_8_newsletter_title = propper_return_theme_option('slider_8_newsletter_title');
?>
<div id="slider">
<div class="hero-section background-is-dark">	
	<div class="video-background">
		<iframe src="<?php echo esc_url($slider_8_video_url);?>" width="640" height="360"></iframe>
	</div>
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<h1><?php echo $slider_8_title; ?></h1>
				<div class="animate">
					<p class="width-50"><?php echo $slider_8_subtitle; ?></p>
				</div>
				<form class="animate" id="form-hero">
					<label for="form-hero-email"><?php echo $slider_8_newsletter_title; ?></label>
					<div class="row">
						<div class="col-md-5 col-sm-5">
							<div class="animate"><?php echo do_shortcode($slider_8_newsletter); ?></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>