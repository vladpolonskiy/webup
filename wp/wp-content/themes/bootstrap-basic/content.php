<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<div class="blog-post-date">10 May 2015</div>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php if (has_post_thumbnail() && !post_password_required()) :?>
                <div class="entry-thumbnail single">
                   <a href='<?php  echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>' rel="lightbox" data-lightbox="image">
						<?php  the_post_thumbnail(); ?>
                        <div class="entry-thumbnail-cover single-post-cover"></div>
                   </a>
                </div>
				<hr>
		<?php endif; ?>
	</div><!-- .entry-header -->

	
	<?php if (is_search()) { // Only display Excerpts for Search ?> 
	<div class="entry-summary">
		<?php the_excerpt(); ?> 
		<div class="clearfix"></div>
	</div><!-- .entry-summary -->
	<?php } else { ?> 
	<div class="entry-content">
		<?php the_content('');?> 
		<div class="clearfix"></div>
		<?php if ('post' == get_post_type()) { ?> 
		<div class="entry-meta">
		<?php if(!is_single()):?>
		<a href='<?php echo get_permalink()?>' class="more-link">Читать далее </a>

			<div class="entry-meta-comment-tools">
				<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?> 
				<span class="comments-link"><?php bootstrapBasicCommentsPopupLink(); ?></span>
				<?php } //endif; ?> 
			</div><!--.entry-meta-comment-tools-->
			<div class="entry-author-post"><?php echo get_the_author(); ?></div>
		</div><!-- .entry-meta -->
		<?php endif;?>
		<?php } //endif; ?> 
		<?php 
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?> 
	</div><!-- .entry-content -->
	<?php } //endif; ?> 

	
	<footer class="entry-meta">
		<?php if ('post' == get_post_type()) { // Hide category and tag text for pages on Search ?> 
		<div class="entry-meta-category-tag">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list(__(', ', 'bootstrap-basic'));
				if (!empty($categories_list)) {
			?> 
			<!-- <span class="cat-links">
				<?php echo bootstrapBasicCategoriesList($categories_list); ?> 
			</span> -->
			<?php } // End if categories ?> 

			<?php
				/* translators: used between list items, there is a space after the comma */
				// $tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic'));
				// if ($tags_list) {
			?> 
			<!-- <span class="tags-links">
				<?php echo bootstrapBasicTagsList($tags_list); ?> 
			</span> -->
			<?php //} // End if $tags_list ?> 
		</div><!--.entry-meta-category-tag-->
		<?php } // End if 'post' == get_post_type() ?> 

		
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->