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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                    <svg class="main__logo" width="306" height="31" viewBox="0 0 306 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="first-group" d="M6.81004 27.2H9.88005V30H0.0500488V27.2H3.10005V4.73001H0.0500488V1.91H12.0701C15.2901 1.91 17.6701 2.48001 19.2101 3.62001C20.7501 4.76001 21.51 6.53 21.51 8.93C21.51 10.48 21.1301 11.77 20.3801 12.81C19.6201 13.85 18.4001 14.74 16.7101 15.49C18.0901 15.9 19.05 16.52 19.58 17.36C20.11 18.2 20.37 19.66 20.37 21.74V27.21H23.45V30H16.67V22.27C16.67 20.02 16.29 18.55 15.53 17.84C14.77 17.14 13.3701 16.78 11.3201 16.78H6.81004V27.2V27.2ZM6.81004 4.73001V13.97H10.83C13.23 13.97 14.97 13.6 16.06 12.87C17.15 12.13 17.69 10.96 17.69 9.35C17.69 7.69 17.17 6.50001 16.14 5.80001C15.11 5.09001 13.34 4.74 10.84 4.74H6.81004V4.73001Z" fill="white"/>
                        <path class="first-group" d="M25.24 30V27.2H28.29V4.73001H25.24V1.91H46.97V9.53H43.66V4.73001H32V13.66H41.75V16.74H32V27.2H43.65V21.7H46.96V30H25.24Z" fill="white"/>
                        <path class="first-group" d="M75.78 21.15C75.06 24.12 73.6201 26.43 71.4901 28.08C69.3501 29.73 66.71 30.56 63.58 30.56C59.43 30.56 56.01 29.19 53.33 26.44C50.64 23.69 49.3 20.2 49.3 15.98C49.3 11.8 50.63 8.33002 53.29 5.55002C55.95 2.78002 59.2901 1.39001 63.3201 1.39001C65.1101 1.39001 66.73 1.66001 68.19 2.20001C69.64 2.74001 70.84 3.52002 71.78 4.55002V1.92001H74.83V10.62H71.94C71.31 8.63002 70.29 7.14001 68.9 6.14001C67.51 5.15001 65.73 4.65002 63.56 4.65002C60.4 4.65002 57.87 5.68002 55.98 7.73002C54.09 9.78002 53.14 12.53 53.14 15.96C53.14 19.31 54.12 22.03 56.09 24.13C58.06 26.23 60.61 27.27 63.75 27.27C65.84 27.27 67.6001 26.76 69.0201 25.75C70.4401 24.74 71.54 23.2 72.34 21.14H75.78V21.15Z" fill="white"/>
                        <path d="M86.43 27.2V30H76.87V27.2H79.5L87.48 4.73001H84.05V1.91H96.85V4.73001H93.38L101.02 27.2H103.71V30H93.73V27.2H97.08L94.87 20.52H85.27L83.04 27.2H86.43V27.2ZM86.12 17.72H94.16L90.79 7.91001C90.78 7.86001 90.75 7.78001 90.71 7.66001C90.42 6.82001 90.23 6.07 90.14 5.39C90.06 5.78 89.98 6.17 89.88 6.54C89.78 6.91 89.65 7.37 89.47 7.92L86.12 17.72Z" fill="white"/>
                        <path d="M111.05 27.2H114.12V30H104.29V27.2H107.34V4.73001H104.29V1.91H116.31C119.53 1.91 121.91 2.48001 123.45 3.62001C124.99 4.76001 125.75 6.53 125.75 8.93C125.75 10.48 125.37 11.77 124.62 12.81C123.86 13.85 122.64 14.74 120.95 15.49C122.33 15.9 123.29 16.52 123.82 17.36C124.35 18.2 124.61 19.66 124.61 21.74V27.21H127.69V30H120.91V22.27C120.91 20.02 120.53 18.55 119.77 17.84C119.01 17.14 117.61 16.78 115.56 16.78H111.05V27.2V27.2ZM111.05 4.73001V13.97H115.07C117.47 13.97 119.21 13.6 120.3 12.87C121.39 12.13 121.93 10.96 121.93 9.35C121.93 7.69 121.41 6.50001 120.38 5.80001C119.35 5.09001 117.58 4.74 115.08 4.74H111.05V4.73001Z" fill="white"/>
                        <path d="M140.53 27.2H143.61V30H133.75V27.2H136.83V4.73001H131.48V9.76001H128.32V1.91H149.04V9.76001H145.84V4.73001H140.53V27.2V27.2Z" fill="white"/>
                        <path d="M151.02 30V27.2H154.07V4.73001H151.02V1.91H172.75V9.53H169.44V4.73001H157.79V13.66H167.33V16.74H157.79V27.2H161.75V30H151.02Z" fill="white"/>
                        <path d="M179.96 27.2H183.03V30H173.2V27.2H176.25V4.73001H173.2V1.91H185.22C188.44 1.91 190.83 2.48001 192.36 3.62001C193.9 4.76001 194.66 6.53 194.66 8.93C194.66 10.48 194.28 11.77 193.53 12.81C192.77 13.85 191.55 14.74 189.86 15.49C191.24 15.9 192.2 16.52 192.73 17.36C193.26 18.2 193.52 19.66 193.52 21.74V27.21H196.61V30H189.83V22.27C189.83 20.02 189.45 18.55 188.69 17.84C187.93 17.14 186.52 16.78 184.48 16.78H179.97V27.2H179.96ZM179.96 4.73001V13.97H183.98C186.38 13.97 188.12 13.6 189.21 12.87C190.3 12.14 190.84 10.96 190.84 9.35C190.84 7.69 190.32 6.50001 189.29 5.80001C188.25 5.09001 186.49 4.74 183.99 4.74H179.96V4.73001Z" fill="white"/>
                        <path class="second-group" d="M256.67 27.2H259.72V30H250.05V27.2H253.21V4.73001H250.05V1.91H259.1L266.28 21.73L273.65 1.91H282.16V4.73001H279V27.2H282.16V30H272.49V27.2H275.54V5.47001L267.22 27.35H265L256.68 5.47001V27.2H256.67Z" fill="white"/>
                        <path class="second-group" d="M284.25 30V27.2H287.3V4.73001H284.25V1.91H305.98V9.53H302.67V4.73001H291.02V13.66H300.77V16.74H291.02V27.2H302.67V21.7H305.98V30H284.25Z" fill="white"/>
                        <g >
                            <path class="inner" d="M223.22 11.06L231.83 24.32H214.6L223.22 11.06Z" fill="white"/>
                            <path class="main-figure" d="M223.22 0.0400085L203.55 30.31H242.88L223.22 0.0400085ZM223.22 11.06L231.83 24.32H214.6L223.22 11.06Z" fill="white"/>
                        </g>
                    </svg>

                    <svg class="inner__logo" width="306" height="31" viewBox="0 0 306 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="first-group" d="M6.81004 27.2H9.88005V30H0.0500488V27.2H3.10005V4.73001H0.0500488V1.91H12.0701C15.2901 1.91 17.6701 2.48001 19.2101 3.62001C20.7501 4.76001 21.51 6.53 21.51 8.93C21.51 10.48 21.1301 11.77 20.3801 12.81C19.6201 13.85 18.4001 14.74 16.7101 15.49C18.0901 15.9 19.05 16.52 19.58 17.36C20.11 18.2 20.37 19.66 20.37 21.74V27.21H23.45V30H16.67V22.27C16.67 20.02 16.29 18.55 15.53 17.84C14.77 17.14 13.3701 16.78 11.3201 16.78H6.81004V27.2V27.2ZM6.81004 4.73001V13.97H10.83C13.23 13.97 14.97 13.6 16.06 12.87C17.15 12.13 17.69 10.96 17.69 9.35C17.69 7.69 17.17 6.50001 16.14 5.80001C15.11 5.09001 13.34 4.74 10.84 4.74H6.81004V4.73001Z" fill="black"/>
                        <path class="first-group" d="M25.24 30V27.2H28.29V4.73001H25.24V1.91H46.97V9.53H43.66V4.73001H32V13.66H41.75V16.74H32V27.2H43.65V21.7H46.96V30H25.24Z" fill="black"/>
                        <path class="first-group" d="M75.78 21.15C75.06 24.12 73.6201 26.43 71.4901 28.08C69.3501 29.73 66.71 30.56 63.58 30.56C59.43 30.56 56.01 29.19 53.33 26.44C50.64 23.69 49.3 20.2 49.3 15.98C49.3 11.8 50.63 8.33002 53.29 5.55002C55.95 2.78002 59.2901 1.39001 63.3201 1.39001C65.1101 1.39001 66.73 1.66001 68.19 2.20001C69.64 2.74001 70.84 3.52002 71.78 4.55002V1.92001H74.83V10.62H71.94C71.31 8.63002 70.29 7.14001 68.9 6.14001C67.51 5.15001 65.73 4.65002 63.56 4.65002C60.4 4.65002 57.87 5.68002 55.98 7.73002C54.09 9.78002 53.14 12.53 53.14 15.96C53.14 19.31 54.12 22.03 56.09 24.13C58.06 26.23 60.61 27.27 63.75 27.27C65.84 27.27 67.6001 26.76 69.0201 25.75C70.4401 24.74 71.54 23.2 72.34 21.14H75.78V21.15Z" fill="black"/>
                        <path d="M86.43 27.2V30H76.87V27.2H79.5L87.48 4.73001H84.05V1.91H96.85V4.73001H93.38L101.02 27.2H103.71V30H93.73V27.2H97.08L94.87 20.52H85.27L83.04 27.2H86.43V27.2ZM86.12 17.72H94.16L90.79 7.91001C90.78 7.86001 90.75 7.78001 90.71 7.66001C90.42 6.82001 90.23 6.07 90.14 5.39C90.06 5.78 89.98 6.17 89.88 6.54C89.78 6.91 89.65 7.37 89.47 7.92L86.12 17.72Z" fill="black"/>
                        <path d="M111.05 27.2H114.12V30H104.29V27.2H107.34V4.73001H104.29V1.91H116.31C119.53 1.91 121.91 2.48001 123.45 3.62001C124.99 4.76001 125.75 6.53 125.75 8.93C125.75 10.48 125.37 11.77 124.62 12.81C123.86 13.85 122.64 14.74 120.95 15.49C122.33 15.9 123.29 16.52 123.82 17.36C124.35 18.2 124.61 19.66 124.61 21.74V27.21H127.69V30H120.91V22.27C120.91 20.02 120.53 18.55 119.77 17.84C119.01 17.14 117.61 16.78 115.56 16.78H111.05V27.2V27.2ZM111.05 4.73001V13.97H115.07C117.47 13.97 119.21 13.6 120.3 12.87C121.39 12.13 121.93 10.96 121.93 9.35C121.93 7.69 121.41 6.50001 120.38 5.80001C119.35 5.09001 117.58 4.74 115.08 4.74H111.05V4.73001Z" fill="black"/>
                        <path d="M140.53 27.2H143.61V30H133.75V27.2H136.83V4.73001H131.48V9.76001H128.32V1.91H149.04V9.76001H145.84V4.73001H140.53V27.2V27.2Z" fill="black"/>
                        <path d="M151.02 30V27.2H154.07V4.73001H151.02V1.91H172.75V9.53H169.44V4.73001H157.79V13.66H167.33V16.74H157.79V27.2H161.75V30H151.02Z" fill="black"/>
                        <path d="M179.96 27.2H183.03V30H173.2V27.2H176.25V4.73001H173.2V1.91H185.22C188.44 1.91 190.83 2.48001 192.36 3.62001C193.9 4.76001 194.66 6.53 194.66 8.93C194.66 10.48 194.28 11.77 193.53 12.81C192.77 13.85 191.55 14.74 189.86 15.49C191.24 15.9 192.2 16.52 192.73 17.36C193.26 18.2 193.52 19.66 193.52 21.74V27.21H196.61V30H189.83V22.27C189.83 20.02 189.45 18.55 188.69 17.84C187.93 17.14 186.52 16.78 184.48 16.78H179.97V27.2H179.96ZM179.96 4.73001V13.97H183.98C186.38 13.97 188.12 13.6 189.21 12.87C190.3 12.14 190.84 10.96 190.84 9.35C190.84 7.69 190.32 6.50001 189.29 5.80001C188.25 5.09001 186.49 4.74 183.99 4.74H179.96V4.73001Z" fill="black"/>
                        <path class="second-group" d="M256.67 27.2H259.72V30H250.05V27.2H253.21V4.73001H250.05V1.91H259.1L266.28 21.73L273.65 1.91H282.16V4.73001H279V27.2H282.16V30H272.49V27.2H275.54V5.47001L267.22 27.35H265L256.68 5.47001V27.2H256.67Z" fill="black"/>
                        <path class="second-group" d="M284.25 30V27.2H287.3V4.73001H284.25V1.91H305.98V9.53H302.67V4.73001H291.02V13.66H300.77V16.74H291.02V27.2H302.67V21.7H305.98V30H284.25Z" fill="black"/>
                        <g >
                            <path class="inner" d="M223.22 11.06L231.83 24.32H214.6L223.22 11.06Z" fill="#e42a2b"/>
                            <path class="main-figure" d="M223.22 0.0400085L203.55 30.31H242.88L223.22 0.0400085ZM223.22 11.06L231.83 24.32H214.6L223.22 11.06Z" fill="#e42a2b"/>
                        </g>
                    </svg>

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
                        <?php if (is_page( 'magazin' ) ||  is_shop() || is_product()){ ?>
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
                            <div class="hamburger__inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="menu">
            <div class="menu__mob-close">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7782 26.1924L7.80761 9.22181L9.22183 7.80759L26.1924 24.7782L24.7782 26.1924Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.80761 24.7782L24.7782 7.80759L26.1924 9.22181L9.22182 26.1924L7.80761 24.7782Z" fill="white"/>
                </svg>
            </div>
            <?php get_sidebar("language-mob"); ?>
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

