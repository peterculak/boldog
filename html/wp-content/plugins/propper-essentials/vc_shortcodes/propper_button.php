<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_button extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'title' => '',
					
			), $atts ) );
			
			ob_start();
			
			?>
			<a href="" class="btn btn-primary">Read More</a>
			
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}
?>