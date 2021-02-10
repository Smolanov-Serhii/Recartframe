<?php
/**
 * Template Name: Светомузыка
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
                        $taxonomy = 'product_cat';
                        $orderby = 'name';
                        $show_count = 0;      // 1 for yes, 0 for no
                        $pad_counts = 0;      // 1 for yes, 0 for no
                        $hierarchical = 1;      // 1 for yes, 0 for no
                        $title = '';
                        $empty = 1;

                        $args = array(
                        'taxonomy' => $taxonomy,
                        'orderby' => $orderby,
                        'show_count' => $show_count,
                        'pad_counts' => $pad_counts,
                        'hierarchical' => $hierarchical,
                        'title_li' => $title,
                        'hide_empty' => $empty
                        );
                        $all_categories = get_categories($args); ?>

                        <?php foreach ($all_categories as $cat): ?>
                            <?php if ($cat->category_parent == 0): ?>
                                <h2 class="products-section__title"><?php echo $cat->name; ?></h2>
                                <div class="bs-products-loops">
                                    <?php
                                    $products = new WP_Query([
                                        'post_type' => 'product',
                                        'posts_per_page' => 5,
                                        'product_cat' => 'arenda',
                                    ]);
                                    ?>

                                    <?php if ($products->have_posts()): ?>

                                        <?php while ($products->have_posts()): ?><?php $products->the_post(); ?>

                                            <?php do_action('woocommerce_product_loop_start'); ?>

                                            <?php wc_get_template_part('content', 'product'); ?>

                                            <?php do_action('woocommerce_product_loop_end'); ?>

                                        <?php endwhile; ?><?php wp_reset_postdata(); ?>

                                    <?php endif; ?>
                                </div>
                            <?php else: ?>
                                <?php $category_parent = $cat->category_parent; ?>
                                <?php
                                $args2 = array(
                                    'taxonomy' => $taxonomy,
                                    'child_of' => 0,
                                    'parent' => $category_parent,
                                    'orderby' => $orderby,
                                    'show_count' => $show_count,
                                    'pad_counts' => $pad_counts,
                                    'hierarchical' => $hierarchical,
                                    'title_li' => $title,
                                    'hide_empty' => $empty
                                );
                                $sub_cats = get_categories($args2); ?>
                                <?php if ($sub_cats): ?>
                                    <?php foreach ($sub_cats as $sub_category): ?>
                                        <h3><?php echo $sub_category->name; ?></h3>
                                        <div class="bs-products-loops">
                                            <?php
                                            $products = new WP_Query([
                                                'post_type' => 'product',
                                                'posts_per_page' => 5,
                                                'product_cat' => $sub_category->slug
                                            ]);
                                            ?>

                                            <?php if ($products->have_posts()): ?>

                                                <?php while ($products->have_posts()): ?><?php $products->the_post(); ?>

                                                    <?php do_action('woocommerce_product_loop_start'); ?>

                                                    <?php wc_get_template_part('content', 'product'); ?>

                                                    <?php do_action('woocommerce_product_loop_end'); ?>

                                                <?php endwhile; ?><?php wp_reset_postdata(); ?>

                                            <?php else: ?><?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
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