<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Propper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<a href="<?php echo esc_url( get_permalink()); ?>"><?php the_post_thumbnail();?></a>
	
	<header>
		<?php
			
			if ( is_single() ) {
				the_title( '<h2>', '</h2>' );
			} else {
				the_title( '<a href="' . esc_url( get_permalink() ) . '"><h2>', '</h2></a>' );
			}
		?>
	</header>
	<figure class="meta">
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="link icon"><i class="fa fa-user"></i><?php echo esc_attr( get_the_author() ); ?></a>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="link icon"><i class="fa fa-calendar"></i><?php echo esc_attr( get_the_date() ); ?></a>
		<div class="tags">
		<?php
			$posttags = get_the_tags();

			if ($posttags) {
			  foreach($posttags as $tag) {
				?>
				<a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="tag article"><?php echo $tag->name; ?></a>
				<?php
			  }
			}
		?>
		</div>
	</figure>
	<?php
		the_excerpt();
		
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'propper' ),
			'after'  => '</div>',
		) );
	?>
	<a href="<?php echo esc_url( get_permalink()); ?>" class="link arrow"><?php echo esc_html( 'Read More'); ?></a>
</article>