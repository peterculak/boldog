<?php
/*
Template name: Frontpage Template
*/

 get_header('slider'); 
 
?>
	 
<?php	 
	 
		if ( ( $locations = get_nav_menu_locations() ) && $locations['onepage'] ) {
			$menu = wp_get_nav_menu_object( $locations['onepage'] );
			$menu_items = wp_get_nav_menu_items($menu->term_id);
			$included_item = array();
			foreach($menu_items as $item) {				
				
				if(!in_array("notsingle", $item->classes))		
					if($item->object == 'page')				
						$included_item[] = $item->object_id;					
			}
			
			$main_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $included_item, 'posts_per_page' => count($included_item), 'orderby' => 'post__in' ) );
			
		while ($main_query->have_posts()) : $main_query->the_post();
		

		$post_name = $post->post_name;
		
		$post_id = get_the_ID();?>

			<div id="<?php echo esc_attr($post->post_name);?>" class="<?php echo esc_attr($post->post_name);?> nav-highlight">
				 
				<?php the_content('');?>
				
			</div>
		   
		<?php endwhile; wp_reset_query(); }?>

<?php

if( propper_return_theme_option('footer_opts') == "footer_3" ){
	 get_template_part('footer','3'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_4" ){
	get_template_part('footer','4'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_5" ){
	 get_template_part('footer','5'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_6" ){
	get_template_part('footer','6'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_7" ){
	 get_template_part('footer','7'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_2" ){
	 get_template_part('footer','2'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_1" ){
	get_template_part('footer','1'); 
}else{
	 get_footer();
}