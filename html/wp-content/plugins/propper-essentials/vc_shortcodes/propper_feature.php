<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_feature extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

			extract ( shortcode_atts ( array (
				'title' => '',
				'is_icon_image' => '',
				'image_icon' => '',
				'button_type' => '',
				'button_link' => '',
				'button_text' => '',
					
					
			), $atts ) );
			
			ob_start();
			
			
			
			if ($image_icon != null) {

				$src = wp_get_attachment_image_src ( $image_icon, 'full' );

				$image_icon_src = esc_url ( $src [0] );

			} else {

				$image_icon_src = '';

			}
			
			if($button_type == "1"){
				$button_class = 'btn-primary';
			}else{
				$button_class = 'btn-default';
			}
			
			if($is_icon_image == "1"){
			?>

			<div class="feature has-icon" data-scroll-reveal="enter left and move 20px">
				<i class="icon"><img src="<?php echo esc_url($image_icon_src);?>" alt=""></i>
				<div class="description">
					<h3><?php echo esc_attr($title);?></h3>
					<p><?php echo $content;?></p>
					<?php if($button_text != ""){ ?>
					<a href="<?php echo esc_url($button_link); ?>" class="btn <?php echo $button_class; ?> btn-rounded arrow"><?php echo esc_attr($button_text); ?></a>
					<?php } ?>
				</div>
			</div>
                   
			<?php
			}else{?>
				<div class="feature" data-scroll-reveal="enter left and move 20px">
					<div class="image"><img src="<?php echo esc_url($image_icon_src);?>" alt=""></div>
					<div class="description">
						<h3><?php echo esc_attr($title);?></h3>
						<p><?php echo $content;?></p>
						
					</div>
				</div>
			
			<?php 
			}

			
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}



?>