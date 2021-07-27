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
$productid = wc_get_product(get_the_ID());
$terms = get_the_terms($product->get_id(), 'product-cat');
$variations = $product->get_children();
$first_variation = new WC_Product_Variation( $variations[0]);
$currency_symbol = html_entity_decode( get_woocommerce_currency_symbol() );
$product_type = get_field( 'edinicza_izmereniya');
?>

    <div class="page__inner blog__inner shop__inner single__product--inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top__wrap" data-aos="fade-up">
                        <div class="bread__wrap">
                            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                        </div>
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
                                    <a href="<?php the_post_thumbnail_url('', 'full'); ?>" class="viewbox fresco">
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
                                        <?php
                                        $attributes = $product->get_attributes();
                                        foreach ( $attributes as $attribute ) :
                                            if ( empty( $attribute['is_visible'] ) || ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute['name'] ) ) ) {
                                                continue;
                                            } else {
                                                $has_row = true;
                                            }
                                            ?>
                                            <div class="list__item <?php if ( ( $alt = $alt * -1 ) == 1 ) echo 'alt'; ?>">
                                                <p><?php echo wc_attribute_label( $attribute['name'] ); ?></p>
                                                <?php
                                                    if ( $attribute['is_taxonomy'] ) {

                                                        $values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names' ) );
                                                        echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

                                                    } else {

                                                        // Convert pipes to commas and display values
                                                        $values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
                                                        echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

                                                    }
                                                    ?>
                                            </div>
                                        <?php endforeach; ?>
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
                                <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                    <?php
                                    do_action( 'woocommerce_before_add_to_cart_quantity' );

                                    woocommerce_quantity_input(
                                        array(
                                            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                                            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                                            'input_value' => 1, // WPCS: CSRF ok, input var ok.
                                        )
                                    );

                                    do_action( 'woocommerce_after_add_to_cart_quantity' );
                                    ?>

                                    <button type="submit" id="add-to-cart" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button alt add-to-cart"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                </form>

                            </div>
                        </div>
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

                                <p class="uppertitle"><?php the_field('podzagolovok_dlya_razrabatyvaem_brending','options');?></p>
                                <h4><?php the_field('zagolovok_podobnye_zapisi','options');?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel related__slider" id="related__slider">
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'product',
                    'posts_per_page' => 10,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                ));

                while ( $loop->have_posts() ): $loop->the_post(); ?>
                    <div class="blog__item">
                        <div class="thumb__wrap">
                            <a href="<?php the_permalink(); ?>" class="item__link"><?php the_field('podrobnee','options');?></a>
                            <?php the_post_thumbnail("thumbnail-215x300"); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="description">
                            <h4><?php the_title(); ?></h4>
                            <p class="price">
                                <?php _e("Price:","examp"); ?>
                                <?php woocommerce_template_loop_price(); ?>
                            </p>
                        </a>
                    </div>
                 <?php endwhile; ?>
            </div>
        </div>
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
    </script>

<?php
get_footer();
?>