<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package propper
 */

get_header();


$page_id = get_the_ID();
if (class_exists('RW_Meta_Box')) {
	// page title color
	$page_heading_bg_color = rwmb_meta ( 'propper_page_heading_bg_color', '', $page_id );
	$page_heading_title = rwmb_meta ( 'propper_page_heading_title', '', $page_id );
	$page_heading_subtitle = rwmb_meta ( 'propper_page_heading_subtitle', '', $page_id );
	//$page_heading_bg_img = rwmb_meta ( 'propper_page_heading_bg_img', 'type=image&size=full', $page_id );

}else{

	$page_heading_bg_color = 'red';
	$page_heading_title = get_bloginfo('name');
	$page_heading_subtitle = get_bloginfo('description');
}
if ( empty ( $page_heading_title )){
	
	$page_heading_title = get_bloginfo('name');
	
}
if ( empty ( $page_heading_subtitle )){
	
	$page_heading_subtitle = get_bloginfo('description');
}
	
/*
if (! empty ( $page_heading_bg_img )){
	
	$page_heading_bg_img = reset ( $page_heading_bg_img );
	
}else{

	if (empty ( $page_heading_bg_color ))
		$page_heading_bg_color = 'red';
		
	$page_heading_bg_img = array();
	$page_heading_bg_img['url'] = null;
}*/
?>
<?php
 
 
if( rwmb_meta( 'propper_page_heading_show_title') == '1'){ 
 
?>
<div class="hero-section background-is-dark blog-title" style="background-color:<?php echo esc_attr($page_heading_bg_color);?> !important; ">
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<h1 class="animate center show"><?php echo $page_heading_title; ?></h1>
				<h2 class="text-center"><?php echo $page_heading_subtitle; ?></h2>
			</div>
		</div>
	</div>
</div> 		


<?php } ?>
 
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