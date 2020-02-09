<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_slider extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

			extract ( shortcode_atts ( array (
				'select_slider' => '',
					
			), $atts ) );
			
			ob_start();
				
			if( $select_slider == "3" ){
				 get_template_part('slider','3'); 
			}elseif( $select_slider == "4" ){
				get_template_part('slider','4'); 
			}elseif( $select_slider == "5" ){
				 get_template_part('slider','5'); 
			}elseif( $select_slider == "6" ){
				get_template_part('slider','6'); 
			}elseif( $select_slider == "7" ){
				 get_template_part('slider','7'); 
			}elseif( $select_slider == "2" ){
				 get_template_part('slider','2'); 
			}elseif( $select_slider == "1" ){
				get_template_part('slider','1'); 
			}else{
				 
			}			


				
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}



?>