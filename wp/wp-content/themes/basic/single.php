<?php get_header(); ?>

<div class="row">
    <div class="col-lg-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
        <?php if(has_post_thumbnail()) : ?>
                <div class="feature-image">
                    <?php the_post_thumbnail(); ?>
                </div>
        <?php endif; ?>
                <p><?php the_content(); ?></p>
        <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <?php echo comments_template(); ?>
    </div>
</div>

<?php get_footer(); ?>

