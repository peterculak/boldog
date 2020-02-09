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
<div class="page-wrapper" id="page-top">
    <header id="page-header">
	<?php $propper_nav_button = rwmb_meta('propper_nav_button'); ?>
		<nav class="navigation nav-btn-only background-is-dark">
            <div class="container">
                <div class="wrapper">
                    <div class="left">
                        <?php propper_the_custom_logo(); ?>
                    </div>
				 </div>
            </div>
        </nav>
		  
<?php

get_template_part('slider','8'); 

?>
    </header>		