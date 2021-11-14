<?php
/**
 * Template Name: Светомузыка
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
    <section class="first__block first__block--rent" id="first__block" href="#second__block">
        <img src="<?php echo the_field('shapka_straniczy_копия', $post_id); ?>" alt="image" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <section class="lights__rent--catalog" id="second__block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap">
                        <p class="uppertitle"><?php echo the_field('nadpis_vyberite_lyubuyu', 'option'); ?></p>
                        <h4 class="block__title"><?php echo the_field('nadpis_katalog_tehniki', 'option'); ?></h4>
                    </div>
                    <div class="rent__inner">
                        <?php
                        $args = array(
                            'post_type' => 'rent',
                            'showposts' => "-1", //сколько показать статей
                            'orderby' => "menu_order", //сортировка по дате
                            'caller_get_posts' => 1);
                        $my_query = new wp_query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                $post_id = get_the_ID();
                                $singleimage = get_field('kartinka_tovara', $post_id);
                                $price = get_field('czena_tovara', $post_id);
                                $timeunit = get_field('period_dlya_arendy', $post_id);
                                $excerpt = get_field('kratkoe_opisanie_tovara', $post_id);
                                $content = get_field('polnoe_opisanie_tovara_dlya_arendy', $post_id);
                                $videolink = get_field('ssylka_na_video_dlya_tovara', $post_id);
                                $imagecover = get_field('oblozhka_dlya_video', $post_id);
                                ?>
                                <div class="rent__item" data-cont="<?php echo 'item-' . $post_id; ?>">
                                    <div class="left">
                                        <div class="thumb">
                                            <img src="<?php echo $singleimage; ?>">
                                        </div>
                                        <div class="titles">
                                            <h4><?php the_title(); ?></h4>
                                            <?php echo $excerpt; ?>
                                            <div class="show-more"><?php echo the_field('nadpis_harakteristiki', 'option'); ?>
                                                <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 1L5.5 5L1 1" stroke="#222222" stroke-width="1.2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="price"><?php echo $price; ?> / <?php echo $timeunit; ?></div>
                                        <div class="button rent__order--button">
                                            <span class="unactive"><?php echo the_field('nadpis_vybrat', 'option'); ?></span>
                                            <span class="active"><?php echo the_field('nadpis_vybrano', 'option'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rent__item-absolute" data-contid="<?php echo 'item-' . $post_id; ?>"
                                     style="display: none">
                                    <div class="rent__item-absolute-cont">
                                        <div class="rent__item-absolute-close">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M17.7782 19.1924L0.80763 2.22183L2.22184 0.807617L19.1924 17.7782L17.7782 19.1924Z"
                                                      fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M0.807617 17.7782L17.7782 0.807619L19.1924 2.22183L2.22183 19.1924L0.807617 17.7782Z"
                                                      fill="black"/>
                                            </svg>
                                        </div>
                                        <div class="rent__item-absolute-wrap">
                                            <div class="rent__item-absolute-img">
                                                <?php if( have_rows('kartinki_dlya_slajdera_tovara') ): ?>
                                                    <ul class="slider-main">
                                                        <?php while( have_rows('kartinki_dlya_slajdera_tovara') ): the_row();
                                                            $image = get_sub_field('kartinka_dlya_slajdera');
                                                            ?>
                                                            <li class="slider-main-item">
                                                                <img src="<?php echo $image;?>"
                                                            </li>
                                                        <?php endwhile; ?>
                                                        <?php if($videolink & $imagecover){
                                                            ?>
                                                            <li class="slider-nav-item fresco video-slide" href="<?php echo $videolink;?>">
                                                                <svg width="112" height="147" viewBox="0 0 112 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0 0V146.15L111.6 74.01L0 0ZM13.07 26.15L85.68 74.01L13.07 121.4V26.15Z" fill="#E30613"/>
                                                                </svg>
                                                                <img src="<?php echo $imagecover;?>"
                                                            </li>
                                                            <?php
                                                        }?>
                                                    </ul>
                                                <?php endif; ?>
                                                <?php if( have_rows('kartinki_dlya_slajdera_tovara') ): ?>
                                                    <ul class="slider-nav">
                                                        <?php while( have_rows('kartinki_dlya_slajdera_tovara') ): the_row();
                                                            $image = get_sub_field('kartinka_dlya_slajdera');
                                                            ?>
                                                            <li class="slider-nav-item">
                                                                <img src="<?php echo $image;?>"
                                                            </li>
                                                        <?php endwhile; ?>
                                                        <?php if($videolink  & $imagecover){
                                                            ?>
                                                            <li class="slider-nav-item video-slide">
                                                                <svg width="112" height="147" viewBox="0 0 112 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0 0V146.15L111.6 74.01L0 0ZM13.07 26.15L85.68 74.01L13.07 121.4V26.15Z" fill="#E30613"/>
                                                                </svg>
                                                                <img src="<?php echo $imagecover;?>"
                                                            </li>
                                                            <?php
                                                        }?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                            <h2 class="rent__item-absolute-title"><?php the_title();?></h2>
                                            <div class="rent__item-absolute-price"><?php echo $price; ?> / <?php echo $timeunit; ?></div>
                                            <?php echo $content; ?>
                                            <div class="rent__item-absolute-tech">
                                                <?php if( have_rows('tehnicheskie_harakteristiki') ): ?>
                                                        <?php while( have_rows('tehnicheskie_harakteristiki') ): the_row();
                                                            $name = get_sub_field('nazvanie_harakteristiki');
                                                            $value = get_sub_field('znachenie_harakteritiki');
                                                            ?>
                                                            <div class="tech-item">
                                                                <div class="name"><?php echo $name; ?></div>
                                                                <div class="value"><?php echo $value; ?></div>
                                                            </div>
                                                        <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        }
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {
                if ($('.lights__rent--catalog').length) {
                    $('.lights__rent--catalog .rent__item .thumb, .lights__rent--catalog .rent__item .titles').on('click', function () {
                        let ClickedNav = $(this).closest('.rent__item').data('cont');
                        let NeedElem = $(".rent__item-absolute[data-contid='" + ClickedNav + "']");
                        $('body').addClass('lock');
                        NeedElem.addClass('showed-description');
                        NeedElem.fadeIn(300);

                        $(this).closest('.rent__item').next('.rent__item-absolute').find('.slider-main').slick({
                                slidesToShow: 1,
                                adaptiveHeight: true,
                                slidesToScroll: 1,
                                accesibility: false,
                                draggable: false,
                                swipe: false,
                                touchMove: false,
                                arrows: false,
                                fade: true,
                            });
                        $(this).closest('.rent__item').next('.rent__item-absolute').find('.slider-nav').slick({
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                asNavFor:  $(this).closest('.rent__item').next('.rent__item-absolute').find('.slider-main'),
                                dots: false,
                                arrows: false,
                                variableWidth: true,
                                centerMode: true,
                                focusOnSelect: true
                            });

                    });
                    $('.rent__item-absolute-close').on('click', function () {
                        $(this).closest('.rent__item-absolute').fadeOut(300);
                        $(this).closest('.rent__item-absolute').removeClass('showed-description');
                        $('body').removeClass('lock');
                    });
                    $('.rent__order--button').on('click', function () {
                        $(this).toggleClass('selected');
                    });
                    $('.js-send-custom-rent').on('click', function () {
                        $('#zakaz-box').val(' ');
                        zakaz = "";
                        $(".rent__order--button" ).each(function( index ) {
                            if ( $(this).hasClass("selected") ) {
                                zakaz = zakaz + "позиция: " + $(this).closest('.rent__item').find('h4').html() + "" + "\n";
                            }
                        });
                        $('#zakaz-box').val(zakaz);
                        $('.wpcf7-form-control.wpcf7-submit.send__button').trigger('click');
                    });
                }
            });
        </script>
    </section>
    <section class="form__order--rent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle"><?php echo the_field('nadzagolovok_formy_zakaza',96)?></p>
                        <h4 class="block__title"><?php echo the_field('zagolovok_formy_zakaza',96)?></h4>
                    </div>
                    <div class="form__wrap rent-form" data-aos="fade-up">
                        <?php echo do_shortcode('[contact-form-7 id="1725" title="Форма аренды"]')?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fourth__block fourth__block--rent">
        <div class="fourth__inner">
            <div class="left" data-aos="fade-right">
                <div class="block__titles--wrap">
                    <p class="uppertitle"><?php echo the_field('nadzagolovok_bloka_opisaniya',96)?></p>
                    <h4 class="block__title"><?php echo the_field('zagolovok_bloka_opisaniya',96)?></h4>
                </div>
                <div class="description">
                    <?php echo the_field('opisanie_bloka',96)?>
                </div>
            </div>
            <div class="right" data-aos="fade-left">
                <img src="<?php echo the_field('bolshaya_kartinka',96)?>" alt="image"
                     class="photo__image">
                <img src="<?php echo the_field('menshaya_kartinka',96)?>" alt="image"
                     class="small__image">
                <img src="<?php echo the_field('kartinka_tekst',96)?>" alt="image"
                     class="word__image">
            </div>
        </div>
    </section>


    <section class="seo__text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="seo__inner" data-aos="fade-up">
                        <div class="seo__text--content">
                            <h4><?php echo the_field('zagolovok_bloka_so_skrolom',96)?></h4>
                            <p><?php echo the_field('opisanie_bloka_so_skrolom',96)?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>