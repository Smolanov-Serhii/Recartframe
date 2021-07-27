<?php
/**
 * Template Name: Магазин
 *
 */
?>
<?php
get_header();
?>

  <div class="page__inner blog__inner shop__inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="top__wrap" data-aos="fade-up">
            <div class="titles">
              <p class="uppertitle"><?php the_field('art_studio','options');?></p>
              <h1><?php the_field('nadpis_magazitn','options');?></h1>
            </div>
            <div class="sorting">
              <div class="cats__wrap">
                  <?php
                  $parentid = get_queried_object_id();
                  $args = array(
                      'parent' => 53
                  );
                  $terms = get_terms( 'product_cat', $args );
                  if ( $terms ) {
                      foreach ( $terms as $term ) {
                          echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
                          echo $term->name;
                          echo '</a>';
                      }
                  }
                  ?>
              </div>
              <a href="http://recartframe.com/magazin/" class="default"><?php echo the_field('nadpis_vse_tovary', 'options')?></a>
            </div>
          </div>
          <div class="blog__content" data-aos="fade-up">
              <?php
              $loop = new WP_Query( array(
                  'post_type' => 'product',
                  'posts_per_page' => 40,
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
              ));

              while ( $loop->have_posts() ): $loop->the_post(); ?>

                          <div class="blog__item">
                              <div class="thumb__wrap">

                                  <?php woocommerce_template_loop_add_to_cart( array('class' => 'item__link')); ?>
                                  <?php the_post_thumbnail("thumbnail-215x300"); ?>
                              </div>
                              <a href="<?php the_permalink(); ?>" class="description">
                                  <h4> <?php the_title(); ?></h4>
                                  <p> <?php _e("Price:","examp"); ?>
                                      <?php woocommerce_template_loop_price(); ?>
                                  </p>
                              </a>
                          </div>

              <?php endwhile; ?>

            <div class="blog__item">
              <div class="thumb__wrap">
                <a href="#" class="item__link">добавить в корзину</a>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog2.jpg" alt="image">
              </div>
              <a href="#" class="description">
                <h4>Provence-en-Aix 2 копия</h4>
                <p>299,99€</p>
              </a>
            </div>
            <div class="blog__item">
              <div class="thumb__wrap">
                <a href="#" class="item__link">добавить в корзину</a>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog1.jpg" alt="image">
              </div>
              <a href="#" class="description">
                <h4>Provence-en-Aix 2 копия</h4>
                <p>299,99€</p>
              </a>
            </div>
            <div class="blog__item">
              <div class="thumb__wrap">
                <a href="#" class="item__link">добавить в корзину</a>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog4.jpg" alt="image">
              </div>
              <a href="#" class="description">
                <h4>Provence-en-Aix 2 копия</h4>
                <p>299,99€</p>
              </a>
            </div>
            <div class="blog__item">
              <div class="thumb__wrap">
                <a href="#" class="item__link">добавить в корзину</a>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog5.jpg" alt="image">
              </div>
              <a href="#" class="description">
                <h4>Provence-en-Aix 2 копия</h4>
                <p>299,99€</p>
              </a>
            </div>
            <div class="blog__item">
              <div class="thumb__wrap">
                <a href="#" class="item__link">добавить в корзину</a>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog1.jpg" alt="image">
              </div>
              <a href="#" class="description">
                <h4>Provence-en-Aix 2 копия</h4>
                <p>299,99€</p>
              </a>
            </div>
            <div class="blog__item">
              <div class="thumb__wrap">
                <a href="#" class="item__link">добавить в корзину</a>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/blog1.jpg" alt="image">
              </div>
              <a href="#" class="description">
                <h4>Provence-en-Aix 2 копия</h4>
                <p>299,99€</p>
              </a>
            </div>
            <div class="show__more--wrap">
              <a href="#" class="show__more">Show more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
?>