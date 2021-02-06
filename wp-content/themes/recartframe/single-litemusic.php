<?php
/**
 *
 *
 */
?>
<?php
get_header();
?>

    <section class="first__block first__block--rent" id="first__block" href="#second__block">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/rent-banner.jpg" alt="image" class="main__banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->

    <section class="lights__rent--catalog" id="second__block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle">выберите любую</p>
                        <h4 class="block__title">Каталог техники</h4>
                    </div>
                    <div class="rent__inner" data-aos="fade-up">
                        <?php
                        $args = array(
                            'post_type' => 'technic',
                            'showposts' => "", //сколько показать статей
                            'orderby' => "menu_order", //сортировка по дате
                            'caller_get_posts' => 1);
                        $my_query = new wp_query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                ?>
                                <div class="rent__item">
                                    <div class="left">
                                        <div class="thumb">
                                            <img src="<?php echo the_field('kartinka_dlya_tehniki');?>" alt="<?php the_title();?>">
                                        </div>
                                        <div class="titles">
                                            <h4><?php the_title();?></h4>
                                            <p><?php the_field('opisanie_tehniki');?></p>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="price"><?php the_field('czena_za_tehniku');?> / <?php the_field('edinicza_vremeni_dlya_arendy');?></div>
                                        <a href="#" class="rent__order--button">Заказать</a>
                                    </div>
                                </div>
                            <?php }
                        }
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fourth__block fourth__block--rent">
        <div class="fourth__inner">
            <div class="left" data-aos="fade-right">
                <div class="block__titles--wrap">
                    <p class="uppertitle">все изнутри</p>
                    <h4 class="block__title">Как заказать технику?</h4>
                </div>
                <div class="description">
                    <p>Вы можете зарезервировать приборы с помощью заполнения формы или электронным письмом на нашу почту info@gerete. Чтобы забронировать устройства светомузыки, необходимо указать в форме или письме следующие данные:</p>
                    <ol>
                        <li>тип арендуемых приборов;</li>
                        <li>день аренды. Желательно указать также время;</li>
                        <li>дата сдачи техники;</li>
                        <li>ваши имя, адрес и номер телефона.</li>
                    </ol>
                    <blockquote>
                        Для нас нет перерывов и выходных — в RecArtFrame аренда звука и света доступна ежедневно. С нашей помощью вы откроете новые грани восприятия и ощутите на себе настоящий цвет музыки.
                    </blockquote>
                </div>
            </div>
            <div class="right" data-aos="fade-left">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/rent-photo-image.jpg" alt="image" class="photo__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/rent-small-image.jpg" alt="image" class="small__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/rent-word-image.png" alt="image" class="word__image">
            </div>
        </div>
    </section>

    <section class="form__order--rent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block__titles--wrap" data-aos="fade-up">
                        <p class="uppertitle">заполните форму</p>
                        <h4 class="block__title">Я хотел бы арендовать </h4>
                    </div>
                    <div class="form__wrap" data-aos="fade-up">
                        <form action="#">
                            <div class="form__checkboxes">
                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr1">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr1" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr2">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr2" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr3">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr3" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr4">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr4" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr5">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr5" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr6">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr6" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr7">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr7" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label class="rent__checkbox" for="pr7">
                    <p>Provence-Aix-en 3</p>
                    <span>299,99€</span>
                  </label class="rent__checkbox">
                  <input type="checkbox" id="pr8" />
                </span>
                            </div>
                            <div class="form__inner--container">
                <span class="wpcf7-form-control-wrap">
                  <label for="name__input">В какой день планируете получить (дата/время)</label>
                  <input type="text" id="time__input" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label for="name__input">В какой день планируете вернуть (дата/время)</label>
                  <input type="text" id="timer__input" />
                </span>
                                <span class="wpcf7-form-control-wrap">
                  <label for="name__input">Фамилия, Имя</label>
                  <input type="text" id="name__input" />
                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                  <label for="name__input">Сообщение</label>
                  <textarea></textarea>
                </span>
                                <div class="column__wrap">
                  <span class="wpcf7-form-control-wrap">
                  <label for="phone__input">Адрес</label>
                  <input type="text" id="adress__input" />
                </span>
                                    <span class="wpcf7-form-control-wrap">
                  <label for="phone__input">Phone</label>
                  <input type="text" id="phone__input" />
                </span>
                                    <span class="wpcf7-form-control-wrap">
                  <label for="email__input">EMAIL ADDRESS *</label>
                  <input type="text" id="email__input" />
                </span>
                                </div>
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
                            <h4>Аренда светомузыки</h4>
                            <p>Светомузыка — настоящее искусство, которое доступно лишь избранным. Только мастер способен совместить звуковые ощущения и световое восприятие, чтобы достичь синестезии. Наши устройства обеспечивают первосортное слияние зрительных образов и музыкального сопровождения. Никакого хаоса — только звуки и цвета, которые изливаются в унисон. Если вы хотите получить подлинную синхронизацию изображения и музыки, то можете смело резервировать приборы от RecArtFrame. Расширяем визуальные возможности и границы представлений о музыке и цвете.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
?>