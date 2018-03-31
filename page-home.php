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
if (have_posts()):
    while(have_posts()): the_post();
        the_content();
    endwhile;
endif;

if ($thoughts) {
    foreach ($thoughts as $post) {
        get_template_part('content', get_post_type());
    }
}

get_footer();
?>

