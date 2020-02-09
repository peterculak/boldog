<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_details extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'column_type' => '',
					'title' => '',
					'gallery_images' => '',
					
			), $atts ) );
			
			ob_start();			
			
			
			$gallery_images = explode(",",$gallery_images);
			$gallery_images_src = array();
			foreach($gallery_images as $gallery_image){
				
				if ($gallery_image != null) {

					$src = wp_get_attachment_image_src ( $gallery_image, 'full' );

					$gallery_images_src[] = esc_url ( $src [0] );

				}			
			}
			?>
			<?php if($column_type == '1'){
				$align = 'left-align';
			}else{
				$align = 'right-align';
			} ?>
                <div class="detail <?php echo $align; ?>">
                    <div class="title">
                        <h3 class="framed"><?php echo esc_attr($title);?></h3>
                    </div>
                    <div class="row">
                        <?php if($column_type == '1'){ ?>
						
						<div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter left and move 20px after">
                                <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <?php foreach($gallery_images_src as $gallery_image_src){ ?>	
										<img src="<?php echo esc_url($gallery_image_src);?>" alt="">
									<?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter right and move 20px">
                               <?php echo $content; ?>
                            </div>
                        </div>
						<?php }else{  ?>
							
							<div class="col-md-5 col-sm-5">
								<div class="description" data-scroll-reveal="enter right and move 20px">
								   <?php echo $content; ?>
								</div>
							</div>
							<div class="col-md-7 col-sm-7">
								<div class="gallery" data-scroll-reveal="enter left and move 20px after">
									<div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
										<?php foreach($gallery_images_src as $gallery_image_src){ ?>	
											<img src="<?php echo esc_url($gallery_image_src);?>" alt="">
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
                    </div>
                </div>	
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}
?>