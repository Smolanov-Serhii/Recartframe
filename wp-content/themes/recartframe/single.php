<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Recartframe
 */

get_header();
?>
    <div class="single__container blog__inner">
        <div class="top__single" data-aos="fade-up">
            <?php the_post_thumbnail('full' ,array('class' => 'single__banner')); ?>
            <div class="single__titles--wrap">
                <div class="single__titles">
                    <p>art studio</p>
                    <h1><?php the_title();?></h1>
                </div>
                <div class="bread__wrap">
                    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                </div>/>
            </div>
        </div>
        <div class="single__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single__text" data-aos="fade-up">
                            <?php the_content();?>
                            <div class="share"><p>Поделится в соцсетях: </p>
                                <?php echo do_shortcode("[indeed-social-media sm_list='fb,tw,li,messenger,whatsapp,telegram' sm_template='ism_template_1' sm_list_align='horizontal' sm_display_counts='false' sm_display_full_name='false' ]");?>
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
                $result = wp_get_recent_posts( [
                    'numberposts'      => 10,
                    'offset'           => 0,
                    'category'         => 0,
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_status'      => 'draft, publish, future, pending, private',
                    'suppress_filters' => true,
                ], OBJECT );
                foreach( $result as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="blog__item">
                        <div class="thumb__wrap">
                            <a href=" <?php the_permalink();?>" class="item__link"><?php the_field('podrobnee','options');?></a>
                            <?php the_post_thumbnail();?>
                        </div>
                        <a href="#" class="description">
                            <h4><?php the_title();?></h4>
                            <p><?php the_excerpt();?></p>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>


<?php

get_footer();
