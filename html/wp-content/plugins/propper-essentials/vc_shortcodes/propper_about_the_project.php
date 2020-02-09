<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_about_the_project extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'feature_type' => '',
					'title' => '',
					'video_title' => '',
					'video_subtitle' => '',
					'video_link' => '',
					'overlay' => '',
					
			), $atts ) );
			
			ob_start();
			
			if ($overlay != null) {

				$src = wp_get_attachment_image_src ( $overlay, 'full' );

				$overlay_src = esc_url ( $src [0] );

			} else {

				$overlay_src = '';

			}
			
			?>
			
                <h2><?php echo esc_attr($title);?></h2>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
						<?php echo $content;?>						
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3><?php echo esc_attr($video_title);?></h3>
<?php /*
                        <a href="<?php echo esc_url($video_link);?>" class="video-player video-popup"  data-scroll-reveal="enter bottom and move 50px">

                            <i class="play-icon arrow_triangle-right"></i>
                            <div class="has-overlay">
*/ ?>
                                <img src="<?php echo esc_url($overlay_src);?>" alt="">
<?php /*
                            </div>
                        </a>
*/ ?>
                        <figure class="note"><?php echo esc_attr($video_subtitle);?></figure>
                    </div>
                </div>
			
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}
?>
