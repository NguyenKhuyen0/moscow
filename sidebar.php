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
wp_reset_postdata();
?>

<!-- <aside id="secondary" class="widget-area"> -->
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--</aside> #secondary -->


<!-- Sidebar Starts -->
<div class="sidebar col s12 m4 l4 xl4">
	<div class="row">
		<div class="col s12 m12 l12 xl12">
			<a href="/blogs" class="btn back"><i class="fa fa-home"></i> home</a>
		</div>
	</div>
	<div class="language-switcher-container">
		<?php do_action('wpml_add_language_selector'); ?>
	</div>
	
	<!-- Search Widget Starts -->
	<form role="search" method="get" class="search-form" action="/">
	<div class="widget widget-search">
		<div>
			<input placeholder="Search in my blog ..." type="search" value="" name="s">
		</div>
	</div>
	</form>
	

	<!-- Search Widget Ends -->
	<?php
		$recent_posts = wp_get_recent_posts(array(
			'numberposts' => 3, // Number of recent posts thumbnails to display
			'post_status' => 'publish' // Show only the published posts
		));
		if(!empty($recent_posts)):
	?>
	<!-- Latest Posts Widget Ends -->
	<div class="widget recent-posts">
		<h3 class="widget-title">Recent Posts</h3>
		<ul class="unstyled clearfix">
		<?php foreach($recent_posts as $p) : ?>
			<!-- Recent Post Widget Starts -->
			<li>
				<div class="posts-thumb pull-left"> 
					<a href="<?php the_permalink(); ?>">
						<img alt="img" src="<?php echo get_the_post_thumbnail_url($p['ID'],'thumbnail') ? get_the_post_thumbnail_url($p['ID'],'thumbnail') : FAIL_SMALL_THUMBNAIL ?>">
					</a>
				</div>
				<div class="post-info">
					<h4 class="entry-title">
						<a href="<?php the_permalink($p['ID']); ?>"><?php echo $p['post_title'] ?></a>
					</h4>
					<p class="post-meta second-font">
						<span class="post-date">  <?php echo get_the_time("d-M-Y",$p['ID']); ?></span>
					</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<!-- Recent Post Widget Ends -->
		<?php endforeach; wp_reset_query(); ?>
		</ul>
	</div>
	<?php
		endif;
	?>
	<!-- Latest Posts Widget Ends -->
	<!-- Categories Widget Starts -->
	<div class="widget">
		<h3 class="widget-title">Categories</h3>
		<ul class="arrow nav nav-tabs second-font uppercase">
			<li><a href="/tiep-thi-quyen-ru">Tiếp thị quyến rũ</a></li>
			<li><a href="/hoc-marketing">Học Marketing</a></li>
			<li><a href="/lap-ke-hoach-kinh-doanh">Lập kế hoạch kinh doanh</a></li>
			<li><a href="/goi-von">Gọi vốn</a></li>
			<li><a href="/hoc-ban-hang-online">Học bán hàng online</a></li>
			<li><a href="/tiep-thi-lien-ket">Tiếp thị liên kết</a></li>
			<li><a href="/digital-marketing">Digital Marketing</a></li>
			<li><a href="/quan-ly-tai-chinh-ca-nhan">Quản lý tài chính cá nhân</a></li>
			<li><a href="/hoc-viet-content">Học viết content</a></li>
		</ul>
	</div>
	<!-- Categories Widget Ends -->
	<!-- Archives Widget Starts -->
	<!-- <div class="widget">
		<h3 class="widget-title">Archives</h3>
		<ul class="arrow nav nav-tabs second-font uppercase">
			<li><a href="#">January 2018</a></li>
			<li><a href="#">December 2017</a></li>
			<li><a href="#">November 2017</a></li>
			<li><a href="#">October 2017</a></li>
			<li><a href="#">September 2017</a></li>
		</ul>
	</div> -->
	<!-- Archives Widget Ends -->
	<!-- Tags Widget Starts -->
	<div class="widget widget-tags">
		<h3 class="widget-title">Popular Tags </h3>
		<ul class="unstyled clearfix">
			<li><a href="/tag/hoc-marketing-ra-lam-gi">học marketing ra làm gì</a></li>
			<li><a href="/tag/inbound-marketing">inbound marketing</a></li>
			<li><a href="/tag/ke-hoach-kinh-doanh">kế hoạch kinh doanh</a></li>
			<li><a href="/tag/goi-von-dau-tu">gọi vốn đầu tư</a></li>
			<li><a href="/tag/tiep-thi-lien-ket-la-gi">tiếp thị liên kết là gì</a></li>
			<li><a href="/tag/digital-marketing">digital marketing</a></li>
			<li><a href="/tag/customer-service-la-gi">customer service là gì</a></li>
		</ul>
	</div>
	<!-- Tags Widget Ends -->
</div>
<!-- Sidebar Ends -->