<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shinjuku
 */

?>

<section id="footer" class="shadow--top-bottom-inset">

	<?php wp_footer(); ?>

	<div class="copyrights">
		<p>
			Copyright © 2016 www.shin-juku.com
		</p>
	</div>
</section>



<!-- Script files import
============================================================||▷ -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
<!-- Script files import :: END
============================================================||▷ -->

</body>
</html>
