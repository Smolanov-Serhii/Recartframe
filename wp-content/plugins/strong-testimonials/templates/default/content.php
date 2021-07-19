<?php
/**
 * Template Name: Default
 * Description: The default template.
 */


$continuous_slide = ( isset( $atts['slideshow_settings']['continuous_sliding'] ) && '1' == $atts['slideshow_settings']['continuous_sliding'] ) ? 'true' : 'false';

do_action( 'wpmtst_before_view' );

?>
<div class="owl-carousel reviews__slider" id="reviews__slider">

        <?php do_action( 'wpmtst_before_content', $atts ); ?>

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="slder__item">
                <div class="thumb__wrap">
                    <?php wpmtst_the_thumbnail(); ?>
                </div>
                <div class="right">
                    <div class="descr">
                        <?php wpmtst_the_content(); ?>
                    </div>
                    <h4 class="rev__name"><?php the_field('imya'); ?></h4>
                </div>
            </div>
        <?php endwhile; ?>

</div>

