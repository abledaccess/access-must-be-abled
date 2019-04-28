<?php
/**
 * The template for displaying the Search input box.
 *
 * @package WordPress
 * @subpackage Abled_Twenty_Fourteen
 * @since Abled Twenty Fourteen 1.0
 */
?>
<form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label for"search">
		<?php echo _x( 'Search for:', 'label' ) ?>
		<input type="search" id="search" name="s" class="search-field" placeholder="<?php echo esc_attr_x( 'Keywords …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>