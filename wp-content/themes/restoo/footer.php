</main>
<footer>
    <?php wp_nav_menu([
        'theme_location' => "footer",
        'container' => false,
        'menu_class' => "navbar-nav mr-auto"
    ]) ?>
    <!-- Permet de charger les fonctions du footer de WP -->
    <?php wp_footer() ?>
</footer>
</body>
</html>