<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ophelia
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="wrapper">
		<header id="header" class="header">
			<div class="container">
				<div class="gutter clearfix">
					<?php if ( get_theme_mod('pp_logo_upload') ) { ?>
					   <a href="<?php echo esc_url(home_url('/')); ?>"><div class="logo"><img src="<?php echo esc_url(get_theme_mod('pp_logo_upload')); ?>" /></div></a>
					<?php } else if (get_theme_mod('text_logo_1',__( 'Ophelia', "ophelia"))){  ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="logo"><?php echo esc_html(get_theme_mod('text_logo_1','Ophelia')); ?><span class="gray"><?php echo esc_html(get_theme_mod('text_logo_2',__( 'Themes', "ophelia"))); ?></span></h1></a>
					<?php } else {  ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="logo"><?php bloginfo('name'); ?></h1></a>
					<?php } ?>
					<?php get_search_form(); ?>
					<nav class="menu-top-container">
						<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
						<?php } else { ?>
							<?php wp_nav_menu(  array('container'=> '', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>' ) ); ?>	
						<?php } ?>
					</nav>
					<nav class="menu-top-mob-container">
					    <a class="menu-icon" href="#"><?php _e( 'Menu', 'ophelia' ); ?></a>
						<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top-mob">%3$s</ul>'  ) ); ?>
						<?php } else { ?>
							<?php wp_nav_menu(  array('container'=> '', 'items_wrap'  => '<ul class="menu-top-mob">%3$s</ul>' ) ); ?>	
						<?php } ?>					
					</nav>
				</div>
			</div>
		</header> 