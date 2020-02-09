<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_sponsor extends WPBakeryShortCode {
		
		/*
		 * This methods returns HTML code for frontend representation of your shortcode.
		 * You can use your own html markup.
		 *
		 * @param $atts - shortcode attributes
		 * @param @content - shortcode content
		 *
		 * @access protected
		 * vc_filter: VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG vc_shortcodes_css_class - hook to edit element class
		 * @return string
		 */
		protected function content($atts, $content = null) {
			extract ( shortcode_atts ( array (
				'link' => '',				'sponsor_img' => ''
			), $atts ) );
									ob_start();						if ($sponsor_img != null) {				$src = wp_get_attachment_image_src ( $sponsor_img, 'full' );				$sponsor_img_src = esc_url ( $src [0] );			} else {				$sponsor_img_src = '';			}						?>						<div class="logo">				<a href="<?php echo esc_url($link);?>"><img src="<?php echo esc_url ( $sponsor_img_src ) ?>" alt=""></a>			</div>						<?php 							$output = ob_get_clean();			return $output;			
		}
	}
}