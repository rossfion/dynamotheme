<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

        <!-- JQueryUI CSS -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery-ui.min.css">

        <!-- Unslider CSS -->
        <!--<link rel="stylesheet" type="text/css" href="<?php //bloginfo('template_url');  ?>/css/unslider.css">-->

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider-dots.css">

        <!-- Gridism CSS -->
        <!-- see deprecation notice in README.Md file -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/gridism.css">

        <!-- FontAwesone CSS -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                
        <!-- JQueryUI Theme CSS -->
        <?php if (get_theme_mod('preset', 'dark') == 'dark') : ?>
            <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/ui-darkness/jquery-ui.min.css">
        <?php else : ?>
            <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.min.css">
        <?php endif; ?>

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>

        <style>
<?php if (get_theme_mod('preset', 'dark') == 'dark') : ?>
                body{background:#232323;color:#fff;}
                .main-nav{background:#333;color:#fff;}
                .main-nav a {color:#fff;}
                .caption{background:#333;color:#fff;}
                .post-wrap{border:1px solid #666;}
                .button{background:#333;color:#fff;}
                .post{border-bottom:1px solid #333;}
                footer{background:#333;color:#fff;}
<?php else : ?>
                body{background:#fff;color:#333;}
                .main-nav{background:#f4f4f4;color:#333;}
                .main-nav a {color:#333;}
                .caption{background:#f4f4f4;color:#333;}
                .post-wrap{border:1px solid #ccc;}
                .button{background:#f4f4f4;color:#333;}
                .post{border-bottom:1px solid #ccc;}
                footer{background:#f4f4f4;color:#333;}
<?php endif; ?>

            a {color:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
            .main-nav a:hover {background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
            .button:hover {background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
            .bar {background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
            .current-page-item a {background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
            .meta {border-bottom: 4px double <?php echo get_theme_mod('color', '#f9992b'); ?>;}

            .ui-state-active, 
            .ui-widget-content .ui-state-active, 
            .ui-widget-header .ui-state-active {
                border-color:<?php echo get_theme_mod('color', '#f9992b'); ?>
                    background:<?php echo get_theme_mod('color', '#f9992b'); ?>;
            }

        </style>
    </head>
    <body>

        <header>
            <div class="wrap wider">
                <div class="grid">
                    <div class="unit half">
                        <h1 class="logo">
                            <?php bloginfo('name'); ?>
                        </h1><!-- .logo -->
                        <p class="tagline">
                            <?php bloginfo('description'); ?>
                        </p><!-- .tagline -->
                    </div><!-- .unit half -->
                    <div class="unit half">
                        <div class="header_r">
                            <form class="search">
                                <input type="text" name="s" placeholder="Search...">
                            </form><!-- .search -->
                        </div><!-- .header_r -->
                    </div><!-- .unit half -->
                </div><!-- .grid -->
            </div><!-- .wrap wider -->
        </header>

        <nav class="main-nav">
            <div class="wrap wider">
                <div class="grid">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                                )
                        );
                    ?>
                </div><!-- .grid -->
            </div><!-- .wrap wider -->
        </nav><!-- .main-nav -->