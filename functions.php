<?php
function register_theme_menus() {
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu'),
            'secondary_menu' => __('Secondary Menu')
        )
    );
}
add_action('init', 'register_theme_menus');

add_filter('show_admin_bar', '__return_false');
?>
