<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
    <?php wp_head() // For plugins ?>
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
    </head>

    <body>
        <header id="top-header">
            <a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home">
                <img width="646px" height="456px" alt="Alison Citron" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png">
            </a>
        </header>
