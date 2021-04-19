<?php
/**
 * Template Name: Студийная фотосъемка
 *
 */
?>
<?php
get_header();
?>

    <section class="first__block first__block--rent first__block--presenter first__block--videos">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-photo-banner.jpg" alt="image" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_field('zagolovok_svadebnaya_fotosemka', 306); ?></h1>
                        <p><?php the_field('podzagolovok_v_shapku', 306); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <div class="last__events last__events--animal">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php the_field('zagolovok_studijnaya_fotosemka', 306); ?></p>
                        <h4 class="block__title"><?php the_field('podzagolovok_studijnaya_fotosemka', 306); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events__wrap">
            <?php
            if( have_rows('fotosessii_kejsy',306) ):
                while( have_rows('fotosessii_kejsy',306) ) : the_row();
                    $title = get_sub_field('zagolovok_fotosesii',306);
                    $content = get_sub_field('opisanie_fotosesii',306);
                    $image = get_sub_field('kartinka_fotosesii',306);
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

    <section class="third__block third__block--photo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="third__inner" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg.jpg" alt="image" class="desk__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image" class="mob__image">
                        <h4 class="third__title"><?php the_field('opisanie', 306); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work__steps">
        <img src="img/steps-bg.jpg" alt="image" class="steps__bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php the_field('podzagolovok_etapy_fotosemki', 306); ?></p>
                        <h4 class="block__title"><?php the_field('zagolovok_etapy_fotosemki', 306); ?></h4>
                    </div>
                    <div class="work__steps--wrap">
                        <div class="left" data-aos="fade-right">
                            <?php the_field('opisanie_etapy_fotosemki', 306); ?>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                            <div class="works__content">
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/studio-works-image.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('podzagolovok_napishite_nam', 306); ?></p>
            <h4 class="block__title"><?php the_field('zagolovok_napishite_nam', 306); ?></h4>
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
                            <h4><?php the_field('kommercheskaya_fotosemka_zagolovok', 306); ?></h4>
                            <p><?php the_field('kommercheskaya_fotosemka_opisanie', 306); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
?>