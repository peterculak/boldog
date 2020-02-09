<?php
class Visual_Composer {

								

	static function add_shortcode_to_VC() {
		
			vc_add_param("vc_row", array(
					"type" => "dropdown",
					"group" => "Propper Additions",
					"heading" => "Type",
					"param_name" => "type",
					"value" => array(
						"No Container" => "1",
						"Container" => "2",
						"Container with full width background" => "3"
					)
			));
			vc_add_param("vc_row", array(
					"type" => "dropdown",
					"group" => "Propper Additions",
					"heading" => "Background Opacity",
					"param_name" => "opacity",
					"value" => array (
						"No Opacity" => "",
						"Opacity 0.00" => "opacity-0",
						"Opacity 0.01" => "opacity-1",											
						"Opacity 0.02" => "opacity-2",											
						"Opacity 0.03" => "opacity-3",											
						"Opacity 0.04" => "opacity-4",											
						"Opacity 0.05" => "opacity-5",											
						"Opacity 0.06" => "opacity-6",											
						"Opacity 0.07" => "opacity-7",											
						"Opacity 0.08" => "opacity-8",											
						"Opacity 0.09" => "opacity-9",											
						"Opacity 0.10" => "opacity-10",											
						"Opacity 0.11" => "opacity-11",											
						"Opacity 0.12" => "opacity-12",											
						"Opacity 0.13" => "opacity-13",											
						"Opacity 0.14" => "opacity-14",											
						"Opacity 0.15" => "opacity-15",											
						"Opacity 0.16" => "opacity-16",											
						"Opacity 0.17" => "opacity-17",											
						"Opacity 0.18" => "opacity-18",											
						"Opacity 0.19" => "opacity-19",											
						"Opacity 0.20" => "opacity-20",											
						"Opacity 0.30" => "opacity-30",											
						"Opacity 0.40" => "opacity-40",											
						"Opacity 0.50" => "opacity-50",											
						"Opacity 0.60" => "opacity-60",											
						"Opacity 0.70" => "opacity-70",											
						"Opacity 0.80" => "opacity-80",											
						"Opacity 0.90" => "opacity-90",											
					)
			));
			
			vc_add_param("vc_column", array (			
				"type"       => "dropdown",
				"heading"    => "Background Type",
				"group" => "Propper Additions",
				"param_name" => "background_type",
				"value" => array (
					"Select Background Type" => "0",
					"Framed" => "1",
					"Background" => "2",
				
				)
			));
			
			vc_add_param("vc_row", array (
					"type" => "attach_image",
					"heading" => __ ( "Background Image", 'propper-essentials' ),
					"group" => "Propper Additions",
					"param_name" => "bg_img",
					
			));

		
			vc_add_param("vc_row", array (
					"type" => "colorpicker",
					"heading" => __ ( "Background Color", 'propper-essentials' ),
					"group" => "Propper Additions",
					"param_name" => "bg_clr",
					
			));

		
			vc_add_param("vc_row", array (
					"type" => "colorpicker",
					"heading" => __ ( "Text Color", 'propper-essentials' ),
					"group" => "Propper Additions",
					"param_name" => "txt_clr",
					
			));

		
		/**
		 * ******** ===================== SPONSOR ===================== *************
		 */		
		
			vc_map(array(

						'name'                    => "Propper Faq Section",

						'base'                    => "propper_faq_section",

						"as_parent"               => array('only' => 'propper_faq'),

						"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

'params'                  => array(

	    			
								array(

								"type"       => "textfield",

								"heading"    => "Question ID",

								"param_name" => "parent_id",

								"value"      => ''

							),
								
	    		),
				'description'             => 'Insert icon-based boxes with columns'

					));

			
	    	

	    	vc_map(array(

	    		'name'                    => "Propper Faq",

	    		'base'           => "propper_faq",

	    		"content_element"         => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),
	    		"as_child"                => array('only' => 'propper_faq_section'),
				'params'                  => array(

	    			
					
						array(

							"type"       => "textfield",

							"heading"    => "Title",

							"param_name" => "title",

							"value"      => ''

						),
							array(

								"type"       => "textarea_html",

								"heading"    => "Content",

								"param_name" => "content",

								"value"      => ''

							),
								array(

								"type"       => "textfield",

								"heading"    => "Parent ID",

								"param_name" => "parent_id",

								"value"      => ''

							),

								array(

								"type"       => "textfield",

								"heading"    => "Tab ID",

								"param_name" => "tab_id",

								"value"      => ''

							),
								array (
                                "type"       => "dropdown",

                                "heading"    => "Active",

                                "param_name" => "item_active",
                                
                                "value" => array (
                                    "No" => "no",
                                    "Yes" => "yes",                                           
                                )
                            ),
	    		)

	    	));
			
			
			vc_map(array(

	    		'name'                    => "Propper Title",

	    		'base'                    => "propper_title",

	    		"content_element"         => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),
	    		
				'params'                  => array(

	    			
					
					array (
					
						"type" => "textfield",
						"heading" => __ ( "Title", 'propper-essentials' ),
						"param_name" => "title"
						
					),
	    		)

	    	));
			
			
			vc_map(array(

	    		'name'                    => "Propper Newsletter",

	    		'base'                    => "propper_newletter",

	    		"content_element"         => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),
	    		
				'params'                  => array(

	    			
					array(

						"type"       => "textarea_html",

						"heading"    => "Newletter Shortcode",

						"param_name" => "content",

						"value"      => ''

					),
					
					array(

						"type"       => "textfield",

						"heading"    => "Newletter Note",

						"param_name" => "note",

						"value"      => ''

					),
	    		)

	    	));
			
		
			
