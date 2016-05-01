<?php
/*
	Template name: Blog Page
 */

get_header(); ?>

<!-- Main body
============================================================||▷ -->
<section id="main">

	<!-- Header
	============================================================||▷ -->
	<div id="header_small" class="shadow--standard">
		<div class="header-bit">
			<h2>#blog</h2>
			<img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" alt="<?php bloginfo('wp_title') ?>" />
		</div>
	</div>

	<!-- Blog feed
	============================================================||▷ -->
	<div id="blog">
		<h2>Our thoughts</h2>
		<div class="separator separator--dark"></div>
		<div class="blog-post--wrapper">
			<div class="blog-post--header">
				<h3>Post title</h3>
				<ul class="blog-post--meta">
					<li class="category">
						#categories:
					</li>
					<li class="tags">
						#tags:
					</li>
				</ul>
			</div>
			<div class="blog-post--image shadow--bottom">
				<img src="<?php bloginfo('template_directory'); ?>/css/img/header_background.jpg" alt="" />
			</div>
			<div class="blog-post--content">
				<div class="author">
					<p>
						Written by: Qba <span>2016/04/21</span>
					</p>
				</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>

		<div class="blog-post--wrapper">
			<div class="blog-post--header">
				<h3>Post title</h3>
				<ul class="blog-post--meta">
					<li class="category">
						#categories:
					</li>
					<li class="tags">
						#tags:
					</li>
				</ul>
			</div>
			<div class="blog-post--image shadow--bottom">
				<img src="<?php bloginfo('template_directory'); ?>/css/img/header_background.jpg" alt="" />
			</div>
			<div class="blog-post--content">
				<div class="author">
					<p>
						Written by: Qba <span>2016/04/21</span>
					</p>
				</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>


	</div>

</section>
<?php
// get_sidebar();
get_footer();
