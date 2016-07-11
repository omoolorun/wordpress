<?php
/**
 * The template for displaying tag
 *
 *
 * @package Ophelia
 */
get_header(); ?>
<div id="content" class="content">
	<div class="section-page-sidebar">
		<div class="container">
			<div class="gutter">
				<p class="page-title"><?php printf( __( 'Tag Archives: %s', 'ophelia' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></p>
			</div>
			<?php get_template_part( 'content', 'posts' ); ?>									
		</div>
	</div>
</div>
<?php get_footer(); ?>