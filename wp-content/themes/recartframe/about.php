<?php
/**
 * Template Name: О нас
 *
 */
?>
<?php
get_header();
?>
    <section class="first__block first__block--rent first__block--about" href="#second__block" id="first__block">
        <img src="<?php echo the_field('kartinka_v_shapku_straniczy', 18); ?>" alt="image" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_field('zagolovok_v_shapku', 18); ?></h1>
                        <p><?php the_field('podzagolovok_v_shapku', 18); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <section class="videos__category videos__category--about" id="second__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('zagolovok_priemushhestva', 18); ?></p>
            <h4 class="block__title"><?php the_field('podzagolovok_priemushhestva', 18); ?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cats__wrap" data-aos="fade-up">
                        <?php
                        $counter = 1;
                        if( have_rows('perechen_preimushhestv') ):
                            while( have_rows('perechen_preimushhestv') ) : the_row();
                                $title = get_sub_field('zagolovok_preimushhestva');
                                $image = get_sub_field('ikonka_preimushhestva');
                                $content = get_sub_field('opisanie_preimushhestva');
                                ?>
                                <div class="item">
                                    <div class="top">
                                        <div class="number"><?php echo $counter;?></div>
                                        <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                                    </div>
                                    <h4><?php echo $title;?></h4>
                                    <p><?php echo $content;?></p>
                                </div>
                                <?php
                                $counter ++;
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about__description">
        <div class="left">
            <img src="<?php the_field('kartinka_o_nas', 18); ?>" alt="<?php the_field('zagolovok_o_nas', 18); ?>">
        </div>
        <div class="right">
            <div class="block__titles--wrap">
                <p class="uppertitle"><?php the_field('zagolovok_o_nas', 18); ?></p>
                <h4 class="block__title"><?php the_field('podzagolovok_o_nas', 18); ?></h4>
            </div>
            <div class="description__text">
                <?php the_field('opisanie_o_nas', 18); ?>
            </div>
        </div>
    </section>

    <section class="about__instagram">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap">
                        <p class="uppertitle"><?php the_field('zagolovok_instagram', 18); ?></p>
                        <h4 class="block__title"><?php the_field('podzagolovok_instagram', 18); ?></h4>
                    </div>
                    <div class="instagram__inner">
                        <?php
                        if( have_rows('perechen_instragram') ):
                            while( have_rows('perechen_instragram') ) : the_row();
                                $image = get_sub_field('izobrazhenie_instagram');
                                $link = get_sub_field('ssylka_na_rabtu_instagram');
                                ?>
                                <div class="instagram__item">
                                    <a href="<?php echo $link;?>">
                                        <img src="<?php echo $image;?>" alt="instagram">
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
        </div>
    </section>

    <section class="about__clients">
        <div class="block__titles--wrap">
            <p class="uppertitle"><?php the_field('zagolovok_klienty', 18); ?></p>
            <h4 class="block__title"><?php the_field('podzagolovok_klienty', 18); ?></h4>
        </div>
        <div class="clients__inner">
            <div class="left">
                <?php the_field('opisanie_klienty', 18); ?>
            </div>
            <div class="right">
                <?php
                if( have_rows('logotipy_klientov') ):
                    while( have_rows('logotipy_klientov') ) : the_row();
                        $image = get_sub_field('kartinka_logotipaa');
                        ?>
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/cl1.png" alt="image">
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('nadzagolovok_dlya_formy', 18); ?></p>
            <h4 class="block__title"><?php the_field('zagolovok_dlya_formy', 18); ?></h4>
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
<?php
get_footer();
?>