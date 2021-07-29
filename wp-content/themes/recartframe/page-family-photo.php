<?php
/**
 * Template Name: Семейная фотосъемка
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
        <img src="<?php echo the_field('kartinka_v_shapku', 309); ?>" alt="<?php echo the_field('zagolovok_v_shapku', 309); ?>" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php echo the_field('zagolovok_v_shapku', 309); ?></h1>
                        <p><?php echo the_field('podzagolovok_v_shapku', 309); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <div class="last__events last__events--animal">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap">
                        <p class="uppertitle"><?php echo the_field('zagolovok_semejnye_czennosti', 309); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_semejnye_czennosti', 309); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events__wrap">
            <?php
            if( have_rows('perechen_czennostej') ):
                while( have_rows('perechen_czennostej') ) : the_row();
                    $title = get_sub_field('zagolovok_zapisi');
                    $image = get_sub_field('kartinka_zapisi');
                    $content = get_sub_field('opisanie_zapisi');
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

    <section class="third__block third__block--photo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="third__inner" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg.jpg" alt="image" class="desk__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image" class="mob__image">
                        <h4 class="third__title"><?php echo the_field('tekst_v_blok', 309); ?></h4>
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
                    <div class="block__titles--wrap">
                        <p class="uppertitle"><?php echo the_field('zagolovok_etapy_fotosyomki', 309); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_etapy_fotosyomki', 309); ?></h4>
                    </div>
                    <div class="work__steps--wrap">
                        <div class="left" data-aos="fade-right">
                            <ol class="steps__list">
                                <?php
                                if( have_rows('perechen_etapov') ):
                                    while( have_rows('perechen_etapov') ) : the_row();
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
                            if( have_rows('perechen_etapov') ):
                                while( have_rows('perechen_etapov') ) : the_row();
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

    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php echo the_field('zagolovok_stoimost_fotosemki', 309); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_stoimost_fotosemki', 309); ?></h4>
                    </div>
                    <div class="pricing__wrap" data-aos="fade-up">
                        <?php
                        if( have_rows('perechen_stoimostej') ):
                            while( have_rows('perechen_stoimostej') ) : the_row();
                                $title = get_sub_field('nazvanie_paketa');
                                $price = get_sub_field('czena_paketa');
                                $time = get_sub_field('dlitelnojst_paketa');
                                $desc = get_sub_field('opisanie_paketa');
                                $under = get_sub_field('opisanie_pod_paketom');
                                ?>
                                <div class="pricing__item">
                                    <div class="inner">
                                        <div class="top"> <?php echo $title;?></div>
                                        <h4> <?php echo $price;?></h4>
                                        <div class="timing"> <?php echo $time;?></div>
                                        <div class="description">
                                            <p><?php echo $desc;?></p>
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

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php echo the_field('nadzagolovok_s_formoj', 309); ?></p>
            <h4 class="block__title"><?php echo the_field('zagolovok_bloka_s_formoj', 309); ?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form__wrap" data-aos="fade-up">
                        <?php echo do_shortcode( '[contact-form-7 id="181" title="Контактная форма 1"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seo__text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="seo__inner">
                        <div class="seo__text--content" data-aos="fade-up">
                            <h4><?php echo the_field('zagolovok_bloka_pod_formoj', 309); ?></h4>
                            <p><?php echo the_field('opisanie_bloka_pod_formoj', 309); ?></p>
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