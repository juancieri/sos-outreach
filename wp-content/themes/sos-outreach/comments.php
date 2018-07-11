<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

		<div class="comment-form">
            <h2 class="comments-wrapper-heading"> Leave a comment </h2>
            <form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
              <div class="commentform-element">
                <label class="hide" for="author">Full Name</label>
                <input class="input-fields" id="author" name="author" type="text" placeholder="Full Name" value=""/>
              </div>
              <div class="commentform-element">
                <label class="hide" for="author">Email</label>
                <input class="input-fields" id="email" name="email" type="text" placeholder="Email" value=""/>
              </div>
              <div class="commentform-element">
                <label class="hide" for="comment">Message</label>
                <textarea id="comment" class="input-fields" placeholder="Message" name="comment" cols="40" rows="200"></textarea>
              </div>
              <input name="submit" class="form-submit-button"  type="submit" id="submit-comment" value="Post comment">
              <input type="hidden" name="comment_post_ID" value="22" id="comment_post_ID">
            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
            </form>
 		</div>

</div>
