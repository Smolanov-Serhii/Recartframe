<?php
/**
 * Template Name: 404
 *
 */
?>
<?php
get_header();
?>

  <div class="error__inner">
    <h1>
      <img src="<?php echo get_template_directory_uri()?>/dist/img/404-bg.png" alt="image">
    </h1>
    <p>К сожалению такой страницы не существует. Сейчас вас перенаправит <a href="<?php echo get_home_url() ?>">на Главную!</a></p>
  </div>

  </div><!-- /wrapper -->

<?php
get_footer();
?>