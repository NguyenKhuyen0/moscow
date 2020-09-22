<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio-moscow
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<!-- <aside id="secondary" class="widget-area"> -->
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--</aside> #secondary -->


<!-- Sidebar Starts -->
<div class="sidebar col s12 m4 l4 xl4">
	<div class="row">
		<div class="col s12 m12 l12 xl12">
			<a href="index-dark.html" class="btn back"><i class="fa fa-home"></i> home</a>
		</div>
	</div>
	<!-- Search Widget Starts -->
	<div class="widget widget-search">
		<div>
			<input placeholder="Search in my blog ..." type="search">
		</div>
	</div>
	<!-- Search Widget Ends -->
	<!-- Latest Posts Widget Ends -->
	<div class="widget recent-posts">
		<h3 class="widget-title">Recent Posts</h3>
		<ul class="unstyled clearfix">
		<!-- Recent Post Widget Starts -->
		<li>
			<div class="posts-thumb pull-left"> 
				<a href="blog-post-dark.html">
					<img alt="img" src="http://via.placeholder.com/90x70">
				</a>
			</div>
			<div class="post-info">
				<h4 class="entry-title">
					<a href="blog-post-dark.html">Why Themeforest is the best</a>
				</h4>
				<p class="post-meta second-font">
					<span class="post-date"> January 19, 2017</span>
				</p>
			</div>
			<div class="clearfix"></div>
		</li>
		<!-- Recent Post Widget Ends -->
		<!-- Recent Post Widget Starts -->
		<li>
			<div class="posts-thumb pull-left"> 
				<a href="blog-post-dark.html">
					<img alt="img" src="http://via.placeholder.com/90x70">
				</a>
			</div>
			<div class="post-info">
				<h4 class="entry-title">
					<a href="blog-post-dark.html">Collaborating with envato</a>
				</h4>
				<p class="post-meta second-font">
					<span class="post-date"> August 03, 2017</span>
				</p>
			</div>
			<div class="clearfix"></div>
		</li>
		<!-- Recent Post Widget Ends -->
		<!-- Recent Post Widget Starts -->
		<li>
			<div class="posts-thumb pull-left"> 
				<a href="blog-post-dark.html">
					<img alt="img" src="http://via.placeholder.com/90x70">
				</a>
			</div>
			<div class="post-info">
				<h4 class="entry-title">
					<a href="blog-post-dark.html">How to be a successful freelancer</a>
				</h4>
				<p class="post-meta second-font">
					<span class="post-date"> March 27, 2017</span>
				</p>
			</div>
			<div class="clearfix"></div>
		</li>
		<!-- Recent Post Widget Ends -->
		</ul>
	</div>
	<!-- Latest Posts Widget Ends -->
	<!-- Categories Widget Starts -->
	<div class="widget">
		<h3 class="widget-title">Categories</h3>
		<ul class="arrow nav nav-tabs second-font uppercase">
			<li><a href="#">Javascript</a></li>
			<li><a href="#">Wordpress</a></li>
			<li><a href="#">Courses</a></li>
			<li><a href="#">CSS</a></li>
			<li><a href="#">jQuery</a></li>
		</ul>
	</div>
	<!-- Categories Widget Ends -->
	<!-- Archives Widget Starts -->
	<div class="widget">
		<h3 class="widget-title">Archives</h3>
		<ul class="arrow nav nav-tabs second-font uppercase">
			<li><a href="#">January 2018</a></li>
			<li><a href="#">December 2017</a></li>
			<li><a href="#">November 2017</a></li>
			<li><a href="#">October 2017</a></li>
			<li><a href="#">September 2017</a></li>
		</ul>
	</div>
	<!-- Archives Widget Ends -->
	<!-- Tags Widget Starts -->
	<div class="widget widget-tags">
		<h3 class="widget-title">Popular Tags </h3>
		<ul class="unstyled clearfix">
			<li><a href="#">php</a></li>
			<li><a href="#">javascript</a></li>
			<li><a href="#">html</a></li>
			<li><a href="#">xml</a></li>
			<li><a href="#">envato</a></li>
		</ul>
	</div>
	<!-- Tags Widget Ends -->
</div>
<!-- Sidebar Ends -->