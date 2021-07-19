<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'blog__item', $product ); ?>>
        <div class="thumb__wrap">

            <?php woocommerce_template_loop_add_to_cart( array('class' => 'item__link')); ?>
            <?php the_post_thumbnail("thumbnail-215x300"); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="description">
            <h4> <?php the_title(); ?></h4>
            <p>
                <?php woocommerce_template_loop_price(); ?>
            </p>
        </a>
</div>
