<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_portfilios extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {
			extract ( shortcode_atts ( array (
				'title' => '',
				'subtitle' => '',
				'text_content' => '',
				'posts_per_page' => '',
				'allow_carousel' => ''
				
			), $atts ) );		
			ob_start();
			
			
			if($allow_carousel != "off"){
				
				wp_enqueue_script( 'cubeportfolio-custom', get_template_directory_uri() . '/js/cubeportfolio-custom.js', array(), '20151215', true );
			
			}else{
				
				wp_enqueue_script( 'cubeportfolio-custom-2', get_template_directory_uri() . '/js/cubeportfolio-custom-2.js', array(), '20151215', true );
			
			}
	
			?>
			<section id="portfolio">
				<div class="container"> 
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
							<h2 class="primary-heading"><?php echo esc_attr($title)?></h2>
							<h3 class="secondary-heading"><?php echo esc_attr($subtitle)?></h3>
							<p class="primary-paragraph"><?php echo esc_attr($text_content)?></p>
						</div>
							
				
					<div class="col-md-6">
					<div id="js-filters-masonry-projects" class="cbp-l-filters-buttonCenter">
					<?php 
				$args = array(
					'type'   => 'project'
				); 
				$terms = get_terms( array(
					'taxonomy' => 'project_cat',
					'hide_empty' => true,
				) );
				
				$i = 1;
				
				foreach($terms as $term) { 
				
					if($i == 1){
						$active = 'cbp-filter-item-active';
					}else{
						$active = '';
					}
					?>
						<div data-filter=".<?php echo $term->slug?>" class="<?php echo $active ; ?>  cbp-filter-item">
							<?php echo $term->name; ?> <div class="cbp-filter-counter"></div>
						</div><?php 
				$i++;										
				}?>
			</div></div></div></div>			
			
			
			
			
				<div class="container-fluid"> 
		<div class="row">
			<div class="col-md-12 padding-remove">
				<div id="isotope-container" class="cbp cbp-l-grid-masonry-projects">
					
				<?php 
				$numberOfPost = $posts_per_page != '' ? $posts_per_page : 6;
				$args = array (
					'post_type' => 'project',
					'posts_per_page' => $numberOfPost
				);
				
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ){ 	
						$the_query->the_post();
						if (has_post_thumbnail ()) {					
							$src = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'full');
							$img_src = esc_url ( $src [0] );
						} else {
							$img_src = '';
						}
						$terms = get_the_terms( get_the_ID(), 'project_cat' );
						$cats = array();
						$cat_name = array();
						foreach($terms as $term) { 
							array_push($cats,$term->slug);
							array_push($cat_name,$term->name);
						}
						$project_terms = implode(' ',$cats);?>
					
							<div class="cbp-item <?php echo $project_terms?>">
								<a href="<?php echo esc_url(get_permalink())?>">	
									<div class="">
										<div class="grid">
											<figure class="effect-layla">
												<img class="img-responsive" src="<?php  echo esc_url ( $img_src ) ?>" alt="img"> 
												<figcaption>
													<h4><?php the_title();?></h4>
													<p><?php the_excerpt()?></p>
												</figcaption>			
											</figure>
										</div>
									</div>
								</a>  
							</div>
					<?php }
				}	?>
			</div>
		
			<?php if($allow_carousel != "off"){ ?>
				<div class="row pt-80">
					<div class="text-center">
						<a href="<?php echo home_url('/');?>/portfolio/" class="view-all"><?php echo esc_html('View All','propper-essentials');?></a>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
    
</section>
			<?php								
			$output = ob_get_clean(); 
			return $output;
		}				
	}
}
?>