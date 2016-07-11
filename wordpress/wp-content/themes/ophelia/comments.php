<?php
/**
 * The template for displaying Comments.
 *
 *
 * @package Ophelia
 */
?>
<?php if ( ! post_password_required() ) { ?>
	<?php if ( ! comments_open())  : ?>
	<?php else: ?>
	 <article class="article-post">  
		<div class="comments comment-form-container">
			<?php if ($comments) : ?>
				<h3><?php printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'ophelia' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );?></h3>
				<ul class="commentlist">
					<?php wp_list_comments(); ?>
				</ul>
			<?php endif; ?>
			<p><?php paginate_comments_links(); ?></p>
			<?php comment_form(); ?>
		</div>
	</article>	
	<?php endif; ?>
<?php } ?>