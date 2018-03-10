<?php
get_header();

if (have_posts()):
    while (have_posts()): the_post();
        // Dump the meta to test time lock
        $timelocks = get_post_meta(get_the_ID(), '_timelocks_in_content', true);
        the_content();
    endwhile;
endif;

get_footer();
?>
