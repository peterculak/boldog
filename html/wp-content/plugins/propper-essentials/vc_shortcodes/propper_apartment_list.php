<?php

if (class_exists ( 'WPBakeryShortCode' )) {
	
	class WPBakeryShortCode_propper_apartment_list extends WPBakeryShortCode {
		
		protected function content($atts, $content = null) {
			
			extract ( shortcode_atts ( array (
					
					'title' => '',
					'title_apartment' => '',
					'title_room' => '',
					'title_building' => '',
					'title_floor' => '',
					'title_apartment_area' => '',
					'title_balcony_area' => '',
					'title_price' => '',
					'title_status' => '',
					'title_detail' => '',
					'posts_per_page' => '',
					'is_framed' => '',
					
			), $atts ) );
			
			ob_start();
			
			if($is_framed =="yes"){
				$framed = 'framed';
			}else{
				$framed = '';
			}
			$numberOfPost = $posts_per_page != '' ? $posts_per_page : 6;
			
			?>

			<div class="container">
                <h2><?php echo esc_attr($title);?></h2>
                <div class="table-responsive <?php echo $framed; ?>">


					<table class="pricing-table">
                        <thead>
                        <tr>
                            <th><?php echo esc_attr($title_apartment);?></th>
                            <th><?php echo esc_attr($title_room);?></th>
                            <th><?php echo esc_attr($title_building);?></th>
                            <th><?php echo esc_attr($title_floor);?></th>
                            <th><?php echo esc_attr($title_apartment_area);?></th>
                            <th><?php echo esc_attr($title_balcony_area);?></th>
                            <th><?php echo esc_attr($title_price);?></th>
                            <th><?php echo esc_attr($title_status);?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>


			<?php
	$args = array(
		'type'   => 'apartment',
		'taxonomy'     => 'building',
	); 

	$buildings = get_categories( $args );
	$i = 0;
	foreach($buildings as $building) { 
					
		$args = array (
			'posts_per_page' => -1,
			'post_type' => 'apartment',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
				  'taxonomy' => 'building',
				  'field' => 'slug',
				  'terms' => $building->slug
				)
			 ),
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ){ 	
				if ($i >= $numberOfPost) {
				   break;       
				}
				$the_query->the_post();
				$apartment_number = rwmb_meta('propper_a_number');
				$propper_a_floor = rwmb_meta('propper_a_floor');
				$propper_a_status = rwmb_meta('propper_a_status');
				$propper_a_price = rwmb_meta('propper_a_price');
				$propper_a_balcony = rwmb_meta('propper_a_balcony');
				$propper_a_rooms = rwmb_meta('propper_a_rooms');
				$propper_a_area = rwmb_meta('propper_a_area');
				$apartment_id = get_the_ID();
				if($propper_a_status =="available"){
					$status = esc_html__('Available','propper-essentials');
				}elseif ($propper_a_status == "not-available") {
					$status = esc_html__('Not Available','propper-essentials');
				}elseif($propper_a_status == "sold"){
					$status = esc_html__('Sold','propper-essentials');
				}else{
					$status = '';
				}



				$building =  get_the_terms($apartment_id, 'building');	


				?>
				<tr class="<?php echo $propper_a_status; ?>">
					<td><?php echo esc_attr($apartment_number); ?></td>
					<td><?php echo esc_attr($propper_a_rooms); ?></td>
					<td><?php echo esc_attr($building[0]->name); ?></td>
					<td><?php echo esc_attr($propper_a_floor); ?></td>
					<td><?php echo esc_attr($propper_a_area); ?>m<sup>2</sup></td>
					<td><?php echo esc_attr($propper_a_balcony); ?>m<sup>2</sup></td>
					<td><?php echo esc_attr($propper_a_price); ?></td>
					<td><?php echo esc_attr($status); ?></td>
					<td><a href="#" class="link arrow underline" data-toggle="modal" data-target="#floor-modal-<?php echo $apartment_id; ?>"><th><?php echo esc_attr($title_detail);?></th></a></td>
				</tr>
				
				<?php
				$i ++;
			}
		}	



	}

?></tbody>
                    </table>
                </div>
            </div>
           
            <?php


			
			$output = ob_get_clean();
			return $output;
		}				
	}
}

?>