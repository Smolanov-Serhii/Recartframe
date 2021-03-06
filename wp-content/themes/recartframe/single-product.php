<?php
/**
 * Template Name: Товар
 *
 */
?>
<?php
get_header();

the_post();
global $product;
$id = $product->get_id();
global $wp_query;
global $woocommerce;
$current_price = $product->get_price();
$product = wc_get_product(get_the_ID());
$terms = get_the_terms($product->get_id(), 'product-cat');
$variations = $product->get_children();
$first_variation = new WC_Product_Variation( $variations[0]);
$currency_symbol = html_entity_decode( get_woocommerce_currency_symbol() );
$product_type = get_field( 'tip_tovara');
?>

    <div class="page__inner blog__inner shop__inner single__product--inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top__wrap" data-aos="fade-up">
                        <div class="titles">
                            <p class="uppertitle">Art Studio</p>
                            <h1>Shop</h1>
                        </div>
<!--                        <div class="sorting">-->
<!--                            <div class="cats__wrap">-->
<!--                                --><?php
//                                $args = array(
//                                    'taxonomy' => 'product_cat',
//                                    'hide_empty' => false,
//                                );
//                                $product_categories = get_terms( $args );
//
//                                $count = count($product_categories);
//
//                                if ( $count > 0 ){
//                                    foreach ( $product_categories as $product_category ) {
//                                        $thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
//                                        echo  '<a href="' . get_term_link( $product_category ) . '" title="' . $product_category->name . '">' . $product_category->name . '</a>';
//                                    }
//                                }
//                                ?>
<!--                            </div>-->
<!--                            <p class="default">Default sorting</p>-->
<!--                        </div>-->
                    </div>

                    <div class="product__inner">
                        <div class="left" data-aos="fade-right">
                            <div class="product__slider" id="product__slider">
                                <div class="slider__item" data-thumb="<?php the_post_thumbnail_url('', 'full'); ?>">
                                    <a href="<?php the_post_thumbnail_url('', 'full'); ?>" class="viewbox">
                                        <img src="<?php the_post_thumbnail_url('', 'full'); ?>" alt="<?php the_title();?>>">
                                    </a>
                                </div>
                                <?php
                                $attachment_ids = $product->get_gallery_image_ids();
                                foreach ( $attachment_ids as $attachment_id ) {
                                $full_src          = wp_get_attachment_image_src( $attachment_id, 'full' );
                                echo '<div class="slider__item" data-thumb="' . esc_url( $full_src[0] ) . '">';
                                echo '<a href="' . esc_url( $full_src[0] ) . '" class="viewbox">';
                                echo '<img src="' . esc_url( $full_src[0] ) .'">';
                                echo '</a>';
                                echo '</div>';
                                }
                                ?>
                            </div>
                            <?php
                            if($product_type == 'сутки'){
                                ?>
                                <div class="technical__block">
                                    <h4>Технические характеристики</h4>
                                    <div class="characters__list">
                                        <div class="list__item">
                                            <p>Lorem Ipsum is simply</p>
                                            <p>12</p>
                                        </div>
                                        <div class="list__item">
                                            <p>Lorem Ipsum is simply</p>
                                            <p>12</p>
                                        </div>
                                        <div class="list__item">
                                            <p>Lorem Ipsum is simply</p>
                                            <p>12</p>
                                        </div>
                                        <div class="list__item">
                                            <p>Lorem Ipsum is simply</p>
                                            <p>12</p>
                                        </div>
                                        <div class="list__item">
                                            <p>Lorem Ipsum is simply</p>
                                            <p>12</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>

                                <?php
                            }
                            ?>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <h1><?php The_title(); ?></h1>
                            <div class="price"><?php echo $current_price; echo $currency_symbol; echo" / "; echo $product_type;?></div>
                            <div class="description">
                                <?php the_content(); ?>
                            </div>
                            <div class="">
                                <form id="product_buy" method="post" enctype="multipart/form-data">
                                    <div class="">
                                        <div class="quantity__wrap">
                                            <span class="number-minus">-</span>
                                            <?php
                                            woocommerce_quantity_input(array(
                                                'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
                                                'classes'      => apply_filters( 'woocommerce_quantity_input_classes', array( 'custom_input_num' ), $product ),
                                                'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
                                                'input_value' => $product->get_min_purchase_quantity(),
                                            ));
                                            ?>
                                            <span class="number-plus">+</span>
                                        </div>
                                    </div>
                                    <button class="add-to-cart" id="add_to_cart" value="<?php echo esc_attr($first_variation->get_id()); ?>"><?php the_field('dobavit_v_korzinu','options')?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if($product_type == 'сутки'){
                ?>
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
                <?php
            } else {
                ?>
                <div class="related__wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="top__wrap" data-aos="fade-up">
                                    <div class="titles">
                                        <p class="uppertitle">Разрабатываем брендинг</p>
                                        <h4>Related products</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel related__slider" id="related__slider">
                        <?php

                        ?>
                        <div class="blog__item">
                            <div class="thumb__wrap">
                                <a href="#" class="item__link">Подробнее</a>
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog4.jpg" alt="image">
                            </div>
                            <a href="#" class="description">
                                <h4>Provence-en-Aix 2 копия</h4>
                                <p class="price">299,99€</p>
                            </a>
                        </div>
                        <div class="blog__item">
                            <div class="thumb__wrap">
                                <a href="#" class="item__link">Подробнее</a>
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog5.jpg" alt="image">
                            </div>
                            <a href="#" class="description">
                                <h4>Provence-en-Aix 2 копия</h4>
                                <p class="price">299,99€</p>
                            </a>
                        </div>
                        <div class="blog__item">
                            <div class="thumb__wrap">
                                <a href="#" class="item__link">Подробнее</a>
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog1.jpg" alt="image">
                            </div>
                            <a href="#" class="description">
                                <h4>Provence-en-Aix 2 копия</h4>
                                <p class="price">299,99€</p>
                            </a>
                        </div>
                        <div class="blog__item">
                            <div class="thumb__wrap">
                                <a href="#" class="item__link">Подробнее</a>
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog1.jpg" alt="image">
                            </div>
                            <a href="#" class="description">
                                <h4>Provence-en-Aix 2 копия</h4>
                                <p class="price">299,99€</p>
                            </a>
                        </div>
                        <div class="blog__item">
                            <div class="thumb__wrap">
                                <a href="#" class="item__link">Подробнее</a>
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog2.jpg" alt="image">
                            </div>
                            <a href="#" class="description">
                                <h4>Provence-en-Aix 2 копия</h4>
                                <p class="price">299,99€</p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $("#product__slider").lightSlider({
                gallery: true,
                currentPagerPosition: 'bottom',
                item: 1,
                controls: true,
                ThumbWidth: 175,
                thumbItem: 4,
            });
        });

        let col = $('.custom_input_num');
        let plus = $('.number-plus');
        let minus = $('.number-minus');
        plus.click(function() {
            col.val(parseInt(col.val())+1);
            var check = col.val();
            if (check > 1){
                minus.removeClass('disable');
            }
        });
        minus.click(function() {
            var check = col.val();
            if (check > 1){
                col.val(parseInt(col.val())-1);
                minus.removeClass('disable');
            } else {
                minus.addClass('disable');
            }

        });

    </script>

<?php
get_footer();
?>