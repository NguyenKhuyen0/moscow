<?php
get_header();
$post_id = get_the_ID();
global $post;
setup_postdata( $post );

?>
    <!-- Preloader Start -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
		<div class="container page-title center-align">
			<h2 class="center-align">
				<span>My </span>
				<span>blog</span>
			</h2>
		</div>
		<!-- Divider Starts -->
		<div class="divider center-align">
			<span class="outer-line"></span>
			<span class="fa fa-vcard" aria-hidden="true"></span>
			<span class="outer-line"></span>
		</div>
		<!-- Divider Ends -->
		<div class="container">
			<div class="row">
				<div class="content col s12 m8 l8 xl8">
					<!-- Article Starts -->
					<article>
						<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
						<!-- Figure Starts -->
						<figure class="blog-figure">
							<img class="responsive-img" src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : FAIL_THUMBNAIL ?>" alt="">
						</figure>
						<!-- Figure Ends -->
						<!-- Excerpt Starts -->
						<div class="blog-excerpt second-font">
							<?php the_excerpt(); ?>
							<?php the_content(); ?>
							<!-- Meta Starts -->
							<div class="meta second-font">
								<span><i class="fa fa-user"></i> <a href="#"><?php echo get_the_author($post_id); ?></a></span>
								<span class="date"><i class="fa fa-calendar"></i> <?php echo get_the_time(); ?></span>
								<span><i class="fa fa-commenting"></i> <a href="#"><?php echo get_comments_number(); ?></a></span>
								<span><i class="fa fa-tags"></i> 
									<?php
										$posttags = get_the_tags();
										if ($posttags) {
										foreach($posttags as $tag) {
											echo $tag->name . ', '; 
										}
										}
									?>
								</span>
								<span class="permalink"><i class="fa fa-link"></i> <a href="<?php the_permalink(); ?>">permalink</a></span>
							</div>
							<!-- Meta Ends -->
						</div>
						<!-- Excerpt Ends -->
						<?php comments_template();?>
						<!-- .comment-list -->

			
					</article>
					<!-- Article Ends -->
				</div>
				<!-- Sidebar Starts -->
				<?php
					get_sidebar();
				?>
				<!-- Sidebar Ends -->
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->

<?php

get_footer();
?>