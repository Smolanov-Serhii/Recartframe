<?php
/**
 * Template Name: Фотосъемка для меню
 *
 */
?>
<?php
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread__wrap">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
    <section class="first__block first__block--rent first__block--presenter first__block--videos">
        <img src="<?php echo the_field('kartinka_v_shapku', 318); ?>" alt="<?php echo the_field('zagolovok_shapki', 318); ?>" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php echo the_field('zagolovok_shapki', 318); ?></h1>
                        <p><?php echo the_field('podzagolovok_shapki', 318); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <div class="last__events last__events--child">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php echo the_field('zagolovok_studijnaya_fotosemka', 318); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_studijnaya_fotosemka', 318); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events__wrap">
            <?php
            if( have_rows('tipy_studijnaya_fotosemka', 318) ):
                while( have_rows('tipy_studijnaya_fotosemka', 318) ) : the_row();
                    $title = get_sub_field('zagolovok_tipa_foto');
                    $image = get_sub_field('kartinka_tipa_foto');
                    $content = get_sub_field('opisanie_tipa_foto');
                    ?>
                    <div class="event__item">
                        <div class="left" data-aos="fade-right">
                            <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                        </div>
                        <div class="right" data-aos="fade-left">
                            <h4><?php echo $title;?></h4>
                            <div class="descr">
                                <?php echo $content;?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>

    <section class="third__block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="third__inner" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg.jpg" alt="image" class="desk__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image" class="mob__image">
                        <h4 class="third__title"><?php echo the_field('opisanie_v_blok', 318); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work__steps">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php echo the_field('zagolovok_etapy_fotosemki', 318); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_etapy_fotosemki', 318); ?></h4>
                    </div>
                    <div class="work__steps--wrap">
                        <div class="left" data-aos="fade-right">
                            <ol class="steps__list">
                                <?php
                                if( have_rows('etapy_fotosemki_etapy', 318) ):
                                    while( have_rows('etapy_fotosemki_etapy', 318) ) : the_row();
                                        $title = get_sub_field('zagolovok_etapa');
                                        ?>
                                        <li><?php echo $title;?></li>
                                    <?php
                                    endwhile;
                                else :
                                endif;
                                ?>
                            </ol>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <?php
                            if( have_rows('etapy_fotosemki_etapy', 318) ):
                                while( have_rows('etapy_fotosemki_etapy', 318) ) : the_row();
                                    $image = get_sub_field('kartinka_etapa');
                                    $title = get_sub_field('zagolovok_etapa');
                                    ?>
                                    <div class="works__content">
                                        <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                                    </div>
                                <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php echo the_field('nadzagolovok_dlya_formy_svyazi', 318); ?></p>
            <h4 class="block__title"><?php echo the_field('zagolovok_dlya_formy_svyazi', 318); ?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form__wrap" data-aos="fade-up">
                        <?php echo do_shortcode( '[contact-form-7 id="181" title="Контактная форма 1"]' ); ?>
                        <a href="<?php the_field('vyberite_straniczu_s_brifom', $post_id)?>" class="brief__button"><?php echo the_field('nadpis_zapolnit_brif','options')?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="seo__text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="seo__inner" data-aos="fade-up">
                        <div class="seo__text--content">
                            <h4><?php echo the_field('zagolovok_blok_pod_formoj', 318); ?></h4>
                            <p><?php echo the_field('opisanie_blok_pod_formoj', 318); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
?>