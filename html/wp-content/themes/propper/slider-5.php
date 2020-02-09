<?php 

$slider_5_title = propper_return_theme_option('slider_5_title');
$slider_5_newsletter = propper_return_theme_option('slider_5_newsletter');

$slider_5_countdown_year = propper_return_theme_option('slider_5_countdown_year');
$slider_5_countdown_month = propper_return_theme_option('slider_5_countdown_month');
$slider_5_countdown_day = propper_return_theme_option('slider_5_countdown_day');

$slider_5_images = propper_return_theme_option('slider_5_images');
$slider_5_images = explode(",",$slider_5_images);
$slider_5_images_src = array();
foreach($slider_5_images as $slider_5_image){
	
	if ($slider_5_image != null) {

		$src = wp_get_attachment_image_src ( $slider_5_image, 'full' );

		$slider_5_images_src[] = esc_url ( $src [0] );

	}			
}
?>

<div id="slider">
<div class="hero-section background-is-dark">	
	<div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
		<?php foreach($slider_5_images_src as $slider_5_image_src){ ?>
			
			<div class="hero-slide">
				<div class="bg-transfer"><img src="<?php echo esc_url($slider_5_image_src);?>" alt=""></div>
			</div>
			
		<?php } ?>		
		
	</div>
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<div class="animate">
					<h1 class="opacity-50 center"><?php echo $slider_5_title; ?></h1>
				</div>
				<div class="count-down animate" data-countdown-year="<?php echo $slider_5_countdown_year; ?>" data-countdown-month="<?php echo $slider_5_countdown_month; ?>" data-countdown-day="<?php echo $slider_5_countdown_day; ?>"></div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
						<?php echo do_shortcode($slider_5_newsletter); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>