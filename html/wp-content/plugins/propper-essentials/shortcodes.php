<?php
/*-----------------------------------------------------------------------------------*/
/* minicon Shortcodes
/*-----------------------------------------------------------------------------------*/ 
if (!class_exists ( 'WPBakeryShortCode' )) {
	function vc_row($atts, $content = null){
		$row = shortcode_atts( array(              
			'el_class' => '',
			'type' => ''
		), $atts );
			$output = '<div class="'.esc_html($row['el_class']).'">
						'.do_shortcode($content).'
				</div>';
		
		return $output;
	}
	add_shortcode( 'vc_row', 'vc_row' );
	
	function vc_column($atts, $content = null){
		$column = shortcode_atts( array(              
			'el_class' => ''
		), $atts );
		
		$output = '<div class="wpb_column vc_column_container vc_col-sm-12 '.esc_html($column['el_class']).'">
						'.do_shortcode($content).'
					</div>';
		return $output;
	}
	add_shortcode( 'vc_column', 'vc_column' );
	
	function vc_column_text($atts, $content = null){
		$column_text = shortcode_atts( array(              
			'el_class' => ''
		), $atts );
		
		$output = '<div class="wpb_text_column wpb_content_element '.esc_html($column_text['el_class']).'">
						'.do_shortcode($content).'
					</div>';
		return $output;
	}
	add_shortcode( 'vc_column_text', 'vc_column_text' );
}

?>