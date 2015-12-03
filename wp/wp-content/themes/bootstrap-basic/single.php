<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<div class="container">
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', get_post_format());
?>
							<div class='social-btn-post'>
								<h3>Понравилось? Расскажите друзьям:</h3>
							</div>
							<?php 
							echo "\n\n";
							
							bootstrapBasicPagination();

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
<?php get_sidebar('right'); ?>
<div class="clearfix"></div>

<div class="similar-post">
 <h3>Рекомендуемые Вам Похожие Статьи</h3>
	<div class="row">

	<?php
                                         $orig_post = $post;
                                         global $post;
                                         $tags = wp_get_post_tags($post->ID);
                                            
                                         if ($tags) {
                                            $tag_ids = array();
                                         foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                                            $args=array(
                                                'tag__in' => $tag_ids,
                                                'post__not_in' => array($post->ID),
                                                'posts_per_page'=>3, // Number of related posts to display.
                                                'caller_get_posts'=>1
                                            );

                                         $my_query = new wp_query( $args );

                                         while( $my_query->have_posts() ) {
                                            $my_query->the_post();
                                         ?>

                                            <div class="col-lg-3 col-sm-6">
                                            	<div class="relatedthumb">
                                            		<div class="title">
                                            			<a rel="external" href="<? the_permalink()?>">
		                                                <?php the_title(); ?>
		                                            	</a>
                                            		</div>
                                            		<div class="text">
                                            			<?php the_post_thumbnail(array(300,200)); ?>
                                            			<a class="read_lesson" href="<? the_permalink()?>">Читать</a>  
                                            		</div>                             
	                                            </div>
                                            </div>

                                            <?php }
                                            }
                                            $post = $orig_post;
                                            wp_reset_query();
                                            ?>
	</div>
</div>
</div>
<?php get_footer(); ?> 