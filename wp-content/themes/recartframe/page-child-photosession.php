<?php
/**
 * Template Name: Детская фотосъемка
 *
 */
?>
<?php
get_header();
$post_id = get_the_ID();
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
        <img src="<?php echo the_field('kartinka_v_shapku_straniczy', $post_id); ?>" alt="<?php echo the_field('zagolovok_v_shapku', 312); ?>" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1 class="<?php echo the_field('vyberite_czvet_zagolovka'); ?>"><?php the_field('zagolovok_v_shapku', $post_id); ?></h1>
                        <p class="<?php echo the_field('vyberite_czvet_podzagolovka'); ?>"><?php the_field('podzagolovok_v_shapku', $post_id); ?></p>
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
                        <p class="uppertitle"><?php echo the_field('zagolovok_bloka_vidy_fotosessij', $post_id); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_bloka_vidy_fotosessij', $post_id); ?></h4>
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
                        <h4 class="third__title"><?php echo the_field('opisanie_v_tyomnyj_blok', $post_id); ?></h4>
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
                        <p class="uppertitle"><?php echo the_field('zagolovok_etapy_fotosemki', $post_id); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_etapy_fotosemki', $post_id); ?></h4>
                    </div>
                    <div class="work__steps--wrap">
                        <div class="left" data-aos="fade-right">
                            <ol class="steps__list">
                                <?php
                                if( have_rows('etapy_fotosemki_perechen', $post_id) ):
                                    while( have_rows('etapy_fotosemki_perechen', $post_id) ) : the_row();
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
                        <p class="uppertitle"><?php echo the_field('zagolovok_stoimost_fotosemki', $post_id); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_stoimost_fotosemki', $post_id); ?></h4>
                    </div>
                    <div class="pricing__wrap" data-aos="fade-up">
                        <?php
                        if( have_rows('perechen_czen', $post_id) ):
                            while( have_rows('perechen_czen', $post_id) ) : the_row();
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
            <p class="uppertitle"><?php echo the_field('nadzagolovok_formy_svyazi', $post_id); ?></p>
            <h4 class="block__title"><?php echo the_field('zagolovok_dlya_formy_svyazi', $post_id); ?></h4>
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
                    <div class="seo__inner" data-aos="fade-up">
                        <div class="seo__text--content">
                            <h4><?php echo the_field('zagolovok_v_blok_pod_formoj', $post_id); ?></h4>
                            <p>
                                <?php echo the_field('opisanie_v_blok_pod_formoj', $post_id); ?>
                                </p>
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
