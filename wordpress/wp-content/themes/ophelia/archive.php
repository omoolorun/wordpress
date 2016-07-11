<?php
/**
 * The template for displaying archive
 *
 *
 * @package Ophelia
 */
get_header(); ?>
<div id="content" class="content">
	<div class="section-page-sidebar">
		<div class="container">
			<div class="gutter">
				<p class="page-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'ophelia' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'ophelia' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'ophelia' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'ophelia' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'ophelia' ) ) . '</span>' );
					else :
						_e( 'Archives', 'ophelia' );
					endif;
				?></p>
			</div>
			<?php get_template_part( 'content', 'posts' ); ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>