<?php
/**
 * The template for displaying search
 *
 * @package Ophelia
 */
 get_header(); ?>
 <div id="content" class="content">
	<div class="section-page-sidebar">
		<div class="container">
			<div class="gutter">
				<p class="page-title"><?php printf( __( 'Search Results for: %s', 'ophelia' ), '<span>' . get_search_query() . '</span>' ); ?></p>
			</div>
			<?php get_template_part( 'content', 'posts' ); ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>