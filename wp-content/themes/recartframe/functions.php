<?php
/**
 * Recartframe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Recartframe
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



if ( ! function_exists( 'recartframe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function recartframe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Recartframe, use a find and replace
		 * to change 'recartframe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'recartframe', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'PageMenu' => esc_html__( 'Меню страниц', 'recartframe' ),
                'BurgerMenu' => esc_html__( 'Бургер меню', 'recartframe' ),
                'FooterMenu' => esc_html__( 'Меню подвал', 'recartframe' ),
                'Language' => esc_html__( 'Языки', 'recartframe' ),
                'LanguageMobile' => esc_html__( 'Языки мобайл', 'recartframe' ),
			)

		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'recartframe_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'recartframe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function recartframe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'recartframe_content_width', 640 );
}
add_action( 'after_setup_theme', 'recartframe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function recartframe_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'recartframe' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'recartframe' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
        array(
            'name'          => esc_html__( 'language', 'recartframe' ),
            'id'            => 'language',
            'description'   => esc_html__( 'Добавте языковые єлементы', 'recartframe' ),
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'language-mob', 'recartframe' ),
            'id'            => 'language-mob',
            'description'   => esc_html__( 'Добавте языковые єлементы', 'recartframe' ),
        )
    );
}
add_action( 'widgets_init', 'recartframe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function recartframe_scripts() {
    wp_enqueue_style( 'recartframe-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
    wp_style_add_data( 'recartframe-style', 'rtl', 'replace' );
    wp_enqueue_script('recartframe-style', get_template_directory_uri() . '/dist/js/common.js');

	wp_enqueue_script( 'recartframe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'recartframe_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
register_activation_hook(__FILE__, function() {
    // проверяем права пользователя на установку плагинов
    if (!current_user_can('activate_plugins')) {
        return;
    }
});

register_deactivation_hook(__FILE__, function() {
    // проверяем права пользователя на деактивацию плагинов
    if (!current_user_can('deactivate_plugins')) {
        return;
    }
});
// Тип данных артисты
function my_photogalery() {
    $labels = array(
        'name'          => 'Фотогалерея',               // основное название для типа записи
        'singular_name'     => 'Фотогалерея',            // название для одной записи этого типа
        'add_new'       => 'Добавить фото',                   // для добавления новой записи
        'add_new_item'      => 'Добавление нового фото',     // заголовка у вновь создаваемой записи в админ-панели
        'edit_item'     => 'Редактирование данных фото', // для редактирования типа записи
        'new_item'      => 'Новая фотогалерея',          // текст новой записи
        'all_items'     => 'Все фотогалереи',           // все записи
        'view_item'     => 'Смотреть данные фотогалереи',       // для просмотра записи этого типа
        'search_items'      => 'Найти фотогалерею',         // для поиска по этим типам записи
        'not_found'     => 'Фотогалереи не найдены',        // если в результате поиска ничего не было найдено
        'not_found_in_trash'    => 'В корзине ничего нет',      // если не было найдено в корзине
        'parent_item_colon' => '',                  // для родителей (у древовидных типов)
        'menu_name'     => 'Фотогалерея'                // название меню
    );
    $args = array(
        'labels'    => $labels,
        'description'   => 'Фотогалерея',
        'public'    => true,
        // 'publicly_queryable'  => null,   // зависит от public
        // 'exclude_from_search' => null,   // зависит от public
        // 'show_ui'             => null,   // зависит от public
        // 'show_in_nav_menus'   => null,   // зависит от public
        'show_in_menu'        => true,      // показывать ли в меню админки
        // 'show_in_admin_bar'   => null,   // зависит от show_in_menu
        'menu_position' => 5,
        'menu_icon' => 'dashicons-groups',
        'supports'  => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'hierarchical'        => false,
//      'show_ui'             => true,
//      'show_in_nav_menus'   => true,
        'has_archive'         => false,
        'can_export'          => true,
        'exclude_from_search' => false,
//          'yarpp_support'       => true,
        'taxonomies'          => ['type-photogalery'],
        'capability_type'     => 'post',
        'rewrite'             => true,
        'query_var'           => true,
    );
    register_taxonomy( 'type-photogalery', 'photogalery',
        array(
            'hierarchical' => true,
            'label' => __( 'Типы фотогалереи' ),
            'rewrite' => array( 'slug' => 'type-photogalery' ),
        )
    );
    register_post_type( 'photogalery', $args );
}
add_action( 'init', 'my_photogalery' );
// Тип данных артисты END

add_action( 'init', 'register_post_types' );
function register_post_types()
{
    register_post_type('vigeogalery', [
        'label' => null,
        'labels' => [
            'name' => 'Видеогалерея', // основное название для типа записи
            'singular_name' => 'Видеогалерея', // название для одной записи этого типа
            'add_new' => 'Добавить видео', // для добавления новой записи
            'add_new_item' => 'Добавление видео', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование видео', // для редактирования типа записи
            'new_item' => 'Новое видео', // текст новой записи
            'view_item' => 'Смотреть видео', // для просмотра записи этого типа.
            'search_items' => 'Искать видео', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Видеогалерея', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('rent', [
        'label' => null,
        'labels' => [
            'name' => 'Аренда', // основное название для типа записи
            'singular_name' => 'Аренда', // название для одной записи этого типа
            'add_new' => 'Добавить аренду', // для добавления новой записи
            'add_new_item' => 'Добавление аренды', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование аренды', // для редактирования типа записи
            'new_item' => 'Новая аренда', // текст новой записи
            'view_item' => 'Смотреть аренду', // для просмотра записи этого типа.
            'search_items' => 'Искать аренду', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Аренда', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

}
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'videogalery-thumb', 410, 391, true ); // Кадрирование изображения
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'rent-tech-image', 253, 179, true ); // Кадрирование изображения
}

add_action('customize_register', function($customizer) {

    $customizer->add_section(

        'section_one', array(

            'title' => 'Контактные данные',

            'description' => '',

            'priority' => 11,

        )

    );

    $customizer->add_setting('phone_1',

        array('default' => '+49 174 781 55 05')

    );

    $customizer->add_control('phone_1', array(

            'label' => 'Телефон 1',

            'section' => 'section_one',

            'type' => 'text',

        )

    );
    $customizer->add_setting('phone_2',

        array('default' => '+49 174 781 55 05')

    );

    $customizer->add_control('phone_2', array(

            'label' => 'Телефон 2',

            'section' => 'section_one',

            'type' => 'text',

        )

    );
    $customizer->add_setting('phone_3',

        array('default' => '+49 174 781 55 05')

    );

    $customizer->add_control('phone_3', array(

            'label' => 'Телефон 3',

            'section' => 'section_one',

            'type' => 'text',

        )

    );
    $customizer->add_setting('e-mail',

        array('default' => 'email-support@recartframe.com')

    );

    $customizer->add_control('e-mail', array(

            'label' => 'e-mail',

            'section' => 'section_one',

            'type' => 'email',

        )

    );
    $customizer->add_setting('facebook',

        array('default' => 'url')

    );

    $customizer->add_control('facebook', array(

            'label' => 'facebook',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('instagram',

        array('default' => 'url')

    );

    $customizer->add_control('instagram', array(

            'label' => 'instagram',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('youtube',

        array('default' => 'url')

    );

    $customizer->add_control('youtube', array(

            'label' => 'youtube',

            'section' => 'section_one',

            'type' => 'url',

        )

    );

});

if( function_exists('acf_add_options_page') ) {
    $args = array(
        'page_title' => 'Переменные',
        'menu_title' => '',
        'menu_slug' => 'Options',
        'post_id' => 'options',
    );
    acf_add_options_page( $args );
}

/*
 * "Хлебные крошки" для WordPress
*/
function dimox_breadcrumbs() {

    /* === ОПЦИИ === */
    $text['home']     = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author']   = 'Статьи автора %s'; // текст для страницы автора
    $text['404']      = 'Ошибка 404'; // текст для страницы 404
    $text['page']     = 'Страница %s'; // текст 'Страница N'
    $text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before    = '<ul class="breadcrumbs aos-init aos-animate" data-aos="fade-right">'; // открывающий тег обертки
    $wrap_after     = '</ul><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep            = '<li class="separator"> / </li>'; // разделитель между "крошками"
    $before         = '<li><span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
    $after          = '</span></li>'; // тег после текущей "крошки"

    $show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url       = home_url('/');
    $link           = '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
    $link          .= '<meta itemprop="position" content="%3$s" />';
    $link          .= '</li>';
    $parent_id      = ( $post ) ? $post->post_parent : '';
    $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

    if ( is_home() || is_front_page() ) {

        if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

    } else {

        $position = 0;

        echo $wrap_before;

        if ( $show_home_link ) {
            $position += 1;
            echo $home_link;
        }

        if ( is_category() ) {
            $parents = get_ancestors( get_query_var('cat'), 'category' );
            foreach ( array_reverse( $parents ) as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $cat = get_query_var('cat');
                echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_search() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $show_home_link ) echo $sep;
                echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['search'], get_search_query() ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_year() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_time('Y') . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_month() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_day() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
            $position += 1;
            echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_single() && ! is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $position += 1;
                $post_type = get_post_type_object( get_post_type() );
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
                if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                elseif ( $show_last_sep ) echo $sep;
            } else {
                $cat = get_the_category(); $catID = $cat[0]->cat_ID;
                $parents = get_ancestors( $catID, 'category' );
                $parents = array_reverse( $parents );
                $parents[] = $catID;
                foreach ( $parents as $cat ) {
                    $position += 1;
                    if ( $position > 1 ) echo $sep;
                    echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                }
                if ( get_query_var( 'cpage' ) ) {
                    $position += 1;
                    echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
                    echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
                } else {
                    if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                    elseif ( $show_last_sep ) echo $sep;
                }
            }

        } elseif ( is_post_type_archive() ) {
            $post_type = get_post_type_object( get_post_type() );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . $post_type->label . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_attachment() ) {
            $parent = get_post( $parent_id );
            $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
            $parents = get_ancestors( $catID, 'category' );
            $parents = array_reverse( $parents );
            $parents[] = $catID;
            foreach ( $parents as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            $position += 1;
            echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_page() && ! $parent_id ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_title() . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_page() && $parent_id ) {
            $parents = get_post_ancestors( get_the_ID() );
            foreach ( array_reverse( $parents ) as $pageID ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
            }
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_tag() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $tagID = get_query_var( 'tag_id' );
                echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_author() ) {
            $author = get_userdata( get_query_var( 'author' ) );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_404() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . $text['404'] . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( has_post_format() && ! is_singular() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    }
} // end of dimox_breadcrumbs()

function mytheme_add_woocommerce_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme','mytheme_add_woocommerce_support');

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter"> <?php echo sprintf($woocommerce->cart->cart_contents_count); ?> </span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}


add_filter('acf/prepare_field', 'my_translatable_acf_fields');
function my_translatable_acf_fields($field){
    if (strpos($field['wrapper']['class'], 'translatable') !== false){
        $field['class'] = 'translatable';
    }
    return $field;
}

add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_version_check');
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_plugins' );
remove_action('load-update-core.php','wp_update_themes');
add_filter('pre_site_transient_update_themes',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_update_themes');

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 7;' ), 20 );

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

