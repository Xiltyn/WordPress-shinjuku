<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shinjuku
 */
?>

<div class="sidebar--wrapper">
	<section id="sidebar-pages">
		<?php wp_list_pages('title_li=<h3 class="sidebar-header shadow--bottom">Pages</h3>'); ?>
	</section>
	<section id="sidebar-latest-posts">
		<h3 class="sidebar-header shadow--bottom">Latest Posts</h3>
		<?php wp_get_archives('type=postbypost&limit=15'); ?>
	</section>
	<section id="sidebar-archive">
		<h3 class="sidebar-header shadow--bottom">Archive</h3>
		<?php wp_get_archives('type=monthly'); ?>
	</section>
	<section id="sidebar-categories">
		<h3 class="sidebar-header shadow--bottom">Categories</h3>
		<?php wp_list_cats(); ?>
	</section>
</div>
