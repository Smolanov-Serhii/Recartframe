<?php
/**
 * Template Name: Живая музыка
 *
 */
?>
<?php
get_header();
$post_id = get_the_ID();
?>

    <section class="first__block first__block--rent first__block--presenter first__block--videos">
        <img src="<?php echo the_field('kartinka_v_shapku_straniczy', $post_id); ?>" alt="<?php the_field('zagolovok_v_shapku', $post_id); ?>" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_field('zagolovok_v_shapku', $post_id); ?></h1>
                        <p><?php the_field('podzagolovok_v_shapku', $post_id); ?></p>
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
                        <p class="uppertitle"><?php the_field('zagolovok_poslednie_meropriyatiya', $post_id); ?></p>
                        <h4 class="block__title"><?php the_field('podzagolovok_poslednie_meropriyatiya', $post_id); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="events__wrap">
            <?php
            if( have_rows('perechen_meropriyatij', $post_id) ):
                while( have_rows('perechen_meropriyatij', $post_id) ) : the_row();
                    $title = get_sub_field('zagolovok_meropriyatiya');
                    $image = get_sub_field('izobrazhenie_meropriyatiya');
                    $content = get_sub_field('opisanie_meropritiya');
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

    <section class="fifth__block fifth__block--presenter">
        <div class="block__titles--wrap">
            <p class="uppertitle"><?php the_field('zagolovok_otzyvy', $post_id); ?></p>
            <h4 class="block__title"><?php the_field('podzagolovok_otzyvy', $post_id); ?></h4>
        </div>
        <?php echo do_shortcode( '[testimonial_view id="1"]' ); ?>
    </section>

    <section class="seventh__block seventh__block--alternate">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('podzagolovok_dlya_razrabatyvaem_brending','options');?></p>
            <h4 class="block__title"><?php the_field('nadpis_napishite_nam','options');?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form__wrap" data-aos="fade-up">
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
                            <h4><?php the_field('zagolovok_v_shapku', $post_id); ?></h4>
                            <p><?php the_field('opisanie_bloka_pod_formoj', $post_id); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>