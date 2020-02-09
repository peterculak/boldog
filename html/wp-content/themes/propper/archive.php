<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package propper
 */

get_header(); ?>

<?php 

$propper_show_title = propper_return_theme_option( 'propper_show_title');
if( $propper_show_title == '1'){ 

?>
<div class="hero-section background-is-dark blog-title">
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<h1 class="animate center show"><?php echo bloginfo('name'); ?></h1>
				<h2><?php echo bloginfo('description'); ?></h2>			
			</div>
		</div>
	</div>
</div>		  
<?php } ?>	
	
    <div id="page-content">       
		<div class="block pt50">
            <div class="container">
                <div class="row">

                    <div class="col-md-9 col-sm-9">

                        <section id="content">

							<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1><?php single_post_title(); ?></h1>
									</header>

								<?php
								endif;

								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', 'blog' );

								endwhile;
								?><div class="hidden"><?php the_posts_navigation();?></div><?php

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
							
							<div class="center">
								<?php
									if (function_exists("propper_pagination")) {
										propper_pagination();
									}
								?>
							</div>
						</section>
                    </div>
                    
                    <div class="col-md-3 col-sm-3">
                        <section id="sidebar">
							<?php get_sidebar();?>				
						</section>
                    </div>
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
