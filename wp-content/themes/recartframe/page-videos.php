<?php
/**
 * Template Name: Видеосъемка
 *
 */
?>
<?php
get_header();
?>

  <section class="first__block first__block--rent first__block--videos" id="first__block" href="#second__block">
    <img src="<?php echo get_template_directory_uri() ?>/dist/img/videos-banner.jpg" alt="image" class="main__banner main__banner--image">
    <video autoplay muted loop class="main__banner main__banner--video">
      <source src="<?php echo get_template_directory_uri() ?>/video/grey.mp4" type="video/mp4">
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
                        ?>
                        <div class="item">
                            <div class="top">
                                <div class="number"><?php echo $counter;?></div>
                                <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                            </div>
                            <h4><?php echo $title;?></h4>
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
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/videos-image.jpg" alt="image" class="photo__image">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/small-image-videos.jpg" alt="image" class="small__image">
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/videos-word-image.png" alt="image" class="word__image">
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
                  <div class="blog__item">
                      <div class="thumb__wrap">
                          <a href="<?php echo $link;?>" class="item__link"><?php echo $podrobnee;?></a>
                          <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                      </div>
                      <a href="<?php echo $link;?>" class="description">
                          <h4><?php echo $title;?></h4>
                          <p><?php echo $content;?></p>
                      </a>
                  </div>
              <?php
              endwhile;
          else :
          endif;
          ?>
        </div>
    </div>



  <section class="seventh__block">
    <div class="block__titles--wrap" data-aos="fade-up">
      <p class="uppertitle">Разрабатываем брендинг</p>
      <h4 class="block__title">Напишите нам</h4>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form__wrap" data-aos="fade-up">
            <form action="#">
              <div class="form__inner--container">
                <span class="wpcf7-form-control-wrap">
                <label for="name__input">Ваше Имя</label>
                <input type="text" id="name__input" />
              </span>
              <span class="wpcf7-form-control-wrap">
                <label for="phone__input">Телефон</label>
                <input type="text" id="phone__input" />
              </span>
              <span class="wpcf7-form-control-wrap">
                <label for="email__input">EMAIL</label>
                <input type="text" id="email__input" />
              </span>
              <input type="text" class="send__button" value="Отправить" />
              </div>
            </form>
            <a href="#" class="brief__button">Заполнить бриф</a>
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