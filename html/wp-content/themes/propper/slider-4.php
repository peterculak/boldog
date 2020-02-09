<?php 

$slider_4_title = propper_return_theme_option('slider_4_title');
$slider_4_subtitle = propper_return_theme_option('slider_4_subtitle');
$slider_4_newsletter = propper_return_theme_option('slider_4_newsletter');
$slider_4_video_url = propper_return_theme_option('slider_4_video_url');
$slider_4_images = propper_return_theme_option('slider_4_images');

$slider_4_images = explode(",",$slider_4_images);
$slider_4_images_src = array();
foreach($slider_4_images as $slider_4_image){
	
	if ($slider_4_image != null) {

		$src = wp_get_attachment_image_src ( $slider_4_image, 'full' );

		$slider_4_images_src[] = esc_url ( $src [0] );

	}			
}
?>
<div id="slider">
<div class="hero-section background-is-dark">	
	<div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
		<?php foreach($slider_4_images_src as $slider_4_image_src){ ?>
			
			<div class="hero-slide">
				<div class="bg-transfer"><img src="<?php echo esc_url($slider_4_image_src);?>" alt=""></div>
			</div>
			
		<?php } ?>	
	</div>
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-7 animate">
						<h1><?php echo $slider_4_title; ?></h1>
						<p class="width-70">
							<?php echo $slider_4_subtitle; ?>
						</p>
						<a href="<?php echo esc_url($slider_4_video_url); ?>" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i><?php esc_html_e('Click to take a tour','propper');?></a>
					</div>
					<div class="col-md-5 col-sm-5 animate">
						<?php echo do_shortcode($slider_4_newsletter); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>