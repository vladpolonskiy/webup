<?php get_header(); ?>

<div class="row">
    <div class="col-lg-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
        <?php endwhile; else : ?>
            <p><?php _e('Sorry, no pages found.'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

