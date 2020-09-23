<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio-moscow
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$fields =  array(
    'author' => '<div class="input-field second-font"><i class="fa fa-user prefix"></i><input id="name" name="author" type="text" class="validate" required><label class="font-weight-400" for="name">Your Name</label></div>',
    'email'  => '<div class="input-field second-font"><i class="fa fa-envelope prefix"></i><input id="email" type="email" name="email" class="validate" required><label for="email">Your Email</label></div>',
);
$comments_args = array(
	'fields' =>  $fields,
	'comment_field'=>  '<div class="input-field second-font"><i class="fa fa-comments prefix"></i><textarea id="comment" name="comment" class="materialize-textarea" required></textarea><label for="comment">Your comment</label></div>',
	'submit_button' => '<div class="col s12 m12 l6 xl6 submit-form"><button class="btn font-weight-700" type="submit" name="send">Add comment <i class="fa fa-comment"></i></button></div>',
	'title_reply' => '',
	'title_reply_before' => '',
	'title_reply_after' => '',
	'logged_in_as' => ''
);
?>
<!-- Comments Starts -->
<div class="comments">
<h3 class="comments-heading uppercase"><?php echo get_comments_number(); ?> Comments</h3>
<ul class="comments-list">
	<?php
		$post_id = get_the_ID();
		$comments = get_comments( array( 'post_id' => $post_id ) );
 
		foreach ( $comments as $comment ) :
			if($comment->comment_parent == 0):
			?>
			<div class="comment">
				<img class="comment-avatar pull-left" alt="" src="http://via.placeholder.com/100x100">
				<div class="comment-body">
					<div class="meta-data">
						<span class="comment-author"><?php echo $comment->comment_author; ?></span>
						<span class="comment-date pull-right second-font"><?php echo get_comment_date("d-M-Y",$comment->comment_ID) ?></span>
					</div>
					<div class="comment-content"><p class="second-font"><?php echo $comment->comment_content; ?></p></div>
					<div>
						<a rel="nofollow" class="comment-reply" href="/?replytocom=<?php echo $child_comment->comment_ID ?>#respond" data-commentid="<?php echo $child_comment->comment_ID ?>" data-postid="<?php echo $post_id ; ?>" data-belowelement="div-comment-<?php echo $child_comment->comment_ID ?>" data-respondelement="respond" data-replyto="<?php echo $child_comment->comment_author; ?>" aria-label="<?php echo $child_comment->comment_author; ?>">Reply</a>
					</div>	
				</div>
			</div>
			<?php
			foreach ( $comment->get_children() as $child_comment ) :	
			?>
				<ul class="comments-reply">
					<li>
						<!-- Comment Starts -->
						<div class="comment">
							<img class="comment-avatar pull-left" alt="" src="http://via.placeholder.com/100x100">
							<div class="comment-body">
								<div class="meta-data">
									<span class="comment-author"><?php echo $child_comment->comment_author; ?></span>
									<span class="comment-date pull-right second-font"><?php echo get_comment_date("d-M-Y",$child_comment->comment_ID) ?></span>
								</div>
								<div class="comment-content">
								<p class="second-font"><?php echo $child_comment->comment_content; ?></p></div>
								<div>
									<a rel="nofollow" class="comment-reply" href="/?replytocom=<?php echo $child_comment->comment_ID ?>#respond" data-commentid="<?php echo $child_comment->comment_ID ?>" data-postid="<?php echo $post_id ; ?>" data-belowelement="div-comment-<?php echo $child_comment->comment_ID ?>" data-respondelement="respond" data-replyto="<?php echo $child_comment->comment_author; ?>" aria-label="<?php echo $child_comment->comment_author; ?>">Reply</a>
								</div>	
							</div>
						</div>
						<!-- Comment Ends -->
					</li>
				</ul>
			<?php
			endforeach;
			endif;
		endforeach;
	?>

</ul>
<?php if ( comments_open() ): ?>
<h3 class="comments-heading uppercase add-comment">Add a comment</h3>
<div class="comments-form">
	<?php comment_form($comments_args); ?>
</div>
</div>
<style>
.comment-form-cookies-consent, .comment-notes
{
	display: none;
}
</style>
<?php endif; ?>