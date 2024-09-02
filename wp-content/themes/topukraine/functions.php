<?php

// ---

add_theme_support("post-thumbnails"); // to be able to add images to the posts
// add_theme_support("title-tag");
add_theme_support("custom-logo");
add_theme_support('menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'header_menu' => __( 'Header Menu' ),
      'footer_menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// ---

function redirect_frame_to_tickets() {
  $requested_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  if ($requested_url === "/search" || $requested_url === "/checkout") {
    $query_string = $_SERVER['QUERY_STRING'];
    wp_redirect( home_url( "/tickets-ua/?$query_string" ), 302 );
    exit();
  }

}
add_action( 'template_redirect', 'redirect_frame_to_tickets' );

// function redirect_ru_glavnaya() {
//   if (trim($_SERVER['REQUEST_URI'], '/') == 'ru/glavnaya') {
//     wp_redirect( home_url( '/ru/' ), 301 );
//     exit();
//   }
// }
// add_action( 'template_redirect', 'redirect_ru_glavnaya' );

// ---

function setup_locales(){
  load_theme_textdomain( 'topukraine', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'setup_locales' );

// ---

function redirect_old_urls() {
  $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri_path = rtrim($uri_path, '/');

  if ($uri_path == '/information') {
    wp_redirect(home_url('/about/'), 301);
    exit();
  }
  if ($uri_path == '/book-ua') {
    wp_redirect(home_url('/tickets-ua/'), 301);
    exit();
  }
  if ($uri_path == '/rent-bus') {
    wp_redirect(home_url('/rent/'), 301);
    exit();
  }
  if ($uri_path == '/pravyla-povernennya-kvytkiv') {
    wp_redirect(home_url('/return-policy/'), 301);
    exit();
  }
  if ($uri_path == '/dogovir-oferty') {
    wp_redirect(home_url('/offer/'), 301);
    exit();
  }
  if ($uri_path == '/kontakty') {
    wp_redirect(home_url('/contacts/'), 301);
    exit();
  }
  if ($uri_path == '/ru/glavnaya') {
    wp_redirect(home_url('/ru/'), 301);
    exit();
  }
  if ($uri_path == '/ru/informacziya') {
    wp_redirect(home_url('/ru/about-ru/'), 301);
    exit();
  }
  if ($uri_path == '/ru/book') {
    wp_redirect(home_url('/ru/tickets-ru/'), 301);
    exit();
  }
  if ($uri_path == '/ru/rent-bus-ru') {
    wp_redirect(home_url('/ru/rent-ru/'), 301);
    exit();
  }
  if ($uri_path == '/ru/pravila-vozvrata-bileta') {
    wp_redirect(home_url('/ru/return-policy-ru/'), 301);
    exit();
  }
  if ($uri_path == '/ru/dogovor-oferty') {
    wp_redirect(home_url('/ru/offer-ru/'), 301);
    exit();
  }
  if ($uri_path == '/ru/kontakty-ru') {
    wp_redirect(home_url('/ru/contacts-ru/'), 301);
    exit();
  }
}
add_action('template_redirect', 'redirect_old_urls');

// ---

function tp_resources() {

  wp_enqueue_style( 'font-primary', 'https://fonts.googleapis.com/css2?family=Roboto:wght@600;700&display=swap', false );
  wp_enqueue_style( 'font-secondary', 'https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap', false );
  wp_enqueue_style( 'reset', 'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css', false );

  $home_page_id = 9;
  $pll_home_page_id = pll_get_post($home_page_id);

  $tickets_page_id = 17;
  $pll_tickets_page_id = pll_get_post($tickets_page_id);

  if ( is_page( $pll_tickets_page_id ) ) {
    wp_enqueue_style( 'oc-app-css', 'https://octobus.cloud/frameapp/css/app.css', false );
    wp_enqueue_style( 'oc-print-css', 'https://octobus.cloud/frameapp/print.css', false );
  }

  wp_enqueue_style( 'styles-custom', get_stylesheet_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false );
  wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', false );

  wp_enqueue_script( 'scrollreveal-script', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', array(), null, false );
  wp_enqueue_script( 'fonts-icon', 'https://kit.fontawesome.com/ca4e7a221a.js', array(), null, true );

  if ( is_page( $pll_home_page_id ) ) {
    wp_enqueue_style( 'slick-slider-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'slick-slider-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), null, true );
    // wp_enqueue_script( 'scripts-home', get_template_directory_uri() . '/assets/js/home.js', array(), null, true );
  }


  if ( is_page( $pll_tickets_page_id ) ) {
    wp_enqueue_script( 'oc-manifest-js', 'https://octobus.cloud/frameapp/js/manifest.js', array(), null, true );
    wp_enqueue_script( 'oc-vendor-js', 'https://octobus.cloud/frameapp/js/vendor.js', array(), null, true );
    wp_enqueue_script( 'oc-app-js', 'https://octobus.cloud/frameapp/js/app.js', array(), null, true );
  }

  wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true );
  wp_enqueue_script( 'scripts-custom', get_template_directory_uri() . '/assets/js/index.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'tp_resources' );

// ---

add_filter('nav_menu_css_class', 'filter_nav_menu_css_class_header_menu', 10, 3);
function filter_nav_menu_css_class_header_menu($classes, $item, $args) {
    if ($args->theme_location === 'header_menu') {
        $classes = array();
        $classes[] = 'header__nav-list-item';
    }
    return $classes;
}
 

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes_header_menu', 10, 3);
function filter_nav_menu_link_attributes_header_menu($atts, $item, $args) {
    if ($args->theme_location  === 'header_menu') {
        $atts['class'] = 'header__nav-list-link';
        if ($item->current) {
            $atts['class'] .= ' header__nav-list-link--active';
        }
    }
    return $atts;
}

// ---

add_filter('nav_menu_css_class', 'filter_nav_menu_css_class_footer_menu', 10, 3);
function filter_nav_menu_css_class_footer_menu($classes, $item, $args) {
    if ($args->theme_location === 'footer_menu') {
        $classes = array('footer__nav-item');
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes_footer_menu', 10, 3);
function filter_nav_menu_link_attributes_footer_menu($atts, $item, $args) {
    if ($args->theme_location === 'footer_menu') {
        $atts['class'] = 'footer__nav-link';
        if ($item->current) {
            $atts['class'] .= ' footer__nav-link--active';
        }
    }
    return $atts;
}

// ---

add_filter('nav_menu_item_id', 'remove_menu_item_ids', 10, 3);
function remove_menu_item_ids($id, $item, $args) {
    return "";
}

?>
