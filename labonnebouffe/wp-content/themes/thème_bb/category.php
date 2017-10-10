<?php get_header() ?>

    <?php echo showCategoryBypostType('restaurant'); ?>

    <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post() ?>
            <!-- Début contenu HTML -->
                <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>

                <div class="contenu">
                    <?php the_content(); ?>
                </div>

            <!-- Fin contenu HTML -->
        <?php endwhile; ?>

    <?php endif; ?>





<?php get_footer(); ?>
