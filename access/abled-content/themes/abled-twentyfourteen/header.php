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
			<svg class="logo" aria-labelledby="logo-described" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 196.6 140.2" enable-background="new 0 0 196.6 140.2" xml:space="preserve"><switch><g><circle cx="98.4" cy="18.9" r="18.9"/><path d="M63.3 111.6c-4.3 5.1-11.7 7.8-19.4 7.8c-6.7 0-14.5-3.4-14.5-10.8c0-13.5 20.8-14.3 30.2-14.3l2.8 0 l-1.1-19.6C35.7 75 0 77.9 0 109.7c0 20 16.8 30.6 35.3 30.6c11 0 21.9-3.4 28.9-11.6L63.3 111.6z"/><path d="M67.3 137.8l28.2 0l-0.1-50.4c0-33.1-9.7-51.2-45.4-51.1c-16.1 0-32.4 5.4-43.6 16l16.3 16.7 C29.3 61.5 37.6 57 47.6 57c10.6 0 19.6 4.5 19.6 23.9L67.3 137.8z"/><path d="M133.3 111.6c4.3 5.1 11.7 7.8 19.4 7.8c6.7 0 14.5-3.4 14.5-10.8c0-13.5-20.8-14.3-30.2-14.3l-2.8 0 l1.1-19.6c25.5 0.3 61.3 3.2 61.3 35c0 20-16.8 30.6-35.3 30.6c-11 0-21.9-3.4-28.9-11.6L133.3 111.6z"/><path d="M129.3 137.8l-28.2 0l0.1-50.4c0-33.1 9.7-51.2 45.4-51.1c16.1 0 32.4 5.4 43.6 16l-16.3 16.7 C167.3 61.5 159 57 149 57c-10.6 0-19.6 4.5-19.6 23.9L129.3 137.8z"/></g><foreignObject>
				<img aria-labeledby="logo-described" class="png-logo" src="<?php bloginfo('template_directory'); ?>/images/aa-logo.png" alt="" width="44" height="48" />
</foreignObject></switch></svg>
			<p id="logo-described" class="screen-reader-text"><?php if( is_home() || is_front_page() ) : ?>abledaccess logo: openness is the overarching drive behind its design. With help from soft, inviting, lower case letterform's the design is meant to be a pictograph of a front facing individual, with their arms out stretched, sitting in a wheelchair, waiting to engage the audience.<?php else : ?>abledaccess logo<?php endif; ?></p>
			<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'p'; ?>
			<<?php echo $heading_tag; ?> class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></<?php echo $heading_tag; ?>>
			<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( ! empty ( $description ) ) :
			?>
			<p class="site-description tag-line"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site site-main">
