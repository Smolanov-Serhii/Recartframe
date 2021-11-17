<?php
/**
 * Template Name: Фотосьемка
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
    <section class="first__block first__block--rent first__block--presenter first__block--videos" href="#second__block"
             id="first__block">
        <img src="<?php echo the_field('kartinka_v_shapku_fotosemka', 75); ?>" alt="<?php the_title(); ?>"
             class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo the_field('podzagolovok_v_shapku_fotosemka', 75); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->


    <div class="videos__category videos__category--photo" id="second__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php echo the_field('podzagolovok_dlya_kotegorii_fotosemok', 75); ?></p>
            <h4 class="block__title"><?php echo the_field('zagolovok_dlya_boka_kotegorii_fotosemok', 75); ?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cats__wrap" data-aos="fade-up">
                        <?php
                        if( have_rows('perechen_kategorij', $post_id) ):
                            $counter = 1;
                            while( have_rows('perechen_kategorij', $post_id) ) : the_row();
                                $title = get_sub_field('nazvanie_kategorii');
                                $image = get_sub_field('ikonka_kategorii');
                                $lnk = get_sub_field('ssylka_na_kategoriyu');
                                $marker = get_sub_field('skryt');
                                if($marker != "true"){
                                    ?>
                                    <div class="item">
                                        <div class="top">
                                            <div class="number"><?php echo $counter;?></div>
                                            <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                                        </div>
                                        <h4>
                                            <a href="<?php echo $lnk;?>"><?php echo $title;?></a>
                                        </h4>
                                    </div>
                                    <?php
                                    $counter ++;
                                }
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="third__block third__block--photo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="third__inner" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg.jpg" alt="image"
                             class="desk__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image"
                             class="mob__image">
                        <h4 class="third__title"><?php echo the_field('tmnyj_blok_fotosyomka', 75); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fourth__block fourth__block--photos">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php echo the_field('zagolovok_vse_iznutri', 75); ?></p>
            <h4 class="block__title"><?php echo the_field('podzagolovok_vse_iznutri', 75); ?></h4>
        </div>
        <div class="fourth__inner">
            <div class="left" data-aos="fade-right">
                <div class="description">
                    <?php echo the_field('blok_opisaniya_vsyo_iznutri', 75); ?>
                </div>
                <blockquote><?php echo the_field('czytata_vsyo_iznutri', 75); ?></blockquote>
            </div>
            <div class="right" data-aos="fade-left">
                <img src="<?php echo the_field('bolshaya_kartinka', 75); ?>" alt="image" class="photo__image">
                <img src="<?php echo the_field('malenkaya_kartinka', 75); ?>" alt="image" class="small__image">
                <img src="<?php echo the_field('kartinka_tekst', 75); ?>" alt="image" class="word__image">
            </div>
        </div>
    </section>

    <div class="blog__inner">
        <div class="related__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top__wrap">
                            <div class="titles">
                                <p class="uppertitle"><?php the_field('podzagolovok_dlya_razrabatyvaem_brending', 'options'); ?></p>
                                <h4>
                                    <a href="http://recartframe.com/photogallery/"><?php the_field('zagolovok_podobnye_zapisi', 'options'); ?></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel related__slider" id="related__slider">
                <?php
                $args = array(
                    'posts_per_page' => 10,
                    'post_type' => 'photogalery',
                    'orderby' => "menu_order", //сортировка по дате
                    'caller_get_posts' => 1
                );

                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <div class="blog__item">
                        <div class="thumb__wrap">
                            <a href=" <?php the_permalink(); ?>"
                               class="item__link"><?php the_field('podrobnee', 'options'); ?></a>
                            <img src="<?php the_field('kartinka_dlya_oblozhki_na_straniczu_fotogalereya'); ?>">
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <?php
            wp_reset_postdata();
            }
            wp_reset_query(); ?>

        </div>
    </div>
    </div>

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('nadzagolovok_formy_svyazi', 75); ?></p>
            <h4 class="block__title"><?php the_field('zagolovok_formy_svyazi', 75); ?></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form__wrap" data-aos="fade-up">
                        <?php echo do_shortcode('[contact-form-7 id="181" title="Контактная форма 1"]'); ?>
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
                            <h4><?php the_field('zagolovok_stoimost_fotosemki', 75); ?></h4>
                            <p><?php the_field('podzagolovok_stoimost_fotosemki', 75); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>