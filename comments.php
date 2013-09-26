<?php 
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('please do not load this page directly, Thanks!');
if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments. </p>
    <?php
    return;
}
?>
<section class="comments" id="comments">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9">
				<div class="comments-container">
					<?php if($comments): ?>  
					    <?php foreach ($comments as $comment) : ?>  

					        <div class="media margin-bottom"> 
					        	<div class="pull-left margin-right">
					        		<?php echo get_avatar( ); ?> 
					        	</div>
					        	<div class="media-body">
					        		<p class="media-heading">
					        			<strong>
					        				<?php comment_author(); ?>
					        			</strong>
					        			on
					        			<?php comment_date(); ?>
					        		</p>
					        		<div class="comment-text">
					        			<?php comment_text(); ?>
					        		</div>
					        	</div>
					        </div>

 
					    <?php endforeach; ?>  
					<?php else : ?>  
						<p>No comments yet</p> 
					<?php endif; ?>  
				</div>
				<div class="comment-form">
					<?php if ( comments_open() ) : ?>
						<div class="respond">
							<h2>Join the conversation</h2>
							<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" role="form">
								<fieldset>
									<div class="col-lg-5 col-md-5">
										<div class="form-group">
											<label>Name:</label>
											<input class="form-control input-lg" type="text" placeholder="name" name="author" id="author" value="<?php echo $comment_author; ?>" />
										</div>
										<div class="form-group">
											<label>Email:</label>
											<input class="form-control input-lg" type="text" placeholder="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
										</div>
									</div>
									<div class="col-lg-7 col-md-7">
										<div class="form-group">
											<label>Message:</label>
											<textarea class="form-control input-lg" name="comment" id="comment" rows="10" cols=""></textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="commentsubmit btn btn-lg btn-primary" value="submit comment" />
										</div>

										<?php comment_id_fields(); ?>
										<?php do_action('comment_form', $post->ID); ?>
									</div>
								</fieldset>
							</form>
							<p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?></p>
							<?php else : ?>
							<h3>Comments are now closed.</h3>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
			</div>
		</div>
	</div>
</section>