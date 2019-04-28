<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Abled_Twenty_Fourteen
 * @since Abled Twenty Fourteen 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Page Not Found', 'abledtwentyfourteen' ); ?></h1>
			</header>

			<section class="page-content">
				<header class="none-header">
					<h2 class="none-title">That could have gone much better...</h2>
				</header>
				<p><?php _e( 'Well, unfortunately, it looks as though what you were after isn\'t here. Maybe try a search below?', 'abledtwentyfourteen' ); ?></p>

				<?php get_search_form(); ?>
			</section><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
