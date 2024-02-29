<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
/**
** activation admin
**/
add_filter('wp_nav_menu_items', 'custom_menu_admin_link', 10, 2 );
function custom_menu_admin_link($items,$args) {
    if (is_user_logged_in() && $args->menu == 'navigation' )  {
$items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"> <a id="admin-link" class="hfe-menu-item" href="' . admin_url() . '">Admin</a></li>';
}
    return $items;
}
