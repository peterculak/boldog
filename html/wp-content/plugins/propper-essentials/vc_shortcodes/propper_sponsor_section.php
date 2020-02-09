<?phpif ( class_exists( 'WPBakeryShortCodesContainer' ) ) {	class WPBakeryShortCode_propper_sponsor_section extends WPBakeryShortCodesContainer {
		protected function content($atts, $content = null) {
			ob_start();						?>				<div class="container">					<div class="logos">						<div class="owl-carousel" data-owl-nav="1" data-owl-dots="0" data-owl-items="5">							<?php echo do_shortcode($content); ?>
						</div>					</div>				</div>
			<?php 					$output = ob_get_clean();			return $output;

		}
	}
}