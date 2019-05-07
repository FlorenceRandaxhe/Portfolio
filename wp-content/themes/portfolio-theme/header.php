<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Florence Randaxhe">
    <meta name="description" content="Portfolio de Florence Randaxhe, Web designer">
    <meta name="keywords" content="Portfolio, web design, web designer, Florence Randaxhe">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/public/css/main.css">
    <link rel="icon" type="image/png" href="<?= asset_path('/public/assets/icon.png'); ?>">

    <!--[if lt IE9]>
    <script src="./dist/html5shiv-printshiv.js"></script>
    <script src="./dist/html5shiv.js"><script>
    <![endif]-->
</head>
<body>
    <header class="header header_home">
        <div class="header_wrapper">

            <h1 aria-level="1" role="heading">
                <a href="<?= get_home_url(); ?>">
                    <svg class="header_logo" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 114.39 185.66" width="70" height="113">
                        <g>
                            <g>
                                <path class="logo_fill" d="M44,113.9c0,10,0,24.73,0,34.78L7,185.66V113.9H44L78.82,77.81H7V41.33L44,6h70.35L79.46,41.07H44c0,17.36,0,19.38,0,36.74Z"/>
                                <path class="logo_outline" d="M38.06,108.92c0,10,0,24.73,0,34.78L1,180.68V108.92H38.06L72.85,72.83H1V36.36L38.06,1h70.35L73.49,36.09H38.06c0,17.36,0,19.38,0,36.74Z"/>
                            </g>
                        </g>
                    </svg>
                    <span class="hidden">Florence Randaxhe | Portfolio</span>
                </a>
            </h1>


            <div class="nav_container">

                    <input type="checkbox" id="menu"/>
                    <label class="menu_icon" for="menu" id="burger">
                        <span class="hidden">Navigation</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                             class="burger_menu">
                            <line x1="6" y1="12" x2="23" y2="12"/>
                            <line x1="1" y1="6" x2="23" y2="6"/>
                            <line x1=1 y1="18" x2="23" y2="18"/>
                        </svg>
                    </label>

                <nav>
                    <h2 class="hidden" aria-level="2" role="heading">Navigation principale</h2>

                    <ul class="nav_list">
                        <?php foreach (portfolio_getMenu('main') as $item): ?>

                            <li class="nav_item">
                                <a href="<?= $item -> url; ?>" class="nav_link"><?= $item -> label; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Only on homepage -->
        <?php if ( is_front_page() ): ?>

        <div class="hero">
            <div class="hero_wrapper">

                <div class="hero_content">
                    <p>
                        <a href="<?= fr_get_page_url('template-about.php'); ?>"
                           title="&Agrave; propos de Florence Randaxhe"><span><?php bloginfo('name'); ?></span></a>
                        <em class="underline">Web designer</em>
                    </p>
                </div>

                <div class="hero_scroll">
                    <a href="#work" class="scroll_down">
                        Scroll
                    </a>
                </div>
            </div>
        </div>

            <div class="hero_canvas">
                <canvas id="canvas"></canvas>
            </div>

        <?php else : endif; ?>

    </header>