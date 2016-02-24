<?php get_header(); ?>

<div class="row">
    <div class="col-lg-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
        <?php endwhile; else : ?>
            <p><?php _e('No posts yet.'); ?></p>
        <?php endif; ?>
    </div>
    <div class="col-lg-4">
        <?php echo get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
