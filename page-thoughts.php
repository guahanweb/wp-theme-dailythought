<?php
/**
 * Thoughts Page Template
 * Main list rendering thoughts
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage GWDailyThought
 * @since GWDailyThought 1.0
 */

get_header();
if (have_posts()):
    while(have_posts()): the_post();
        echo get_post_type();
        get_template_part('content', get_post_type());
    endwhile;
endif;
get_footer();
?>

