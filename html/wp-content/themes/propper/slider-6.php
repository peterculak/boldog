<?php 

$slider_6_title = propper_return_theme_option('slider_6_title');
$slider_6_subtitle = propper_return_theme_option('slider_6_subtitle');
$slider_6_video_url = propper_return_theme_option('slider_6_video_url');
$slider_6_video_overlay = propper_return_theme_option('slider_6_video_overlay');
$slider_6_button_text = propper_return_theme_option('slider_6_button_text');
$slider_6_button_link = propper_return_theme_option('slider_6_button_link');


$slider_6_images = propper_return_theme_option('slider_6_images');
$slider_6_images = explode(",",$slider_6_images);
$slider_6_images_src = array();
foreach($slider_6_images as $slider_6_image){
	
	if ($slider_6_image != null) {

		$src = wp_get_attachment_image_src ( $slider_6_image, 'full' );

		$slider_6_images_src[] = esc_url ( $src [0] );

	}			
}
?>
<div id="slider">
<div class="hero-section background-is-dark">
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 animate">
						<h1><?php echo $slider_6_title; ?></h1>
						<p><?php echo $slider_6_subtitle; ?></p>
						<?php if($slider_6_button_text != ''){ ?>
						<a href="<?php echo $slider_6_button_link; ?>" class="btn btn-rounded btn-default scroll"><?php echo $slider_6_button_text; ?></a>
						<?php }?>
					</div>
					<div class="col-md-6 col-sm-6 animate">
						<a href="<?php echo esc_url($slider_6_video_url);?>" class="video-player video-popup">
							<i class="play-icon arrow_triangle-right"></i>
							<div class="has-overlay">
								<img src="<?php echo esc_url($slider_6_video_overlay['url']);?>" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
		<?php foreach($slider_6_images_src as $slider_6_image_src){ ?>
			
			<div class="hero-slide">
				<div class="bg-transfer"><img src="<?php echo esc_url($slider_6_image_src);?>" alt=""></div>
			</div>
			
		<?php } ?>		
	</div>
</div>
</div>