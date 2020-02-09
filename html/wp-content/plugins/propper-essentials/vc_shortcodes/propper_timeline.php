<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_timeline extends WPBakeryShortCode {
		protected function content($atts, $content = null) {
			extract ( shortcode_atts ( array (
				'date' => '',				'title' => '',				'description' => '',
			), $atts ) );
									ob_start();									?>				 <div class="time-line-item">					<a href="#" class="new-window-link"></a>					<div class="date"><?php echo esc_attr($date);?></div>					<div class="description">						<h4><?php echo esc_attr($title);?></h4>						<?php if($content != ""){ ?>						<div class="additional-info"><?php echo $content;?></div>						<?php } ?>						<p>							<?php echo $description;?>						</p>					</div>				</div>			   			<?php 							$output = ob_get_clean();			return $output;			
		}
	}
}