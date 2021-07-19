<?php
/**
 * Template Name: Доп. услуги
 *
 */
?>
<?php
get_header();
?>

  <div class="page__inner additional__services--inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block__titles--wrap" data-aos="fade-up">
            <p class="uppertitle"><?php the_field('zagolovok_blok_pod_formoj', 92); ?></p>
            <h4 class="block__title"><?php the_field('zagolovok_blok_pod_formoj', 92); ?></h4>
          </div>
            <div class="add__serv--wrap">
                <?php
                if( have_rows('tipy_uslug') ):
                    while( have_rows('tipy_uslug') ) : the_row();
                        $title = get_sub_field('zagolovok_tipa_uslugi');
                        $image = get_sub_field('kartinka_tipa_uslugi');
                        $content = get_sub_field('opisanie_tipa_uslugi');
                        $link = get_sub_field('ssylka_na_knopku_uslugi');
                        $podrobnee = get_field('podrobnee', 'options');
                        ?>
                        <div class="service__item">
                            <div class="left" data-aos="fade-right">
                                <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                            </div>
                            <div class="right" data-aos="fade-left">
                                <h4><?php echo $title;?></h4>
                                <div class="description">
                                    <?php echo $content;?>
                                </div>
                                <a href="<?php echo $link;?>" class="more__button"><?php echo $podrobnee;?></a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="videos__category">
      <div class="block__titles--wrap" data-aos="fade-up">
        <p class="uppertitle"><?php the_field('zagolovok_blok_pod_formoj', 92); ?></p>
        <h4 class="block__title"><?php the_field('podzagolovok_nashi_preimushhstva', 92); ?></h4>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cats__wrap" data-aos="fade-up">
                <?php
                $counter = 1;
                if( have_rows('nashi_priemushhestva_dop_uslugi') ):
                    while( have_rows('nashi_priemushhestva_dop_uslugi') ) : the_row();
                        $title = get_sub_field('zagolovok_preimushhestva');
                        $image = get_sub_field('ikonka_preimushhestva');
                        $content = get_sub_field('opisanie_preimushhestva');
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
  </div>


  <section class="seventh__block">
    <div class="block__titles--wrap" data-aos="fade-up">
      <p class="uppertitle">отложите все и просто</p>
      <h4 class="block__title">Свяжитесь с нами</h4>
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
              <h4><?php the_field('zagolovok_bloka', 92); ?></h4>
              <p><?php the_field('opisanie_bloka', 92); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>