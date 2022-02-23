<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post() ?>

    <div class="row">
        <h1 class="my-3"><?php the_title()?></h1>
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="col-8 mx-auto">
        <?php the_content(); ?>
    </div>
    <a href="<?= get_post_type_archive_link('post') ?>" class="h3">Voir nos dernières actualités</a>

<?php endwhile; endif; ?>
<?php get_footer(); ?>