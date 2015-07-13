<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Abled_Twenty_Fourteen
 * @since Abled Twenty Fourteen 1.0
 */
?>

<header class="none-header">
	<h1 class="none-title"><?php _e( 'Oops, Nothing Found Here', 'abledtwentyfourteen' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'abledtwentyfourteen' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

	<p><?php _e( 'Oops, nothing matched your search terms. Please try again with different keywords below?', 'abledtwentyfourteen' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'abledtwentyfourteen' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
