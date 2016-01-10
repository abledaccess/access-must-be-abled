<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Abled_Twenty_Fourteen
 * @since Abled Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php abledtwentyfourteen_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>

		<div class="entry-meta">
			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && abledtwentyfourteen_categorized_blog() ) : ?><span class="cat-links">Categorized Under: <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'abledtwentyfourteen' ) ); ?></span>
			<?php
				endif;
				if ( 'post' == get_post_type() )
					abledtwentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'abledtwentyfourteen' ), __( '1 Comment', 'abledtwentyfourteen' ), __( '% Comments', 'abledtwentyfourteen' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'abledtwentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
			$written_elsewhere = get_post_meta($post->ID, 'written_elsewhere', true); 
			if ($written_elsewhere) {
				echo $written_elsewhere;
			};
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'abledtwentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

			edit_post_link( __( 'Edit', 'abledtwentyfourteen' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
