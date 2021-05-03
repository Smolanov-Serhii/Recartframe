<?php
/**
 * Template Name: Детская фотосъемка
 *
 */
?>
<?php
get_header();
?>

    <section class="first__block first__block--rent first__block--presenter first__block--videos">
        <img src="<?php echo the_field('kartinka_v_shapku_straniczy', 312); ?>" alt="<?php echo the_field('zagolovok_v_shapku', 312); ?>" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php echo the_field('zagolovok_v_shapku', 312); ?></h1>
                        <p><?php echo the_field('podzagolovok_v_shapku', 312); ?></p>
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
                        <p class="uppertitle"><?php echo the_field('zagolovok_bloka_vidy_fotosessij', 312); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_bloka_vidy_fotosessij', 312); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events__wrap">
            <?php
            if( have_rows('perechen_fotossesij') ):
                while( have_rows('perechen_fotossesij') ) : the_row();
                    $title = get_sub_field('zagolovok_dlya_fotosessii');
                    $image = get_sub_field('fotografiya_fotossesii');
                    $content = get_sub_field('opisanie_fotosessii');
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


    <section class="third__block third__block--child">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="third__inner" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg.jpg" alt="image" class="desk__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image" class="mob__image">
                        <h4 class="third__title"><?php echo the_field('opisanie_v_tyomnyj_blok', 312); ?></h4>
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
                        <p class="uppertitle">Этапы фотосЪемки</p>
                        <h4 class="block__title">Как мы работаем?</h4>
                    </div>
                    <div class="work__steps--wrap">
                        <div class="left" data-aos="fade-right">
                            <ol class="steps__list">
                                <?php
                                if( have_rows('etapy_fotosemki_perechen') ):
                                    while( have_rows('etapy_fotosemki_perechen') ) : the_row();
                                        $title = get_sub_field('zagolovok_etapy_fotosemki_perechen');
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
                            if( have_rows('etapy_fotosemki_perechen') ):
                                while( have_rows('etapy_fotosemki_perechen') ) : the_row();
                                    $image = get_sub_field('izobrazhenie_dlya_zapisi');
                                    $title = get_sub_field('zagolovok_etapy_fotosemki_perechen');
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
                        <p class="uppertitle"><?php echo the_field('zagolovok_stoimost_fotosemki', 312); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_stoimost_fotosemki', 312); ?></h4>
                    </div>
                    <div class="pricing__wrap" data-aos="fade-up">
                        <?php
                        if( have_rows('perechen_czen') ):
                            while( have_rows('perechen_czen') ) : the_row();
                                $title = get_sub_field('nazvanie_tarifa');
                                $price = get_sub_field('czena_tarifa');
                                $time = get_sub_field('vremya_dlya_tarifa');
                                $desc = get_sub_field('opisanie_tarifa');
                                $under = get_sub_field('opisanie_pod_tarifom');
                                ?>
                                <div class="pricing__item">
                                    <div class="inner">
                                        <div class="top"> <?php echo $title;?></div>
                                        <h4> <?php echo $price;?></h4>
                                        <div class="timing"> <?php echo $time;?></div>
                                        <div class="description">
                                            <p><?php echo $desc;?></p>
                                        </div>
                                        <a href="#" class="order__photo"><?php the_field('nadpis_zakazat', 'options'); ?></a>
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
            <p class="uppertitle">отложите все и просто</p>
            <h4 class="block__title">Заказать фотосьемку</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form__wrap" data-aos="fade-up">
                        <form action="#">
                            <div class="form__inner--container">
                <span class="wpcf7-form-control-wrap">
                <label for="name__input">Ваше Имя</label>
                <input type="text" id="name__input" />
              </span>
                                <span class="wpcf7-form-control-wrap">
                <label for="phone__input">Телефон</label>
                <input type="text" id="phone__input" />
              </span>
                                <span class="wpcf7-form-control-wrap">
                <label for="email__input">EMAIL</label>
                <input type="text" id="email__input" />
              </span>
                                <input type="text" class="send__button" value="Отправить" />
                            </div>
                        </form>
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
                            <h4><?php echo the_field('zagolovok_v_blok_pod_formoj', 312); ?></h4>
                            <p>
                                <?php echo the_field('opisanie_v_blok_pod_formoj', 312); ?>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
