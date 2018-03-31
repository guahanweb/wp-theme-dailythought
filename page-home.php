<?php
/**
 * Home Page Template
 * The home page template file
 *
 * This is the template for the Home Page
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage GWDailyThought
 * @since GWDailyThought 1.0
 */

// get last 10 thoughts to share
$thoughts = get_posts(array(
    'numberposts' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'thought'
));

get_header();
echo '<main class="page-content">';
if (have_posts()):
    while(have_posts()): the_post();
        echo '<div class="container">';
            echo '<div class="main-content">';
                the_content();
            echo '</div>';
        echo '</div>';
    endwhile;
endif;

if ($thoughts) {
    foreach ($thoughts as $post) {
        get_template_part('content', get_post_type());
    }
}
echo '</main>';
get_footer();
?>

