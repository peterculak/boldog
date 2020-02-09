<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package propper
 */

?>

<section class="no-results not-found">	
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			
			<h1><?php esc_html_e( 'Nothing Found', 'propper' ); ?></h1>
			
			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'propper' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>
				
				<div class="row">
					<div class="col-md-12">
					
						<h1 class="page-title white font1"><?php printf( esc_html__( 'Search Results for: %s', 'propper' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</div>
				</div>
				
				<h2><?php esc_html_e( 'Nothing Found', 'propper' ); ?></h2>
				
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'propper' ); ?></p>
			<?php
				get_search_form();

		else : ?>
			
			<h1><?php esc_html_e( 'Nothing Found', 'propper' ); ?></h1>
			
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'propper' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

