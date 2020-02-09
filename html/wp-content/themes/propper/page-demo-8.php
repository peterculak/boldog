<?php
/**
 * Template name: Template for Demo 8 ( Video )
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

get_header('8'); ?>
<div id="page-content">
			
	<?php
	while ( have_posts() ) : the_post();

		the_content();		
		
	endwhile; 
	?>
	
</div>

<?php get_footer('8'); ?>
