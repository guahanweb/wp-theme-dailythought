<?php
/**
 * Blog Page Template
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

get_header();
if (have_posts()):
    while(have_posts()): the_post();
        get_template_part('content', get_post_format());
    endwhile;
endif;
get_footer();
?>
