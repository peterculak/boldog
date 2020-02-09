<?php
/**
 * Template name: Template for Single Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Propper
 */

get_header('slider'); ?>
<div id="page-content">
			
	<?php
	while ( have_posts() ) : the_post();

		the_content();		
		
	endwhile; 
	?>
	
</div>

<?php


if( propper_return_theme_option('footer_opts') == "footer_3" ){
	 get_footer('3'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_4" ){
	get_footer('4'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_5" ){
	 get_footer('5'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_6" ){
	get_footer('6'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_7" ){
	 get_footer('7'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_2" ){
	 get_footer('2'); 
}elseif( propper_return_theme_option('footer_opts') == "footer_1" ){
	get_footer('1'); 
}else{
	 get_footer(); 
}
