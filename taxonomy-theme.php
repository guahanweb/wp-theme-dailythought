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
$theme = get_queried_object();
?>

<div class="container">
    <div class="theme-masthead">
        <div class="title">
            <h1><?php echo esc_html($theme->name); ?></h1>
        </div>
        <div class="description">
            <h4><?php echo esc_html($theme->description); ?></h4>
        </div>
    </div>
</div>


<?php
if (have_posts()):
    customNavigationLink(true); //prev

    while(have_posts()): the_post();
        get_template_part('content', get_post_type());
    endwhile;

    customNavigationLink(); // next
endif;
get_footer();
?>


