<?php
/*
	Template name: Single Post
 */

get_header(); ?>

<!-- Main body
============================================================||▷ -->
<section id="main">

	<!-- Header
	============================================================||▷ -->
	<div id="header_small" class="shadow--top-bottom-inset">
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

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="blog-post--wrapper">
			<div class="blog-post--header">
				<h3>
					<?php the_title(); ?>
				</h3>
				<ul class="blog-post--meta">
					<li class="category">
						#category: <?php the_category( ", " ); ?>
					</li>
					<li class="tags">
						#<?php the_tags('tags: ', ', '); ?>
					</li>
				</ul>
			</div>
			<div class="blog-post--image shadow--bottom">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<div class="blog-post--content">
				<div class="author">
					<p>
						Written by: <?php the_author(); ?> <span><?php echo get_the_date('F j Y') ?></span>
					</p>
				</div>
				<p>
					<?php the_content(); ?>
				</p>
				<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
			</div>
	  </div>

	<?php endwhile; else : ?>
		<p> <?php _e('Sorry, no posts matched your criteria'); ?></p>
	<?php endif; ?>

	<?php get_sidebar(); ?>

  </div>
</section>
<?php

get_footer();
