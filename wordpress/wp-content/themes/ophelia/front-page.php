<?php 
/**
 * 
 * @package Ophelia 
 */
get_header(); 
if ( have_posts() ) : 
if ( 'posts' == get_option( 'show_on_front')) {
?>
		<div id="content" class="content">
			<div class="section-page-sidebar">
				<div class="container">
					<div class="gutter">
						<p class="page-title"><?php echo esc_html(get_theme_mod('pwt_blog_page',__( 'Latest Blog Posts', "ophelia"))); ?></p>
					</div>
					<?php get_template_part( 'content', 'posts' ); ?>	
				</div>
			</div>
		</div>
<?php } else { ?>		
        <?php get_template_part( 'content', 'home' ); ?>
<?php } 
endif; 
get_footer(); ?>