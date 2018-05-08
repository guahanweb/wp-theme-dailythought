<?php
add_post_type_support('page', 'excerpt');

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

function addOpenGraphDoctype($output) {
    return $output . '
xmlns:og="http://opengraphprotocol.org/schema/"
xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'addOpenGraphDoctype');

function customPrevPostsLink() {
    echo 'here';
    $prev = <<<EOL
<div class="arrow up">
    <svg><path d="M0 25 L0 15 L20 0 L40 15 L40 25 L20 10 Z"></path></svg>
</div>
<div class="content"><h4>Newer Thoughts</h4></div>
EOL;

    $prev = get_prev_posts_link($prev);
    if ($prev) {
        echo <<<EOL
<div class="posts-link previous">
    ${prev}
</div>
EOL;
    }
}

function customNextPostsLink() {

}

function insertMetaTags() {
    global $post;
    if (!is_singular()) return;

    $type = get_post_type();
    if ($type != 'thought' && !is_page()) return;

    if (is_page()) {
        $title = get_the_title();
        $description = get_the_excerpt();
    } else {
        $title = get_post_meta(get_the_ID(), 'gw_dailythought_blurb', true);
        $reference = get_post_meta(get_the_ID(), 'gw_dailythought_reference', true);
        $verse = get_post_meta(get_the_ID(), 'gw_dailythought_verse', true);
        $description = sprintf('%s (%s)', $verse, $reference);
    }

    $tags = array(
        'og:title' => $title,
        'og:description' => $description,
        'og:type' => 'article',
        'og:url' => get_the_permalink(),
        'og:site_name' => 'Pacific Breezes',
        'og:image' => get_template_directory_uri() . '/img/fb-image.jpg'
    );

    foreach ($tags as $tag => $value) {
        printf('<meta property="%s" content="%s"/>', $tag, $value);
    }
}
add_action('wp_head', 'insertMetaTags', 5);

// remove admin bar
add_filter('show_admin_bar', '__return_false');
?>
