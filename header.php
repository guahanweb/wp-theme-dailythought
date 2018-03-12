<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" media="screen">
<link type="text/css" rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.6/css/all.css" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/theme.css'; ?>" media="screen">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <nav class="main-nav">
                <div class="site-logo">
                    <a href="#"><h1 class="blog-title"><?php bloginfo('name') ?></h1><p class="blog-tagline"><?php bloginfo('description') ?></p></a>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'header_menu', 'container_class' => 'main-menu')); ?>
            </nav>
        </div>
    </header>
    <div id="content" class="site-content">
