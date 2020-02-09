<?php 

$slider_7_title = propper_return_theme_option('slider_7_title');
$slider_7_subtitle = propper_return_theme_option('slider_7_subtitle');

$slider_7_button_1_text = propper_return_theme_option('slider_7_button_1_text');
$slider_7_button_2_text = propper_return_theme_option('slider_7_button_2_text');
$slider_7_button_1_link = propper_return_theme_option('slider_7_button_1_link');
$slider_7_button_2_link = propper_return_theme_option('slider_7_button_2_link');


$slider_7_images = propper_return_theme_option('slider_7_images');
$slider_7_images = explode(",",$slider_7_images);
$slider_7_images_src = array();
foreach($slider_7_images as $slider_7_image){
	
	if ($slider_7_image != null) {

		$src = wp_get_attachment_image_src ( $slider_7_image, 'full' );

		$slider_7_images_src[] = esc_url ( $src [0] );

	}			
}
?>
<div id="slider">
<div class="hero-section background-is-dark">
	<div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
		<?php foreach($slider_7_images_src as $slider_7_image_src){ ?>
			<div class="hero-slide">
				<div class="bg-transfer"><img src="<?php echo esc_url($slider_7_image_src);?>" alt=""></div>
			</div>
			
		<?php } ?>		

	</div>
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<h1 class="animate"><?php echo $slider_7_title; ?></h1>
				<div class="animate">
					<p class="width-50"><?php echo $slider_7_subtitle; ?></p>
				</div>
				<div class="animate">
					<?php if($slider_7_button_1_text != ""){ ?><a href="<?php echo $slider_7_button_1_link; ?>" class="btn btn-rounded btn-default scroll"><?php echo $slider_7_button_1_text; ?></a><?php } ?>
					<?php if($slider_7_button_2_text != ""){ ?><a href="<?php echo $slider_7_button_2_link; ?>" class="btn btn-rounded btn-default btn-framed scroll"><?php echo $slider_7_button_2_text; ?></a><?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>