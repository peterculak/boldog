<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_contact_us extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {
				
				extract ( shortcode_atts ( array (
					'title' => '',
					'contact_form_title' => '',
					'cf7_shortcode' => '',
					'is_map' => '',
					'contact_map_title' => '',
					
			), $atts ) );
			
			ob_start();

			
			?>
			
            <div class="container">
                <h2><?php echo esc_attr($title);?></h2>
                <div class="contact map">
                    <div class="row">
                        <div class="col-md-6 col-sm-6"  data-scroll-reveal="enter bottom and move 20px">
                            <?php if($is_map){ ?>
							 <h3><?php echo esc_attr($contact_map_title); ?></h3>
                            <div class="map" id="map"></div>
							<?php } ?>
						   <div class="row">
                                <div class="col-md-6 col-sm-6">
									<?php echo balanceTags($content);?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    
									<?php
										$footer_social_icon_html = propper_return_theme_option( 'footer_social_icon_html');
										echo $footer_social_icon_html;
									?>	
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" data-scroll-reveal="enter top and move 20px">
                            <h3><?php echo $contact_form_title; ?></h3>
                            <div id="form-contact" class="clearfix inputs-underline">
                               <?php echo do_shortcode($cf7_shortcode);?>
                            </div>
                        </div>
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
