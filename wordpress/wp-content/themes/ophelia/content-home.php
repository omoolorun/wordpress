<?php 
/**
 * 
 * @package Ophelia 
 */
?>
<div id="content" class="content">
	<div class="section-theme-carousel" style="background: url('<?php echo esc_url(get_theme_mod('background_slider')); ?>') repeat scroll 50% 0 #00c6ff;">
		<div class="container">
			<div class="gutter">
				<div class="owl-carousel theme-carousel">
					<?php if(get_theme_mod('slider_title_1',__( 'Welcome To Ophelia Theme', "ophelia"))) { ?>
					<div class="item">
						<article class="article-carousel">
							<div class="article-text">
								<?php if(get_theme_mod('slider_title_1',__( 'Welcome To Ophelia Theme', "ophelia"))) { ?><h2><?php echo esc_html(get_theme_mod('slider_title_1',__( 'Welcome To Ophelia Theme', "ophelia"))); ?></h2><?php } ?>
								<?php if(get_theme_mod('slider_description1')) { ?><p><?php echo esc_html(get_theme_mod('slider_description1')); ?></p><?php } ?>
								<?php if(get_theme_mod('slider_button_color_text1',__( 'Read More', "ophelia"))) { ?><a href="<?php echo esc_html(get_theme_mod('slider_button_color_link1')); ?>" class="button-large-light"><?php echo esc_html(get_theme_mod('slider_button_color_text1',__( 'Read More', "ophelia"))); ?></a><?php } ?>
							</div>
							<?php if(get_theme_mod('slider_image_upload1')) { ?>
							<div class="article-image">
								<img src="<?php echo esc_html(get_theme_mod('slider_image_upload1')); ?>"/>
							</div>
							<?php } ?>								
						</article>
					</div>
					<?php } ?>
					<?php if(get_theme_mod('slider_title_2',__( 'Welcome To Ophelia Theme', "ophelia"))) { ?>						
					<div class="item">
						<article class="article-carousel">
							<div class="article-text">
								<?php if(get_theme_mod('slider_title_2',__( 'Welcome To Ophelia Theme', "ophelia"))) { ?><h2><?php echo esc_html(get_theme_mod('slider_title_2',__( 'Welcome To Ophelia Theme', "ophelia"))); ?></h2><?php } ?>
								<?php if(get_theme_mod('slider_description2')) { ?><p><?php echo esc_html(get_theme_mod('slider_description2')); ?></p><?php } ?>
								<?php if(get_theme_mod('slider_button_color_text2',__( 'Read More', "ophelia"))) { ?><a href="<?php echo esc_html(get_theme_mod('slider_button_color_link2')); ?>" class="button-large-light"><?php echo esc_html(get_theme_mod('slider_button_color_text2',__( 'Read More', "ophelia"))); ?></a><?php } ?>
							</div>
							<?php if(get_theme_mod('slider_image_upload2')) { ?>
							<div class="article-image">
								<img src="<?php echo esc_html(get_theme_mod('slider_image_upload2')); ?>"/>
							</div>
							<?php } ?>								
						</article>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="section-theme-options">
		<div class="container">
			<div class="theme-options column-container">
			        <?php if(get_theme_mod('circles_box_title_1')) { ?>
					<div class="column-4-12">
						<div class="gutter">
							<article class="article-theme-option">
								<p class="fa"><a class="fa-<?php echo esc_html(get_theme_mod('circles_box_image_1','users')); ?>" href="<?php echo esc_url(get_theme_mod('circles_box_link_1')); ?>"></a></p>
								<h2><a href="<?php echo esc_url(get_theme_mod('circles_box_link_1')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_1')); ?></a></h2>
								<p><?php echo esc_html(get_theme_mod('circles_box_content_1')); ?></p>
								<p class="buttons-container"><a class="read-more" href="<?php echo esc_url(get_theme_mod('circles_box_link_1')); ?>"><?php echo esc_html(get_theme_mod('circles_box_text_1')); ?></a></p>
							</article>
						</div>
					</div>					
                    <?php } ?>
			        <?php if(get_theme_mod('circles_box_title_2')) { ?>
					<div class="column-4-12">
						<div class="gutter">
							<article class="article-theme-option">
								<p class="fa"><a class="fa-<?php echo esc_html(get_theme_mod('circles_box_image_2','cog')); ?>" href="<?php echo esc_url(get_theme_mod('circles_box_link_2')); ?>"></a></p>
								<h2><a href="<?php echo esc_url(get_theme_mod('circles_box_link_2')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_2')); ?></a></h2>
								<p><?php echo esc_html(get_theme_mod('circles_box_content_2')); ?></p>
								<p class="buttons-container"><a class="read-more" href="<?php echo esc_url(get_theme_mod('circles_box_link_2')); ?>"><?php echo esc_html(get_theme_mod('circles_box_text_2')); ?></a></p>
							</article>
						</div>
					</div>					
                    <?php } ?>
			        <?php if(get_theme_mod('circles_box_title_3')) { ?>
					<div class="column-4-12">
						<div class="gutter">
							<article class="article-theme-option">
								<p class="fa"><a class="fa-<?php echo esc_html(get_theme_mod('circles_box_image_3','eye')); ?>" href="<?php echo esc_url(get_theme_mod('circles_box_link_3')); ?>"></a></p>
								<h2><a href="<?php echo esc_url(get_theme_mod('circles_box_link_3')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_3')); ?></a></h2>
								<p><?php echo esc_html(get_theme_mod('circles_box_content_3')); ?></p>
								<p class="buttons-container"><a class="read-more" href="<?php echo esc_url(get_theme_mod('circles_box_link_3')); ?>"><?php echo esc_html(get_theme_mod('circles_box_text_3')); ?></a></p>
							</article>
						</div>
					</div>					
                    <?php } ?>
			        <?php if(get_theme_mod('circles_box_title_4')) { ?>
					<div class="column-4-12">
						<div class="gutter">
							<article class="article-theme-option">
								<p class="fa"><a class="fa-<?php echo esc_html(get_theme_mod('circles_box_image_4','tablet')); ?>" href="<?php echo esc_url(get_theme_mod('circles_box_link_4')); ?>"></a></p>
								<h2><a href="<?php echo esc_url(get_theme_mod('circles_box_link_4')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_4')); ?></a></h2>
								<p><?php echo esc_html(get_theme_mod('circles_box_content_4')); ?></p>
								<p class="buttons-container"><a class="read-more" href="<?php echo esc_url(get_theme_mod('circles_box_link_4')); ?>"><?php echo esc_html(get_theme_mod('circles_box_text_4')); ?></a></p>
							</article>
						</div>
					</div>					
                    <?php } ?>
			        <?php if(get_theme_mod('circles_box_title_5')) { ?>
					<div class="column-4-12">
						<div class="gutter">
							<article class="article-theme-option">
								<p class="fa"><a class="fa-<?php echo esc_html(get_theme_mod('circles_box_image_5','mobile')); ?>" href="<?php echo esc_url(get_theme_mod('circles_box_link_5')); ?>"></a></p>
								<h2><a href="<?php echo esc_url(get_theme_mod('circles_box_link_5')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_5')); ?></a></h2>
								<p><?php echo esc_html(get_theme_mod('circles_box_content_5')); ?></p>
								<p class="buttons-container"><a class="read-more" href="<?php echo esc_url(get_theme_mod('circles_box_link_5')); ?>"><?php echo esc_html(get_theme_mod('circles_box_text_5')); ?></a></p>
							</article>
						</div>
					</div>					
                    <?php } ?>
			        <?php if(get_theme_mod('circles_box_title_6')) { ?>
					<div class="column-4-12">
						<div class="gutter">
							<article class="article-theme-option">
								<p class="fa"><a class="fa-<?php echo esc_html(get_theme_mod('circles_box_image_6','home')); ?>" href="<?php echo esc_url(get_theme_mod('circles_box_link_6')); ?>"></a></p>
								<h2><a href="<?php echo esc_url(get_theme_mod('circles_box_link_6')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_6')); ?></a></h2>
								<p><?php echo esc_html(get_theme_mod('circles_box_content_6')); ?></p>
								<p class="buttons-container"><a class="read-more" href="<?php echo esc_url(get_theme_mod('circles_box_link_6')); ?>"><?php echo esc_html(get_theme_mod('circles_box_text_6')); ?></a></p>
							</article>
						</div>
					</div>					
                    <?php } ?>					
			</div>
		</div>
	</div>
	<?php if(get_theme_mod('home_message_title')) { ?>
	<div class="section-theme-adv">
		<div class="container">
			<div class="theme-adv column-container">
                <?php if ( get_theme_mod('home_message_title') ) { ?>
				<div class="column-12-12">
					<div class="gutter">
						<h2><?php echo esc_html(get_theme_mod('home_message_title')); ?></h2>
					</div>
				</div>
				<?php } ?>		
                <?php if ( get_theme_mod('home_message_content') ) { ?>
				<div class="column-8-12 left">
					<div class="gutter">
						<p><?php echo esc_html(get_theme_mod('home_message_content')); ?></p>
					</div>
				</div>				
				<?php } ?>		
                <?php if ( get_theme_mod('home_message_button_1_text') ) { ?>	
				<div class="column-4-12 right">
					<div class="gutter">
						<a class="button-large-light" href="<?php echo esc_url(get_theme_mod('home_message_button_1_link')); ?>"><?php echo esc_html(get_theme_mod('home_message_button_1_text')); ?></a>
					</div>
				</div>				
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
</div>