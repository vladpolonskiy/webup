<?php
/**
 * The template part for displaying message that posts cannot be found.
 * 
 * @package webup
 */
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e('Ничего не нашли =(', 'webup'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content row-with-vspace">
		<?php if (is_home() && current_user_can('publish_posts')) { ?> 
			<p><?php printf(__('Готовы опубликовать Ваш первый пост?? <a href="%1$s">НАчните сейчас</a>.', 'webup'), esc_url(admin_url('post-new.php'))); ?></p>
		<?php } elseif (is_search()) { ?> 
			<p><?php _e('Просим прощения, но по Вашему запросу ничего не найдено. Пожалуйста, попробуйте снова, используя другие ключевые слова.', 'webup'); ?></p>
			<?php echo get_search_form(); ?> 
		<?php } else { ?> 
			<p><?php _e('Возможно, мы не можем найти то, что вы ищете. Вероятно, поиск сможет помочь.', 'webup'); ?></p>
			<?php echo get_search_form(); ?> 
		<?php } //endif; ?> 
	</div><!-- .page-content -->
</section><!-- .no-results -->