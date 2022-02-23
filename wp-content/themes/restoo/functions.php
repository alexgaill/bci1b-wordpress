<?php

/**
 * Active la gestion de supports tels que les images de mise en avant,
 * les menus, et le titre des pages
 *
 * @return void
 */
function restoo_setup()
{
    // Gère l'affichage du title sur les pages
    add_theme_support('title-tag');

    // Gère le background des pages
    add_theme_support('custom-background', [
        'default-color' => "#111111"
    ]);
    // Active le support de menu
    add_theme_support('menus');

    // Créé un menu
    register_nav_menu('header', "Menu d'en-tête");
    register_nav_menu('footer', "menu de pied-de-page");

    // Active le d'image mise en avant
    add_theme_support('post-thumbnails');

    // Génère une nouvelle taille d'image
    add_image_size('banner-size', 1000, 0, ["center", "center"]);

    // Supprime un format d'image
    remove_image_size('medium');
    add_image_size('medium', 350, 350);
}

/**
 * Charge les assets de boostrap
 *
 * @return void
 */
function restoo_register_assets()
{
    // On charge le style et le script de bootstrap
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], false, true);

    // On met le style et le script dans la queue de chargement des assets
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function restoo_title(string $title): string
{
    return 'Titre de la page:' . ($title ? $title : 'Pas de nom connu');
}

function restoo_title_separator():string
{
    return "|";
}

function restoo_menu_class (array $classes): array
{
    $classes[] = "nav-item";
    return $classes;
}

function restoo_menu_link_class (array $attrs):array
{
    $attrs['class'] = 'nav-link active';
    return $attrs;
}

function restoo_pagination ()
{
    $pages = paginate_links(['type' => 'array']);

    if ($pages !== null) {
        $classe = "page-item";
        echo "<nav aria-label='pagination' class='my-4'><ul class='pagination'>";
        foreach ($pages as $page) {
            echo "<li class='$classe'>". str_replace("page-numbers", "page-link", $page) ."</li>";
        }
        echo '</ul></nav>';
    }
}

/**
 * Ajoute l'action restoo_setup au moment du chargement d'une page
 * This hook is called during each page load, after the theme is initialized. It is generally used to perform basic setup, registration, and init actions for a theme.
 */
add_action('after_setup_theme', 'restoo_setup');

// Charge bootstrap
add_action('wp_enqueue_scripts', 'restoo_register_assets');

// Modifie le format du titre de la page
add_filter('wp_title', 'restoo_title');

// Modifie le séparateur du title
add_filter('document_title_separator', 'restoo_title_separator');

// Modifie les class des items d'un menu
add_filter('nav_menu_css_class', 'restoo_menu_class');

add_filter('nav_menu_link_attributes', 'restoo_menu_link_class');