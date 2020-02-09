<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_team extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {

				extract ( shortcode_atts ( array (
					'title' => '',
					'team_images' => '',
					
			), $atts ) );
			
			ob_start();
			
			$team_images = explode(",",$team_images);
			$team_images_src = array();
			foreach($team_images as $team_image){
				
				if ($team_image != null) {

					$src = wp_get_attachment_image_src ( $team_image, 'full' );

					$team_images_src[] = esc_url ( $src [0] );

				}			
			}
			?>
			<h3><?php echo esc_attr($title);?></h3>
			<div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
			<?php foreach($team_images_src as $team_image_src){ ?>
				<img src="<?php echo esc_url($team_image_src);?>" alt="">
			<?php } ?>
			</div>
			<p><?php echo $content; ?></p>
			
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}



?>