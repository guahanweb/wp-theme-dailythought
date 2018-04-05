<?php
$thought = get_post_meta(get_the_ID(), 'gw_dailythought_blurb', true);
$reference = get_post_meta(get_the_ID(), 'gw_dailythought_reference', true);
$verse = get_post_meta(get_the_ID(), 'gw_dailythought_verse', true);

if (is_single()):
?>
<div class="container">
    <div class="theme-masthead masthead-thought">
        <div class="thought">
            <h2 class="title"><?php the_title(); ?></h2>
            <h1 class="content"><?php echo esc_html($thought); ?></h1>
        </div>
    </div>
    <article class="thought thought-full thought-wrapper">
        <div class="header">
            <div class="published">
                <div class="date"><?php the_date(); ?></div>
            </div>
            <div class="verse">
                <p class="text"><?php echo esc_html($verse); ?></p>
                <div class="reference"><p><?php echo esc_html($reference); ?></p></div>
            </div>
        </div>
        <div class="thought-content">
            <?php the_content(); ?>
        </div>
    </article>
</div>
<?php
else:
?>
<div class="container">
    <article class="thought thought-wrapper">
        <div class="header">
            <div class="published">
                <div class="date"><?php echo get_the_date('F j, Y'); ?></div>
            </div>
            <div class="short-thought">
                <h1><?php echo esc_html($thought); ?></h1>
                <div class="verse">
                    <p class="text"><?php echo esc_html($verse); ?></p>
                    <div class="reference"><p><?php echo esc_html($reference); ?></p></div>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <ul class="navbar-list right-align">
                <li class="navbar-item left-align"><a class="navbar-link" href="<?php the_permalink(); ?>">Read more</a></li>
                <li class="navbar-item navbar-light"><span class="share-via navbar-link">Share:</span></li>
                <li class="navbar-item"><?php do_action('social-link', 'facebook', 'navbar-link social external'); ?></li>
                <li class="navbar-item"><?php do_action('social-link', 'twitter', 'navbar-link social external'); ?></li>
                <li class="navbar-item"><?php do_action('social-link', 'google', 'navbar-link social external'); ?></li>
            </ul>
        </nav>
    </article>
</div>
<?php
endif;
?>
