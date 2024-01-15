<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recartframe
 */

?>

<footer role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer__wrap">
                    <div class="left__footer">
                        <div class="left__column">
                            <img src="<?php echo get_template_directory_uri() ?>/dist/img/footer-logo.png" alt="image" class="footer__logo">
                            <p class="underfooter"><?php the_field('underfooter','options');?></p>

                            <p class="copyright"><?php echo date('Y'); ?> <?php the_field('copyright','options');?>
                                <a href="<?php the_field('underfooter_link_url','options');?>" class="underfooter"><?php the_field('underfooter_link','options');?></a>
                            </p>
                        </div>
                        <div class="center__column">
                            <h6><?php the_field('nadpis_menyu','options');?></h6>
                            <nav class="footnav">
                                <?php wp_nav_menu( [
                                    'theme_location'  => 'FooterMenu',
                                    'menu'            => 'FooterMenu',
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
                    </div>
                    <div class="last__column">
                        <h6><?php the_field('nadpis_kontakty','options');?></h6>
                        <a href="mailto:<?php echo get_theme_mod('e-mail'); ?>" class="email"><?php echo get_theme_mod('e-mail'); ?></a>
                        <a href="tel:<?php echo get_theme_mod('phone_1'); ?>" class="phone"><?php echo get_theme_mod('phone_1'); ?></a>
                        <a href="tel:<?php echo get_theme_mod('phone_2'); ?>" class="phone"><?php echo get_theme_mod('phone_2'); ?></a>
                        <a href="#<?php echo get_theme_mod('phone_3'); ?>" class="phone"><?php the_field('vatsap_vajber','options');?><?php echo get_theme_mod('phone_3'); ?></a>
                        <div class="footer__social">
                            <a href="<?php echo get_theme_mod('instagram'); ?>" class="instagram"></a>
                            <a href="<?php echo get_theme_mod('youtube'); ?>" class="youtube"></a>
                            <a href="<?php echo get_theme_mod('facebook'); ?>" class="facebook"></a>
                        </div>
                    </div>
                    <p class="mobile__copyright"><?php echo date('Y'); ?> <?php the_field('2020_vse_prava_zashhishheny','options');?></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /footer -->
<div class="loader-js">
    <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M56.9852 29.9945C58.953 29.9945 60.9208 29.9925 62.8906 29.9945C63.8714 29.9965 64.7056 30.3423 65.3206 31.1203C66.0402 32.031 66.195 33.0563 65.7588 34.1298C65.3287 35.1893 64.5126 35.8004 63.375 35.9673C63.2021 35.9934 63.0252 36.0055 62.8503 36.0055C58.9369 36.0075 55.0234 36.0095 51.112 36.0055C49.8698 36.0035 48.905 35.4808 48.3322 34.367C47.3212 32.4029 48.6859 30.0166 51.0477 29.9965C51.0718 29.9965 51.0939 29.9965 51.118 29.9965C53.0717 29.9945 55.0275 29.9945 56.9852 29.9945Z" fill="black"/>
        <path d="M9.04495 29.9945C10.9886 29.9945 12.9323 29.9945 14.8739 29.9945C15.7302 29.9945 16.494 30.2478 17.099 30.867C17.9592 31.7496 18.2306 32.805 17.8266 33.971C17.4306 35.1189 16.5904 35.7884 15.3804 35.9673C15.2076 35.9934 15.0307 36.0035 14.8558 36.0035C10.9464 36.0055 7.03496 36.0075 3.12553 36.0035C1.70447 36.0015 0.556763 35.1933 0.148736 33.9227C-0.482401 31.9546 0.958761 30.0086 3.07327 29.9965C5.06517 29.9845 7.05506 29.9945 9.04495 29.9945Z" fill="black"/>
        <path d="M11.7785 8.79733C12.6288 8.79733 13.3504 9.10692 13.9493 9.70802C15.2156 10.9766 16.4839 12.2431 17.7502 13.5096C19.2818 15.0415 20.8134 16.5754 22.3471 18.1053C22.9481 18.7044 23.2857 19.4221 23.2717 20.2724C23.2536 21.5068 22.6847 22.4376 21.5772 22.9744C20.4677 23.5111 19.3944 23.3624 18.4095 22.6205C18.2788 22.522 18.1623 22.4054 18.0477 22.2888C15.286 19.5306 12.5323 16.7704 9.77057 14.0162C9.1535 13.399 8.79773 12.6773 8.79371 11.7988C8.78969 10.1382 10.1183 8.80336 11.7785 8.79733Z" fill="black"/>
        <path d="M11.5132 57.1987C10.5504 57.1504 9.6158 56.6056 9.08918 55.4879C8.56257 54.3721 8.71733 53.3006 9.46505 52.3195C9.54344 52.217 9.63389 52.1245 9.72434 52.0341C12.5142 49.2417 15.3061 46.4513 18.0939 43.6609C18.5904 43.1644 19.1733 42.8528 19.8728 42.7522C21.4004 42.5331 22.8898 43.5584 23.2033 45.0662C23.4305 46.1598 23.133 47.1047 22.3451 47.8927C20.4175 49.8247 18.4879 51.7526 16.5583 53.6825C15.6799 54.5611 14.8056 55.4416 13.9232 56.3141C13.3162 56.9172 12.6087 57.2027 11.5132 57.1987Z" fill="black"/>
        <path d="M42.7163 20.2242C42.7364 19.414 43.0359 18.7204 43.6047 18.1455C44.1816 17.5625 44.7625 16.9855 45.3433 16.4065C47.5543 14.1951 49.7653 11.9857 51.9743 9.77234C52.4145 9.33007 52.917 9.01042 53.53 8.86969C54.7943 8.5802 56.0968 9.13104 56.7661 10.2387C57.4354 11.3465 57.3168 12.7597 56.4747 13.7428C56.4063 13.8232 56.332 13.8976 56.2576 13.972C53.4677 16.7624 50.6758 19.5527 47.888 22.3451C47.4016 22.8336 46.8287 23.1412 46.1413 23.2417C44.3162 23.5111 42.6721 22.0657 42.7163 20.2242Z" fill="black"/>
        <path d="M54.4546 57.1987C53.4396 57.2067 52.7703 56.9413 52.1934 56.4327C52.115 56.3624 52.0406 56.288 51.9663 56.2136C49.2086 53.4554 46.4529 50.6972 43.6932 47.943C43.1424 47.3921 42.7947 46.7529 42.7324 45.9688C42.6319 44.7224 43.2932 43.5584 44.4168 43.0156C45.5222 42.4829 46.8448 42.6819 47.7493 43.5162C47.8096 43.5725 47.8679 43.6308 47.9242 43.6891C50.698 46.4634 53.4717 49.2397 56.2475 52.0099C56.7721 52.5326 57.0998 53.1458 57.1782 53.8896C57.3631 55.6688 55.9963 57.1947 54.4546 57.1987Z" fill="black"/>
        <path d="M35.9949 9.00841C35.9949 11.0007 36.0009 12.9929 35.9929 14.9852C35.9889 16.2819 35.2029 17.3896 34.009 17.8198C32.1156 18.4993 30.1116 17.1705 30.0071 15.1601C30.0031 15.0656 30.0011 14.9731 30.0011 14.8787C30.0011 10.9524 29.9971 7.02821 30.0071 3.10198C30.0071 2.76625 30.0493 2.41846 30.1458 2.09882C30.578 0.679505 31.9809 -0.184949 33.4522 0.0301594C34.8854 0.239236 35.9828 1.48968 35.9929 2.95925C36.0049 4.97765 35.9949 6.99403 35.9949 9.00841Z" fill="black"/>
        <path d="M30.0011 56.9896C30.0011 55.0215 30.0051 53.0533 29.9991 51.0832C29.9971 50.1363 30.3207 49.3301 31.0483 48.725C32.0091 47.9269 33.0985 47.758 34.2341 48.2747C35.3698 48.7914 35.9768 49.7282 35.9889 50.9746C36.013 53.6102 35.9969 56.2478 35.9969 58.8834C35.9969 60.2424 36.0009 61.6014 35.9949 62.9604C35.9869 64.436 35.0241 65.6221 33.5909 65.9317C31.8583 66.3076 30.1358 65.0109 30.0152 63.2438C30.0031 63.0569 30.0031 62.8699 30.0031 62.6809C30.0011 60.7872 30.0011 58.8874 30.0011 56.9896Z" fill="black"/>
    </svg>
</div>
<a href="#top-wrapper" class="button-top js-button-top">
    <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 47.5C3.44011e-06 73.7335 21.2665 95 47.5 95C73.7335 95 95 73.7335 95 47.5C95 21.2665 73.7335 -3.44011e-06 47.5 0C21.2665 3.44011e-06 -3.44011e-06 21.2665 0 47.5ZM48.6667 26.7813L48.6667 76L45.3333 76L45.3333 26.7813L39.5 32.7149L37 30.172L47 20L57 30.172L54.5 32.715L48.6667 26.7813Z" fill="#E42A2B"/>
    </svg>
</a>
</body>
</html>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri() . '/src/js/aos.js'?>"></script>
<?php wp_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        //Block show animation
        AOS.init({
            duration: 1000,
            anchorPlacement: 'top',
            easing: 'ease-in-out-sine',
            offset: 50,
            once: true,
            disable: function () {
                var maxWidth = 768;
                return window.innerWidth <= maxWidth;
            }
        });

        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.custom-popup').removeClass('active-popup');
            $('#success-send').addClass('active-popup');
            $('body').removeClass('locked');
            $('.hidden-area .current-page input').val('');
            $('.hidden-area .current-item input').val('');
            $('.hidden-area .current-price input').val('');
            $('#answers-block').val("");
            $('#wpcf7-f2700-o1 input').val("");
            setTimeout(function (){
                $('#success-send').removeClass('active-popup');
            }, 2000);

        }, false );

    });
</script>
<div id="success-send" class="success-send">
    <div class="success-send__inner">
        <?php the_field('nadpis_dannye_uspeshno_otpravleny','options');?>
    </div>
</div>
<div class="cookie-popup">
    <span><?php the_field('tekst_dlya_kuki','options');?></span>
    <div class="close-cookies js-close-cookies">
        <?php the_field('close_kuki','options');?>
    </div>
</div>
</body>
</html>

