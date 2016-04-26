<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shinjuku
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Live reload script import
============================================================||▷ -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/live.js"></script>
<!-- Live reload script import :: END
============================================================||▷ -->

<!-- Shinjuku stylesheets import
============================================================||▷ -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
<!-- Shinjuku stylesheets import :: END
============================================================||▷ -->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'shinjuku' ); ?></a>
	<header id="top-menu" class="top-menu--rwd">
		<?php
			wp_nav_menu( array (

				'theme_location'			=> 'primary',
				'menu_id'							=> 'navigation'
		));

		?>
		<div class="menu-img">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/css/img/menu.png" alt="menu" />
		</div>
	</header>
