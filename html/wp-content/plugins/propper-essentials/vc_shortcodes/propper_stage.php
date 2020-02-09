<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_stage extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'stage_status' => '',
					'stage_icon' => '',
					
			), $atts ) );
			
			ob_start();
			
			
			?>
		
			<div class="stage <?php echo esc_attr($stage_status);?>" data-scroll-reveal="enter left and move 20px">
				<div class="icon">
					<i class="<?php echo esc_attr($stage_icon); ?>"></i>
				</div>
				<div class="description">
					<?php echo $content; ?>
				</div>
			</div>
                  
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}



?>