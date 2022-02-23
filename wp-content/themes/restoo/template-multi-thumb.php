<?php

/**
 * Template Name: Modèle avec image répétée
 * Template Post Type: page, post
 */
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="my-5 row">
            <div class="col-3">
                <img src="<?php the_post_thumbnail_url('medium') ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="col-6">
                <div class="text-center">
                    <h1><?php the_title(); ?></h1>
                    <small class="text-secondary">Auteur: <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>" class="text-secondary"><?php the_author() ?></a></small>
                    <small class="text-secondary">Date de publication: <?php the_date('d M Y') ?></small>
                </div>
            </div>
            <div class="col-3">
                <img src="<?php the_post_thumbnail_url('medium') ?>" alt="<?php the_title(); ?>">
            </div>
        </div>
        <div class="col-6 mx-auto">
            <?php the_content() ?>
        </div>
        <div class="my-3 mx-auto text-center">
            <img src="<?php the_post_thumbnail_url('large') ?>" alt="<?php the_title(); ?>">
        </div>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>