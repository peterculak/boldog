<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','propper'); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
	<h4 class="comments-title"><?php	printf( _n( 'ONE Comments%2$s', '%1$s Comments ', get_comments_number() ,'propper'),
									number_format_i18n( get_comments_number() ), ' ' ); ?></h4>
	
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>	
	
		<div class="media-list">
	<?php wp_list_comments ( array (          
            'type'=>'comment',
            'short_ping' => true,
            'avatar_size' => 70,
            'callback' => 'propper_comment::propper_comments' 
           ) );?>
		</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.','propper'); ?></p>

	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>


<div class="review_form_holder">
            <div class="cforms">
<h4 class="comments-title"><?php comment_form_title( __('Post a Comment','propper') ); ?></h4>

<div id="cancel-comment-reply">
	<small><?php cancel_comment_reply_link() ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.','propper'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

<form action="<?php echo site_url(); ?>/wp-comments-post.php" id="form-contact" method="post" class="clearfix inputs-underline">
	
	<?php if ( is_user_logged_in() ) : ?>

	<p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.','propper'), get_edit_user_link(), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('Log out of this account','propper'); ?>"><?php _e('Log out &raquo;','propper'); ?></a></p>

	<?php else : ?>
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<div class="form-group">
				
				<input class="form-control" placeholder="Your Name" type="text" name="author" id="name" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> required />
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="form-group">
				<input class="form-control" placeholder="Your Email" type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> required />
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<textarea class="form-control" rows="5" name="message" id="comment" cols="100" tabindex="4" placeholder="<?php echo __('Your Message', 'propper'); ?>" required></textarea>
			</div>
		</div>
	</div>
	<div class="form-group clearfix">
		<button type="submit" class="btn pull-right btn-primary btn-rounded" id="form-contact-submit">Send a Message</button>
	</div>
	<?php comment_id_fields(); ?>

	<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

</div>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>

