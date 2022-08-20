<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font/flaticon.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
</head>

<body>
    <div class="top-nav">
        <div class="konten-top-nav">
            <div class="top-nav-left">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""> </a>
                </div>
            </div>
            <div class="top-nav-right">
                <div class="konten-top-nav2">
                    <div class="top-nav-right-top">
                        <div class="top-nav-right-socials">
                            <ul>
                                <li>
                                    <a href="tel:<?php pll_e('056132724'); ?>"> <i class="fa fa-phone"></i> <?php pll_e('056132724'); ?> </a>
                                </li>
                                <li><a href="mailto:ozkuvanciunsal@gmail.com"><i class="fa fa-envelope-o"></i> ozkuvanciunsal@gmail.com</a></li>
                                <li class="flex-li">
                                    <a target="_blank" rel="noreferrer" href="https://tr-tr.facebook.com/unsalozkuvanci"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" rel="noreferrer" href="#"><i class="fa fa-youtube"></i></a>
                                    <a target="_blank" rel="noreferrer" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-nav-right-menu">
                            <div class="top-nav-right-menu-icon">
                                <div id="nav-icon1">
                                    <i class="fa fa-globe" aria-hidden="true"></i>

                                </div>
                            </div>
                            <div class="top-nav-right-lang">
                                <?php dynamic_sidebar('widget-area-2'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="top-nav-right-bot">
                        <div id="nav-icon2">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <nav class="mobile-nav">
                            <?php html5blank_nav(); ?>
                        </nav>
                        <div class="top-nav-right-searchbtn">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay">
        <div class="search-overlay-close"></div>
        
        <div class="search-form">
            <form method="get" action="<?php echo home_url(); ?>" role="search" >
                <input type="text" placeholder="Arayın..." name="search" >
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

    </div>
    <div class="side-nav">
        <div class="sidenav-closebtn">X</div>
        <div class="sidenav-content">
            <div class="sidenav-logo">
                logo
            </div>
        </div>
    </div>