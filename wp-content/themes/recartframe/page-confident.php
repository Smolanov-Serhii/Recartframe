<?php
/**
 * Template Name: Страница конфиденциальности
 *
 */

get_header();
?>
    <div class="single__container blog__inner">
        <div class="top__single" data-aos="fade-up">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

get_footer();
