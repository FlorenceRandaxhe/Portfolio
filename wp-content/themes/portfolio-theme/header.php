<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Florence Randaxhe">
    <meta name="description" content="<?= custom_description(); ?>">
    <meta name="keywords" content="<?php bloginfo('name'); ?>, <?php the_title(); ?>, Portfolio, web design, web designer, Projets web">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= asset_path('css/main.css'); ?>">
    <link rel="icon" type="image/png" href="<?= asset_path('assets/icon.png'); ?>">

    <!--[if lt IE9]>
    <script src="./dist/html5shiv-printshiv.js"></script>
    <script src="./dist/html5shiv.js"><script>
    <![endif]-->
</head>
<body>
    <header class="header">
        <?php if ( is_front_page() ): ?>
            <div class="hero">
                <div class="hero_wrapper">
                    <div class="hero_content content_up">
                        <h1 aria-level="1" role="heading">
                            <p>
                                <span><?php bloginfo('name'); ?></span>
                                <em>Web designer</em>
                            </p>
                        </h1>
                    </div>
                    <div class="hero_scroll">
                        <span class="scroll_down">
                            Scroll
                        </span>
                    </div>
                </div>
            </div>

            <div class="svg_wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1400 900" id="svg">
                    <g>
                        <g class="svg_fill"><line x1="1081.53" y1="102.21" x2="1039.53" y2="102.21"/><line x1="1060.53" y1="119.21" x2="1016.53" y2="119.21"/><line x1="922.89" y1="230.06" x2="907.13" y2="252.71"/><line x1="904.23" y1="233.88" x2="925.8" y2="248.89"/><circle cx="502.53" cy="224.21" r="25"/><polygon points="726.53 417.21 762.53 443.21 787.53 408.21 751.53 383.21 726.53 417.21" class="blop"/><polygon points="1302.53 16.21 1300.53 70.21 1348.53 44.21 1302.53 16.21"/><circle cx="1285.03" cy="239.71" r="9.5"/><polygon points="28.53 291.21 15.1 298.47 2.1 290.47 2.53 275.21 15.96 267.96 28.96 275.96 28.53 291.21" class="blop"/></g>
                        <g class="svg_stroke"><polygon points="1315.94 69.64 1363.39 43.84 1317.86 16.64 1315.94 69.64"/><line x1="923.89" y1="235.06" x2="908.13" y2="257.71"  /><line x1="905.23" y1="238.88" x2="926.8" y2="253.89" /><line x1="1261.89" y1="373.06" x2="1246.13" y2="395.71"/><line x1="1243.23" y1="376.88" x2="1264.8" y2="391.89" /><path d="M6.79,2,26.58,26.66c2.28,2.85-2.94,7-5.23,4.19L1.56,6.14C-.72,3.29,4.51-.9,6.79,2Z"/><circle cx="665.53" cy="26.21" r="9.5" id="el_0VAPa2Ne_8x" /><circle cx="365.03" cy="436.71" r="8" id="el_YWOsJe22sEg" /><line x1="1045.53" y1="107.71" x2="1085.53" y2="107.71" /><line x1="1021.53" y1="124.71" x2="1065.53" y2="124.71" /><line x1="1028.03" y1="408.71" x2="1078.03" y2="408.71" /><circle cx="494.03" cy="217.71" r="25.5" /><path d="M127.42,377.27l0,0a20.63,20.63,0,0,1-29.17-29.17l0,0-4.86-4.86,0,0a27.5,27.5,0,1,0,38.89,38.89l0,0Z"/></g>
                    </g>
                </svg>
            </div>
        <?php else : endif; ?>

        <?php if ( !is_front_page() ): ?>
            <div class="page_title_wrapper">
                <div class="page_title">
                    <h1 aria-level="1" role="heading">
                        <?php the_title(); ?><span class="hidden"> | <?php bloginfo('name'); ?></span>
                    </h1>
                </div>
            </div>
        <?php else : endif; ?>
        <div class="header_wrapper">
            <a href="<?= get_home_url(); ?>">
                <svg class="header_logo" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 125 190"
                     width="70" height="113">
                    <g>
                        <g>
                            <path class="logo_fill" d="M44,113.9c0,10,0,24.73,0,34.78L7,185.66V113.9H44L78.82,77.81H7V41.33L44,6h70.35L79.46,41.07H44c0,17.36,0,19.38,0,36.74Z"/>
                            <path class="logo_outline" d="M38.06,108.92c0,10,0,24.73,0,34.78L1,180.68V108.92H38.06L72.85,72.83H1V36.36L38.06,1h70.35L73.49,36.09H38.06c0,17.36,0,19.38,0,36.74Z"/>
                        </g>
                    </g>
                </svg>
                <span class="hidden"><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></span>
            </a>
            <div class="dropdown">
                <input type="checkbox" id="menu">
                <label class="menu_icon" for="menu" id="burger">
                    <span class="hidden">Navigation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="35" height="35" viewBox="0 0 24 24"
                         class="burger_menu">
                        <line class="gone" x1="6" y1="12" x2="23" y2="12"/>
                        <line class="down" x1="1" y1="4" x2="23" y2="4"/>
                        <line class="up" x1=1 y1="20" x2="23" y2="20"/>
                    </svg>
                </label>
                <nav>
                    <h2 class="hidden" aria-level="2" role="heading"><?= __('Navigation principale', 'fr'); ?></h2>
                    <ul class="nav_list">
                        <?php foreach (fr_getMenu('main') as $item): ?>
                            <li class="nav_item">
                                <a href="<?= $item->url; ?>" class="nav_link"><?= $item->label; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>