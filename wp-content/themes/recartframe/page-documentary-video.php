<?php
/**
 * Template Name: Документальное видео
 *
 */
?>
<?php
get_header();
$post_id = get_the_ID();
?>

    <section class="first__block first__block--rent first__block--presenter first__block--videos">
        <img src="<?php echo the_field('kartinka_v_shapku', $post_id); ?>" alt="<?php the_field('zagolovok_v_shapku_reklamnoe_video', $post_id); ?>" class="main__banner">
        <?php
        $vodeoitem = get_field('video_v_shapku', $post_id);
        if ($vodeoitem){
            ?>
            <video autoplay muted loop class="main__banner main__banner--video">
                <source src="<?php echo $vodeoitem; ?>" type="video/mp4">
            </video>
            <?php
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_field('zagolovok_v_shapku_reklamnoe_video', $post_id); ?></h1>
                        <p><?php the_field('podzagolovok_v_shapku_reklamnoe_video', $post_id); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <div class="page__inner blog__inner video__galley--inner ad__inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top__wrap" data-aos="fade-up">
                        <div class="titles">
                            <p class="uppertitle"><?php the_field('zagolovok_primery_video', $post_id); ?></p>
                            <h1><?php the_field('podzagolovok_primery_video', $post_id); ?></h1>
                        </div>
                    </div>
                    <div class="videos__wrap" data-aos="fade-up">
                        <?php
                        if( have_rows('primery_video', $post_id) ):
                            while( have_rows('primery_video', $post_id) ) : the_row();
                                $title = get_sub_field('zagolovok_primera');
                                $image = get_sub_field('karptinka_oblozhki');
                                $link = get_sub_field('ssylka_na_video');
                                $content = get_sub_field('czena_primera');
                                ?>
                                <div class="video__item">
                                    <div class="thumb__wrap">
                                        <img src="<?php echo $image;?>" alt="<?php echo $title;?>" class="video__banner">
                                        <a href="<?php echo $link;?>" class="fresco play__video--item"></a>
                                    </div>
                                    <h4><?php echo $title;?></h4>
                                    <p><?php echo $content;?></p>
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

        <section class="work__steps">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/steps-bg.jpg" alt="image" class="steps__bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block__titles--wrap" data-aos="fade-up">
                            <p class="uppertitle"><?php the_field('zagolovok_etapy_fotosemki', $post_id); ?></p>
                            <h4 class="block__title"><?php the_field('podzagolovok_etapy_fotosemki', $post_id); ?></h4>
                        </div>
                        <div class="work__steps--wrap">
                            <div class="left" data-aos="fade-right">
                                <ol class="steps__list">
                                    <?php
                                    if( have_rows('perechen_etapov', $post_id) ):
                                        while( have_rows('perechen_etapov', $post_id) ) : the_row();
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
                                if( have_rows('perechen_etapov', $post_id) ):
                                    while( have_rows('perechen_etapov', $post_id) ) : the_row();
                                        $image = get_sub_field('izobrazhenie_dlya_etapa');
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

        <div class="videos__category">
            <div class="block__titles--wrap" data-aos="fade-up">
                <p class="uppertitle"><?php the_field('zagolovok_primery_video', $post_id); ?></p>
                <h4 class="block__title"><?php the_field('podzagolovok_nashi_priemushhestva', $post_id); ?></h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cats__wrap" data-aos="fade-up">
                            <?php
                            $counter = 1;
                            if( have_rows('perechen_preimushhestv_reklamnoe_video', $post_id) ):
                                while( have_rows('perechen_preimushhestv_reklamnoe_video', $post_id) ) : the_row();
                                    $title = get_sub_field('zagolovok_ediniczy');
                                    $image = get_sub_field('ikonka_ediniczy');
                                    $content = get_sub_field('opisanie_ediniczy');
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
        </div>
    </div>

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle">отложите все и просто</p>
            <h4 class="block__title">Заказать проект</h4>
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
                        <a href="#" class="brief__button">Заполнить бриф</a>
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
                            <h4><?php the_field('zagolovok_blok_pod_formoj', $post_id); ?></h4>
                            <p><?php the_field('opisanie_blok_pod_formoj', $post_id); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
?>