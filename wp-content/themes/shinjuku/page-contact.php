<?php
/*
	Template name: Contact
 */

get_header(); ?>

<!-- Main body
============================================================||▷ -->
<section id="main">

	<!-- Header
	============================================================||▷ -->
	<div id="header_small" class="header_small--contact shadow--top-bottom-inset">
		<div class="header-bit header-bit--contact">
			<h2>#contact</h2>
			<img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" alt="<?php bloginfo('wp_title') ?>" />
		</div>
	</div>

	<!-- Contact form
	============================================================||▷ -->
	<div id="blog">
		<h2>Contact us</h2>
    <div class="separator separator--dark"></div>
    <?php echo do_shortcode("[wr_contactform id=47]"); ?>
  </div>
</section>
<?php

get_footer();
