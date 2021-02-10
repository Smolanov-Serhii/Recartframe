<?php
/**
 * Template Name: Услуги
 *
 */
?>
<?php
get_header();
?>



  <div class="page__inner services__inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="services__lists" data-aos="fade-up">
            <?php

            ?>
            <div class="list">
              <div class="number">01</div>
              <h4><a href="<?php echo the_field('ssylka_na_straniczu_fotosmka');?>"><?php the_field('zagolovok_fotosmka');?></a></h4>
              <ul>
                  <?php the_field('spisok_podstranicz_fotosyomka');?>
              </ul>
            </div>
            <div class="list">
              <div class="number">02</div>
              <h4><a href="<?php echo the_field('ssylka_na_straniczu_videosemka');?>"><?php the_field('zagolovok_videosemka');?></a></h4>
              <ul>
                  <?php the_field('spisok_podstranicz_videosyomka');?>
              </ul>
            </div>
            <div class="list">
              <div class="number">03</div>
                <h4><a href="<?php echo the_field('ssylka_na_straniczu_dop_uslugi');?>"><?php the_field('zagolovok_dop_uslugi');?></a></h4>
                <ul>
                    <?php the_field('spisok_podstranicz_dop_uslugi');?>
                </ul>
            </div>
            <div class="list">
              <div class="number">04</div>
                <h4><a href="<?php echo the_field('ssylka_na_straniczu_svetomuzyka');?>"><?php the_field('zagolovok_svetomuzyka');?></a></h4>
              <ul>
                  <?php the_field('spisok_podstranicz_svetomuzyka');?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
?>