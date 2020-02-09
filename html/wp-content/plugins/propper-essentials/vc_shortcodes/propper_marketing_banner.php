<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_marketing_banner extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'bg_image' => '',
					
			), $atts ) );
			
			ob_start();
			
			if ($bg_image != null) {

				$src = wp_get_attachment_image_src ( $bg_image, 'full' );

				$bg_image_src = esc_url ( $src [0] );

			} else {

				$bg_image_src = '';

			}
			?>
			<div class="container">
                <div class="block background-is-dark">
                    <div class="marketing-banner">
                        <div class="center">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <div class="background-wrapper">
                        <div class="bg-transfer opacity-15">
                            <img src="<?php echo esc_url($bg_image_src);?>" alt="">
                        </div>
                        <div class="background-color background-color-black"></div>
                    </div>
                </div>
            </div>
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}



?>