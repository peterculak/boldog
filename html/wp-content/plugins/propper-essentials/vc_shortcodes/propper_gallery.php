<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_gallery extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'title' => '',
					'gallery_type' => '',
					'wpbucket_gallery_group' => '',
					'type_2_images' => '',
					'type_3_images' => '',
					
			), $atts ) );
			
			ob_start();

			$wpbucket_gallery_group = vc_param_group_parse_atts($atts['wpbucket_gallery_group']);

             if($title !=""){?>
				<div class="container">
					<h2><?php echo esc_attr($title);?></h2>
				</div>
			<?php } ?>


			<?php if($gallery_type =="1"){?>
				<div class="owl-carousel big-gallery" data-owl-items="3" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-center="1" data-owl-loop="1" data-owl-nav-container="#big-gallery-nav">
<?php if (!is_array($wpbucket_gallery_group)) {$wpbucket_gallery_group = [];}?>
					<?php foreach ($wpbucket_gallery_group as $key => $single) {

                    if (!array_key_exists('type_1_description', $single)) {
                        $single['type_1_description'] = 'This is empty';
                    }

                    if (!array_key_exists('type_1_image', $single)) {
                        $single['type_1_image'] = '';
                        $img_src = 'http://via.placeholder.com/1140x570'; 
                    } else {
                         
                        $image = $single['type_1_image'] ;
                        
                        $img_src = wp_get_attachment_image_src($image,'full');
                        $img_src = $img_src[0]; 
                        $params = array (
                            'width' => 1140,
                            'height' => 570 
                        );
                        $img_src = bfi_thumb($img_src, $params);
                    
                    }

                    
                    ?>

                    <div class="slide">
						<div class="container">
							<img src="<?php echo esc_url($img_src); ?>" alt="">
							<div class="description">
								<h3 class="framed"><?php echo $single['type_1_description']; ?></h3>
							</div>
						</div>
					</div>
            <?php } ?>
					
				</div>
				<div class="container">
					<div class="owl-nav-wrapper">
						<div class="owl-nav" id="big-gallery-nav"></div>
					</div>
				</div>
			<?php } ?>
			
			<?php if($gallery_type =="2"){?>
				<div class="gallery">
                    <div class="row">
					
                        <?php foreach($type_2_images_src as $type_2_image_src){ ?>
							
							<div class="col-md-4 col-sm-4">
								<a href="<?php echo esc_url($type_2_image_src);?>" class="gallery-item image-popup">
									<div class="image bg-transfer">
										<img src="<?php echo esc_url($type_2_image_src);?>" alt="">
									</div>
								</a>
							</div>
						
						<?php } ?>
                        
                    </div>
                </div>
			
			<?php } ?>
			
			
			<?php if($gallery_type =="3"){?>
			
				<div class="gallery">
					<div class="owl-carousel one-item-carousel center" data-owl-items="4" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
						
                        <?php foreach($type_3_images_src as $type_3_image_src){ ?>
						
							<img src="<?php echo esc_url($type_3_image_src);?>" alt="">
							
						<?php } ?>
						
					</div>
				</div>
			<?php } ?>
			
			<?php								
			$output = ob_get_clean(); 
			return $output;
			
		}				
	}
}



?>
