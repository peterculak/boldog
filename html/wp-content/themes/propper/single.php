<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package propper
 */

get_header(); 
$post_id = get_the_ID();
if (class_exists('RW_Meta_Box')) {
	// page title color
	$post_heading_bg_color = rwmb_meta ( 'propper_post_heading_bg_color', '', $post_id );
	$post_heading_title = rwmb_meta ( 'propper_post_heading_title', '', $post_id );
	$post_heading_subtitle = rwmb_meta ( 'propper_post_heading_subtitle', '', $post_id );
	//$post_heading_bg_img = rwmb_meta ( 'propper_post_heading_bg_img', 'type=image&size=full', $post_id );

}else{

	$post_heading_bg_color = 'red';
	$post_heading_title = get_bloginfo('name');
	$post_heading_subtitle = get_bloginfo('description');
}
if ( empty ( $post_heading_title )){
	
	$post_heading_title = get_bloginfo('name');
	
}
if ( empty ( $post_heading_subtitle )){
	
	$post_heading_subtitle = get_bloginfo('description');
}
	
/*
if (! empty ( $post_heading_bg_img )){
	
	$post_heading_bg_img = reset ( $post_heading_bg_img );
	
}else{

	if (empty ( $post_heading_bg_color ))
		$post_heading_bg_color = 'red';
		
	$post_heading_bg_img = array();
	$post_heading_bg_img['url'] = null;
}
*/
?>

<div class="hero-section background-is-dark blog-title" style="background-color: <?php echo esc_url($post_heading_bg_color);?>">
	<div class="wrapper">
		<div class="hero-title">
			<div class="container">
				<h1 class="animate center show"><?php echo $post_heading_title; ?></h1>
				<h2 class="text-center"><?php echo $post_heading_subtitle; ?></h2>
			</div>
		</div>
	</div>
</div> 		
<div id="page-content">       
		<div class="block pt50">
            <div class="container">
                <div class="row">

                    <div class="col-md-9 col-sm-9">

                        <section id="content">
							<?php
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/content', 'single' );
								
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
						
							endwhile;
							?>
							
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