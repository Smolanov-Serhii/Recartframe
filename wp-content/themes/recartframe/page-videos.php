<?php
/**
 * Template Name: Видеосъемка
 *
 */
?>
<?php
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread__wrap">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
  <section class="first__block first__block--rent first__block--videos" id="first__block" href="#second__block">
    <img src="<?php echo get_template_directory_uri() ?>/dist/img/videos-banner.jpg" alt="image" class="main__banner main__banner--image">
    <video autoplay muted loop class="main__banner main__banner--video">
      <source src="<?php the_field('video_v_shapku_videosemka', 90); ?>" type="video/mp4">
    </video>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main__titles" data-aos="fade-right">
            <h1><?php the_field('zagolovok_straniczy_videosemka', 90); ?></h1>
            <p><?php the_field('podzagolovok_videosemka', 90); ?></p>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->

  <div class="page__inner blog__inner videos__page--inner" id="second__block">
    <div class="videos__category">
      <div class="block__titles--wrap" data-aos="fade-up">
        <p class="uppertitle"><?php the_field('zagolovok_razrabotaem_brending_videosemka', 90); ?></p>
        <h4 class="block__title"><?php the_field('podzagolovok_razrabotaem_brending_videosemka', 90); ?></h4>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cats__wrap" data-aos="fade-up">
                <?php
                $counter = 1;
                if( have_rows('perechen_kategorij_videosemka') ):
                    while( have_rows('perechen_kategorij_videosemka') ) : the_row();
                        $title = get_sub_field('zagoloak_dlya_kategorii');
                        $image = get_sub_field('ikonka_dlya_kategorii');
                        $content = get_sub_field('opisanie_dlya_kategorii');
                        $link = get_sub_field('ssylka_na_kategoriyu');
                        ?>
                        <div class="item">
                            <div class="top">
                                <div class="number"><?php echo $counter;?></div>
                                <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                            </div>
                            <h4><a href="<?php echo $link;?>"><?php echo $title;?></a></h4>
                            <p><?php echo $content;?></p>
                        </div>
                    <?php
                        $counter ++;
                    endwhile;
                else :
                endif;
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="fourth__block">
    <div class="block__titles--wrap" data-aos="fade-up">
      <p class="uppertitle"><?php the_field('zagolovok_vse_iznutri', 90); ?></p>
      <h4 class="block__title"><?php the_field('podzagolovok_vse_iznutri', 90); ?></h4>
    </div>
    <div class="fourth__inner">
      <div class="left" data-aos="fade-right">
        <div class="description">
            <?php the_field('opisanie_vse_iznutri', 90); ?>
        </div>
      </div>
      <div class="right" data-aos="fade-left">
        <img src="<?php the_field('bolshaya_fotografiya', 90); ?>" alt="image" class="photo__image">
        <img src="<?php the_field('malenkaya_fotografiya', 90); ?>" alt="image" class="small__image">
        <img src="<?php the_field('fotografiya_teksta', 90); ?>" alt="image" class="word__image">
      </div>
    </div>
  </section>
    <div class="related__wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="top__wrap" data-aos="fade-up">
        <div class="titles">
          <p class="uppertitle"><?php the_field('zagolovok_nashi_raboty', 90); ?></p>
          <h4><?php the_field('podzagolovok_nashi_raboty', 90); ?></h4>
        </div>
      </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel related__slider" id="related__slider">
          <?php
          if( have_rows('perechen_rabot_nashi_raboty') ):
              while( have_rows('perechen_rabot_nashi_raboty') ) : the_row();
                  $title = get_sub_field('zaglook_dlya_raboty');
                  $image = get_sub_field('kartinka_dlya_raboty');
                  $link = get_sub_field('ssylka_dlya_raboty');
                  $content = get_sub_field('opisanie_dlya_raboty');
                  $podrobnee = get_field('podrobnee', 'options');
                  ?>
                  <a href="<?php echo $link;?>" class="blog__item fresco">
                      <div class="thumb__wrap">
                          <div class="play__video--item"></div>
                          <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                      </div>
                      <div class="description">
                          <h4><?php echo $title;?></h4>
                          <p><?php echo $content;?></p>
                      </div>
                  </a>
              <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
    </div>



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
            <a href="<?php the_field('dokument_brif','options')?>" class="brief__button" download=""><?php echo the_field('nadpis_zapolnit_brif','options')?></a>
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
              <h4><?php the_field('zagolovok_bloka', 90); ?></h4>
              <p><?php the_field('opisanie_pod_formoj', 90); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>