<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_number extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'title' => '',
					'number' => '',
					
			), $atts ) );
			
			ob_start();
			
			?>

			<div class="number">
				<figure><?php echo esc_attr($number);?></figure>
				<p><?php echo esc_attr($title);?></p>
			</div>
                          
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}



?>