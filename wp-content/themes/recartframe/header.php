<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recartframe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//www.google-analytics.com/" rel="dns-prefetch">
    <link href="//fonts.googleapis.com" rel="dns-prefetch">
    <link href="//cdnjs.cloudflare.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri() ?>/favicon.png" rel="icon" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!-- wrapper -->
<div class="wrapper" id="top-wrapper">
    <header role="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header__wrap">

                    <?php
                    if (!is_home()) {
                        echo '<a class="header--logo" href="' . get_home_url() . '">';
                    } else {
                        echo "<div class='header--logo'>";
                    }
                    ?>
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/logo.png" alt="logotype"
                             class="main__logo">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/inner-logo.png" alt="logotype"
                             class="inner__logo">
                    <?php
                    if (!is_home()) {
                        echo "</a>";
                    } else {
                        echo "</div>";
                    }
                    ?>

                    <div class="right__header">
                        <?php wp_nav_menu( [
                            'theme_location'  => 'PageMenu',
                            'menu'            => 'PageMenu',
                            'container'       => 'nav',
                            'container_class' => 'header--nav',
                            'container_role'  => 'navigation',
                            'container_id'    => '',
                            'menu_class'      => 'headnav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] );?>

                        <div class="language">
            <span class="lang__holder">
                <span>Ru</span>
              </span>
                            <div class="hidden__lang">
                                <ul class="language-chooser language-chooser-text qtranxs_language_chooser"
                                    id="qtranslate-chooser">
                                    <li class="lang-en">
                                        <a href="#" hreflang="ua" title="en" class="qtranxs_text qtranxs_text_en">
                                            <span>En</span>
                                        </a>
                                    </li>
                                    <li class="lang-de">
                                        <a href="#" hreflang="de" title="English (de)"
                                           class="qtranxs_text qtranxs_text_de">
                                            <span>De</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hamburger">
                            <div class="hamburger__inner"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="menu">
            <nav>
                <?php wp_nav_menu( [
                    'theme_location'  => 'BurgerMenu',
                    'menu'            => 'BurgerMenu',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => '',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );?>
            </nav>
        </div>
    </header><!-- /header -->
    <body <?php body_class(); ?>>

