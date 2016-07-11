<?php
/**
 * The template for displaying all pages.
 *
 * @package Ophelia
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
 		<div id="content" class="content">
			<div class="section-page-sidebar">
				<div class="container">
					<div class="column-container">
						<div class="page-container left">
							<div class="gutter">
								<article class="article-post">
									<h2><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></h2>
									<p class="meta">
										<span><?php _e( 'Posted by', 'ophelia' ); ?> <?php the_author(); ?></span> 
										<span><?php _e( 'Date:', 'ophelia' ); ?>  <?php the_time( get_option( 'date_format' ) ); ?></span>
									</p>
									<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
									<div class="article-image">
										<?php the_post_thumbnail($post->ID, 'featured'); ?>	
									</div>									
									<?php endif; ?>									
									<div class="article-text"><?php the_content(); ?></div>
									<div class="padinate-page"><?php wp_link_pages(); ?></div> 
									<p class="tags-post"><?php the_tags(); ?></p> 
									<div class="clear"></div>
								</article>
								<?php comments_template(); ?>
							</div>
						</div>
					    <?php  get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
<?php endwhile; ?>
<?php get_footer(); ?>