<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="page-content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package propper
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11');?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navigation">
<div class="page-wrapper" id="home">
    <header id="page-header">
	<?php $propper_nav_button = rwmb_meta('propper_nav_button'); ?>
		<nav class="navigation <?php if($propper_nav_button == '1'){ echo 'nav-btn-only';}?> background-is-dark ">
            <div class="container">
                <div class="wrapper">
                    <div class="left">
                        <?php propper_the_custom_logo(); ?>
                    </div>
        
					<?php get_template_part('menu-section'); ?>
				
				 </div>
            </div>
        </nav>
		  </header>
<?php

	
if( propper_return_theme_option('slider_opts') == "slider_3" ){
	 get_template_part('slider','3'); 
}elseif( propper_return_theme_option('slider_opts') == "slider_4" ){
	get_template_part('slider','4'); 
}elseif( propper_return_theme_option('slider_opts') == "slider_5" ){
	 get_template_part('slider','5'); 
}elseif( propper_return_theme_option('slider_opts') == "slider_6" ){
	get_template_part('slider','6'); 
}elseif( propper_return_theme_option('slider_opts') == "slider_7" ){
	 get_template_part('slider','7'); 
}elseif( propper_return_theme_option('slider_opts') == "slider_8" ){
	 get_template_part('slider','8'); 
}elseif( propper_return_theme_option('slider_opts') == "slider_2" ){
	 get_template_part('slider','2'); 
}elseif( propper_return_theme_option('slider_opts') == "slider_1" ){
	get_template_part('slider','1'); 
}else{
	 
}

?>
  	  