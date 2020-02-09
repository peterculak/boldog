<?php
/*************Page Meta*****************/
add_filter( 'rwmb_meta_boxes', 'propper_page_meta_boxes' );
function propper_page_meta_boxes( $meta_boxes ) {
    $prefix = 'propper_';
    $meta_boxes[] = array(
        'title'      => esc_html__( 'Page Options', 'propper-essentials' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'name' => esc_html__( 'Show page title', 'propper-essentials' ),
                'id' => "{$prefix}page_heading_show_title",
                'desc' => esc_html__( 'Check this to Show simple page title.', 'propper-essentials' ),
                'type' => 'checkbox',
                'std' => '0',
            ),
            array(
                'name' => esc_html__( 'Nav Button Only', 'propper-essentials' ),
                'desc' => esc_html__( 'Check this to Show Nav Button Insead of Menu Items.', 'propper-essentials' ),
                'id' => "{$prefix}nav_button",
                'type' => 'checkbox',
                'std' => '0',
            ),
            array(
                'name' => esc_html__( 'Background color', 'sparklin-essentials' ),
                'desc' => esc_html__( 'Set title background color.', 'sparklin-essentials' ),
                'id' => "{$prefix}page_heading_bg_color",
                'type' => 'color',
            ),
           /*  array(
                'name'             => __( 'Heading Background Image', 'propper' ),
                'desc'             => __( 'Upload Image For Logo', 'propper' ),
                'id'               => "{$prefix}page_heading_bg_img",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ), */    
            array(
                'name'             => __( 'Heading Title', 'propper' ),
                'id'               => "{$prefix}page_heading_title",
                'type'             => 'text',
            ), 
            array(
                'name'             => __( 'Heading Subtitle', 'propper' ),
                'id'               => "{$prefix}page_heading_subtitle",
                'type'             => 'textarea',
            ), 
            
        ),
    );
    
    
    return $meta_boxes;
}

/*************Post Meta*****************/
add_filter( 'rwmb_meta_boxes', 'propper_post_meta_boxes' );
function propper_post_meta_boxes( $meta_boxes ) {
    $prefix = 'propper_';
    $meta_boxes[] = array(
        'title'      => esc_html__( 'Post Options', 'propper-essentials' ),
        'post_types' => 'post',
        'fields'     => array(
            /*array(
                'name' => esc_html__( 'Show Post Heading', 'propper-essentials' ),
                'id' => "{$prefix}post_heading_show_title",
                'desc' => esc_html__( 'Check this to Show simple Post Page Heading.', 'propper-essentials' ),
                'type' => 'checkbox',
                'std' => '0',
            ),*/
			array(
                'name' => esc_html__( 'Heading Background color', 'propper-essentials' ),
                'desc' => esc_html__( 'Set title background color.', 'propper-essentials' ),
                'id' => "{$prefix}post_heading_bg_color",
                'type' => 'color',
            ),
            /*array(
                'name'             => __( 'Heading Background Image', 'propper' ),
                'desc'             => __( 'Upload Image For Logo', 'propper' ),
                'id'               => "{$prefix}post_heading_bg_img",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),   */  
            array(
                'name'             => __( 'Heading Title', 'propper' ),
                'id'               => "{$prefix}post_heading_title",
                'type'             => 'text',
            ), 
            array(
                'name'             => __( 'Heading Subtitle', 'propper' ),
                'id'               => "{$prefix}post_heading_subtitle",
                'type'             => 'textarea',
            ), 
        ),
    );
    
    
    return $meta_boxes;
}



add_filter( 'rwmb_meta_boxes', 'propper_apartment_meta_boxes' );
function propper_apartment_meta_boxes( $meta_boxes ) {
    $prefix = 'propper_';
    $meta_boxes[] = array(
        'title'      => __( 'Apartment Options', 'propper' ),
        'post_types' => 'apartment',
       
	   'fields'     => array(		
			array(
                'name'             => __( 'Floor plan', 'propper' ),
                'desc'             => __( 'Upload Image For Logo', 'propper' ),
                'id'               => "{$prefix}a_img",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),            
            array(
                'name'             => __( 'Apartment Gallery Images', 'propper' ),
                'desc'             => __( 'Upload Image Apartment Gallery', 'propper' ),
                'id'               => "{$prefix}a_gallery",
                'type'             => 'image_advanced',
                'max_file_uploads' => 50,
            ),            
            array(
                'name'             => __( 'Video URL', 'propper' ),
                'id'               => "{$prefix}a_video",
                'type'             => 'text',
                'std'             => esc_url('http://vimeo.com/24506451'),
            ),           
            array(
                'name'             => __( 'PDF URL', 'propper' ),
                'id'               => "{$prefix}a_pdf",
                'type'             => 'text',
            ),           
            array(
                'name'             => __( 'Brochure URL', 'propper' ),
                'id'               => "{$prefix}a_brochure",
                'type'             => 'text',
            ),            
            array(
                'name'             => __( 'Apartment Number', 'propper' ),
                'id'               => "{$prefix}a_number",
				'type'             => 'text',
            ),               
            array(
                'name'             => __( 'Floor Number', 'propper' ),
                'id'               => "{$prefix}a_floor",
                'type'             => 'text',
            ),             
            array(
                'name'             => __( 'Rooms', 'propper' ),
                'id'               => "{$prefix}a_rooms",
                'type'             => 'text',
            ),	            
            array(
                'name'             => __( 'Apartment Area', 'propper' ),
                'id'               => "{$prefix}a_area",
                'type'             => 'text',
            ),	            
            array(
                'name'             => __( 'Balcony Area', 'propper' ),
                'id'               => "{$prefix}a_balcony",
                'type'             => 'text',
            ),	            
            array(
                'name'             => __( 'Kitchen', 'propper' ),
                'id'               => "{$prefix}a_kitchen",
                'type'             => 'text',
            ),             
            array(
                'name'             => __( 'Master Bedroom', 'propper' ),
                'id'               => "{$prefix}a_master_bedroom",
                'type'             => 'text',
            ),             
            array(
                'name'             => __( 'Toilet', 'propper' ),
                'id'               => "{$prefix}a_toilet",
                'type'             => 'text',
            ),            
            array(
                'name'             => __( 'Living room', 'propper' ),
                'id'               => "{$prefix}a_living_room",
                'type'             => 'text',
            ),          
            array(
                'name'             => __( 'Passage', 'propper' ),
                'id'               => "{$prefix}a_passage",
                'type'             => 'text',
            ),            
            array(
                'name'             => __( 'Price', 'propper' ),
                'id'               => "{$prefix}a_price",
                'type'             => 'text',
            ),
			array(
				'name'    => __( 'Status', 'rwmb' ),
				'id'               => "{$prefix}a_status",
				'type'    => 'select_advanced',
				'options' => array(
					'available'  => __( 'Available', 'rwmb' ),
					'not-available' => __( 'Not	Available', 'rwmb' ),
					'sold' => __( 'Sold', 'rwmb' ),
				),
			),
            array(
                'name'             => __( 'Description', 'propper' ),
                'id'               => "{$prefix}a_description",
                'type'             => 'textarea',
            ),  		
        ),
    );
	return $meta_boxes;
}


