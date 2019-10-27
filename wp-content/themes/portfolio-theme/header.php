<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Florence Randaxhe">
    <meta name="description" content="Florence Randaxhe | Web designer & developper">
    <meta name="keywords" content="<?php bloginfo('name'); ?>, <?php the_title(); ?>, Portfolio, web design, web designer, Projets web, site, design, web, website, logo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= asset_path('/css/main.css'); ?>">
    <link rel="icon" type="image/png" href="<?= asset_path('/assets/icon.png'); ?>">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php wp_head(); ?>

</head>
<body itemscope itemtype="http://schema.org/Person">
    <header class="header">
        <?php if ( is_front_page() ): ?>
            <div class="hero">
                <div class="hero_wrapper">
                    <div class="hero_content">
                        <h1 aria-level="1" role="heading"><p><span itemprop="name"><?php bloginfo('name'); ?></span><em itemprop="JobTitle"> Web designer</em></p></h1>
                    </div>
                    <div class="hero_scroll">
                        <a href="#work" class="scroll_down">Scroll</a>
                    </div>
                </div>
            </div>
            <div class="svg_wrapper">
                <!------------------------- CENTER ------------------------------>
                <!-- center cirles -->
                <svg class="center_circles fixed_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="60px" height="58px" viewBox="0 0 60 58">
                    <circle class="svg_fill" cx="35" cy="33" r="25"/>
                    <circle class="svg_stroke" cx="26.5" cy="26.5" r="25.5"/>
                </svg>
                <!-- center squares  -->
                <svg class="center_squares fixed_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="68px" height="62.5px" viewBox="0 0 68 62.5" >
                    <polygon class="svg_fill" points="7,34.4 43,60.4 68,25.4 32,0.4 "/>
                    <rect class="svg_stroke" x="10.4" y="9.3" transform="matrix(0.5751 -0.818 0.818 0.5751 -12.1958 39.026)"  width="42.1" height="43.9"/>
                </svg>
                <!-- center cirle -->
                <svg class="center_circle fixed_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 21 21" >
                    <circle class="svg_stroke" cx="10.5" cy="10.5" r="9.5"/>
                </svg>
                <!-- center cross -->
                <svg class="center_cross fixed_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="22.7px" height="23.8px" viewBox="0 0 22.7 23.8">
                    <line class="svg_stroke" x1="19.2" y1="0.6" x2="3.5" y2="23.2"/>
                    <line class="svg_stroke" x1="0.6" y1="4.4" x2="22.1" y2="19.4"/>
                </svg>
                <!------------------------- LEFT SIDE ------------------------------>
                <!-- left cirle -->
                <svg class="left_circle fixed_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 18 18">
                    <circle class="svg_stroke" cx="9" cy="9" r="8"/>
                </svg>
                <!-- left half circle -->
                <svg class="left_half_circle sticky_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="49.5px" height="49.5px" viewBox="0 0 49.5 49.5">
                    <path class="svg_stroke" d="M43.2,35.4L43.2,35.4C35,43.3,21.9,43.1,14,34.9c-7.7-8-7.7-20.6,0-28.6l0,0L9.2,1.4l0,0 C-1.6,12.1-1.7,29.5,8.9,40.3S37,51.2,47.8,40.6c0.1-0.1,0.2-0.2,0.3-0.3l0,0L43.2,35.4z"/>
                </svg>
                <!-- left tube -->
                <svg class="left_tube sticky_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="34.1px" height="38.8px" viewBox="0 0 28.1 32.8">
                    <path class="svg_stroke" d="M6.8,2l19.8,24.7c2.3,2.9-2.9,7-5.2,4.2L1.6,6.1C-0.7,3.3,4.5-0.9,6.8,2z"/>
                </svg>
                <!-- left polygone -->
                <svg class="left_polygone fixed_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="26.9px" height="30.5px" viewBox="0 0 26.9 30.5">
                    <polygon class="svg_fill" points="26.4,23.3 13,30.5 0,22.5 0.4,7.3 13.9,0 26.9,8 "/>
                </svg>

                <!------------------------- RIGHT SIDE ------------------------------>

                <!-- right triangles -->
                <svg class="right_triangles fixed_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="64.9px" height="56.4px" viewBox="0 0 64.9 56.4">
                    <polygon class="svg_fill" points="2,1.3 0,55.3 48,29.3 "/>
                    <polygon class="svg_stroke" points="15.4,54.7 62.9,28.9 17.3,1.7 "/>
                </svg>
                <!-- right cross -->
                <svg class="right_cross sticky_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="22.7px" height="23.8px" viewBox="0 0 22.7 23.8">
                    <line class="svg_stroke" x1="19.2" y1="0.6" x2="3.5" y2="23.2"/>
                    <line class="svg_stroke" x1="0.6" y1="4.4" x2="22.1" y2="19.4"/>
                </svg>
                <!-- right circle -->
                <svg class="right_circle sticky_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="19px" height="19px" viewBox="0 0 19 19">
                    <circle class="svg_fill" cx="9.5" cy="9.5" r="9.5"/>
                </svg>





            </div>
        <?php else : endif; ?>
        <?php if ( !is_front_page() ): ?>
            <div class="page_title_wrapper">
                <div class="page_title">
                    <h1 aria-level="1" role="heading"><?php the_title(); ?><span class="hidden" itemprop="name"> | <?php bloginfo('name'); ?></span></h1>
                </div>
            </div>
        <?php else : endif; ?>
        <div class="header_wrapper">
            <a href="<?= get_home_url(); ?>">
                <svg class="header_logo" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 125 190" width="70" height="113">
                    <g><g><path class="logo_fill" d="M44,113.9c0,10,0,24.73,0,34.78L7,185.66V113.9H44L78.82,77.81H7V41.33L44,6h70.35L79.46,41.07H44c0,17.36,0,19.38,0,36.74Z"/><path class="logo_outline" d="M38.06,108.92c0,10,0,24.73,0,34.78L1,180.68V108.92H38.06L72.85,72.83H1V36.36L38.06,1h70.35L73.49,36.09H38.06c0,17.36,0,19.38,0,36.74Z"/></g></g>
                </svg>
                <span class="hidden"><?php bloginfo('name'); ?> | Portfolio</span>
            </a>
            <div>
                <input type="checkbox" id="menu">
                <label class="menu_icon" for="menu" id="burger">
                    <span class="hidden">Navigation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="35" height="35" viewBox="0 0 24 24" class="burger_menu"><line class="gone" x1="6" y1="12" x2="23" y2="12"/><line class="down" x1="1" y1="4" x2="23" y2="4"/><line class="up" x1=1 y1="20" x2="23" y2="20"/></svg>
                </label>
                <nav>
                    <h2 class="hidden" aria-level="2" role="heading"><?= __('Navigation principale', 'fr'); ?></h2>
                    <ul class="nav_list">
                        <?php foreach (fr_getMenu('main') as $item): ?>
                            <li class="nav_item"><a href="<?= $item->url; ?>" class="nav_link"><?= $item->label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>