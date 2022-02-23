<?php

/**
 * Template Name: Modèle avec bannière
 * Template Post Type: page, post
 */
?>
<?php get_header(); ?>

<?php if (have_posts()): while(have_posts()): the_post(); ?>
<div class="text-center my-5">
    <h1><?php the_title(); ?></h1>
    <p>
        <img src="<?php the_post_thumbnail_url('banner-size') ?>" alt="<?php the_title(); ?>">
    </p>
    <?php the_content() ?>
</div>



<?php endwhile; endif; ?>
<?php get_footer(); ?>