/***********************Propper Feature*******************************/
		
		
			vc_map(array(

						'name'                    => "Propper Feature",

						'base'                    => "propper_feature",					
						
						"content_element"         => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						'params'                  => array(
														
							array(

								"type"       => "textfield",

								"heading"    => "Box Title",

								"param_name" => "title",

								"value"      => ''

							),						
													
							array (
								"type" => "dropdown",
								"class" => "",
								"heading" => __ ( "Icon or Image", 'propper-essentials' ),
								"param_name" => "is_icon_image",
								"value" => array (
										"Select" => "",
										"Icon" => "1",
										"Image" => "2",
										
								)
							),
							array (
								"type" => "attach_image",
								"heading" => __ ( "Upload Image or Icon", 'propper-essentials' ),
								"param_name" => "image_icon"
							),
							array (
								"type" => "dropdown",
								"class" => "",
								"heading" => __ ( "Button Type", 'propper-essentials' ),
								"param_name" => "button_type",
								"value" => array (
										"Select Button" => "",
										"Black Button" => "1",
										"White Button" => "2",
										
								)
							),
							array(

								"type"       => "textfield",

								"heading"    => "Button Text",

								"param_name" => "button_text",

								"value"      => ''

							),					
							array(

								"type"       => "textfield",

								"heading"    => "Button Link",

								"param_name" => "button_link",

								"value"      => ''

							),	
							array(

								"type"       => "textarea_html",

								"heading"    => "Box Content",

								"param_name" => "content",
								
							),
						),

						'description'             => 'Insert icon-based boxes with columns'

					));	
					
			
/***********************Propper Stage*******************************/
		
		
			vc_map(array(

						'name'                    => "Propper Stage",

						'base'                    => "propper_stage",					
						
						"content_element"         => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						'params'                  => array(
							array (
								"type" => "dropdown",
								"class" => "",
								"heading" => __ ( "Stage Status", 'propper-essentials' ),
								"param_name" => "stage_status",
								"value" => array (
										"Select Stage Status" => "",
										"Completed" => "completed",
										"Not Completed" => "not-completed",
										"In Progress" => "in-progress",
										
								)
							),							
							array(

								"type"       => "textarea_html",

								"heading"    => "Stage Description",

								"param_name" => "content",

								"value"      => ''

							),
							array (
								"type" => "dropdown",
								"class" => "",
								"heading" => __ ( "Stage Icon", 'propper-essentials' ),
								"param_name" => "stage_icon",
								"value" => array (
										"Select Icon" => "",
										"Icon Check" => "icon_check",
										"Icon Hourglass" => "icon_hourglass",
										"Icon Close" => "icon_close",
										
								)
							),
							
						),

						'description'             => 'Insert icon-based boxes with columns'

					));	
					
