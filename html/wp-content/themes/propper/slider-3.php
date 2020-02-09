<?php 

$slider_3_title = propper_return_theme_option('slider_3_title');

$slider_3_images = propper_return_theme_option('slider_3_images');

$slider_3_images = explode(",",$slider_3_images);
$slider_3_images_src = array();
foreach($slider_3_images as $slider_3_image){
	
	if ($slider_3_image != null) {

		$src = wp_get_attachment_image_src ( $slider_3_image, 'full' );

		$slider_3_imags_src[] = esc_url ( $src [0] );

	}			
}
?>
<div id="slider">
<div class="hero-section background-is-dark">	
	<div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
		<?php foreach($slider_3_imags_src as $slider_3_imag_src){ ?>
			
			<div class="hero-slide">
				<div class="bg-transfer"><img src="<?php echo esc_url($slider_3_imag_src);?>" alt=""></div>
			</div>
			
		<?php } ?>		
	</div>
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<h1 class="animate center underline"><?php echo $slider_3_title; ?></h1>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
						<?php echo do_shortcode($slider_3_newsletter); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>