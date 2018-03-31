<?php
function render_social_link($platform, $class) {
    $url = '#';
    $icon = '';
    if ($platform == 'facebook') {
        $url = 'https://www.facebook.com/sharer/sharer.php?u=%s';
        $icon = 'fab fa-facebook';
    } elseif ($platform == 'twitter') {
        $url = 'https://www.twitter.com/home?status=%s';
        $icon = 'fab fa-twitter';
    } elseif ($platform == 'google') {
        $url = 'https://plus.google.com/share?url=%s';
        $icon = 'fab fa-google-plus-g';
    }

    printf('<a class="%s" href="%s" target="_blank"><i class="%s"></i></a>', $class, sprintf($url, get_the_permalink()), $icon);
}
add_action('social-link', 'render_social_link', 5, 2);

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
