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
              <p class="uppertitle">Art Studio</p>
              <h1>Видеогалерея</h1>
            </div>
            <div class="sorting">
              <p class="default">Default sorting</p>
            </div>
          </div>
          <div class="videos__wrap" data-aos="fade-up">
            <div class="video__item" data-aos="fade-right">
              <div class="thumb__wrap">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog2.jpg" alt="" class="video__banner">
                <a href="https://youtu.be/mxiBmngh46k" class="play__video--item fresco"></a>
              </div>
              <h4>Aix-en-Provence 1</h4>
              <p>299,99€</p>
            </div>
            <div class="video__item" data-aos="fade-left">
              <div class="thumb__wrap">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog3.jpg" alt="" class="video__banner">
                <a href="#" class="play__video--item"></a>
              </div>
              <h4>Aix-en-Provence 1</h4>
              <p>299,99€</p>
            </div>
            <div class="video__item" data-aos="fade-right">
              <div class="thumb__wrap">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog4.jpg" alt="" class="video__banner">
                <a href="#" class="play__video--item"></a>
              </div>
              <h4>Aix-en-Provence 1</h4>
              <p>299,99€</p>
            </div>
            <div class="video__item" data-aos="fade-left">
              <div class="thumb__wrap">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog5.jpg" alt="" class="video__banner">
                <a href="#" class="play__video--item"></a>
              </div>
              <h4>Aix-en-Provence 1</h4>
              <p>299,99€</p>
            </div>
            <div class="video__item" data-aos="fade-right">
              <div class="thumb__wrap">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog5.jpg" alt="" class="video__banner">
                <a href="#" class="play__video--item"></a>
              </div>
              <h4>Aix-en-Provence 1</h4>
              <p>299,99€</p>
            </div>
            <div class="video__item" data-aos="fade-left">
              <div class="thumb__wrap">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog1.jpg" alt="" class="video__banner">
                <a href="#" class="play__video--item"></a>
              </div>
              <h4>Aix-en-Provence 1</h4>
              <p>299,99€</p>
            </div>
            <div class="show__more--wrap" data-aos="fade-up">
              <a href="#" class="show__more">Show more</a>
            </div>
          </div>
        </div>
      </div>
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
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>