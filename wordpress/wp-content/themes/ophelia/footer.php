<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Ophelia
 */
?>
		<footer id="footer" class="footer">
			<div class="container">
				<div class="widgets-container column-container">
					<div class="column-3-12">
						<div class="gutter">
							<?php if ( is_active_sidebar('footer-widget-area-1') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-1'); ?>
							<?php else : ?>	
								<aside class="widget">
									<h3 class="widget-title"><?php _e( 'Recent Posts', "ophelia" ); ?></h3>
									<ul>
										<?php wp_get_archives('type=postbypost&limit=10'); ?>
									</ul>
								</aside>
							<?php endif; ?>						
						</div>
					</div>
					<div class="column-3-12">
						<div class="gutter">
							<?php if ( is_active_sidebar('footer-widget-area-2') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-2'); ?>
							<?php else : ?>	
								<aside class="widget">
									<h3 class="widget-title"><?php _e( 'Tag Cloud', "ophelia" ); ?></h3>
									<div>
										<?php wp_tag_cloud(); ?>
									</div>
								</aside>
							<?php endif; ?>	
						</div>
					</div>
					<div class="column-3-12">
						<div class="gutter">
							<?php if ( is_active_sidebar('footer-widget-area-3') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-3'); ?>
							<?php else : ?>	
								<aside class="widget">
									<h3 class="widget-title"><?php _e( 'Pages', "ophelia" ); ?></h3>
									<ul>
										<?php wp_list_pages('title_li='); ?>
									</ul>
								</aside>
							<?php endif; ?>	
						</div>
					</div>
					<div class="column-3-12">
						<div class="gutter">
							<?php if ( is_active_sidebar('footer-widget-area-4') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-4'); ?>
							<?php else : ?>	
								<aside class="widget">
									<h3 class="widget-title"><?php _e( 'Categories', "ophelia" ); ?></h3>
									<ul>
										<?php wp_list_categories('title_li='); ?>
									</ul>
								</aside>
							<?php endif; ?>	
						</div>
					</div>
				</div>
				<div class="copyright-container">
					<div class="copyright gutter clearfix">
					    <?php if ( get_theme_mod('pp_copyrights',__( 'Copyright &copy; 2015 '.get_bloginfo('name'). ' All Rights Reserved.', "ophelia"))) { ?> <p class="left"><?php echo esc_html(get_theme_mod('pp_copyrights',__( 'Copyright &copy; 2015 '.get_bloginfo('name'). ' All Rights Reserved.', "ophelia"))); ?></p><?php } ?>
						<p class="right"><?php do_action( 'ophelia_display_credits' ); ?></p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>	
</body>
</html>