<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio-moscow
 */

get_header();
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
					<?php if ( have_posts() ) : ?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
					<!-- Article Starts -->
					<article>
						<a href="blog-post-dark.html"><h4>Collaborating with envato</h4></a>
						<!-- Figure Starts -->
						<figure class="blog-figure">
							<a href="blog-post-dark.html">
								<img class="responsive-img" src="http://via.placeholder.com/748x364" alt="">
							</a>
						</figure>
						<!-- Figure Ends -->
						<!-- Excerpt Starts -->
						<div class="blog-excerpt">
							<p class="second-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ipsum dolor sit amet Lorem ipsum dol sit amet Lorem ipsum dol or sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris ...</p>
							<a href="blog-post-dark.html" class="col s12 m4 l4 xl4 waves-effect waves-light btn readmore font-weight-700">
								Read more 
							</a>
							<!-- Meta Starts -->
							<div class="meta second-font">
								<span><i class="fa fa-user"></i> <a href="#">admin</a></span>
								<span class="date"><i class="fa fa-calendar"></i> 9 January 2017</span>
								<span><i class="fa fa-commenting"></i> <a href="blog-post-dark.html">18</a></span>
								<span><i class="fa fa-tags"></i> js, php, html</span>
								<span class="permalink"><i class="fa fa-link"></i> <a href="blog-post-dark.html">permalink</a></span>
							</div>
							<!-- Meta Ends -->
						</div>
						<!-- Excerpt Ends -->
					</article>
					<!-- Article Ends -->
					<!-- Article Starts -->
					<article>
						<a href="blog-post-dark.html"><h4>Why Themeforest is the best</h4></a>
						<!-- Figure Starts -->
						<figure class="blog-figure">
							<a href="blog-post-dark.html">
								<img class="responsive-img" src="http://via.placeholder.com/748x364" alt="">
							</a>
						</figure>
						<!-- Figure Ends -->
						<!-- Excerpt Starts -->
						<div class="blog-excerpt">
							<p class="second-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ipsum dolor sit amet Lorem ipsum dol sit amet Lorem ipsum dol or sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris ...</p>
							<a href="blog-post-dark.html" class="col s12 m4 l4 xl4 waves-effect waves-light btn readmore font-weight-700">
								Read more 
							</a>
							<!-- Meta Starts -->
							<div class="meta second-font">
								<span><i class="fa fa-user"></i> <a href="#">admin</a></span>
								<span class="date"><i class="fa fa-calendar"></i> 9 January 2017</span>
								<span><i class="fa fa-commenting"></i> <a href="blog-post-dark.html">18</a></span>
								<span><i class="fa fa-tags"></i> js, php, html</span>
								<span class="permalink"><i class="fa fa-link"></i> <a href="blog-post-dark.html">permalink</a></span>
							</div>
							<!-- Meta Ends -->
						</div>
						<!-- Excerpt Ends -->
					</article>
					<!-- Article Ends -->
					<ul class="pagination center-align">
						<li class="disabled"><a href="#!"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><a href="#!">1</a></li>
						<li class="waves-effect"><a href="#!">2</a></li>
						<li class="waves-effect"><a href="#!">3</a></li>
						<li class="waves-effect"><a href="#!">4</a></li>
						<li class="waves-effect"><a href="#!">5</a></li>
						<li class="waves-effect"><a href="#!"><i class="fa fa-angle-right"></i></a></li>
					  </ul>
				</div>
				<?php
					get_sidebar();
				?>
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->

<?php

get_footer();
?>