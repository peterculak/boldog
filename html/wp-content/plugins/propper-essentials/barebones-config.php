<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "propper_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Propper Options', 'propper-essentials' ),
        'page_title'           => __( 'Propper Options', 'propper-essentials' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
		
		//'forced_dev_mode_off' => false,		
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'propper-essentials' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'propper-essentials' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'propper-essentials' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'propper-essentials' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'propper-essentials' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'propper-essentials' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'propper-essentials' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'propper-essentials' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'propper-essentials' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'propper-essentials' ),
        'icon'   => 'el el-home',
        /*  'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'propper-essentials' ),
                'desc'     => __( 'Example description.', 'propper-essentials' ),
                'subtitle' => __( 'Example subtitle.', 'propper-essentials' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            ) 
        ) */
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'propper-essentials' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'propper-essentials' ),
        'icon'  => 'el el-home'
    ) );
	
	
	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Slider', 'propper-essentials' ),
		'id' => 'slider_settings',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
			
			array (
			'id' => 'slider_opts',
			'type'     => 'button_set',
			'title' => __ ( 'Select Slider', 'propper-essentials' ),
			'full_width' => true,
			'mode' => false,					
			'desc' => __ ( '', 'propper-essentials' ),
			'subtitle' => __ ( '', 'propper-essentials' ), 
			'options'  => array(							
					'slider_1' => 'Slider 1',
					'slider_2' => 'Slider 2',
					'slider_3' => 'Slider 3',
					'slider_4' => 'Slider 4',
					'slider_5' => 'Slider 5',
					'slider_6' => 'Slider 6',
					'slider_7' => 'Slider 7',
					'slider_8' => 'Slider 8',
				),
				'default'  => 'slider_1'
			),	
			
			// Content for slider 1
			array(
				'id'        => 'slider_1_images',
				'type'      => 'gallery',
				'title'     => 'Multi Media Selector',
				'subtitle'  => 'Multi file media selector',
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),
			
			array(
				'id'       => 'slider_1_newsletter',
				'type'     => 'text',
				'title'    => __( 'Slider 1 Newsletter Shortcode', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),
			
			
			// Content for slider 2
			array(
				'id'        => 'slider_2_images',
				'type'      => 'gallery',
				'title'     => 'Multi Media Selector',
				'subtitle'  => 'Multi file media selector',
				'required' => array( 'slider_opts', '=', 'slider_2' )
			),
			array(
				'id'       => 'slider_2_title',
				'type'     => 'textarea',
				'title'    => __('Slider 2 Title', 'redux-framework-demo'),
				'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
				'default'  => __( 'Reserve your apartment now!', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_2' )
			),
			array(
				'id'       => 'slider_2_list_title',
				'type'     => 'text',
				'title'    => __( 'Slider 2 List Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_2' ),
				'default'  => __( 'Building', 'propper-essentials' ),
			),
			array(
				'id'       => 'slider_2_subtitle_left',
				'type'     => 'text',
				'title'    => __( 'Slider 2 List Subtitle Left', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_2' ),
				'default'  => __( 'Floor', 'propper-essentials' ),
			),
			array(
				'id'       => 'slider_2_subtitle_right',
				'type'     => 'text',
				'title'    => __( 'Slider 2 List Subtitle Left', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_2' ),
				'default'  => __( 'Available', 'propper-essentials' ),
			),

			// Content for slider 3
			
			array(
				'id'        => 'slider_3_images',
				'type'      => 'gallery',
				'title'     => 'Multi Media Selector',
				'subtitle'  => 'Multi file media selector',
				'required' => array( 'slider_opts', '=', 'slider_3' )
			),
			array(
				'id'       => 'slider_3_title',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_3' )
			),
			array(
				'id'       => 'slider_3_newsletter',
				'type'     => 'text',
				'title'    => __( 'Slider 3 Newsletter Shortcode', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_3' ),
			),
			// Content for slider 4
			
			array(
				'id'        => 'slider_4_images',
				'type'      => 'gallery',
				'title'     => 'Multi Media Selector',
				'subtitle'  => 'Multi file media selector',
				'required' => array( 'slider_opts', '=', 'slider_4' )
			),
			array(
				'id'       => 'slider_4_title',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_4' ),
			),
			array(
				'id'       => 'slider_4_subtitle',
				'type'     => 'text',
				'title'    => __( 'Slider Subtitle', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_4' ),
			),
			
			array(
				'id'       => 'slider_4_newsletter',
				'type'     => 'text',
				'title'    => __( 'Slider 4 Newsletter Shortcode', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_4' ),
			),

			array(
				'id'       => 'slider_4_video_url',
				'type'     => 'text',
				'title'    => __( 'Slider 4 Video Url', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_4' ),
				'default'  => __( 'http://vimeo.com/24506451', 'propper-essentials' ),
			),

			// Content for slider 5
			
			array(
				'id'        => 'slider_5_images',
				'type'      => 'gallery',
				'title'     => 'Multi Media Selector',
				'subtitle'  => 'Multi file media selector',
				'required' => array( 'slider_opts', '=', 'slider_5' )
			),
			array(
				'id'       => 'slider_5_title',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_5' )
			),
			array(
				'id'       => 'slider_5_countdown_year',
				'type'     => 'text',
				'title'    => __( 'Countdown Year', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_5' ),
				'desc' => __ ( 'Example: 2017', 'propper-essentials' ),
			),
			array(
				'id'       => 'slider_5_countdown_month',
				'type'     => 'text',
				'title'    => __( 'Countdown Month', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_5' ),
				'desc' => __ ( 'Example: 6', 'propper-essentials' ),
			),
			array(
				'id'       => 'slider_5_countdown_day',
				'type'     => 'text',
				'title'    => __( 'Countdown Day', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_5' ),
				'desc' => __ ( 'Example: 21', 'propper-essentials' ),
			),
			array(
				'id'       => 'slider_5_newsletter',
				'type'     => 'text',
				'title'    => __( 'Slider 5 Newsletter Shortcode', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_5' )
			),
			

			// Content for slider 6
			
			array(
				'id'        => 'slider_6_images',
				'type'      => 'gallery',
				'title'     => 'Multi Media Selector',
				'subtitle'  => 'Multi file media selector',
				'required' => array( 'slider_opts', '=', 'slider_6' )
			),
			array(
				'id'       => 'slider_6_title',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_6' )
			),
			
			array(
				'id'       => 'slider_6_subtitle',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_6' ),
				'default'  => __( 'Nam in sodales massa. Donec at ullamcorper diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'propper-essentials' ),
			),
			array(
				'id'       => 'slider_6_button_text',
				'type'     => 'text',
				'title'    => __( 'Slider Button', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_6' ),
				'default'  => __( 'Check Out More', 'propper-essentials' ),
			),

			array(
				'id'       => 'slider_6_button_link',
				'type'     => 'text',
				'title'    => __( 'Slider Button LInk', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_6' ),
				'default'  => __( '#about', 'propper-essentials' ),
			),

			array(
				'id'       => 'slider_6_video_url',
				'type'     => 'text',
				'title'    => __( 'Video Url', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_6' ),
				'default'  => __( 'http://vimeo.com/24506451', 'propper-essentials' ),
			),
			array (
				'id' => 'slider_6_video_overlay',
				'type' => 'media',
				'title' => __ ( 'Video Overlay', 'propper-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'required' => array( 'slider_opts', '=', 'slider_6' ),
			),


			// Content for slider 7
			
			array(
				'id'        => 'slider_7_images',
				'type'      => 'gallery',
				'title'     => 'Multi Media Selector',
				'subtitle'  => 'Multi file media selector',
				'required' => array( 'slider_opts', '=', 'slider_7' )
			),
			array(
				'id'       => 'slider_7_title',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_7' )
			),
			
			array(
				'id'       => 'slider_7_subtitle',
				'type'     => 'textarea',
				'title'    => __( 'Slider Subtitle', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_7' )
			),
			
			
			array(
				'id'       => 'slider_7_button_1_text',
				'type'     => 'text',
				'title'    => __( 'Button 1 Text', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_7' ),
				'default'  => __( 'Check out more', 'propper-essentials' ),
			),
			
			array(
				'id'       => 'slider_7_button_1_link',
				'type'     => 'text',
				'title'    => __( 'Button 1 Link', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_7' ),
				'default'  => __( '#about', 'propper-essentials' ),
			),
			
			
			array(
				'id'       => 'slider_7_button_2_text',
				'type'     => 'text',
				'title'    => __( 'Button 2 Text', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_7' ),
				'default'  => __( 'Contact us', 'propper-essentials' ),
			),
			
			array(
				'id'       => 'slider_7_button_2_link',
				'type'     => 'text',
				'title'    => __( 'Button 2 Link', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_7' ),
				'default'  => __( '#contact', 'propper-essentials' ),
			),
			

			// Content for slider 8
			
			array(
				'id'       => 'slider_8_title',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_8' ),	
				'default'  => __( 'Luxury life...<br>Coming to your town.', 'propper-essentials' ),
			),
			
			array(
				'id'       => 'slider_8_subtitle',
				'type'     => 'text',
				'title'    => __( 'Slider Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_8' ),
				'default'  => __( 'Nam in sodales massa. Donec at ullamcorper diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'propper-essentials' ),
			),

			array(
				'id'       => 'slider_8_video_url',
				'type'     => 'text',
				'title'    => __( 'Video Url', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_8' ),
				'default'  => __( 'https://player.vimeo.com/video/34741214?autoplay=1&loop=1&color=ffffff&title=0&byline=0&portrait=0', 'propper-essentials' ),
			),

			array(
				'id'       => 'slider_8_newsletter_title',
				'type'     => 'text',
				'title'    => __( 'Slider Newsletter Title', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_8' ),
				'default'  => __( 'Enter your email for the latest news', 'propper-essentials' ),
			),
			array(
				'id'       => 'slider_8_newsletter',
				'type'     => 'text',
				'title'    => __( 'Slider 8 Newsletter Shortcode', 'propper-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_8' )
			),
			
		) 
	) );
	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Blog', 'propper-essentials' ),
		'id' => 'blog_opts',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (				
			array (
				'id' => 'propper_show_title',
				'type' => 'switch',
				'title' => esc_html__ ( 'Show title', 'propper-essentials' ),
				'subtitle' => esc_html__ ( 'Check to show title on pages.', 'propper-essentials' ),
				"default" => 1,
				'on' => 'Show',   
				'off' => 'Hide' 
			)		
		) 
	) );

	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Google Map', 'propper-essentials' ),
		'id' => 'map_opts',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (				
			array(
				'id'       => 'map_api',
				'type'     => 'text',
				'title'    => __( 'Google Map API', 'propper-essentials' ),
				'default'  => __( 'AIzaSyDKU44O0b8Wai51ZfXhkolnNe5Br18RBMI', 'propper-essentials' ),
			),
			array(
				'id'       => 'map_lat',
				'type'     => 'text',
				'title'    => __( 'Latitude', 'propper-essentials' ),
				'default'  => __( '34.038405', 'propper-essentials' ),
			),
			array(
				'id'       => 'map_long',
				'type'     => 'text',
				'title'    => __( 'Longitude', 'propper-essentials' ),
				'default'  => __( '-117.946944', 'propper-essentials' ),
			),	
			array (
				'id' => 'map_theme',
				'type'     => 'button_set',
				'title'    => __( 'Map Theme', 'propper-essentials' ),
				'full_width' => true,
				'mode' => false,					
				'options'  => array(							
					'dark' => 'Dark',
					'light' => 'Light'
				),
				 'default'  => 'light'
		),
		) 
	) );

	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Footer', 'propper-essentials' ),
		'id' => 'footer',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
			array (
			'id' => 'footer_opts',
			'type'     => 'button_set',
			'title' => __ ( 'Select Footer', 'propper-essentials' ),
			'full_width' => true,
			'mode' => false,					
			'desc' => __ ( '', 'propper-essentials' ),
			'subtitle' => __ ( '', 'propper-essentials' ), 
			'options'  => array(							
					'footer_1' => 'Footer 1',
					'footer_2' => 'Footer 2',
					'footer_3' => 'Footer 3',
					'footer_4' => 'Footer 4',
					'footer_5' => 'Footer 5',
					'footer_6' => 'Footer 6',
					'footer_7' => 'Footer 7',
				),
				'default'  => 'footer_1'
			),	
			array (
				'id' => 'footer_logo_dark',
				'type' => 'media',
				'title' => __ ( 'Footer Dark logo', 'propper-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'propper-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'propper-essentials' ),
			),
			array (
				'id' => 'footer_logo_light',
				'type' => 'media',
				'title' => __ ( 'Footer Light logo', 'propper-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'propper-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'propper-essentials' ),
			),
			array (
					'id' => 'footer_description',
					'type' => 'editor',
					'title' => __ ( 'Footer Info', 'propper-essentials' ),
					'subtitle' => __ ( 'Use any of the features of WordPress editor inside your panel!', 'propper-essentials' ),
					'default' => ' Proin orci nisl, posuere viverra erat ut,pellentesque interdum urna. Curabitur eu risus convallis,auctor augue id,pharetra neque.',						
			),
			array (
					'id' => 'footer_copyright',
					'type' => 'editor',
					'title' => __ ( 'Footer Copyright', 'propper-essentials' ),
					'subtitle' => __ ( 'Use any of the features of WordPress editor inside your panel!', 'propper-essentials' ),
					'default' => '(C) 2016 All Rights Reserved',						
			),
			array (
					'id' => 'footer_phone',
					'type' => 'text',
					'title' => __ ( 'Footer Phone Number', 'propper-essentials' ),
					'default' => '+1 (734) 123-4567',						
			),
			array (
					'id' => 'footer_email',
					'type' => 'text',
					'title' => __ ( 'Footer Email Address', 'propper-essentials' ),
					'default' => 'hello@archits.com',						
			),	
					
			array (
					'id' => 'footer_address',
					'type' => 'editor',
					'title' => __ ( 'Footer Address', 'propper-essentials' ),
					'subtitle' => __ ( 'Use any of the features of WordPress editor inside your panel!', 'propper-essentials' ),						
			),			
			array (
					'id' => 'footer_contact_form',
					'type' => 'editor',
					'title' => __ ( 'Footer Contact Form Shortcode', 'propper-essentials' ),
					'subtitle' => __ ( 'Use any of the features of WordPress editor inside your panel!', 'propper-essentials' ),						
			),		
			array (
					'id' => 'footer_social_icon_html',
					'type' => 'editor',
					'title' => __ ( 'Social Icon Html for  Footer and Contact Area', 'propper-essentials' ),
					'subtitle' => __ ( 'Supporting tags: h3, div, a, i.', 'propper-essentials' ),						
			),
			/*array (
					'id' => 'social_icons',
					'type' => 'sortable',
					'mode' => 'checkbox',
					'title' => __ ( 'Multi Social Options', 'propper-essentials' ),
					'subtitle' => __ ( 'Select Social Networks that show on Footer and Contact Area ', 'propper-essentials' ),
					'desc' => __ ( 'Select Social Networks that show on Footer and Contact Area', 'propper-essentials' ),
					'options' => array (
							
							'social_facebook_circle, Facebook' => 'Facebook',
							'social_twitter_circle, Twitter' => 'Twitter',
							'social_instagram_circle, Instagram' => 'Instagram',
							'social_skype_circle, Skype' => 'Skype',
							'ion-social-pinterest, Pinterest' => 'Pinterest',
							'ion-social-yahoo, Yahoo' => 'Yahoo',							
							'ion-social-googleplus, Google Plus' => 'Google Plus',
							'ion-social-linkedin, LinkedIn' => 'LinkedIn',

					) 
			),
			array (
					'id' => 'social_links',
					'type' => 'textarea',
					'title' => __ ( 'Social Links', 'propper-essentials' ),
					'subtitle' => __ ( 'Sequentialy added selected social links', 'propper-essentials' ),
					'desc' => __ ( 'Sequentialy added selected social links, Seperated links with ","', 'propper-essentials' ),
					'default' => '#fb, #tw, #ins, #sk, #pin, #yahoo, #gplus, #linkdin'
			),	*/		
			array (
					'id' => 'footer_number_title',
					'type' => 'text',
					'title' => __ ( 'Footer Number Title', 'propper-essentials' ),
					'default' => 'Bonus numbers.',						
			),		
			array (
					'id' => 'footer_number_1',
					'type' => 'text',
					'title' => __ ( 'Footer Number One', 'propper-essentials' ),
					'default' => '54',						
			),		
			array (
					'id' => 'footer_number_1_label',
					'type' => 'text',
					'title' => __ ( 'Footer Number One Label', 'propper-essentials' ),
					'default' => 'Projects done',						
			),	
			array (
					'id' => 'footer_number_2',
					'type' => 'text',
					'title' => __ ( 'Footer Number Two', 'propper-essentials' ),
					'default' => '21',						
			),		
			array (
					'id' => 'footer_number_2_label',
					'type' => 'text',
					'title' => __ ( 'Footer Number Two Label', 'propper-essentials' ),
					'default' => 'Employees',						
			),	
			array (
					'id' => 'footer_number_3',
					'type' => 'text',
					'title' => __ ( 'Footer Number Three', 'propper-essentials' ),
					'default' => '48',						
			),		
			array (
					'id' => 'footer_number_3_label',
					'type' => 'text',
					'title' => __ ( 'Footer Number Three Label', 'propper-essentials' ),
					'default' => 'Satisfied Clients',						
			),	
			array (
					'id' => 'footer_number_4',
					'type' => 'text',
					'title' => __ ( 'Footer Number Four', 'propper-essentials' ),
					'default' => '17',						
			),		
			array (
					'id' => 'footer_number_4_label',
					'type' => 'text',
					'title' => __ ( 'Footer Number Four Label', 'propper-essentials' ),
					'default' => 'Prices Won',						
			),			
			array (
				'id' => 'footer_bg_color',
				'type' => 'color',
				'title' => __ ( 'Footer Background Color', 'propper-essentials' ),
			),
			array (
				'id' => 'footer_bg_image',
				'type' => 'media',
				'title' => __ ( 'Footer Background Image', 'propper-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'propper-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'propper-essentials' ),
			),			
		) 
	) );

    /*
     * <--- END SECTIONS
     */
