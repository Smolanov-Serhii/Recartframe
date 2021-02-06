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
                            <p class="copyright"><?php echo date('Y'); ?> <?php the_field('copyright','options');?></p>
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
                        <a href="#<?php echo get_theme_mod('phone_3'); ?>" class="phone"><?php the_field('vatsap_vajber','options');?>: <?php echo get_theme_mod('phone_3'); ?></a>
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
</body>
</html>
<?php wp_footer(); ?>

</body>
</html>