/***********************Propper About The Project*******************************/
		
		
			vc_map(array(

						'name'                    => "Propper About The Project",

						'base'                    => "propper_about_the_project",					
						"content_element"         => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						'params'                  => array(
							array (
								"type" => "dropdown",
								"class" => "",
								"heading" => __ ( "Column Type", 'propper-essentials' ),
								"param_name" => "column_type",
								"value" => array (
										"" => "",
										"Type 1" => "1",
										"Type 2" => "2",
										
								)
							),
							array(

								"type"       => "textfield",

								"heading"    => "Title",

								"param_name" => "title",

								"value"      => ''

							),
							array(

								"type"       => "textarea_html",

								"heading"    => "Content",

								"param_name" => "content",
								
								"value"      => "",

								
							),							
							array(

								"type"       => "textfield",

								"heading"    => "Video Title",

								"param_name" => "video_title",

								"value"      => ''

							),						
							array(

								"type"       => "textfield",

								"heading"    => "Video Subtitle",

								"param_name" => "video_subtitle",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "Video Link",

								"param_name" => "video_link",
							),
							array (
								"type" => "attach_image",
								"heading" => __ ( "Upload Video Overlay", 'propper-essentials' ),
								"param_name" => "overlay"
							),
							
							
						),

						'description'             => 'Insert icon-based boxes with columns'

					));	
					
/***********************Propper Details*******************************/
		
		
			vc_map(array(

						'name'                    => "Propper Details",

						'base'                    => "propper_details",					
						"content_element"         => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						'params'                  => array(
							array (
								"type" => "dropdown",
								"class" => "",
								"heading" => __ ( "Column Type", 'propper-essentials' ),
								"param_name" => "column_type",
								"value" => array (
										"Select alignment" => "",
										"Left Align" => "1",
										"Right Align" => "2",
										
								)
							),
							array(

								"type"       => "textfield",

								"heading"    => "Title",

								"param_name" => "title",

								"value"      => ''

							),
							array(

								"type"       => "textarea_html",

								"heading"    => "Content",

								"param_name" => "content",
								
							),	
							array (
								"type" => "attach_images",
								"heading" => __ ( "Upload Gallery Images", 'propper-essentials' ),
								"param_name" => "gallery_images"
								
							),
							
							
						),

						'description'             => 'Insert icon-based boxes with columns'

					));	

		
			
					
/***********************Propper Gallery*******************************/
		
		
			vc_map(array(

						'name'                    => "Propper Gallery",

						'base'                    => "propper_gallery",					
						"content_element"         => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						'params'                  => array(
							array(

								"type"       => "textfield",

								"heading"    => "Title",

								"param_name" => "title",

							),
							array (
								"type" => "dropdown",
								"class" => "",
								"heading" => __ ( "Gallery Type", 'propper-essentials' ),
								"param_name" => "gallery_type",
								"value" => array (
										"" => "",
										"Type 1" => "1",
										"Type 2" => "2",
										"Type 3" => "3",
										
								)
							),
							array(
		                        'type' => 'param_group',
		                        'value' => '',
		                        'param_name' => 'wpbucket_gallery_group',
		                        'heading' => 'Gallery Group',
		                        // Note params is mapped inside param-group:
		                        'params' => array(
		                                    
		                            array (
										"type" => "attach_image",
										"heading" => __ ( "Upload Gallery Images", 'propper-essentials' ),
										"param_name" => "type_1_image",
										
									),
									array(

										"type"       => "textfield",

										"heading"    => "Description",

										"param_name" => "type_1_description",

									),
		                    	),
		                    	 "dependency" => array(
									'element' => 'gallery_type',
									'value' => '1',
								),
							),
							array (
								"type" => "attach_images",
								"heading" => __ ( "Upload Gallery Images For Type 2", 'propper-essentials' ),
								"param_name" => "type_2_images",
								"dependency" => array(
									'element' => 'gallery_type',
									'value' => '2',
								),
								
							),
							array (
								"type" => "attach_images",
								"heading" => __ ( "Upload Gallery Images For Type 3", 'propper-essentials' ),
								"param_name" => "type_3_images",
								"dependency" => array(
									'element' => 'gallery_type',
									'value' => '3',
								),
								
							),
							
							
						),

						'description'             => 'Insert icon-based boxes with columns'

					));	
					
