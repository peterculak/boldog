<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	class WPBakeryShortCode_propper_testimonial_section extends WPBakeryShortCodesContainer {
		protected function content($atts, $content = null) {			extract(shortcode_atts( array(					'name' => '',					'background_image' => '',					'background_color' => '',					), $atts)				);			ob_start();						if ($background_image != null) {				$src = wp_get_attachment_image_src ( $background_image, 'full' );				$background_image_src = esc_url ( $src [0] );			} else {				$background_image_src = '';			}			?>			            <div class="block background-is-dark">                <div class="testimonials">                    <div class="row">                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">                            <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1">
								<?php echo do_shortcode($content); ?>							</div>                        </div>                    </div>                </div>                <div class="background-wrapper">                    <div class="bg-transfer opacity-15">                        <img src="<?php echo esc_url($background_image_src); ?>" alt="">                    </div>                    <div class="background-color background-color-black" data-background-color-custom="<?php echo $background_color; ?>"></div>                </div>            </div>
			<?php											$output = ob_get_clean(); 			return $output;			
		}
		}

}