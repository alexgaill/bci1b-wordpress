<?php

/**
 * Active la gestion de supports tels que les images de mise en avant,
 * les menus, et le titre des pages
 *
 * @return void
 */
function restoo_setup()
{
    /**
     * Gère l'affichage du title sur les pages
     */
    add_theme_support('title-tag');

    /**
     * Gère le background des pages
     */
    add_theme_support('custom-background', [
        'default-color' => "#111111"
    ]);

    // Active le d'image mise en avant
    add_theme_support('post-thumbnails');

    // Génère une nouvelle taille d'image
    add_image_size('banner-size', 1000, 0, ["center", "center"]);

    // Supprime un format d'image
    remove_image_size('medium');
    add_image_size('medium', 500, 500);
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