/***********************Propper Pricing*******************************/
		
		
			vc_map(array(

						'name'                    => "Propper Pricing Section",

						'base'                    => "propper_pricing_section",					
						"content_element"         => true,

						'show_settings_on_create' => true,
						
						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						//"as_parent"               => array('only' => 'propper_pricing'),
						
						'is_container'            => true, 

						"js_view"                 => 'VcColumnView',
						
						'params'                  => array(
							array (
								"type" => "attach_images",
								"heading" => __ ( "Upload Gallery Images", 'propper-essentials' ),
								"param_name" => "gallery_images"
							),
							
							
						),

						'description'             => 'Insert icon-based boxes with columns'

					));	
					
			vc_map(array(

						'name'                    => "Propper Pricing",

						'base'                    => "propper_pricing",					
						"content_element"         => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						//"as_child"               => array('only' => 'propper_pricing_section'),
						
						'params'                  => array(
							array(

								"type"       => "textfield",

								"heading"    => "Title",

								"param_name" => "title",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "Promotion Title",

								"param_name" => "propotion_title",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "Old Price",

								"param_name" => "old_price",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "New Price",

								"param_name" => "new_price",

								"value"      => ''

							),
							array (
								"type"       => "dropdown",

								"heading"    => "Details",

								"param_name" => "details",
								
								"value" => array (
									"" => "",
									"No" => "0",
									"Yes" => "1",											
								)
							),
							array(

								"type"       => "textarea_html",

								"heading"    => "Content",

								"param_name" => "content",

								"value"      => ''

							),

							array(
								"type"       => "textfield",

								"heading"    => "Detail Button Title",

								"param_name" => "details_button_title",

								"value"      => ''

							),

							array(
								"type"       => "textfield",

								"heading"    => "Detail Button Link",

								"param_name" => "details_button_link",

								"value"      => ''

							),
							array(
								"type"       => "textfield",

								"heading"    => "Contact Button Title",

								"param_name" => "contact_button_title",

								"value"      => ''

							),

							array(
								"type"       => "textfield",

								"heading"    => "Contact Button Link",

								"param_name" => "contact_button_link",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "CSS Class",

								"param_name" => "css_class",

								"value"      => ''

							),
							
							
						),

						'description'             => 'Insert icon-based boxes with columns'

					));	
					
					
					
/***********************Accordion*******************************/	

				
			vc_map(array(

				'name'                    => "Propper Accordion Section",

				'base'                    => "propper_accordion_section",

				"as_parent"               => array('only' => 'propper_accordion_item'),

				
				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				'params'                  => array(

					
					array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Container", 'propper-essentials' ),
						"param_name" => "accordion_style",
						"value" => array (
								"Default" => "accordian-style6",
								"Style 1" => "accordian-style1",
								"Style 2" => "accordian-style2",
								"Style 3" => "accordian-style6",
								
						)
					)
									
				),

				'description'             => 'Insert icon-based boxes with columns'

			));

					
					

			vc_map(array(

	    		'name'                    => "Accordion Item",

	    		'base'                    => "propper_accordion_item",

	    		"as_child"                => array('only' => 'propper_accordion_section'),

	    		"content_element"         => true,

	    		'params'                  => array(	    			
					
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					
					array(

						"type"       => "textarea_html",

						"heading"    => "Content",

						"param_name" => "content",

						"value"      => ''

					)
	    		)

	    	));
			
		
/* ============= BLOG POSTS ========== */
		vc_map ( array (
				"name" => __ ( "Propper Blog", 'propper-essentials' ),
				
				"base" => "propper_blog_post",
				
				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),
				"params" => array (
							
							
						array(

							"type"       => "textfield",

							"heading"    => "Title",

							"param_name" => "title",

							"value"      => ''

						),
						array (
								"type" => "textfield",
								"class" => "",
								"heading" => __ ( "Number Of posts", 'propper-essentials' ),
								"param_name" => "posts_per_page",
								"description" => __ ( "Number of posts should be shown in this section, numeric value", 'propper-essentials' ) 
						) 
				) 
		) );	
			

		
