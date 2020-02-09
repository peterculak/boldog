 <div id="right_menu" class="right">
	<?php	

		$fornt_page = 'scrollto';
		$object;
		if (is_front_page ()) {
			$object = new propper_one_page_walker ( $fornt_page );
		} else {
			$object = new propper_one_page_walker ( $fornt_page = '' );
		}
		$defaults = array (
				'theme_location' => 'onepage',
				'menu_class' => 'nav navigation-links animate show',
				'echo' => true,
				'container' => '',
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 4,
				'walker' => $object 
		);
/*
		$defaults_2 = array (
				'theme_location' => 'onepage_2',
				'menu_class' => 'nav navigation-links animate',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 4,
				'walker' => $object 
		);

		$defaults_3 = array (
				'theme_location' => 'onepage_3',
				'menu_class' => 'nav navigation-links animate',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 4,
				'walker' => $object 
		);

		$defaults_4 = array (
				'theme_location' => 'onepage_4',
				'menu_class' => 'nav navigation-links animate',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 4,
				'walker' => $object 
		);

		$defaults_5 = array (
				'theme_location' => 'onepage_5',
				'menu_class' => 'nav navigation-links animate',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 4,
				'walker' => $object 
		);

		$defaults_6 = array (
				'theme_location' => 'onepage_6',
				'menu_class' => 'nav navigation-links animate',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 4,
				'walker' => $object 
		);

		$defaults_7 = array (
				'theme_location' => 'onepage_7',
				'menu_class' => 'nav navigation-links animate',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 4,
				'walker' => $object 
		); */

		$defaults_multi = array (
				'theme_location' => 'primary',
				'menu_class' => 'nav navigation-links animate',
				'container' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 0,
				'walker' => new propper_one_page_walker ( $fornt_page = 'alter' ) 
		);	
		
				
		/*if( is_page(184) ){
			wp_nav_menu ( $defaults_4 );
		}elseif( is_page(185) ){
			wp_nav_menu ( $defaults_5 );
		}elseif( is_page(188) ){
			wp_nav_menu ( $defaults_6 );
		}elseif( is_page(189) ){
			wp_nav_menu ( $defaults_7 );
		}elseif( is_page(182) ){
			wp_nav_menu ( $defaults_3 );
		}elseif( is_page(181) ){
			wp_nav_menu ( $defaults_2 );
		}elseif( is_page(20) ){
			wp_nav_menu ( $defaults );
		}else
*/
		if (has_nav_menu ( 'primary' )) {
			wp_nav_menu ( $defaults_multi );
		} elseif (has_nav_menu ( 'onepage' )) {
			wp_nav_menu ( $defaults );
		}else{
			echo esc_html__('No Menu Assaigned!','propper');
		}
		
	?> 
	<div class="nav-btn">
		<figure></figure>
		<figure></figure>
		<figure></figure>
	</div>
</div>
