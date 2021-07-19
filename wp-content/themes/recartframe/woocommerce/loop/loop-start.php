<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="page__inner blog__inner shop__inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top__wrap aos-init aos-animate" data-aos="fade-up">
                    <div class="titles">
                        <p class="uppertitle"><?php the_field('art_studio','option');?></p>
                        <h1><?php the_field('nadpis_magazin','option');?></h1>
                    </div>
                    <div class="sorting">
                        <div class="cats__wrap">
                            <?php
                            $parentid = get_queried_object_id();
                            $args = array(
                                'parent' => 53
                            );
                            $terms = get_terms( 'product_cat', $args );
                            if ( $terms ) {
                                foreach ( $terms as $term ) {
                                    echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
                                    echo $term->name;
                                    echo '</a>';
                                }
                            }
                            ?>
                        </div>
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>
                </div>
                <div class="blog__content aos-init aos-animate">

