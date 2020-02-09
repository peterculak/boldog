<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_agent_contact extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'agent_image' => '',
					'cf7_shortcode' => '',
					
			), $atts ) );
			
			ob_start();
			
			if ($agent_image != null) {

				$src = wp_get_attachment_image_src ( $agent_image, 'full' );

				$agent_image_src = esc_url ( $src [0] );

			} else {

				$agent_image_src = '';

			}
			?>
			
			
				<div class="contact framed">
					<div class="row">
						<div class="col-md-5 col-sm-5">
							<div class="person">
								<div class="row">
									<div class="col-md-5 col-sm-5">
										<div class="image bg-transfer">
											<img src="<?php echo esc_url($agent_image_src);?>" alt="">
										</div>
									</div>
									<div class="col-md-7 col-sm-7">
									   <?php echo $content; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-7">
							<?php echo do_shortcode($cf7_shortcode); ?>
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