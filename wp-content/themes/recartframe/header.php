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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!-- wrapper -->
<div class="cursor">
    <div class="cursor__ball cursor__ball--big ">
        <svg height="30" width="30">
            <circle cx="15" cy="15" r="12" stroke-width="0"></circle>
        </svg>
    </div>

    <div class="cursor__ball cursor__ball--small">
        <svg height="10" width="10">
            <circle cx="5" cy="5" r="4" stroke-width="0"></circle>
        </svg>
    </div>
</div>
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
                            <?php get_sidebar("language"); ?>
                        <?php if (is_page( 'svetomuzyka' ) || is_page( 'magazin' ) ||  is_shop() || is_single()){ ?>
                            <div class="market-icons">
                                <div class="s-header__basket-wr woocommerce">
                                    <?php
                                    global $woocommerce; ?>
                                    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
                                        <svg width="49" height="37" viewBox="0 0 49 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M49 10.1761C48.2051 13.3515 47.4102 16.527 46.6197 19.7045C46.2408 21.2279 45.9054 22.7641 45.4785 24.2745C44.8557 26.4694 43.6928 27.3319 41.3734 27.3362C35.4259 27.3513 29.4762 27.3405 23.5287 27.3427C21.0613 27.3427 18.596 27.347 16.1286 27.3427C13.3302 27.3384 12.1607 26.4909 11.5553 23.7682C10.6951 19.9019 9.97858 16.0056 9.13796 12.135C8.38227 8.6485 7.54164 5.18129 6.71191 1.58749C4.92831 1.58749 3.16213 1.61753 1.39596 1.56818C0.927733 1.55317 0.466044 1.30214 0 1.16053C0 0.945975 0 0.73142 0 0.516865C0.374578 0.347367 0.746978 0.0426986 1.12591 0.0341164C3.08373 -0.0152312 5.04373 0.0341164 7.00156 -0.000212355C7.77684 -0.0130857 8.09262 0.343076 8.24289 1.03823C9.77169 8.12069 11.3136 15.1989 12.8511 22.277C12.8816 22.4165 12.8903 22.5602 12.9208 22.6997C13.5349 25.4911 13.879 25.7635 16.7711 25.7635C24.8245 25.7635 32.8779 25.7635 40.9313 25.7635C43.1178 25.7635 43.4968 25.5297 44.0281 23.4228C45.1344 19.0287 46.1776 14.6196 47.2447 10.2147C47.2948 10.0066 47.3296 9.79422 47.358 9.58181C47.5191 8.34598 47.2447 8.02843 45.999 8.02843C35.6611 8.02629 25.321 8.02843 14.9831 8.02629C14.6564 8.02629 14.2862 8.11855 14.014 7.9984C13.6699 7.84606 13.402 7.52208 13.1037 7.27106C13.4108 6.99643 13.6873 6.67459 14.0358 6.46647C14.2231 6.35491 14.5323 6.43858 14.7849 6.43858C25.088 6.43858 35.3911 6.46004 45.692 6.41498C47.2295 6.40854 48.3597 6.81834 48.9978 8.24299C49 8.88665 49 9.53032 49 10.1761Z" fill="black"/>
                                                <path d="M28.518 12.899C32.5752 12.899 36.6346 12.899 40.6918 12.899C41.0185 12.899 41.3865 12.8197 41.6587 12.942C41.968 13.0814 42.4035 13.414 42.3948 13.65C42.3861 13.9246 41.9963 14.255 41.6914 14.4288C41.4715 14.5533 41.1252 14.4674 40.8355 14.4674C32.6471 14.4674 24.4587 14.4674 16.2702 14.4674C15.9806 14.4674 15.6191 14.5576 15.4187 14.4224C15.1378 14.2314 14.8438 13.8817 14.8111 13.5749C14.7915 13.3797 15.2009 13.0664 15.4819 12.9377C15.7214 12.8282 16.0503 12.899 16.3399 12.899C20.4015 12.899 24.4587 12.899 28.518 12.899Z" fill="black"/>
                                                <path d="M28.6508 19.3335C32.1636 19.3335 35.6785 19.3335 39.1913 19.3335C39.4809 19.3335 39.8098 19.2606 40.0493 19.37C40.3302 19.4987 40.7418 19.812 40.7201 20.0072C40.6874 20.314 40.3847 20.6444 40.1103 20.8569C39.9491 20.9813 39.6203 20.9019 39.3677 20.9019C32.1592 20.9041 24.9508 20.9041 17.7423 20.9019C17.5616 20.9019 17.3264 20.9684 17.2088 20.8826C16.8973 20.653 16.6338 20.3569 16.3529 20.0866C16.6469 19.8377 16.9257 19.3979 17.2393 19.3721C18.3543 19.282 19.4824 19.3314 20.6039 19.3314C23.2891 19.3335 25.97 19.3335 28.6508 19.3335Z" fill="black"/>
                                                <path d="M38.3332 28.9971C40.6199 28.9821 42.4558 30.7393 42.4667 32.9514C42.4775 35.1291 40.5938 36.9979 38.3855 37C36.1489 37.0021 34.3261 35.1784 34.3392 32.9535C34.3501 30.7479 36.1032 29.0121 38.3332 28.9971ZM35.9355 32.9857C35.9355 34.3288 37.0679 35.4359 38.4182 35.4166C39.7183 35.3973 40.8203 34.3116 40.8486 33.0222C40.8791 31.6833 39.7771 30.5784 38.4007 30.5698C37.0113 30.5612 35.9355 31.6147 35.9355 32.9857Z" fill="black"/>
                                                <path d="M14.7457 32.9663C14.7436 30.7607 16.4858 29.0228 18.7224 28.9992C21.0047 28.9756 22.8471 30.7285 22.8667 32.9406C22.8863 35.1162 21.0047 36.9935 18.8008 37C16.5576 37.0064 14.7479 35.2063 14.7457 32.9663ZM16.3399 32.9556C16.3333 34.3159 17.4266 35.4165 18.7899 35.4165C20.1205 35.4165 21.2834 34.2536 21.2573 32.947C21.2333 31.6382 20.1662 30.5933 18.8334 30.5719C17.4353 30.5483 16.3464 31.5889 16.3399 32.9556Z" fill="black"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="49" height="37" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="basket-btn__counter"> <?php echo sprintf($woocommerce->cart->cart_contents_count); ?> </span>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
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

