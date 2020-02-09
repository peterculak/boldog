<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_pricing extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

			extract ( shortcode_atts ( array (
				'title' => '',							
				'propotion_title' => '',							
				'old_price' => '',							
				'new_price' => '',								
				'details' => '',			
				'details_button_title' => '',							
				'details_button_link' => '',							
				'contact_button_title' => '',							
				'contact_button_link' => '',							
				'css_class' => '',							
			), $atts ) );
			
			ob_start();
			
			
			?>
				<div class="price-box <?php echo esc_attr($css_class);?>">
					<?php if($propotion_title !=null || $propotion_title != ""){ ?><div class="promotion-title"><span><?php echo esc_attr($propotion_title);?></span></div><?php } ?>
					<h3><?php echo esc_attr($title);?></h3>
					<div class="price old"><?php echo esc_attr($old_price);?></div>
					<div class="price"><?php echo esc_attr($new_price);?></div>
					<div class="values">
						<?php echo $content; ?>
					</div>
					<?php if($details == "1"){?>
					<a href="<?php echo esc_attr($details_button_link);?>" class="btn btn-rounded btn-framed btn-light-frame btn-primary" data-toggle="modal" data-target="#floor-modal"><?php echo esc_attr($details_button_title);?></a>
					<div class="price-box-footer">
						<a href="<?php echo esc_attr($contact_button_link);?>" class="btn btn-rounded btn-primary"><?php echo esc_attr($contact_button_title);?></a>
					</div>
					<?php } ?>
				</div>
			         	
			<?php								
			$output = ob_get_clean(); 
			
			return $output;
		}				
	}
}



?>