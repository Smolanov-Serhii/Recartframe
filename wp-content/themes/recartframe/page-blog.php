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
                            <p class="uppertitle"><?php the_field('podzagolovok_v_shapke_dlya_straniczy'); ?></p>
                            <h1><?php the_field('zagolovok_v_shapke_straniczy'); ?></h1>
                        </div>
                        <div class="sorting">
                            <?php

                            if ($_GET['select'] == 'newest') { $order = "&orderby=date&order=DESC"; $s1 = ' selected="selected"'; }
                            if ($_GET['select'] == 'lastest') { $order = "&orderby=date&order=ASC"; $s2 = ' selected="selected"'; }
                            if ($_GET['select'] == 'title') { $order = "&orderby=title&order=ASC"; $s3 = ' selected="selected"'; }
                            if ($_GET['select'] == 'correct') { $order = "&orderby=modified"; $s4 = ' selected="selected"'; }
                            ?>
                            <form method="get" id="order">
                                <select name="select" onchange='this.form.submit()' style="width:200px">
                                    <option value="newest"<?=$s1?>><?php the_field('nadpis_po_date_snachala_novye', 'option'); ?></option>
                                    <option value="lastest"<?=$s2?>><?php the_field('nadpis_po_date_snachala_starye', 'option'); ?></option>
                                    <option value="title"<?=$s3?>><?php the_field('nadpis_po_zagolovku', 'option'); ?></option>
                                    <option value="correct"<?=$s4?>><?php the_field('nadpis_po_date_izmeneniya', 'option'); ?></option>
                                </select>
                            </form>

                            <?php global $query_string; // параметры базового запроса
                            query_posts($query_string.'&'.$order); // базовый запрос + свои параметры
                            ?>
                        </div>
                    </div>
                    <div class="blog__content" data-aos="fade-up">
                        <?php
                        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $params = array(
                            'paged'          => $current_page,
                            'posts_per_page' => 5,
                            'post_type'      => 'post',
                            'category'      => '4'
                        );
                        query_posts($params);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;

                            while(have_posts()): the_post();
                                ?>
                                <div class="blog__item">
                                    <div class="thumb__wrap">
                                        <a href="<?php the_permalink();?>" class="item__link"><?php the_field('podrobnee','options');?></a>
                                        <?php the_post_thumbnail();?>
                                    </div>
                                    <a href="<?php the_permalink();?>" class="description">
                                        <h4><?php the_title();?></h4>
                                        <p><?php the_excerpt();?></p>
                                    </a>
                                </div>
                            <?php
                            endwhile;

                        wp_reset_postdata();
                        ?>
                        <div class="pagination-ajax" style="display: none;">
                            <?php
                            the_posts_pagination();
                            ?>
                        </div>
                        <?php

                        wp_reset_query();
                        ?>
                        <div class="show__more--wrap" data-aos="fade-up">
                            <div class="show__more"><?php the_field('pokazat_bolshe','options');?></div>
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
                        <a href="<?php the_permalink();?>" class="description">
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

    <script>
        $( document ).ready(function() {
            var nextlink = $('.next.page-numbers').attr('href');
            $(function() {
                $('select').selectric();
            });
            if ($(".blog__content").length) {
                var triger = $('<div class="show__more--wrap"><div class="show__more"><?php the_field('pokazat_bolshe','option');?></div></div>');
                $('.page__inner').on('click', '.show__more', function () {
                        $('.loader-js').addClass('visible');
                        $('.show__more--wrap').remove();
                        $.ajax({
                            url: nextlink,
                            success: function (data) {
                                dataelem = $(data).find('.blog__content .blog__item');
                                $('.blog__content').append(dataelem);
                                if ($(data).find('.next.page-numbers').length) {
                                    $('.blog__content').append(triger);
                                    nextlink = $(data).find('.next.page-numbers').attr('href');
                                }
                                $('.loader-js').removeClass('visible');
                            }
                        });
                });
            }
        });
    </script>

<?php
get_footer();
?>