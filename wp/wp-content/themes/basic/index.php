<?php get_header(); ?>

<div class="row">
    <div class="col-lg-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
        <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

