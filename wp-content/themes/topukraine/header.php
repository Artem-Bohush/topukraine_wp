<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <?php wp_head(); ?>

  <?php
    $tickets_page_id = 17;
    $pll_tickets_page_id = pll_get_post($tickets_page_id);
  ?>

  <?php if ( is_page( $pll_tickets_page_id ) ) : ?>
    <script>
      if ((window.location.pathname.includes('tickets-ua') || window.location.pathname.includes('tickets-ru')) && window.location.search) {
        let ticketFramePathname = '';
        
        if (window.location.search.includes('from')) {
          ticketFramePathname = '/search';
        } else if (window.location.search.includes('id')) {
          ticketFramePathname = '/checkout';
        }

        const newUrl = window.location.protocol + "//" + window.location.host + ticketFramePathname + window.location.search;
        history.replaceState(null, null, newUrl);
      }
    </script>
  <?php endif; ?>

</head>

<body>

  <div class="wrapper">

    <header class="header" id="header">
      <div class="container">
        <div class="header__inner">
          <div class="header__logo">
            <!-- <a class="header__logo-link" href="<?php echo get_permalink(pll_get_post(9));?>">
              <img class="header__logo-img" src="<?php bloginfo('template_url') ?>/assets/img/topukraine_300x120.png" alt="TOPUKRAINE Logo">
            </a> -->
            <?php the_custom_logo(); ?>
          </div>

          <div class="header__menu" id="header__menu">

            <div class="menu-top">
              <a class="menu-top__logo-link" href="<?php echo get_permalink(pll_get_post(9));?>">
                <img class="menu-top__logo-img" src="<?php bloginfo('template_url') ?>/assets/img/topukraine_300x120.png" alt="TOPUKRAINE logo">
              </a>
              <button class="menu-top__btn-close" id="menu-btn-close"><i class="fa-solid fa-xmark"></i></button>
            </div>

            <nav class="header__nav">
              <?php 
                  wp_nav_menu( [
                      'theme_location'  => 'header_menu',
                      'container'       => false, 
                      'menu_class'      => 'header__nav', 
                      'echo'            => true,
                      'fallback_cb'     => 'wp_page_menu',
                      'items_wrap'      => '<ul class="header__nav-list">%3$s</ul>',
                      'depth'           => 1
                  ] );
              ?>
              <!-- <ul class="header__nav-list">
                <li class="header__nav-list-item">
                  <a class="header__nav-list-link header__nav-list-link--active" href="#">Головна</a>
                </li>
                <li class="header__nav-list-item">
                  <a class="header__nav-list-link" href="./about.html">Про Нас</a>
                </li>
                <li class="header__nav-list-item">
                  <a class="header__nav-list-link" href="./tickets.html">Квитки</a>
                </li>
                <li class="header__nav-list-item">
                  <a class="header__nav-list-link" href="./contacts.html">Контакти</a>
                </li>
                <li class="header__nav-list-item">
                  <a class="header__nav-list-link" href="#">UA</a>
                </li>
                <li class="header__nav-list-item">
                  <a class="header__nav-list-link" href="#">RU</a>
                </li>
              </ul> -->
            </nav>
          </div>

          <div class="contact-now">
            <p class="contact-now__title"><?php esc_html_e('Телефонуйте нам зараз', 'topukraine');?></p>
            <a class="contact-now__link" href="tel:+380976632332">+(380)-97-663-23-32&nbsp;&nbsp;<i class="fa-brands fa-viber"></i>&nbsp;<i class="fa-brands fa-whatsapp"></i>&nbsp;<i class="fa-brands fa-telegram"></i></a>
            <div class="contact-now__icon"><i class="fa-solid fa-phone-flip"></i></div>
          </div>

          <div class="menu-btn-wrapper">
            <button class="menu-btn" id="menu-btn"><i class="fa-solid fa-bars"></i></button>
          </div>
        </div>
      </div>
    </header>

    <main class="main <?php echo is_404() ? 'main-404' : ''; ?>">