/* ============= Slider ========== */
		vc_map ( array (
				"name" => __ ( "Propper Slider", 'propper-essentials' ),
				
				"base" => "propper_slider",
				
				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),
				"params" => array (
							
						array (
								"type"       => "dropdown",

								"heading"    => "Select Slider",

								"param_name" => "select_slider",
								
								"value" => array (
									"Select Slider" => "",
									"Slider 1" => "1",											
									"Slider 2" => "2",											
									"Slider 3" => "3",											
									"Slider 4" => "4",											
									"Slider 5" => "5",											
									"Slider 6" => "6",											
									"Slider 7" => "7",											
								)
							)	
						
				) 
		) );	
			


/***********************TESIMONIAL*******************************/	

				
					vc_map(array(

						'name'                    => "Propper Tesimonial Section",

						'base'                    => "propper_testimonial_section",

						"as_parent"               => array('only' => 'propper_testimonial'),

						
						"content_element"         => true,

						

						'show_settings_on_create' => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						'is_container'            => true,

						"js_view"                 => 'VcColumnView',

						'params'                  => array(
							array (
								"type" => "attach_images",
								"heading" => __ ( "Upload Testimonial Background Images", 'propper-essentials' ),
								"param_name" => "background_image"
							),
							array (
								"type" => "colorpicker",
								"heading" => __ ( "Testimonial Background Color", 'propper-essentials' ),
								"param_name" => "background_color"
							),
											
						),

						'description'             => 'Insert icon-based boxes with columns'

					));

					
					

			vc_map(array(

	    		'name'                    => "Tesimonial",

	    		'base'                    => "propper_testimonial",

	    		//"as_child"                => array('only' => 'propper_testimonial_section'),

	    		"content_element"         => true,

	    		'params'                  => array(	    			
					
					array(

						"type"       => "textfield",

						"heading"    => "Name",

						"param_name" => "name",

						"value"      => ''

					),
					array(

						"type"       => "textfield",

						"heading"    => "Company",

						"param_name" => "company",

						"value"      => ''

					),
					
					array(

						"type"       => "textarea_html",

						"heading"    => "Description",

						"param_name" => "content",

						"value"      => ''

					)
	    		)

	    	));
			
			
/***********************Portfolio*******************************/
		
		
			vc_map(array(

						'name'                    => "Propper Portfolio",

						'base'                    => "propper_portfilios",					
						
						"content_element"         => true,

						"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

						'params'                  => array(
							
							array(

								"type"       => "textfield",

								"heading"    => "Title",

								"param_name" => "title",

								"value"      => ''

							),

							array(

								"type"       => "textfield",

								"heading"    => "Subtitle",

								"param_name" => "subtitle",

								"value"      => ''

							),
							array(

								"type"       => "textarea",

								"heading"    => "Text Content",

								"param_name" => "text_content",

								"value"      => ''

							),
				
							array(

								"type"       => "textfield",

								"heading"    => "Posts Per Page",

								"param_name" => "posts_per_page",

								"value"      => '',
								

							),
							array (
								"type"       => "dropdown",

								"heading"    => "Allow Carousel",

								"param_name" => "allow_carousel",
								
								"value" => array (
									"On" => "on",
									"Off" => "off",											
								)
							)
							
						),

						'description'             => 'Insert icon-based boxes with columns'

					));
				
	/**
		 * ******** ===================== About Us===================== *************
		 */
		
		
			vc_map(array(

				'name'                    => "Propper About Us",

				'base'                    => "propper_about_us_home",

				"as_parent"               => array('only' => 'propper_stats'),

				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',

				'description'             => 'Insert icon-based boxes with columns',
					
				'params'                  => array(

	    			array (
							"heading" => __ ( "Title", 'propper-essentials' ),
							"param_name" => "title",
					),
	    			array (
							"type" => "textfield",
							"heading" => __ ( "Subtitle", 'propper-essentials' ),
							"param_name" => "subtitle",
					),
	    			array (
							"type" => "textarea",
							"heading" => __ ( "Content", 'propper-essentials' ),
							"param_name" => "text_content",
					),
					
	    		)
			));
							
	
			
