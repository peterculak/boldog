<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_propper_accordion_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
				
					ob_start();
			
					?>
					
					<div class="block">
						<div class="container">
							<div class="panel-group background-solid" role="tablist" aria-multiselectable="true">	
								<?php echo do_shortcode($content);?>
							</div>
						</div>
					</div>
						 
				<?php								
				$output = ob_get_clean(); 
				return $output;

				}
		}

	}