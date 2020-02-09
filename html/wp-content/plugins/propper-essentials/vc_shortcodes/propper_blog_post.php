<?php

if (class_exists ( 'WPBakeryShortCode' )) {
	
	class WPBakeryShortCode_propper_blog_post extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {
			
			extract ( shortcode_atts ( array (
					
					'title' => '',
					'posts_per_page' => '',
					
			), $atts ) );
			
			ob_start();
			
			
			
			$numberOfPost = $posts_per_page != '' ? $posts_per_page : 6;
			$args = array (
					'posts_per_page' => $numberOfPost,
					'post_type' => 'post',
					'post_status' => 'publish',
					'suppress_filters' => true 
			);
			$posts_array = get_posts ( $args );	

			
			?>
			
		<div class="block">
            <div class="container">
                <h2><?php echo esc_attr($title);?></h2>
                <div class="row">
                   <?php 
				   $i = 0;
					foreach ( $posts_array as $single_post ) {
					
					setup_postdata( $single_post );
					
					$content = get_the_content() ;
					
					if (has_post_thumbnail ( $single_post->ID)) {					
					
						$src = wp_get_attachment_image_src ( get_post_thumbnail_id($single_post->ID), 'full');
						$img_src = esc_url ( $src [0] );
					} else {
						$img_src = "";
					}					
					
				   ?>

				   <div class="col-md-4 col-sm-4">
                        <div class="blog-item" data-scroll-reveal="enter left and move 20px">
                            <a href="<?php echo esc_url( get_permalink($single_post->ID) ) ;?>" class="image">
                                <h3><?php echo esc_html($single_post->post_title); ?></h3>
                                <div class="bg-transfer">
                                    <img src="<?php echo $img_src; ?>" alt="">
                                </div>
                            </a>
                            <figure class="date"><i class="icon_clock_alt"></i><?php echo get_the_date(); ?></figure>
                            <p><?php echo substr($content, 0, 150) ?></p>
                            <a href="<?php echo esc_url( get_permalink($single_post->ID) ) ;?>" class="btn btn-rounded btn-primary arrow"><?php echo esc_html__('Read More','propper-essentials');?></a>
                        </div>
                    </div>
					<?php 
					
						$i++;
					}
					wp_reset_postdata();
					
					?>
					
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