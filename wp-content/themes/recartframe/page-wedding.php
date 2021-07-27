<?php
/**
 * Template Name: Свадебная фотосьемка
 *
 */
?>
<?php
get_header();
?>

    <section class="first__block first__block--rent first__block--presenter first__block--videos">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/wedding-banner.jpg" alt="image" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_field('zagolovok_svadebnaya_fotosemka', 301); ?></h1>
                        <p><?php the_field('podzagolovok_v_shapku', 301); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <div class="last__events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php the_field('zagolovok_studijnaya_fotosemka', 301); ?></p>
                        <h4 class="block__title"><?php the_field('podzagolovok_studijnaya_fotosemka', 301); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events__wrap">
            <?php
            if( have_rows('fotosessii_kejsy') ):
                while( have_rows('fotosessii_kejsy') ) : the_row();
                    $title = get_sub_field('zagolovok_fotosesii');
                    $content = get_sub_field('opisanie_fotosesii');
                    $image = get_sub_field('kartinka_fotosesii');
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
            else :
            endif;
            ?>
        </div>
    </div>

    <section class="third__block third__block--wedding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="third__inner" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-wedding-bg.jpg" alt="image" class="desk__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image" class="mob__image">
                        <div class="top"><?php the_field('podzagolovok', 301); ?></div>
                        <h4 class="third__title"><?php the_field('zagolovok', 301); ?></h4>
                        <?php the_field('opisanie', 301); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work__steps">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/steps-bg.jpg" alt="image" class="steps__bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php the_field('podzagolovok_etapy_fotosemki', 301); ?></p>
                        <h4 class="block__title"><?php the_field('zagolovok_etapy_fotosemki', 301); ?></h4>
                    </div>
                    <div class="work__steps--wrap">
                        <div class="left" data-aos="fade-right">
                            <?php the_field('opisanie_etapy_fotosemki', 301); ?>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/wed-steps.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php the_field('zagolovok_nashi_czeny', 301); ?></p>
                        <h4 class="block__title"><?php the_field('podzagolovok_nashi_czeny', 301); ?></h4>
                    </div>
                    <div class="pricing__wrap" data-aos="fade-up">
                        <?php
                        if( have_rows('odna_zapis_czeny') ):
                            while( have_rows('odna_zapis_czeny') ) : the_row();
                                $title = get_sub_field('nazvanie_czeny');
                                $price = get_sub_field('czena');
                                $time = get_sub_field('vremya');
                                $desc = get_sub_field('opisanie_czeny');
                                $under = get_sub_field('tekst_pod_czenoj');
                                ?>
                                <div class="pricing__item">
                                    <div class="inner">
                                        <div class="top"> <?php echo $title;?></div>
                                        <h4> <?php echo $price;?></h4>
                                        <div class="timing"> <?php echo $time;?></div>
                                        <div class="description">
                                            <?php echo $desc;?>
                                        </div>
                                        <div class="order__photo"><?php the_field('nadpis_zakazat', 'options'); ?></div>
                                    </div>
                                    <p> <?php echo $under;?></p>
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
    </section>

    <section class="addition__service">
        <div class="container">
            <div class="row">
                <div class="block__titles--wrap" data-aos="fade-up">
                    <p class="uppertitle"><?php the_field('nadpis_tak-zhe_rekomenduem', 'options'); ?></p>
                    <h4 class="block__title"><?php the_field('nadpis_dopolnitelnye_uslugi',  'options'); ?></h4>
                </div>
                <div class="col-md-12">
                    <div class="addition__items">
                        <?php
                        if( have_rows('vid_syomki_edinicza') ):
                            while( have_rows('vid_syomki_edinicza') ) : the_row();
                                $title = get_sub_field('zagolovok_odnoj_zapisi');
                                $subtitle = get_sub_field('podzagolovok_odnoj_zapisi');
                                $link = get_sub_field('ssylka_dlya_zapisi');
                                ?>
                                <a href="<?php echo $link;?>" class="addition__item">
                                    <h4><?php echo $title;?></h4>
                                    <p><?php echo $subtitle;?></p>
                                </a>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="blog__inner blog__inner--wedding">
        <div class="related__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top__wrap">
                            <div class="titles">
                                <p class="uppertitle"><?php the_field('podzagolovok_zhivopisnyj_konstancz', 301); ?></p>
                                <h4><?php the_field('zagolovok_zhivopisnyj_konstancz', 301); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel related__slider" id="related__slider--wedding">
                <?php
                if( have_rows('perechen_zhivopisnyj_konstancz') ):
                    while( have_rows('perechen_zhivopisnyj_konstancz') ) : the_row();
                        $title = get_sub_field('zagolovok_na_odnu_zapis');
                        $image = get_sub_field('kartinka_na_odnu_zapis');
                        $link = get_sub_field('ssylka_na_odnu_zapis');
                        $itemlnk = get_field('podrobnee', 'options');
                        ?>
                        <div class="blog__item">
                            <?php
                            $newclass = "";
                            if (!$link){
                                $newclass = 'non-before';
                            }
                            ?>
                            <div class="thumb__wrap <?php echo $newclass?>">
                                <?php
                                if ($link){
                                    echo '<a href="' . $link .  '" class="item__link">' . $itemlnk . '</a>';
                                }
                                ?>

                                <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                            </div>
                            <a href="<?php echo $link;?>" class="description">
                                <p><?php echo $title;?></p>
                            </a>
                        </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>

    <section class="seventh__block seventh__block--alternate">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('podzagolovok_napishite_nam', 301); ?></p>
            <h4 class="block__title"><?php the_field('zagolovok_napishite_nam', 301); ?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form__wrap">
                        <?php echo do_shortcode('[contact-form-7 id="1673" title="Большая форма"]')?>
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
                            <h4><?php the_field('kommercheskaya_fotosemka_zagolovok', 301); ?></h4>
                            <p><?php the_field('kommercheskaya_fotosemka_opisanie', 301); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="custom-popup">
    <div class="custom-popup__inner">
        <div class="custom-popup__close">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.951013 23.5784L23.5784 0.95096L24.9926 2.36517L2.36523 24.9926L0.951013 23.5784Z" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39341 0.979181L25.0208 23.6066L23.6066 25.0208L0.979197 2.39339L2.39341 0.979181Z" fill="black"/>
            </svg>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="1782" title="Форма заявки на услугу"]')?>
    </div>
</div>

<?php
get_footer();
?>


