<?php
/**
 * Template Name: Фотогалерея-страница
 * Template Post Type: photogalery
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Recartframe
 */

get_header();
?>
    <div class="page__inner blog__inner single__photo--inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="photo__slider" id="photo__slider">
                        <?php
                            if( have_rows('slajder_dlya_zapisi_fotogalerei') ):

                                // Loop through rows.
                                while( have_rows('slajder_dlya_zapisi_fotogalerei') ) : the_row();

                                    // Load sub field value.
                                    $sub_value = get_sub_field('slajd_dlya_zapisi_fotogalereya');
                                    // Do something...
                                        ?>
                        <div class="slider__item" data-thumb="<?php echo $sub_value ?>">
                            <a href="<?php echo $sub_value ?>" class="viewbox">
                                <img src="<?php echo $sub_value ?>" alt="<?php the_title();?>">
                            </a>
                        </div>
                        <?php
                        // End loop.
                        endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;
                        ?>
                    </div>
                    <div class="photo__content">
                        <h4><?php the_title();?></h4>
                        <?php the_field('opisanie_dlya_otdelnoj_straniczy_videogalerei');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="related__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top__wrap" data-aos="fade-up">
                            <div class="titles">
                                <p class="uppertitle"><?php the_field('podzagolovok_dlya_razrabatyvaem_brending', 'options');?></p>
                                <h4><?php the_field('zagolovok_podobnye_zapisi', 'options');?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel related__slider" id="related__slider">
                <?php
                $args = array(
                    'post_type' => 'photogalery',
                    'showposts' => "16", //сколько показать статей
                    'orderby' => "menu_order", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        if( get_field('otkryvat_li_otdelnuyu_straniczu') ) {
                            $addclass = '';
                        } else {
                            $addclass = 'frized fresco';
                        }
                        ?>
                        <div class="blog__item <?php echo $addclass?>" href="<?php echo the_field('kartinka_dlya_oblozhki_na_straniczu_fotogalereya');?>">
                            <div class="thumb__wrap">
                                <?php
                                if( get_field('otkryvat_li_otdelnuyu_straniczu') ) {
                                    ?>
                                    <a href="<?php the_permalink();?>>" class="item__link"><?php the_field('podrobnee','options');?></a>
                                    <?php
                                }
                                ?>
                                <img src="<?php echo the_field('kartinka_dlya_oblozhki_na_straniczu_fotogalereya');?>" alt="<?php the_title();?>">
                            </div>
                        </div>
                        <?php
                    }
                }
                wp_reset_query(); ?>

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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(document).ready(function($) {
            //Single product slider
            $("#photo__slider").lightSlider({
                gallery: true,
                currentPagerPosition: 'bottom',
                item: 1,
                controls: true,
                ThumbWidth: 120,
                thumbItem: 9,
            });
            //Viewbox
            $(".viewbox").viewbox();
        });
    </script>

<?php
get_footer();
?>