<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()): the_post(); ?>
    <div class="mt-5 text-center">
        <h1 class="h4 mb-3"><?php the_title() ?></h1>
        <?php the_post_thumbnail('full') ?>
    </div>
    <hr>
    <?php the_content() ?>
    <hr class="my-3">
    <div>
        <small class="text-secondary">Cet article a été rédigé par <?php the_author() ?> le <?php the_date('d M Y') ?> à <?php the_time('H:i:s') ?></small>
    </div>

    <div class="mt-5 d-flex justify-content-around">
        <?php previous_post_link('<button class="btn btn-info">%link</button>', 'Article précédent') ?>
        <?php next_post_link('<button class="btn btn-info">%link</button>', 'Article suivant') ?>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>