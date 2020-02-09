<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_propper_faq extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {
			extract ( shortcode_atts ( array (
			
                'title' => '',
                'item_active' => 'no',
                'parent_id' => '',
				'tab_id' => '',
				
			), $atts ) );
			
			ob_start();
			
			if($item_active == 'yes'){
	            $collapse = 'collapse in';
	        }else{ 
	            $collapse = 'collapse';
	        }

			?>
			<div class="panel panel-default">
				<div class="panel-heading">
	                <h4 class="panel-title">
	                    <a role="button" data-toggle="collapse" data-parent="#<?php echo esc_attr($parent_id);?>" href="#<?php echo esc_attr($tab_id);?>" aria-expanded="true"><?php echo esc_attr($title);?></a>
	                </h4>
	            </div>
	            <div id="<?php echo esc_attr($tab_id);?>" class="panel-collapse <?php echo esc_attr($collapse); ?>">
	                <div class="panel-body">
	                    <p><?php echo $content; ?></p>
	                </div>
	            </div>
            </div>


                           
			
			<?php								
			$output = ob_get_clean(); 
			return $output;
	
		}
	}
	
}