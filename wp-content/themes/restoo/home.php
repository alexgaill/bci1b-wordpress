<?php 
// Charge le header de WP
get_header();
?>
<h1 class="my-3">Les news du restaurant</h1>
<?php if(have_posts()): ?>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Image</th>
                <th>Catégorie</th>
                <th>Extrait</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while (have_posts()): the_post(); ?>
            <tr>
                <td><?php the_title() ?></td>
                <td><?php the_post_thumbnail('thumbnail', ['alt' => get_the_title()]) ?></td>
                <td><?php the_category() ?></td>
                <td><?php the_excerpt() ?></td>
                <td><a href="<?php the_permalink() ?>"><button class="btn btn-info">Voir l'article</button></a></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    <div class="my-3">
        <?php restoo_pagination(); ?>
    </div>
<?php else: ?>
    <h2 class="text-danger">Il n'y a pas d'articles pour le moment</h2>
<?php endif; ?>
<?php
// Charge le footer de WP
get_footer();