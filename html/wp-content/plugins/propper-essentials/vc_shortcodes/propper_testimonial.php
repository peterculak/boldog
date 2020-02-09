<?php
 if ( class_exists( 'WPBakeryShortCode' ) ) {

	class WPBakeryShortCode_propper_testimonial extends WPBakeryShortCode {						protected function content($atts, $content = null) {
				extract(shortcode_atts( array(					'name' => '',					'company' => '',					), $atts)				);								ob_start();								?>					<blockquote>						<p><?php echo $content; ?></p>						<footer><?php echo esc_attr ( $name ); ?>							<figure><?php echo esc_attr ( $company ); ?></figure>						</footer>					</blockquote>									<?php												$output = ob_get_clean(); 				return $output;
			}
		}
	}