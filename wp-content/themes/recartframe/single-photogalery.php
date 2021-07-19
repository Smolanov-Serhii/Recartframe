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
                    <div class="photo__slider slider-single" id="photo__slider">
                        <?php
                            if( have_rows('slajder_dlya_zapisi_fotogalerei') ):

                                // Loop through rows.
                                while( have_rows('slajder_dlya_zapisi_fotogalerei') ) : the_row();

                                    // Load sub field value.
                                    $sub_value = get_sub_field('slajd_dlya_zapisi_fotogalereya');
                                    // Do something...
                                        ?>
                        <div class="slider__item" data-thumb="<?php echo $sub_value ?>">
                            <img src="<?php echo $sub_value ?>" alt="<?php the_title();?>">
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
                    <div class="slider-nav">
                        <?php
                        if( have_rows('slajder_dlya_zapisi_fotogalerei') ):

                            // Loop through rows.
                            while( have_rows('slajder_dlya_zapisi_fotogalerei') ) : the_row();

                                // Load sub field value.
                                $sub_value = get_sub_field('slajd_dlya_zapisi_fotogalereya');
                                // Do something...
                                ?>
                                <div class="slider__item" data-thumb="<?php echo $sub_value ?>">
                                    <img src="<?php echo $sub_value ?>" alt="<?php the_title();?>">
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
            $('.slider-single').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                adaptiveHeight: true,
                infinite: false,
                useTransform: true,
                speed: 400,
                cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            });

            $('.slider-nav')
                .on('init', function(event, slick) {
                    $('.slider-nav .slick-slide.slick-current').addClass('is-active');
                })
                .slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    centerMode: true,
                    dots: false,
                    arrows: false,
                    focusOnSelect: false,
                    infinite: true,
                    variableWidth: true,
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                        }
                    }, {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
                        }
                    }, {
                        breakpoint: 420,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    }]
                });

            $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
                $('.slider-nav').slick('slickGoTo', currentSlide);
                let currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
                $('.slider-nav .slick-slide.is-active').removeClass('is-active');
                $(currrentNavSlideElem).addClass('is-active');
            });

            $('.slider-nav').on('click', '.slick-slide', function(event) {
                event.preventDefault();
                let goToSingleSlide = $(this).data('slick-index');
                $('.slider-single').slick('slickGoTo', goToSingleSlide);
            });
        });
    </script>

<?php
get_footer();
?>