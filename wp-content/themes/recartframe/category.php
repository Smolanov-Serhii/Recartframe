<?php
/**
 * Template Name: Блог
 *
 */
?>
<?php
get_header();
?>

    <div class="page__inner blog__inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top__wrap" data-aos="fade-up">
                        <div class="titles">
                            <p class="uppertitle"><?php the_field('zagolovok_v_shapke_straniczy'); ?></p>
                            <h1><?php the_field('zagolovok_v_shapke_straniczy'); ?></h1>
                        </div>
                        <div class="sorting">
                            <p class="default">Default sorting</p>
                        </div>
                    </div>
                    <div class="blog__content" data-aos="fade-up">
                        <?php // Display blog posts on any page @ http://m0n.co/l
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                            <div class="blog__item">
                                <div class="thumb__wrap">
                                    <a href="<?php the_permalink();?>" class="item__link"><?php the_field('podrobnee','options');?></a>
                                    <?php the_post_thumbnail();?>
                                </div>
                                <a href="#" class="description">
                                    <h4><?php the_title();?></h4>
                                    <p><?php the_excerpt();?></p>
                                </a>
                            </div>

                        <?php endwhile; ?>

                        <?php if ($paged > 1) { ?>

                            <nav id="nav-posts">
                                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                                <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                            </nav>

                        <?php } else { ?>

                            <nav id="nav-posts">
                                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                            </nav>

                        <?php } ?>

                        <?php wp_reset_postdata(); ?>
                        <div class="show__more--wrap">
                            <a href="#" class="show__more"><?php the_field('pokazat_bolshe','options');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top__wrap">
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
?>