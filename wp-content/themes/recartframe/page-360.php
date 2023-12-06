<?php
/**
 * Template Name: Обзор 360
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
    <section class="first__block first__block--rent first__block--presenter first__block--videos first__block-360">
        <?php
        $link360 = get_field('v_shapku_360', $post_id);
        if ($link360){
            ?>
            <iframe class="main__banner" src="<?php echo $link360;?>" width="100%" height="100%" style="border: none;"></iframe>
            <?php
        } else {
            ?>
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
    <div class="last__events last__events--child last__events last__events--child-360">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php echo the_field('zagolovok_studijnaya_fotosemka', $post_id); ?></p>
                        <h4 class="block__title"><?php echo the_field('podzagolovok_studijnaya_fotosemka', $post_id); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events__wrap">
            <?php
            if( have_rows('tipy_studijnaya_fotosemka', $post_id) ):
                while( have_rows('tipy_studijnaya_fotosemka', $post_id) ) : the_row();
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
    <div class="page__inner blog__inner video__galley--inner ad__inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top__wrap" data-aos="fade-up">
                        <div class="titles">
                            <p class="uppertitle"><?php the_field('nadzagolovok_obzory_360', $post_id); ?></p>
                            <h1><?php the_field('zvgolovok_bloka_obzory_360', $post_id); ?></h1>
                        </div>
                    </div>
                    <div class="videos__wrap" data-aos="fade-up">
                        <?php
                        if( have_rows('perechen_obzorov', $post_id) ):
                            while( have_rows('perechen_obzorov', $post_id) ) : the_row();
                                $title = get_sub_field('nazvanie_obroza');
                                $link = get_sub_field('ssylka_na_obzor');
                                ?>
                                <div class="video__item">
                                    <div class="thumb__wrap">
                                        <iframe src="<?php echo $link;?>" width="100%" height="100%" style="border: none;"></iframe>
                                    </div>
                                    <h4><?php echo $title;?></h4>
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

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('otlozhite_vse_i_prosto','options');?></p>
            <h4 class="block__title"><?php the_field('svyazhites_s_nami','options');?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form__wrap" data-aos="fade-up">
                        <?php echo do_shortcode( '[contact-form-7 id="181" title="Контактная форма 1"]' ); ?>
                        <a href="<?php the_field('vyberite_straniczu_kviza', $post_id)?>" class="brief__button"><?php echo the_field('nadpis_zapolnit_brif','options')?></a>
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