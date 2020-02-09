<?php 

$slider_2_title = propper_return_theme_option('slider_2_title');

$slider_2_images = propper_return_theme_option('slider_2_images');
$slider_2_list_title = propper_return_theme_option('slider_2_list_title');
$slider_2_subtitle_left = propper_return_theme_option('slider_2_subtitle_left');
$slider_2_subtitle_right = propper_return_theme_option('slider_2_subtitle_right');


$slider_2_images = explode(",",$slider_2_images);
$slider_2_images_src = array();
foreach($slider_2_images as $slider_2_image){
	
	if ($slider_2_image != null) {

		$src = wp_get_attachment_image_src ( $slider_2_image, 'full' );

		$slider_2_images_src[] = esc_url ( $src [0] );

	}			
}
?>
<div id="slider">
<div id="home" class="hero-section background-is-dark">
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-xs-12">
						<div class="floor-selector animate">
							<div class="row">
								<?php 
								
								$args = array(
									'type'   => 'apartment',
									'taxonomy'     => 'building',
								); 

								$buildings = get_categories( $args );
								foreach($buildings as $building) { 
									
									?>
									<div class="col-md-4 col-sm-4 col-xs-4 equal-height">
									<div class="floor-selector-wrapper">
										<div class="building">
											<h2><?php echo $slider_2_list_title; ?> <?php echo $building->name; ?></h2>
											<div class="description">
												<figure class="left"><?php echo $slider_2_subtitle_left; ?></figure>
												<figure class="right"><?php echo $slider_2_subtitle_right; ?></figure>
											</div>
										<?php 
										$args = array (
											'post_type' => 'apartment',
											'post_status' => 'publish',
											'tax_query' => array(
												array(
												  'taxonomy' => 'building',
												  'field' => 'slug',
												  'terms' => $building->slug
												)
											  )
										);
										$the_query = new WP_Query( $args );
										if ( $the_query->have_posts() ) {
											while ( $the_query->have_posts() ){ 	

												$the_query->the_post();
												$apartment_number = rwmb_meta('propper_a_number');
												$propper_a_floor = rwmb_meta('propper_a_floor');
												$apartment_id = get_the_ID();
												?>
												<a href="#" class="floor" data-toggle="modal" data-target="#floor-modal-<?php echo $apartment_id; ?>">
													<figure class="left">#<?php echo $apartment_number; ?></figure>
													<figure class="right"><?php echo $propper_a_floor; ?></figure>
												</a>
												<?php
											}
										}					
										?>
										</div>
									</div>
								</div>
									
									
									
									<?php								
								}
								
								?>
								
							</div>
						</div>
					</div>
				</div>
				<h1 class="animate center"><?php echo $slider_2_title; ?></h1>
			</div>
		</div>
	</div>
	<div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
		
		<?php foreach($slider_2_images_src as $slider_2_image_src){ ?>
			
			<div class="hero-slide">
				<div class="bg-transfer"><img src="<?php echo esc_url($slider_2_image_src);?>" alt=""></div>
			</div>
			
		<?php } ?>
		
	</div>
</div>
</div>