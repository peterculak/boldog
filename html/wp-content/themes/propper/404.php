<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package propper
 */

get_header(); ?>
<div class="hero-section background-is-dark blog-title">
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<h1 class="animate center show"><?php esc_html_e('404','propper')?></h1>
				<h2 class="animate center show"><?php esc_html_e('Page Not Found','propper')?></h2>			
			</div>
		</div>
	</div>
</div>


<div id="page-content" class="blog-page-content">       
	<div class="block mb50">
		<div class="container">
			<div class="row">
				<p class="white"><?php esc_html_e('The page you requested couldn\'t be found, it has been removed or moved and the URL was not changed accordingly.','propper')?></p> 
		
				<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-rounded arrow"><?php esc_html_e('Back to home page','propper')?></a>
			</div>
		</div>				
	</div>
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
 ?>