/* =============Apartments Lists ========== */
		vc_map ( array (
				"name" => __ ( "Propper Apartments List", 'propper-essentials' ),
				
				"base" => "propper_apartment_list",
				
				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),
				"params" => array (
							
							
						array(

							"type"       => "textfield",

							"heading"    => "Title",

							"param_name" => "title",

							"value"      => ''

						),
							
						array(

							"type"       => "textfield",

							"heading"    => "Apartment Title",

							"param_name" => "title_apartment",


						),
							
						array(

							"type"       => "textfield",

							"heading"    => "Room Title",

							"param_name" => "title_room",

						),
						array(

							"type"       => "textfield",

							"heading"    => "Building Title",

							"param_name" => "title_building",

						),
						array(

							"type"       => "textfield",

							"heading"    => "Floor Title",

							"param_name" => "title_floor",


						),
						array(

							"type"       => "textfield",

							"heading"    => "Apartment Area Title",

							"param_name" => "title_apartment_area",

						),
						array(

							"type"       => "textfield",

							"heading"    => "Balcony Area Title",

							"param_name" => "title_balcony_area",


						),
						array(

							"type"       => "textfield",

							"heading"    => "Price Title",

							"param_name" => "title_price",


						),
						array(

							"type"       => "textfield",

							"heading"    => "Status Title",

							"param_name" => "title_status",


						),
						array(

							"type"       => "textfield",

							"heading"    => "Detail Title",

							"param_name" => "title_detail",

						),
						array (
								"type" => "textfield",
								"class" => "",
								"heading" => __ ( "Number Of Apartments", 'propper-essentials' ),
								"param_name" => "posts_per_page",
								"description" => __ ( "Number of posts should be shown in this section, numeric value", 'propper-essentials' ) 
						),

						array(

							"type"       => "dropdown",

							"heading"    => "Framed?",

							"param_name" => "is_framed",

							"value" => array (
									"Select One" => "",
									"Framed" => "yes",											
									"Not Framed" => "no",											
																
								),

							"description" => __ ( "Select this if you want to add border arround apartment list.", 'propper-essentials' ) 

						), 
						

				) 
		) );	
			
		
		/* ============= Contact Us ========== */
		vc_map ( array (
				
				"name" => __ ( "Propper Contact Us", 'propper-essentials' ),
				
				"base" => "propper_contact_us",
							
				"content_element"         => true,

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'params'                  => array(
							
							
						array(

							"type"       => "textfield",

							"heading"    => "Title",

							"param_name" => "title",

							"value"      => ''

						),
						array(

							"type"       => "textfield",

							"heading"    => "Contact Form Title",

							"param_name" => "contact_form_title",

							"value"      => 'Contact Form'

						),
						array(

							"type"       => "textfield",

							"heading"    => "Contact Form 7 Shortcode",

							"param_name" => "cf7_shortcode",

							"value"      => ''

						),
						
						array(

							"type"       => "textarea_html",

							"heading"    => "Address",

							"param_name" => "content",

							"value"      => ''

						),
					
						array(

							"type"       => "checkbox",

							"heading"    => "Is Map",

							"param_name" => "is_map",

							"value"      => ''

						),
						array(

							"type"       => "textfield",

							"heading"    => "Contact Map Title",

							"param_name" => "contact_map_title",

							"value"      => 'Map'

						),
						
						
						array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Social Link", 'propper-essentials' ),
							"param_name" => "contact_social_link",
							"value" => array (
									'',
									'yes',
									'no' 
							),
							"description" => __ ( "Social Link shows or not", 'propper-essentials' ) 
						),
						
						/*
						array(

							"type"       => "textfield",

							"heading"    => "Contact Email",

							"param_name" => "email",

							"value"      => 'hello@example.com'

						),array(

							"type"       => "textfield",

							"heading"    => "Contact Social Title",

							"param_name" => "contact_social_title",

							"value"      => 'Social',
							'dependency' => array (
								'element' => 'contact_social_link',
								'value' => 'yes' 
							) 

						),
						array (
								"type" => "textarea_html",
								"holder" => "h3",
								"class" => "",
								"heading" => __ ( "Social Icon HTML", 'propper-essentials' ),
								"param_name" => "content",
								"description" => __ ( "Social Icon HTML.", 'propper-essentials' ),
								'dependency' => array (
									'element' => 'contact_social_link',
									'value' => 'yes' 
								) 
						),
						array (
								"type" => "exploded_textarea",
								"holder" => "h3",
								"class" => "",
								"heading" => __ ( "Social Links", 'propper-essentials' ),
								"param_name" => "contact_social_links",
								"description" => __ ( "Social links multiple seperated by 'new line'.", 'propper-essentials' ),
								'dependency' => array (
									'element' => 'contact_social_link',
									'value' => 'yes' 
								) 
						) */
						

				) 
		) );
		
		
		
		
		
		/* ============= Team ========== */
		vc_map ( array (
				
				"name" => __ ( "Propper Team", 'propper-essentials' ),
				
				"base" => "propper_team",
							
				"content_element"         => true,

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'params'                  => array(
						array(

							"type"       => "textfield",

							"heading"    => "Title",

							"param_name" => "title",

							"value"      => ''

						),
						array (
							"type" => "attach_images",
							"heading" => __ ( "Team Images", 'propper-essentials' ),
							"param_name" => "team_images",
							"description" => __ ( "Images for Team Carousel", 'propper-essentials' ) 
						),	
						array(

							"type"       => "textarea_html",

							"heading"    => "Content",

							"param_name" => "content",

							"value"      => ''

						),

				) 
		) );
		
		
		
		
		/* ============= Numbers ========== */
		vc_map ( array (
				
				"name" => __ ( "Propper Number", 'propper-essentials' ),
				
				"base" => "propper_number",
							
				"content_element"         => true,

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'params'                  => array(
												
						array(

							"type"       => "textfield",

							"heading"    => "Title",

							"param_name" => "title",

							"value"      => ''

						),						
						array(

							"type"       => "textfield",

							"heading"    => "Number",

							"param_name" => "number",

							"value"      => ''

						),

				) 
		) );
		
		
		
		
		/* ============= Marketing Banner ========== */
		vc_map ( array (
				
				"name" => __ ( "Propper Marketing Banner", 'propper-essentials' ),
				
				"base" => "propper_marketing_banner",
							
				"content_element"         => true,

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'params'                  => array(
						
						array (
							"type" => "attach_image",
							"heading" => __ ( "Marketing Banner Image", 'propper-essentials' ),
							"param_name" => "bg_image",
							"description" => __ ( "Images for Marketing Banner", 'propper-essentials' ) 
						),	
						array(

							"type"       => "textarea_html",

							"heading"    => "Content",

							"param_name" => "content",

							"value"      => ''

						),

				) 
		) );
		
		
		
		
		/* ============= Propper Agent Contact ========== */
		vc_map ( array (
				
				"name" => __ ( "Propper Agent Contact", 'propper-essentials' ),
				
				"base" => "propper_agent_contact",
							
				"content_element"         => true,

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'params'                  => array(
						array(

							"type"       => "textarea",

							"heading"    => "Contact Form Shortcode",

							"param_name" => "cf7_shortcode",

							"value"      => ''

						),
						array (
							"type" => "attach_image",
							"heading" => __ ( "Agent Image", 'propper-essentials' ),
							"param_name" => "agent_image",
							"description" => __ ( "Images for Agent", 'propper-essentials' ) 
						),	
						array(

							"type"       => "textarea_html",

							"heading"    => "Content",

							"param_name" => "content",

							"value"      => ''

						),
						

				) 
		) );
		
		
		
		/* ============= Propper Person ========== */
		vc_map ( array (
				
				"name" => __ ( "Propper Person", 'propper-essentials' ),
				
				"base" => "propper_person",
							
				"content_element"         => true,

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'params'                  => array(
						
						array (
							"type" => "attach_image",
							"heading" => __ ( "Person Image", 'propper-essentials' ),
							"param_name" => "img",
						),	
						array(

							"type"       => "textfield",

							"heading"    => "Name",

							"param_name" => "name",

							"value"      => ''

						),		
						array(

							"type"       => "textfield",

							"heading"    => "Designation",

							"param_name" => "designation",

							"value"      => ''

						),		
						array(

							"type"       => "textfield",

							"heading"    => "Phone",

							"param_name" => "phone",

							"value"      => ''

						),		
						array(

							"type"       => "textfield",

							"heading"    => "Email",

							"param_name" => "email",

							"value"      => ''

						),	
						array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Social Link", 'propper-essentials' ),
							"param_name" => "social_link",
							"value" => array (
									'',
									'yes',
									'no' 
							),
							"description" => __ ( "Social Link shows or not", 'propper-essentials' ) 
						),
						array (
								"type" => "exploded_textarea",
								"holder" => "h3",
								"class" => "",
								"heading" => __ ( "Social Icon Classes", 'propper-essentials' ),
								"param_name" => "social_icons",
								"description" => __ ( "Social Icon Classes multiple seperated by 'new line'.", 'propper-essentials' ),
								'dependency' => array (
										'element' => 'social_link',
										'value' => 'yes' 
								) 
						),
						array (
								"type" => "exploded_textarea",
								"holder" => "h3",
								"class" => "",
								"heading" => __ ( "Social Links", 'propper-essentials' ),
								"param_name" => "social_links",
								"description" => __ ( "Social links multiple seperated by 'new line'.", 'propper-essentials' ),
								'dependency' => array (
										'element' => 'social_link',
										'value' => 'yes' 
								) 
						) 
						

				) 
		) );
		
		
		
		/**
		 * ******** ===================== SPONSOR ===================== *************
		 */		
		
			vc_map(array(

						'name'                    => "Propper Sponsor Section",

						'base'                    => "propper_sponsor_section",

						"as_parent"               => array('only' => 'propper_sponsor'),

						"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',


				'params'                  => array(

							
							
							array(

								"type"       => "textfield",

								"heading"    => "Title",

								"param_name" => "title",

								"value"      => ''

							)

						),

						'description'             => 'Insert icon-based boxes with columns'

					));

			vc_map(array(

	    		'name'                    => "Propper Sponsor",

	    		'base'                    => "propper_sponsor",

	    		"as_child"                => array('only' => 'propper_sponsor_section'),

	    		"content_element"         => true,

	    		'params'                  => array(

	    			array (
							"type" => "attach_image",
							"heading" => __ ( "Sponsor's Image", 'propper-essentials' ),
							"param_name" => "sponsor_img",
							"description" => __ ( "Images for Sponsor", 'propper-essentials' ) 
					),
	    			array (
							"type" => "textfield",
							"heading" => __ ( "Sponsor's Link", 'propper-essentials' ),
							"param_name" => "link",
							"description" => __ ( "Sponsor's Url", 'propper-essentials' ) 
					)

	    		)

	    	));
			
		
		
		/**
		 * ******** ===================== Time Line ===================== *************
		 */		
		
			vc_map(array(

				'name'                    => "Propper Time Line",

				'base'                    => "propper_timeline_section",

				"as_parent"               => array('only' => 'propper_timeline'),

				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'Propper Shortcodes', 'propper-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',


				'params'                  => array(
					
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
	    			

				),

				'description'             => 'Insert icon-based boxes with columns'

			));

			vc_map(array(

	    		'name'                    => "Propper Time Line",

	    		'base'                    => "propper_timeline",

	    		"as_child"                => array('only' => 'propper_timeline_section'),

	    		"content_element"         => true,

	    		'params'                  => array(
					
					array(

						"type"       => "textfield",

						"heading"    => "Date",

						"param_name" => "date",

						"value"      => ''

					),
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					array(

						"type"       => "textarea",

						"heading"    => "Description",

						"param_name" => "description",

						"value"      => ''

					),
					array(

						"type"       => "textarea_html",

						"heading"    => "Aditional Info",

						"param_name" => "content",

						"value"      => ''

					),
					

	    		)

	    	));
		

			
	}
}