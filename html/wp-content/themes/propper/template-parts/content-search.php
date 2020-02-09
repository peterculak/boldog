<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package propper
 */

?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="side-details">
        <div class="post-date">
            <h4 class="month"><?php echo the_date('M');?></h4>
            <h3 class="day"><?php echo the_time('d');?></h3>
            <span class="year"><?php echo get_the_date('Y');?></span>
        </div>
    </div>
    <div class="post-content">		
    	<?php if ( has_post_thumbnail() ) {
    	 $url=wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') ); ?>
        <a href="<?php echo esc_url( get_permalink() );?>"><img src="<?php echo esc_url($url); ?>" class="img-responsive width100" alt="<?php esc_html_e('blog','propper');?>"></a>
        <?php } ?>       
        <div class="post-text">
        	<?php
				if ( is_single() ) {
					the_title( '<h4>', '</h4>' );
				} else {
					the_title( '<a class="link-to-post" href="' . esc_url( get_permalink() ) . '"><h4>', '</h4></a>' );
				} ?>            
            
	             <?php 
                    $counter=0;
                    $posttags = get_the_tags();
                    if ($posttags) {?>
					<p class="blog-post-categories">
	            <span><i class="ion-ios-pricetags-outline"></i></span>
					<?php
                    foreach($posttags as $tag) {
					
                    if($counter!=0){
                      echo '<a href="'. esc_url(home_url('/')).'tag/'.esc_attr( $tag->slug ).'"> ';
                    } 
                      echo esc_attr( $tag->name ) . '';
                      $counter++;
                     if($counter!=0){
                      echo '</a>, ';
                    } 
					 } ?>
					</p> <?php 
                  } ?>	    
            
            <?php
				the_excerpt();
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'propper' ),
					'after'  => '</div>',
				) );?>
        </div> 
        <a class="read-more-link btn-appear" href="<?php echo esc_url( get_permalink() );?>"><span><?php esc_html_e('Read More', 'propper')?> <i class="ion-android-arrow-forward"></i></span></a>   
    </div>	
</li>

