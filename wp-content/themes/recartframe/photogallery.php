<?php
/**
 * Template Name: Фотогалерея
 *
 */
?>
<?php
get_header();
?>


  <div class="page__inner blog__inner photogallery__inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ajax-container">
          <div class="top__wrap" data-aos="fade-up">
            <div class="titles">
              <p class="uppertitle"><?php the_field('art_studio','options');?></p>
              <h1><?php the_title();?></h1>
            </div>
<!--            <div class="sorting">-->
<!--              <p class="default">--><?php //the_field('pokazat_vse','options');?><!--</p>-->
<!--            </div>-->
          </div>

          <div class="photogallery__wrap">
              <?php
              $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $counter_item = 1;
              $counter_lit = 1;
              $args = array(
                  'posts_per_page' => 16,
                  'post_type' => 'photogalery',
                  'orderby' => "menu_order", //сортировка по дате
                  'paged'          => $current_page,
                  'caller_get_posts' => 1
              );

              $my_query = new wp_query($args);
              if ($my_query->have_posts()) {
                  while ($my_query->have_posts()) {
                      $my_query->the_post();
                      if( $counter_item == 1 ) {
                          echo '<div class="photorow-'. $counter_lit .'">';
                      }
                      if( get_field('otkryvat_li_otdelnuyu_straniczu') ) {
                          $addclass = '';
                      } else {
                          $addclass = 'frized fresco';
                      }
                      ?>
                      <div class="photogallery__item <?php echo $addclass?>" href="<?php echo the_field('kartinka_dlya_oblozhki_na_straniczu_fotogalereya');?>">
                          <img src="<?php echo the_field('kartinka_dlya_oblozhki_na_straniczu_fotogalereya');?>" alt="<?php the_title();?>">
                            <?php
                                if( get_field('otkryvat_li_otdelnuyu_straniczu') ) {
                                    ?>
                                    <a href="<?php the_permalink();?>" class="more"><?php the_field('podrobnee','options');?></a>
                                    <?php
                                }
                            ?>
                      </div>
                      <?php
                          if( $counter_item == 4 ) {
                              echo '</div>';
                              $counter_item = 1;
                              if( $counter_lit == 2 ) {
                                  $counter_lit = 1;
                              } else {
                                  $counter_lit ++;
                              }
                          } else {
                              $counter_item ++;
                          }

                      ?>
                  <?php }
                  if( $counter_item == 4 ) {
                      echo '</div>';
                  }

                  $total_pages = $my_query->max_num_pages;
                  if ($total_pages > 1){
                      ?>
                      <div class="pagination-ajax" style="display: none;">
                      <?php
                      $current_page = max(1, get_query_var('paged'));
                      echo paginate_links(array(
                          'base' => get_pagenum_link(1) . '%_%',
                          'format' => '/page/%#%',
                          'current' => $current_page,
                          'total' => $total_pages,
                          'prev_text'    => __('« prev'),
                          'next_text'    => __('next »'),
                      ));
                      ?>
                      </div>
                      <?php
                  }

                  wp_reset_postdata();
              }
              wp_reset_query(); ?>

          </div>
          <div class="loadmore__photos"><?php the_field('pokazat_bolshe','options');?></div>
        </div>
      </div>
    </div>
  </div><!-- /page__inner -->

  <section class="seventh__block">
    <div class="block__titles--wrap" data-aos="fade-up">
        <p class="uppertitle"><?php the_field('otlozhite_vse_i_prosto','options');?></p>
        <h4 class="block__title"><?php the_field('svyazhites_s_nami','options');?></h4>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="form__wrap" data-aos="fade-up">
                <?php echo do_shortcode( '[contact-form-7 id="181" title="Контактная форма 1"]' ); ?>
            </div>
        </div>
      </div>
    </div>
  </section>
    <script>
        $( document ).ready(function() {
            var triger = $('<div class="loadmore__photos"><?php the_field('pokazat_bolshe','option');?></div>');
            var nextlink = $('.next.page-numbers').attr('href');
            if ($(".photogallery__wrap").length) {
                $('.ajax-container').on('click', '.loadmore__photos', function () {
                    console.log('clicked');
                    $('.loader-js').addClass('visible');
                    $('.loadmore__photos').remove();
                    $.ajax({
                        url: nextlink,
                        success: function (data) {
                            dataelem = $(data).find('.photogallery__wrap .photorow-1, .photogallery__wrap .photorow-2');
                            $('.photogallery__wrap').append(dataelem);
                            if ($(data).find('.next.page-numbers').length) {
                                $('.photogallery__wrap').append(triger);
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