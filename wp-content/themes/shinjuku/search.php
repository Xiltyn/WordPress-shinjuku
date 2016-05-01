<?php
/*
	Template name: Search results
 */

get_header(); ?>

<!-- Main body
============================================================||▷ -->
<section id="main">

	<!-- Header
	============================================================||▷ -->
	<div id="header_small" class="header_small--search shadow--top-bottom-inset">
		<div class="header-bit header-bit--search">
			<h2>#results</h2>
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
					<a href="<?php the_permalink(); ?>"
						title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
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
					<?php the_excerpt(); ?>
				</p>
				<a href="<?php the_permalink(); ?>">
					<p class="read-more">
						Read more...
					</p>
				</a>
			</div>
	  </div>

	<?php endwhile; else : ?>
		<section id="main">
			<p> <?php _e('Sorry, no posts matched your criteria'); ?></p>
		</section>
	<?php endif; ?>

	<nav>
		<ul class="pagination">
			<li><?php previous_posts_link('<< newer'); ?></li>
			<li><?php next_posts_link('older >>'); ?></li>
		</ul>
	</nav>

	<?php get_sidebar(); ?>

  </div>
</section>
<?php

get_footer();
