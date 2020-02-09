<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_title extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'title' => '',
					
			), $atts ) );
			
			ob_start();
			
			?>
			<h2><?php echo esc_attr($title);?></h2>
			
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}
?>