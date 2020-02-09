<?phpif ( class_exists( 'WPBakeryShortCodesContainer' ) ) {	class WPBakeryShortCode_propper_timeline_section extends WPBakeryShortCodesContainer {
		protected function content($atts, $content = null) {						extract ( shortcode_atts ( array (				'title' => '',			), $atts ) );
			ob_start();			?>			<h3><strong><?php echo esc_attr($title);?></strong></h3>			<div class="time-line <?php if($background_type == '1'){ echo 'framed'; } ?>">				<div class="read-more">					<?php echo do_shortcode($content); ?>				</div>			</div>             
			<?php 					$output = ob_get_clean();			return $output;

		}
	}
}