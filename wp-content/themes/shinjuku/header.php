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

<!-- Animate stylesheets import
============================================================||▷ -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
<!-- Animate stylesheets import :: END
============================================================||▷ -->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'shinjuku' ); ?></a>
	<header id="top-menu" class="top-menu--rwd shadow--bottom">
		<?php
			wp_nav_menu( array (

				'theme_location'			=> 'primary',
				'menu_id'							=> 'navigation'
		));

		?>
		<div class="menu-img">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/css/img/menu.png" alt="menu" />
		</div>
		<div class="search-header--wrapper">
			<div class="search-header">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input type="text" size="put_a_size_here" name="s" id="s" value="search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
						<input type="submit" id="searchsubmit" value="Search" class="btn" />
					</div>
				</form>
			</div>
		</div>
	</header>
