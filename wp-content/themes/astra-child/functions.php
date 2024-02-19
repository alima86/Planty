<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
 add_filter('wp_nav_menu_items', 'custom_menu_admin_link');
 function custom_menu_admin_link($items) {
   $menu = wp_get_nav_menu_object( 3 );
     if (is_user_logged_in() && $menu->name == 'Navigation' )  {
         $items .= '<li><a id="admin-link" href="' . admin_url() . '">Admin</a></li>';
     }
     return $items;
 }