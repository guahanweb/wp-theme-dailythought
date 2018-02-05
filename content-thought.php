<?php
$thought = get_post_meta(get_the_ID(), 'gw_dailythought_blurb', true);
$reference = get_post_meta(get_the_ID(), 'gw_dailythought_reference', true);
$verse = get_post_meta(get_the_ID(), 'gw_dailythought_verse', true);
?>

<?php
if (is_single()):
    echo 'Single view not done...';
else:
?>
<div class="container">
    <article class="thought thought-wrapper">
        <div class="header">
            <div class="published">
                <div class="date"><?php the_date(); ?></div>
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
                <li class="navbar-item left-align"><a class="navbar-link" href="#">Read more</a></li>
                <li class="navbar-item navbar-light"><span class="share-via navbar-link">Share:</span></li>
                <li class="navbar-item"><a class="navbar-link social" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="navbar-item"><a class="navbar-link social" href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="navbar-item"><a class="navbar-link social" href="#"><i class="fab fa-google-plus-g"></i></a></li>
            </ul>
        </nav>
    </article>
</div>
<?php
endif;
?>
