<?php
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_styles' );
function hello_child_enqueue_styles() {
    // Style du parent
    wp_enqueue_style( 'hello-parent-style', get_template_directory_uri() . '/style.css' );

    // Style du child
    wp_enqueue_style( 'hello-child-style', get_stylesheet_uri(), array('hello-parent-style'), wp_get_theme()->get('Version') );
}


/* ============================================================
                          HOOK 
   ============================================================ */

add_filter('wp_nav_menu_items', 'planty_add_admin_link_if_logged_in', 10, 2);

function planty_add_admin_link_if_logged_in($items, $args) {

    // 1) On ne fait rien si pas connecté

    if ( ! is_user_logged_in() ) {
        return $items;
    }

    // 2) Cibler le menu 

    $target_locations = array('primary');

    $is_target_menu = false;

    if ( isset($args->theme_location) && in_array($args->theme_location, $target_locations, true) ) {
        $is_target_menu = true;
    }

    // 3) Ajout du lien Admin si l'utilisateur est bien connecté 

    $items .= '<li class="menu-item menu-item-admin">'
            . '<a href="' . esc_url( admin_url() ) . '">Admin</a>'
            . '</li>';

    return $items;
}