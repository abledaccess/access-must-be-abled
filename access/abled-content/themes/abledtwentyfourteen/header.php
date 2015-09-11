<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Abled_Twenty_Fourteen
 * @since Abled Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '&ndash;', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">

			<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'abledtwentyfourteen' ); ?></a>
			<div class="search-toggle">
			<a href="#search-container" class="screen-reader-text"><?php _e( 'Skip to search', 'abledtwentyfourteen' ); ?></a>
			</div>

			<?php if ( is_active_sidebar( 'header-widget-1' ) ) : ?>
				<div id="header-widget" class="primary-header-widget widget-area">
					<?php dynamic_sidebar( 'header-widget-1' ); ?>
				</div><!-- #header-widget -->
			<?php endif; ?>

			<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'p'; ?>
			<<?php echo $heading_tag; ?> class="site-title"><?php bloginfo( 'name' ); ?></<?php echo $heading_tag; ?>>
			<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( ! empty ( $description ) ) :
			?>
			<p class="site-description tag-line"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'abledtwentyfourteen' ); ?></button>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div role="search" class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site site-main">
