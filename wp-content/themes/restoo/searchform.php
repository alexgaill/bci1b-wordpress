<form class="d-flex" action="<?php esc_url(home_url("/")) ?>">
    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" value="<?php get_search_query() ?>" name="s">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>