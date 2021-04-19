<?php
/**
 * Template Name: Фотосьемка
 *
 */
?>
<?php
get_header();
?>

  <section class="first__block first__block--rent first__block--presenter first__block--videos" href="#second__block" id="first__block">
    <img src="<?php echo get_template_directory_uri() ?>/dist/img/photo-page-banner.jpg" alt="image" class="main__banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main__titles" data-aos="fade-right">
            <h1><?php the_title();?></h1>
            <p><?php echo the_field('podzagolovok_v_shapku_fotosemka', 75);?>"></p>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->


  <div class="videos__category videos__category--photo" id="second__block">
      <div class="block__titles--wrap" data-aos="fade-up">
        <p class="uppertitle"><?php echo the_field('podzagolovok_dlya_kotegorii_fotosemok', 75);?></p>
        <h4 class="block__title"><?php echo the_field('zagolovok_dlya_boka_kotegorii_fotosemok', 75);?></h4>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cats__wrap" data-aos="fade-up">
              <div class="item">
                <div class="top">
                  <div class="number">01</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc1.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('svadebnaya_fotosemka_ssylka', 75);?>"><?php echo the_field('svadebnaya_fotosemka', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">02</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc2.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('studijnaya_fotosemka_ssylka', 75);?>"><?php echo the_field('studijnaya_fotosemka', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">03</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc3.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('detskaya_fotosemka_ssylka', 75);?>"><?php echo the_field('detskaya_fotosemka', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">04</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc4.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('semejnaya_fotosemka_ssylka', 75);?>"><?php echo the_field('semejnaya_fotosemka', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">05</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc5.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('komercheskaya_fotosemka_sslyka', 75);?>"><?php echo the_field('komercheskaya_fotosemka', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">06</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc6.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('predmetnaya_fotosessiya_ssylka', 75);?>"><?php echo the_field('predmetnaya_fotosessiya', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">07</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc7.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('fotosemka_dlya_menyu_sslyka', 75);?>"><?php echo the_field('fotosemka_dlya_menyu', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">08</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc8.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('korporativnaya_semka_ssylka', 75);?>"><?php echo the_field('korporativnaya_semka', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">09</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc9.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('zhivotnye_i_landshaft_ssylka', 75);?>"><?php echo the_field('zhivotnye_i_landshaft', 75);?></a></h4>
              </div>
              <div class="item">
                <div class="top">
                  <div class="number">10</div>
                  <img src="<?php echo get_template_directory_uri() ?>/dist/img/pc10.png" alt="image">
                </div>
                <h4><a href="<?php echo the_field('aerofotosemka_dronom_ssylka', 75);?>"><?php echo the_field('aerofotosemka_dronom', 75);?></a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="third__block third__block--photo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="third__inner" data-aos="fade-up">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg.jpg" alt="image" class="desk__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/third-bg-mobile.jpg" alt="image" class="mob__image">
            <h4 class="third__title"><?php echo the_field('tmnyj_blok_fotosyomka', 75);?></h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fourth__block fourth__block--photos">
    <div class="block__titles--wrap" data-aos="fade-up">
      <p class="uppertitle"><?php echo the_field('zagolovok_vse_iznutri', 75);?></p>
      <h4 class="block__title"><?php echo the_field('podzagolovok_vse_iznutri', 75);?></h4>
    </div>
    <div class="fourth__inner">
      <div class="left" data-aos="fade-right">
        <div class="description">
            <?php echo the_field('blok_opisaniya_vsyo_iznutri', 75);?>
        </div>
        <blockquote><?php echo the_field('czytata_vsyo_iznutri', 75);?></blockquote>
      </div>
      <div class="right" data-aos="fade-left">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/photo-works-image.jpg" alt="image" class="photo__image">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/photo-page-small.jpg" alt="image" class="small__image">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/photo-word.png" alt="image" class="word__image">
      </div>
    </div>
  </section>

  <div class="blog__inner">
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
                  </div>
                  <?php
              }
              wp_reset_postdata();
              ?>
          </div>
      </div>
  </div>

    <section class="seventh__block">
        <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('nadpis_nad_formoj', 13); ?></p>
            <h4 class="block__title"><?php the_field('zaglovok_nad_formoj', 13); ?></h4>
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

  <section class="seo__text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="seo__inner" data-aos="fade-up">
            <div class="seo__text--content">
              <h4><?php the_field('zagolovok_stoimost_fotosemki', 75); ?></h4>
              <p><?php the_field('podzagolovok_stoimost_fotosemki', 75); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>