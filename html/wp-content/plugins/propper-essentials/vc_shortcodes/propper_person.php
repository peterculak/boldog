<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_person extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {
			extract ( shortcode_atts ( array (
				'name' => '',
				'designation' => '',
				'phone' => '',
				'img' => '',
				'email' => '',
				'social_icons' => '',
				'social_links' => '',
			), $atts ) );
			
			ob_start();
			
			if ($img != null) {

				$src = wp_get_attachment_image_src ( $img, 'full' );

				$img_src = esc_url ( $src [0] );

			} else {

				$img_src = '';

			}



			$icons = explode ( ',', esc_html ( $social_icons ) );

			$links = explode ( ',', esc_url ( $social_links ) );

			

			if ($social_links != 'no') {

				

				$social_html = '<div class="social">';									

				

				foreach ( $icons as $key => $icon ) {

					$link = $links [$key] == null ? '#' : $links [$key];

					$social_html .= '<a href="' . esc_url ( $link ) . '"><i class="'. esc_attr ( $icon ) . '"></i></a> ';

				}

				$social_html .= ' </div>';

			} else {

				$social_html = '';

			}



			?>
			<div class="person center framed" data-scroll-reveal="enter right and move 20px after 0.2s">
				<div class="image">
					<div class="bg-transfer">
						<img src="<?php echo esc_url($img_src);?>" alt="">
					</div>
				</div>
				<h3><?php echo esc_attr($name);?></h3>
				<h4><?php echo esc_attr($designation);?></h4>
				<div class="contact-data">
					<figure><?php echo esc_attr($phone);?></figure>
					<a href="#" class="underline"><?php echo esc_attr($email);?></a>
				</div>
				
				<?php echo $social_html; ?>
				
			</div>
			
			
			<?php								
			$output = ob_get_clean(); 
			return $output;
	
		}
	}
	
}
			