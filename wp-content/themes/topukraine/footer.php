</main>

<?php if ( !is_404() ) : ?>
  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__social">
          <div class="footer__logo">
            <a class="footer__logo-link" href="index.html">
              <img class="footer__logo-img" src="<?php bloginfo('template_url') ?>/assets/img/topukraine_300x120.png" alt="TOPUKRAINE Logo">
            </a>
          </div>
          <p class="footer__social-text"><?php esc_html_e('Підписуйтесь на нас та слідкуйте за новинами, акціями, відгуками та багато іншим у соцмережах.', 'topukraine');?></p>
          <ul class="social-list">
            <li class="social-list-item">
              <a class="social-list-link" href="https://www.instagram.com/topukraineagency?igsh=dHdsbnpzeHd5azNu" target="_blank">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
            <li class="social-list-item">
              <a class="social-list-link" href="https://t.me/germanykyiv" target="_blank">
                <i class="fa-brands fa-telegram"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__menu">
          <h4 class="footer__title">
            <?php esc_html_e('Сторінки', 'topukraine');?>
          </h4>
          <nav class="footer__nav">
            <?php
              wp_nav_menu( [
                'theme_location'  => 'footer_menu',
                'container'       => false, 
                'menu_class'      => 'footer__nav', 
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul class="footer__nav-list">%3$s</ul>',
                'depth'           => 1,
                'before'          => '<i class="fa-solid fa-chevron-right"></i>',
            ] );
            ?>
            <!-- <ul class="footer__nav-list">
              <li class="footer__nav-item">
                <i class="fa-solid fa-chevron-right"></i>
                <a class="footer__nav-link footer__nav-link--active" href="#">Головна</a>
              </li>
              <li class="footer__nav-item">
                <i class="fa-solid fa-chevron-right"></i>
                <a class="footer__nav-link" href="./about.html">Про Нас</a>
              </li>
              <li class="footer__nav-item">
                <i class="fa-solid fa-chevron-right"></i>
                <a class="footer__nav-link" href="./tickets.html">Квитки</a>
              </li>
              <li class="footer__nav-item">
                <i class="fa-solid fa-chevron-right"></i>
                <a class="footer__nav-link" href="./contacts.html">Контакти</a>
              </li>
              <li class="footer__nav-item">
                <i class="fa-solid fa-chevron-right"></i>
                <a class="footer__nav-link" href="./offer.html">Договір Оферти</a>
              </li>
              <li class="footer__nav-item">
                <i class="fa-solid fa-chevron-right"></i>
                <a class="footer__nav-link" href="./return-ticket.html">Повернення Квитків</a>
              </li>
            </ul> -->
          </nav>
        </div>
        <div class="footer__contact">
          <h4 class="footer__title">
            <?php esc_html_e('Контакти', 'topukraine');?>
          </h4>
          <ul class="footer__contact__list">
            <li class="footer__contact__item">
              <i class="fa-solid fa-location-dot"></i>
              <a class="footer__contact__link" href="https://maps.app.goo.gl/exKgo7NLDMBcasjw6" target="_blank"><?php esc_html_e('вул. Генерала Наумова, 66, Київ, 03164', 'topukraine');?></a>
            </li>
            <li class="footer__contact__item">
              <i class="fa-solid fa-phone-flip"></i>
              <a class="footer__contact__link" href="tel:+380976632332">+ (380)-97-663-23-32&nbsp;&nbsp;<i class="fa-brands fa-viber"></i>&nbsp;<i class="fa-brands fa-whatsapp"></i>&nbsp;<i class="fa-brands fa-telegram"></i></a>
            </li>
            <li class="footer__contact__item">
              <i class="fa-solid fa-phone-flip"></i>
              <a class="footer__contact__link" href="tel:+4915678947111">+ (49)-15-6789-47111&nbsp;&nbsp;<i class="fa-brands fa-whatsapp"></i></a>
            </li>
            <li class="footer__contact__item">
              <i class="fa-solid fa-envelope"></i>
              <a class="footer__contact__link" href="mailto:davydkomar@gmail.com">davydkomar@gmail.com</a>
            </li>
          </ul>
        </div>
        <div class="footer__news">
          <h4 class="footer__title">
            <?php esc_html_e('Підписатись', 'topukraine');?>
          </h4>
          <p class="footer__news-text"><?php esc_html_e('Залиште нам свій e-mail і ми триматимемо вас у курсі наших новин та пропозицій, надсилаючи вам тільки корисну інформацію. Ніякого спаму.', 'topukraine');?></p>
            <!-- <div class="footer__news-form">
              
            </div> -->
            <?php echo do_shortcode('[contact-form-7 id="de6bed2" title="Subscribe to news form" html_class="footer__news-form"]'); ?>
          <!-- <form class="footer__news-form">
            <input type="email" placeholder="Ваш e-mail" name="subscriber-email" required>
            <button type="submit"><i class="fa-solid fa-envelope"></i></button>
          </form> -->
        </div>
      </div>

      <div class="footer__copy">
        <p><?php esc_html_e('TOPUKRAINE | ТОПЮКРЕЙН. Автобусні перевезення.', 'topukraine');?></p>
        <p>Copyright © 2024. All rights reserved.</p>
      </div>
    </div>
  </footer>
<?php endif; ?>

</div>

<?php wp_footer(); ?>

<?php
  $tickets_page_id = 17;
  $pll_tickets_page_id = pll_get_post($tickets_page_id);
?>

<?php if ( is_page( $pll_tickets_page_id ) ) : ?>
  <script>
    // window.history.pushState = new Proxy(window.history.pushState, {
    //   apply: (target, thisArg, argArray) => {
    //     console.log(argArray);
    //     debugger;
    //     let [,, params] = argArray;
    //     if (window.location.pathname.includes('-ru') || window.location.search.includes('lang=ru')) {
    //       argArray[2] = `${argArray[2]}&lang=ru`;
    //     }
    //     return target.apply(thisArg, argArray);
    //   },
    // });
  </script>
<?php endif; ?>


<script>
  if (document.getElementById('wpadminbar')) {
    document.getElementById('header').style.top = '52px';
  }
</script>
</body>

</html>
