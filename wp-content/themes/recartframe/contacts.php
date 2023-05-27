<?php
/**
 * Template Name: Контакты
 *
 */
?>
<?php
get_header();
$post_id = get_the_ID();
?>

  <section class="first__block first__block--rent first__block--presenter first__block--videos first__block--contacts" id="first__block" href="#second__block">
      <?php
      if( get_field('kartinka_v_shapku', $post_id)){
          ?>
          <img src="<?php echo the_field('kartinka_v_shapku', $post_id); ?>" alt="<?php the_title();?>" class="main__banner">
          <?php
      }
        if( get_field('video_v_shapku', $post_id)){
            ?>
            <div class="main__banner">
                <video autoplay muted loop class="main__banner--video">
                    <source src="<?php the_field('video_v_shapku', $post_id) ?>" type="video/mp4">
                </video>
            </div>
            <?php
        }
      ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main__titles" data-aos="fade-right">
            <h1><?php the_title();?></h1>
            <div class="phones__wrap">
              <a href="tel:<?php echo get_theme_mod('phone_1'); ?>"><?php echo get_theme_mod('phone_1'); ?></a>
              <a href="tel:<?php echo get_theme_mod('phone_2'); ?>"><?php echo get_theme_mod('phone_2'); ?></a>
              <a href="tel:<?php echo get_theme_mod('phone_3'); ?>"><?php echo get_theme_mod('phone_3'); ?></a>
              <p>(<?php the_field('vatsap_vajber','options');?>)</p>
            </div>
            <a href="mailto:<?php echo get_theme_mod('e-mail'); ?>" class="email"><?php echo get_theme_mod('e-mail'); ?></a>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /section -->


 <section class="seventh__block" id="second__block">
    <div class="block__titles--wrap" data-aos="fade-up">
      <p class="uppertitle"><?php the_field('nadpis_nad_formoj'); ?></p>
      <h4 class="block__title"><?php the_field('zaglovok_nad_formoj'); ?></h4>
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

<?php
get_footer();
?>