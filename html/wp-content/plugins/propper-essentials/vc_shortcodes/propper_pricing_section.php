<?php
if (class_exists ( 'WPBakeryShortCodesContainer' )) {
	class WPBakeryShortCode_propper_pricing_section extends WPBakeryShortCodesContainer {
		
		protected function content($atts, $content = null) {

			extract ( shortcode_atts ( array (
				'title' => '',							
			), $atts ) );
			
			ob_start();
			
			
			?>
			<h2><?php echo esc_attr($title);?></h2>
			<div class="row">
				<div class="pricing-boxes">
					<?php echo do_shortcode($content); ?>
				</div>
			</div>
				
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}



?>