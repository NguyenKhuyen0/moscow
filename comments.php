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
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$portfolio_moscow_comment_count = get_comments_number();
			if ( '1' === $portfolio_moscow_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'portfolio-moscow' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $portfolio_moscow_comment_count, 'comments title', 'portfolio-moscow' ) ),
					number_format_i18n( $portfolio_moscow_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'portfolio-moscow' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	
	?>

</div><!-- #comments -->


<?php

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
	<li>
		<!-- Comment Starts -->
		<div class="comment">
			<img class="comment-avatar pull-left" alt="" src="http://via.placeholder.com/100x100">
			<div class="comment-body">
				<div class="meta-data">
					<span class="comment-author">Dalel Boubaker</span>
					<span class="comment-date pull-right second-font">January 17, 2017</span>
				</div>
				<div class="comment-content">
				<p class="second-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p></div>
				<div>
					<a class="comment-reply" href="#">Reply</a>
				</div>	
			</div>
		</div>
		<!-- Comment Ends -->
		<ul class="comments-reply">
			<li>
				<!-- Comment Starts -->
				<div class="comment">
					<img class="comment-avatar pull-left" alt="" src="http://via.placeholder.com/100x100">
					<div class="comment-body">
						<div class="meta-data">
							<span class="comment-author">Lina Marzouki</span>
							<span class="comment-date pull-right second-font">January 17, 2017</span>
						</div>
						<div class="comment-content">
						<p class="second-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p></div>
						<div>
							<a class="comment-reply" href="#">Reply</a>
						</div>	
					</div>
				</div>
				<!-- Comment Ends -->
			</li>
		</ul>
		<!-- Comment Starts -->
		<div class="comment last">
			<img class="comment-avatar pull-left" alt="" src="http://via.placeholder.com/100x100">
			<div class="comment-body">
				<div class="meta-data">
					<span class="comment-author">Slim Hamdi</span>
					<span class="comment-date pull-right second-font">January 17, 2017</span>
				</div>
				<div class="comment-content">
				<p class="second-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p></div>
				<div>
					<a class="comment-reply" href="#">Reply</a>
				</div>	
			</div>
		</div>
		<!-- Comment Ends -->
	</li>
</ul>
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