<?php
/**
 * Template Name: Главная
 *
 */
?>
<?php
get_header();
?>

<section class="first__block" id="first__block" href="#second__block">
    <img src="<?php the_field('kartinka_v_shapku_glavnoj'); ?>" alt="<?php the_field('zagolovok_dlya_verhnego_banera'); ?>" class="main__banner main__banner--image">
    <video autoplay muted loop class="main__banner main__banner--video">
        <source src="<?php the_field('video_v_shapku_glavnoj'); ?>" type="video/mp4">
    </video>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main__titles" data-aos="fade-up">
                    <h1><?php the_field('zagolovok_dlya_verhnego_banera'); ?></h1>
                    <p><?php the_field('podzagolovok_dlya_banera'); ?></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /section -->

<section class="second__block" id="second__block">
    <div class="block__titles--wrap" data-aos="fade-up">
        <p class="uppertitle"><?php the_field('nadzagolovok_filmografiya'); ?></p>
        <h4 class="block__title"><?php the_field('zagoolvok_bloka_filmografiya'); ?></h4>
    </div>
    <div class="second__wrap">
        <div class="left" data-aos="fade-right">
            <div class="video__wrap fresco" href="<?php echo the_field('ssylka_na_video'); ?>">
                <img src="<?php echo the_field('kartinka_dlya_zastavki_v_bloke_filmografiya'); ?>" alt="<?php the_field('zagolovok_v_shapke_straniczy'); ?>" class="film__banner">
                <div class="play__film--video"></div>
            </div>
        </div>
        <div class="right" data-aos="fade-left">
            <div class="description">
                <?php echo the_field('opisanie_bloka_filmografiya'); ?>
            </div>
            <a href="<?php the_field('ssylka_na_knopku_filmografii'); ?>" class="more__works--button"><?php echo the_field('nadpis_na_knopke_pokazat_bolshe'); ?></a>
        </div>
    </div>
</section>

<section class="third__block" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="third__inner">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg.jpg" alt="image" class="desk__image">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image" class="mob__image">
                    <h4 class="third__title"><?php echo the_field('tekst_v_blok_tyomnyj_blok'); ?></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fourth__block">
    <div class="block__titles--wrap" data-aos="fade-up">
        <p class="uppertitle"><?php the_field('nadzagolovok_bloka_fotografiya', 13); ?></p>
        <h4 class="block__title"><?php the_field('zagolovok_dlya_bloka_fotografii', 13); ?></h4>
    </div>
    <div class="">
        <div class="fourth__inner__container">
            <?php

            // Check rows exists.
            if( have_rows('slajder_dlya_fotografiya') ):

                // Loop through rows.
                while( have_rows('slajder_dlya_fotografiya') ) : the_row();

                    // Load sub field value.
                    $sub_text = get_sub_field('opisanie_bloka_fotografiya');
                    $imagebig = get_sub_field('bolshoe_izobrazhenie_bloka_fotografiya');
                    $imagesmall = get_sub_field('malenkaya_fotografiya_blokka_fotografiya');
                    $imagetext = get_sub_field('izobrazhenie_teksta_bloka_fotografiya');
                    $imagelink = get_sub_field('ssylka_na_knopku_fotografii');
                    // Do something...
                    ?>
                    <div class="fourth__inner__slide fourth__inner">
                        <div class="left">
                            <div class="description">
                                <?php echo $sub_text; ?>
                            </div>
                            <a href="<?php echo $imagelink; ?>" class="more__works--button"><?php echo the_field('pokazat_bolshe', 'options'); ?></a>
                        </div>
                        <div class="right">
                            <img src="<?php echo $imagebig; ?>" alt="<?php the_field('zagolovok_dlya_bloka_fotografii', 13); ?>" class="photo__image">
                            <img src="<?php echo $imagesmall; ?>" alt="<?php the_field('zagolovok_dlya_bloka_fotografii', 13); ?>" class="small__image">
                            <img src="<?php echo $imagetext; ?>" alt="<?php the_field('zagolovok_dlya_bloka_fotografii', 13); ?>" class="word__image">
                        </div>
                    </div>
                <?php
                    // End loop.
                endwhile;

            else :
                // Do something...
            endif;
            ?>
        </div>
        <div class="fourth__inner__navigate">
            <div class="left">

            </div>
            <div class="right">

            </div>
        </div>
    </div>
</section>

<section class="fifth__block" data-aos="fade-up">
    <div class="block__titles--wrap">
        <p class="uppertitle"><?php the_field('nadzagolovok_bloka_otzyvy', 13); ?></p>
        <h4 class="block__title"><?php the_field('zagolovok_bloka_otzyvy', 13); ?></h4>
    </div>
    <?php echo do_shortcode( '[testimonial_view id="1"]' ); ?>
</section>

<section class="sixth__block" data-aos="fade-up">
    <img src="<?php echo get_template_directory_uri() ?>/dist/img/services-main-bg.jpg" alt="image" class="services__main--bg">
    <img src="<?php echo get_template_directory_uri() ?>/dist/img/services-main-bg-mobile.jpg" alt="image" class="services__main--bg--mob">
    <div class="block__titles--wrap" data-aos="fade-up">
        <?php echo the_field('opisanie_nad_zagolovkom', 13);?>
        <h4 class="block__title"><?php echo the_field('zagolovok_dlya_bloka_uslugi', 13);?></h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services__wrap" data-aos="fade-up">
                    <div class="service__item">
                        <div class="num">01</div>
                        <h4><a href="<?php echo the_field('ssylka_na_straniczu_fotosmka', 13);?>"><?php the_field('zagolovok_fotosmka', 13);?></a></h4>
                        <?php echo the_field('opisanie_fotosemka', 13);?>
                    </div>
                    <div class="service__item">
                        <div class="num">02</div>
                        <h4><a href="<?php echo the_field('ssylka_na_straniczu_videosemka', 13);?>"><?php the_field('zagolovok_videosemka', 13);?></a></h4>
                        <?php echo the_field('opisanie_videosemka', 13);?>
                    </div>
                    <div class="service__item">
                        <div class="num">03</div>
                        <h4><a href="<?php echo the_field('ssylka_na_straniczu_dop_uslugi', 13);?>"><?php the_field('zagolovok_dop_uslugi', 13);?></a></h4>
                        <?php echo the_field('opisanie_dop_uslugi', 13);?>
                    </div>
                    <div class="service__item">
                        <div class="num">04</div>
                        <h4><a href="<?php echo the_field('ssylka_na_straniczu_svetomuzyka', 13);?>"><?php the_field('zagolovok_svetomuzyka', 13);?></a></h4>
                        <?php echo the_field('opisanie_svetomuzyka', 13);?>
                    </div>
                </div>
                <a href="<?php echo get_permalink(64); ?>" class="more__services"><?php the_field('podrobnee','options');?></a>
            </div>
        </div>
    </div>
</section>

<section class="seventh__block">
    <div class="block__titles--wrap" data-aos="fade-up">
        <p class="uppertitle"><?php the_field('nadpis_nad_formoj', 13); ?></p>
        <h4 class="block__title"><?php the_field('zaglovok_nad_formoj', 13); ?></h4>
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