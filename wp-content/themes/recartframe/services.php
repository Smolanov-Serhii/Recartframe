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
                  <?php
                  $args = array(
                      'post_type' => 'photomade',
                      'showposts' => "", //сколько показать статей
                      'orderby' => "menu_order", //сортировка по дате
                      'caller_get_posts' => 1);
                  $my_query = new wp_query($args);
                  if ($my_query->have_posts()) {
                      while ($my_query->have_posts()) {
                          $my_query->the_post();
                          ?>
                          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                      <?php }
                  }
                  wp_reset_query(); ?>
              </ul>
            </div>
            <div class="list">
              <div class="number">02</div>
              <h4><a href="<?php echo the_field('ssylka_na_straniczu_videosemka');?>"><?php the_field('zagolovok_videosemka');?></a></h4>
              <ul>
                  <?php
                  $args = array(
                      'post_type' => 'videoomade',
                      'showposts' => "", //сколько показать статей
                      'orderby' => "menu_order", //сортировка по дате
                      'caller_get_posts' => 1);
                  $my_query = new wp_query($args);
                  if ($my_query->have_posts()) {
                      while ($my_query->have_posts()) {
                          $my_query->the_post();
                          ?>
                          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                      <?php }
                  }
                  wp_reset_query(); ?>
              </ul>
            </div>
            <div class="list">
              <div class="number">03</div>
                <h4><a href="<?php echo the_field('ssylka_na_straniczu_dop_uslugi');?>"><?php the_field('zagolovok_dop_uslugi');?></a></h4>
                <ul>
                    <?php
                    $args = array(
                        'post_type' => 'dopservice',
                        'showposts' => "", //сколько показать статей
                        'orderby' => "menu_order", //сортировка по дате
                        'caller_get_posts' => 1);
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                        <?php }
                    }
                    wp_reset_query(); ?>
                </ul>
            </div>
            <div class="list">
              <div class="number">04</div>
                <h4><a href="<?php echo the_field('ssylka_na_straniczu_svetomuzyka');?>"><?php the_field('zagolovok_svetomuzyka');?></a></h4>
              <ul>
                  <?php
                  $args = array(
                      'post_type' => 'litemusic',
                      'showposts' => "", //сколько показать статей
                      'orderby' => "menu_order", //сортировка по дате
                      'caller_get_posts' => 1);
                  $my_query = new wp_query($args);
                  if ($my_query->have_posts()) {
                      while ($my_query->have_posts()) {
                          $my_query->the_post();
                          ?>
                          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                      <?php }
                  }
                  wp_reset_query(); ?>
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