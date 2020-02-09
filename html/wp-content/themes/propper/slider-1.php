<?php 

$slider_1_newsletter = propper_return_theme_option('slider_1_newsletter');

$slider_1_images = propper_return_theme_option('slider_1_images');
$slider_1_images = explode(",",$slider_1_images);
$slider_1_images_src = array();
foreach($slider_1_images as $slider_1_image){
	
	if ($slider_1_image != null) {

		$src = wp_get_attachment_image_src ( $slider_1_image, 'full' );

		$slider_1_imags_src[] = esc_url ( $src [0] );

	}			
}
?>
<div id="slider">
<div id="home" class="hero-section background-is-dark">            
	<div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
		
		<?php foreach($slider_1_imags_src as $slider_1_imag_src){ ?>
			
			<div class="hero-slide">
				<div class="bg-transfer"><img src="<?php echo esc_url($slider_1_imag_src);?>" alt=""></div>
			</div>
			
		<?php } ?>
		
	</div>
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<?php echo do_shortcode($slider_1_newsletter); ?>
			</div>
		</div>
	</div>
</div>
</div>