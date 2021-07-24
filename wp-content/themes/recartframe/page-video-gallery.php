<?php
/**
 * Template Name: Видеогалерея
 *
 */
?>
<?php
get_header();
?>


  <div class="page__inner blog__inner video__galley--inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="top__wrap" data-aos="fade-up">
            <div class="titles">
              <p class="uppertitle"><?php echo the_field('shapka', 22)?></p>
              <h1><?php the_title();?></h1>
            </div>
<!--            <div class="sorting">-->
<!--              <p class="default">Default sorting</p>-->
<!--            </div>-->
          </div>
          <div class="videos__wrap" data-aos="fade-up">
              <?php
              $counet = 1;
              $evenodd = '';
              $args = array(
                  'post_type' => 'vigeogalery',
                  'showposts' => "-1", //сколько показать статей
                  'orderby' => "ASC", //сортировка по дате
                  'caller_get_posts' => 1);
              $my_query = new wp_query($args);
              if ($my_query->have_posts()) {
                  while ($my_query->have_posts()) {
                      $my_query->the_post();

                      if ($counet % 2){
                          $evenodd = 'fade-right';
                      } else {
                          $evenodd = 'fade-left';
                      }
                      ?>
                      <div class="video__item" data-aos="<?php echo $evenodd;?>">
                          <div class="thumb__wrap">
                              <img src="<?php echo the_field('kartinka_oblozhki_zapisi');?>" alt="<?php the_title();?>" class="video__banner">
                              <a href="<?php echo the_field('ssylka_na_video');?>" class="play__video--item fresco"></a>
                          </div>
                          <h4><?php the_title();?></h4>
                          <p><?php echo the_field('czena');?></p>
                      </div>
                  <?php
                  $counet ++;
                  }
              }
              wp_reset_query(); ?>
              <div class="show__more--wrap" data-aos="fade-up">
                  <a href="#" class="show__more"><?php the_field('nadpis_pokazat_eshhyo','options');?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="seventh__block">
    <div class="block__titles--wrap" data-aos="fade-up">
      <p class="uppertitle"><?php the_field('podzagolovok_dlya_razrabatyvaem_brending','options');?></p>
      <h4 class="block__title"><?php the_field('nadpis_napishite_nam','options');?></h4>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form__wrap" data-aos="fade-up">
              <?php echo do_shortcode( '[contact-form-7 id="181" title="Малая форма связи"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>