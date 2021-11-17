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
              if( have_rows('perechen_uslug') ):
                  $counter = 1;
                  while( have_rows('perechen_uslug') ) : the_row();
                      $itemname = get_sub_field('zagolovok_gruppy_uslug');
                      $itemlnk = get_sub_field('ssylka_na_zagolovok');
                      ?>
                      <div class="list">
                          <div class="number">0<?php echo $counter;?></div>
                          <h4><a href="<?php echo $itemlnk;?>"><?php echo $itemname;?></a></h4>
                          <ul>
                          <?php
                          if( have_rows('perechenb_uslug_v_gruppe') ):
                              while( have_rows('perechenb_uslug_v_gruppe') ) : the_row();
                                  $value = get_sub_field('naimenovanie_uslugi');
                                  $valuelink = get_sub_field('naimenovanie_uslugi_ssylka');
                                  $marker = get_sub_field('otobrazhat');
                                  if($marker != "false"){
                                      ?>
                                      <li><a href="<?php echo $valuelink;?>"><?php echo $value;?></a></li>
                                      <?php
                                  }
                              endwhile;
                          endif;
                          ?>
                          </ul>
                      </div>
                      <?php
                      $counter ++;
                  endwhile;
              endif;
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
?>