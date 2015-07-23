<?php //Comments Template ?>

<?php if ( 'open' == $post->comment_status ) : ?>

<div id="respond">

	<h3>Comments:
		<?php comments_number( $zero = '(0)', $one = '(1)', $more = '(%)', $deprecated ); ?>
	</h3>

	<?php cancel_comment_reply_link(); ?>

	<?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>

	<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>

	<?php else : ?>

	<form class="comments-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<?php if ( $user_ID ) : ?>

	<p>Logged in as <a class="btn btn-default" href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> <a class="btn btn-danger" href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out &raquo;</a></p>

	<?php else : ?>

	<div class="form-group">
		<label for="author">Name <?php if ( $req ) echo "( required )"; ?></label>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="form-control" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>

	<div class="form-group">
		<label for="email">Email ( <?php if ( $req ) echo "required, "; ?>never shared )</label>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="form-control" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>

	<div class="form-group">
		<label for="url">Website ( optional )</label>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" class="form-control" tabindex="3" />
	</div>

	<?php endif; ?>

	<div class="form-group">
	<label for="comment">Comment</label>
	<textarea class="form-control" name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
	</div>


	<input name="submit" type="submit" id="submit" tabindex="5" class="btn btn-primary btn-block" value="Submit Comment" />
	<?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>

	</form>


	<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // If comments are open: delete this and the sky will fall on your head ?>

<?php wp_list_comments(
	array(
		'type'       => 'comment',
		'callback'   => 'comment_feed',
		)
); ?>
