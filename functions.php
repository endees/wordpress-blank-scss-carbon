<?php


include_once get_template_directory(  ) . '/includes/theme-options.php'; 


function slawinsky_theme_supports() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'slawinsky_theme_supports' );

add_post_type_support( 'page', 'excerpt' );

/**
 * 
 * Hide admin bar
 * 
 */

// function slawinsky_my_function_admin_bar(){ return false; }
// add_filter( 'show_admin_bar' , 'slawinsky_my_function_admin_bar');

function slawinsky_theme_register_styles() {
    wp_enqueue_style( 'slawinsky_theme-bootstrap', get_template_directory_uri(  ) . '/css/bootstrap/bootstrap.min.css', array(), '5.3.1', 'all');
    wp_enqueue_style( 'slawinsky_theme-main', get_template_directory_uri(  ) . '/css/main.min.css', array('theme-bootstrap'), '1.0.0', 'all');
    // wp_enqueue_style( 'slawinsky_theme-owl', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
    // wp_enqueue_style( 'slawinsky_theme-owl-theme', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css', array(), '2.3.4', 'all');
    // wp_enqueue_style( 'slawinsky_theme-ionicons', 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), '2.0.1', 'all');
    
}
add_action( 'wp_enqueue_scripts', 'slawinsky_theme_register_styles' );

function slawinsky_theme_register_scripts() {
    wp_enqueue_script( 'slawinsky_theme-jquery', get_template_directory_uri(  ) . '/js/jQuery/jquery-3.7.1.min.js', array(), '3.7.1', false );
    wp_enqueue_script( 'slawinsky_theme-main', get_template_directory_uri(  ) . '/js/main.js', array(), '1.0.0', true );
    wp_enqueue_script( 'slawinsky_theme-bs', get_template_directory_uri(  ) . '/js/bootstrap/bootstrap.min.js', array(), '5.3.1', true );
    wp_enqueue_script( 'slawinsky_theme-fa', 'https://kit.fontawesome.com/02e4f40b20.js', array(), '5.3.1', false );
    // wp_enqueue_script( 'slawinsky_theme-owl', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js', array(), '2.3.4', false );
    // wp_enqueue_script( 'theme-ioniconsesm', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', array(), '2.3.4', true );
    // wp_enqueue_script( 'theme-ionicons', 'https://unpkg.com/ionicons@4.5.5/dist/ionicons.js', array(), '2.3.4', true );
    // wp_enqueue_script( 'theme-ionicons', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), '7.1.0', false );
    
}
add_action( 'wp_enqueue_scripts', 'slawinsky_theme_register_scripts' );

function slawinsky_custom_posts_register( $label, $name, $dashicon ) {
    register_post_type( $label, array(
        'label' => $label,
        'labels' => array(
            'name' => __($name),
            'singular_name' => __($name)
        ),
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'rewrite' => array('slug' => $name),
        'menu_icon' => $dashicon,
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'post-formats'),
        'show_ui' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true
    ) ); 
}

function slawinsky_theme_custom_posts() {
    slawinsky_custom_posts_register( 'offer', 'Oferta', 'dashicons-open-folder' );
}
add_action('init', 'slawinsky_theme_custom_posts');

function slawinsky_theme_menus() {
    $locations = array(
        'primary' => 'Menu główne',
        'social_menu' => 'Menu Social'
    );

    register_nav_menus( $locations );
}
add_action('init', 'slawinsky_theme_menus');

function slawinsky_theme_widgets_init() {

	register_sidebar( array(
		'name'          => 'Search bar',
		'id'            => 'search_bar',
		'before_widget' => '',
		'after_widget'  => ''
	) );
	register_sidebar( array(
		'name'          => 'Realizacje',
		'id'            => 'Realizacje',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );
	register_sidebar( array(
		'name'          => 'lang-menu',
		'id'            => 'lang-menu',
		'before_widget' => '',
		'after_widget'  => ''
	) );

}
add_action( 'widgets_init', 'slawinsky_theme_widgets_init' );

// add_action('init', function() {
//     pll_register_string('theme-kontakt', 'Kontakt');
//     pll_register_string('theme-charakterystyki', 'ZASADNICZE CHARAKTERYSTYKI WYROBU');
//     pll_register_string('theme-wlasciwosci', 'WŁAŚCIWOŚCI UŻYTKOWE');
//     pll_register_string('theme-specyfikacja', 'ZHARMONIZOWANA SPECYFIKACJA TECHNICZNA');
//     pll_register_string('theme-contactwithus', 'Skontaktuj się z nami!');
//     pll_register_string('theme-animation', 'ZOBACZ ANIMACJĘ');
//     pll_register_string('theme-luki', 'łuki z profili aluminiowych');
//     pll_register_string('theme-poliweglan', 'poliwęglan wielokomorowy z filtrem UV');
//     pll_register_string('theme-partnerzy', 'Partnerzy:');
//     pll_register_string('theme-pasmofirma', 'PASMO ŚWIETLNE <strong>CLC EVOLIGHT</strong>:');
// });

/*=====================================*/
/*== Modify the ACF WYSIWYF toolbar. ==*/
/*=====================================*/

function slawinsky_customize_acf_wysiwyg_toolbar( $toolbars ) {
    // Edit the "Full" toolbar and add 'fontsizeselect' if not already present.
    if (($key = array_search('fontsizeselect' , $toolbars['Full'][2])) !== true) {
    array_push($toolbars['Full'][2], 'fontsizeselect');
    }

    // return $toolbars - IMPORTANT!
    return $toolbars;
}

add_filter('acf/fields/wysiwyg/toolbars' , 'slawinsky_customize_acf_wysiwyg_toolbar');


//breadcrumbs

function slawinsky_custom_breadcrumbs() {
    // Określenie separatora pomiędzy elementami breadcrumbs
    $separator = ' &gt; ';

    // Pobranie bieżącej strony
    $post = get_post();

    // Inicjalizacja breadcrumbs jako pustej tablicy
    $breadcrumbs = array();

    // Dodanie linku do strony głównej
    $breadcrumbs[] = '<a href="' . home_url() . '">Strona główna</a>';

    if (is_single()) {
        // Jeśli jesteś na stronie wpisu
        $categories = get_the_category();
        if (!empty($categories)) {
            $category = $categories[0];
            $blog_page_id = get_option('page_for_posts');
            $breadcrumbs[] = '<a href="' . get_permalink($blog_page_id) . '">Aktualności</a>';
        }
        $breadcrumbs[] = get_the_title();
    } elseif (is_page()) {
        // Jeśli jesteś na stronie (page)
        $ancestors = get_post_ancestors($post);
        if (!empty($ancestors)) {
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                $breadcrumbs[] = '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>';
            }
        }
        $breadcrumbs[] = get_the_title();
    } elseif (is_home()) {
        // Jeśli jesteś na stronie bloga (Aktualności)
        $blog_page_id = get_option('page_for_posts');
        if ($blog_page_id) {
            // $breadcrumbs[] = '<a href="' . get_permalink($blog_page_id) . '">Aktualności</a>';
            $blog_page_title = get_the_title($blog_page_id);
            $breadcrumbs[] = $blog_page_title;
        }
    }

    // Wyświetl breadcrumbs w postaci ciągu znaków
    echo implode($separator, $breadcrumbs);
}



?>