<?php
/**
 * The Serach Form for our theme.
 *
 *
 * @package Ophelia
 */
?>
<div class="search-form">
	<form action="<?php echo esc_url(home_url('/')); ?>" method="post">
		<div class="search-field">
			<input class="text" name="s" type="text" value="<?php the_search_query(); ?>" placeholder="<?php _e(esc_html('Search ...'), 'ophelia' );  ?>" />
		</div>
		<input class="icon-search" name="submit" type="submit" value="" />
	</form>
</div>