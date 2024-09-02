<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="promo promo-home" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/promo-cover-home.jpg);">
  <div class="container">
    <div class="promo__overlay promo-home"></div>
    <div class="promo__content promo-home">
      <h1 class="promo__title promo-home"><?php esc_html_e('Ми надаємо', 'topukraine');?> <span class="title-accent"><?php esc_html_e('комфортний сервіс', 'topukraine');?></span> <?php esc_html_e('пасажирських перевезень', 'topukraine');?></h1>
      <p class="promo__text"><?php esc_html_e('Лорем іпсум долор сіт амет, консектетур адіпісцінг еліт, сед до еіусмод темпор
        інцідідунт ут лаборе ет долоре магна аліякуа. Ут енім ад мінім веніам, квіс ноструд екзерцітатіон улламцо
        лаборіс нісі ут аліквіп.', 'topukraine');?></p>
      <a class="promo__start link-btn link-text" href="<?php echo get_permalink(pll_get_post(17)); ?>"><span><?php esc_html_e('Бронювати', 'topukraine');?></span></a>
    </div>
  </div>
</section>

<div class="container">
  <form class="search-form form" id="searchForm">
    <div class="form__row">
      <div class="form__input-item">
        <label for="from"><?php esc_html_e('Звідки', 'topukraine');?></label>
        <select id="from" name="from" required>
          <option hidden disabled selected value><?php esc_html_e('Виберіть звідки', 'topukraine');?></option>
          <option value="0"><?php esc_html_e('Не вибрано', 'topukraine');?></option>
          <optgroup label="Україна">
            <option value="2"><?php esc_html_e('Київ', 'topukraine');?></option>
            <option value="34"><?php esc_html_e('Житомир', 'topukraine');?></option>
            <option value="399"><?php esc_html_e('Рівне', 'topukraine');?></option>
            <option value="112"><?php esc_html_e('Львів', 'topukraine');?></option>
          </optgroup>
          <optgroup label="Німеччина">
            <option value="236"><?php esc_html_e('Дрезден', 'topukraine');?></option>
            <option value="237"><?php esc_html_e('Лейпціг', 'topukraine');?></option>
            <option value="2617"><?php esc_html_e('Єна', 'topukraine');?></option>
            <option value="2363"><?php esc_html_e('Ерфурт', 'topukraine');?></option>
            <option value="2854"><?php esc_html_e('Кассель', 'topukraine');?></option>
            <option value="2848"><?php esc_html_e('Падерборн', 'topukraine');?></option>
            <option value="242"><?php esc_html_e('Дортмунд', 'topukraine');?></option>
            <option value="2843"><?php esc_html_e('Бохум', 'topukraine');?></option>
            <option value="243"><?php esc_html_e('Ессен', 'topukraine');?></option>
            <option value="244"><?php esc_html_e('Дуйсбург', 'topukraine');?></option>
            <option value="245"><?php esc_html_e('Дюссельдорф', 'topukraine');?></option>
            <option value="1019"><?php esc_html_e('Кельн', 'topukraine');?></option>
            <option value="979"><?php esc_html_e('Бонн', 'topukraine');?></option>
          </optgroup>
        </select>
      </div>
      <div class="form__input-item">
        <label for="to"><?php esc_html_e('Куди', 'topukraine');?></label>
        <select id="to" name="to" required>
          <option hidden disabled selected value><?php esc_html_e('Виберіть куди', 'topukraine');?></option>
          <option value="0"><?php esc_html_e('Не вибрано', 'topukraine');?></option>
          <optgroup label="Україна">
            <option value="2"><?php esc_html_e('Київ', 'topukraine');?></option>
            <option value="34"><?php esc_html_e('Житомир', 'topukraine');?></option>
            <option value="399"><?php esc_html_e('Рівне', 'topukraine');?></option>
            <option value="112"><?php esc_html_e('Львів', 'topukraine');?></option>
          </optgroup>
          <optgroup label="Німеччина">
            <option value="236"><?php esc_html_e('Дрезден', 'topukraine');?></option>
            <option value="237"><?php esc_html_e('Лейпціг', 'topukraine');?></option>
            <option value="2617"><?php esc_html_e('Єна', 'topukraine');?></option>
            <option value="2363"><?php esc_html_e('Ерфурт', 'topukraine');?></option>
            <option value="2854"><?php esc_html_e('Кассель', 'topukraine');?></option>
            <option value="2848"><?php esc_html_e('Падерборн', 'topukraine');?></option>
            <option value="242"><?php esc_html_e('Дортмунд', 'topukraine');?></option>
            <option value="2843"><?php esc_html_e('Бохум', 'topukraine');?></option>
            <option value="243"><?php esc_html_e('Ессен', 'topukraine');?></option>
            <option value="244"><?php esc_html_e('Дуйсбург', 'topukraine');?></option>
            <option value="245"><?php esc_html_e('Дюссельдорф', 'topukraine');?></option>
            <option value="1019"><?php esc_html_e('Кельн', 'topukraine');?></option>
            <option value="979"><?php esc_html_e('Бонн', 'topukraine');?></option>
          </optgroup>
        </select>
      </div>
      <div class="form__input-item">
        <label for="when"><?php esc_html_e('Коли', 'topukraine');?></label>
        <input type="date" id="when" name="when" required>
      </div>
    </div>
    <div class="form__row">
      <div class="form__input-item">
        <label for="passengers"><?php esc_html_e('К-сть місць', 'topukraine');?></label>
        <select id="passengers" name="passengers">
          <option value="1" selected><?php esc_html_e('1 Пасажир', 'topukraine');?></option>
          <option value="2"><?php esc_html_e('2 Пасажири', 'topukraine');?></option>
          <option value="3"><?php esc_html_e('3 Пасажири', 'topukraine');?></option>
          <option value="4"><?php esc_html_e('4 Пасажири', 'topukraine');?></option>
          <option value="5"><?php esc_html_e('5 Пасажирів', 'topukraine');?></option>
          <option value="6"><?php esc_html_e('6 Пасажирів', 'topukraine');?></option>
          <option value="7"><?php esc_html_e('7 Пасажирів', 'topukraine');?></option>
          <option value="8"><?php esc_html_e('8 Пасажирів', 'topukraine');?></option>
          <option value="9"><?php esc_html_e('9 Пасажирів', 'topukraine');?></option>
          <option value="10"><?php esc_html_e('10 Пасажирів', 'topukraine');?></option>
        </select>
      </div>
      <div class="form__input-submit">
        <button class="link-btn link-text" type="submit"><?php esc_html_e('Знайти Квиток', 'topukraine');?></button>
      </div>
    </div>
  </form>
</div>

<section class="routes home">
  <div class="routes__inner">
    <div class="routes__info">
      <div class="routes__info-inner">
        <h5 class="title-section-secondary title-section-secondary--dark"><?php esc_html_e('Маршрути', 'topukraine');?></h5>
        <h2 class="title-section-primary title"><?php esc_html_e('Перевезення з', 'topukraine');?> <span class="title-accent-2"><?php esc_html_e('України', 'topukraine');?></span> <?php esc_html_e('в', 'topukraine');?> <span class="title-accent-2"><?php esc_html_e('Німеччину', 'topukraine');?></span></h2>
        <p class="routes__text text-section"><?php esc_html_e('Протягом 15 років наша компанія здійснює пасажирські перевезення з України (Київ) в Німеччину (Бонн) та у зворотньому напрямку.', 'topukraine');?></p><br>
        <p class="routes__text text-section"><?php esc_html_e('Наш маршрут пролягає в Україні через Київ, Житомир, Рівне та Львів. У Німеччнині через Дрезден, Лейпціг, Єна, Ерфурт, Кассель, Падерборн, Дортмунд, Бохум, Ессен, Дуйсбург, Дюссельдорф, Кельн та Бонн.', 'topukraine');?></p>
        <div class="routes__info-schedule">
          <div class="routes__info-schedule-to">
            <p class="routes__info-schedule-day"><?php esc_html_e('Кожної середи:', 'topukraine');?></p>
            <p class="routes__info-schedule-direction"><span style="text-decoration: underline;"><?php esc_html_e('Україна', 'topukraine');?></span> &nbsp;<i class="fa-solid fa-angle-right"></i>&nbsp; <span style="text-decoration: underline;"><?php esc_html_e('Німеччина', 'topukraine');?></span></p>
            <p class="routes__info-schedule-price"><?php esc_html_e('4 000 грн.', 'topukraine');?></p>
          </div>
          <div class="routes__info-schedule-from">
            <p class="routes__info-schedule-day"><?php esc_html_e('Кожної суботи:', 'topukraine');?></p>
            <p class="routes__info-schedule-direction"><span style="text-decoration: underline;"><?php esc_html_e('Німеччина', 'topukraine');?></span> &nbsp;<i class="fa-solid fa-angle-right"></i>&nbsp; <span style="text-decoration: underline;"><?php esc_html_e('Україна', 'topukraine');?></span></p>
            <p class="routes__info-schedule-price"><?php esc_html_e('100 €', 'topukraine');?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="routes__picture" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/bus-road.jpg);">
      <div class="routes__picture-info">
        <h3 class="routes__picture-info-title"><?php esc_html_e('Знижка 5%', 'topukraine');?></h3>
        <p><?php esc_html_e('при покупці чи бронюванні квитка на сайті', 'topukraine');?></p>
        <h4 class="routes__picture-info-sub-title"><?php esc_html_e('Також знижки діють:', 'topukraine');?></h4>
        <ul class="routes__picture-info-discount-list">
          <li><?php esc_html_e('пенсіонерам, інвалідам -', 'topukraine');?> <span class="discount-value">10%</span></li>
          <li><?php esc_html_e('студентам віком 16-18 років –', 'topukraine');?> <span class="discount-value">10%</span></li>
          <li><?php esc_html_e('дітям віком до 10 років –', 'topukraine');?> <span class="discount-value">50%</span></li>
          <li><?php esc_html_e('дітям віком 10-15 років –', 'topukraine');?> <span class="discount-value">20%</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="route-map">
  <div class="route-map__pc container">
  <!-- <img src="https://www.adlertrans.com.ua/sites/default/files/styles/map_pc/public/map/map_pc.jpg" alt="route map desktop"> -->
    <img src="<?php bloginfo('template_url') ?>/assets/img/route-map.jpg" alt="route map">
  </div>

  <div class="route-map__mobile">
  <!-- <img src="https://www.adlertrans.com.ua/sites/default/files/styles/map_mobile/public/map/map_mobile.jpg" alt="route map mobile"> -->
    <img src="<?php bloginfo('template_url') ?>/assets/img/route-map.jpg" alt="route map">
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="content-double">
      <div class="content-double__segment">
        <div class="about__text">
          <h5 class="title-section-secondary"><?php esc_html_e('About Shuttle', 'topukraine');?></h5>
          <h2 class="title-section-primary"><?php esc_html_e('More Than 25 Years We Provide', 'topukraine');?> <span class="title-accent-2"><?php esc_html_e('Bus Charter', 'topukraine');?></span> <?php esc_html_e('Service For You', 'topukraine');?></h2>
          <p class="text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi.', 'topukraine');?></p>
        </div>
        <div class="about__lists">
          <ul class="about__list">
            <li><i class="fa-solid fa-circle-check"></i> <?php esc_html_e('Brilient Client Service', 'topukraine');?></li>
            <li><i class="fa-solid fa-circle-check"></i> <?php esc_html_e('24/7 Support', 'topukraine');?></li>
            <li><i class="fa-solid fa-circle-check"></i> <?php esc_html_e('Free Consultations', 'topukraine');?></li>
          </ul>
          <ul class="about__list">
            <li><i class="fa-solid fa-circle-check"></i> <?php esc_html_e('User Experience', 'topukraine');?></li>
            <li><i class="fa-solid fa-circle-check"></i> <?php esc_html_e('Big Data & Analytics', 'topukraine');?></li>
            <li><i class="fa-solid fa-circle-check"></i> <?php esc_html_e('Quick Tips and Advice', 'topukraine');?></li>
          </ul>
        </div>
        <div class="about__more">
          <!-- <button class="link-btn link-text" type="submit">More About Us</button> -->
          <a class="link-btn link-text" href="<?php echo get_permalink(pll_get_post(13)); ?>"><span><?php esc_html_e('More About Us', 'topukraine');?></span></a>
        </div>
      </div>
      <div class="content-double__segment">
        <div>
          <img class="about__img-1" src="<?php bloginfo('template_url') ?>/assets/img/about-1.jpg" alt="">
        </div>
        <section class="about__experience">
          <div class="about__experience-icon">
            <i class="fa-regular fa-thumbs-up"></i>
          </div>
          <div>
            <p class="about__experience-title">25 <span class="about__experience-plus">+</span></p>
            <p class="about__experience-text"><?php esc_html_e('Years Experience', 'topukraine');?></p>
          </div>
        </section>
        <img class="about__img-2" src="<?php bloginfo('template_url') ?>/assets/img/new7.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section class="why">
  <div class="why__inner">
    <div class="why__picture" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/why-choose-us.jpg);">
      <div class="why__picture-info">
        <h3><?php esc_html_e('We Provide Best Bus For You', 'topukraine');?></h3>
        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'topukraine');?></p>
        <a class="more-link hover-dark" href="#"><?php esc_html_e('View Projects', 'topukraine');?> <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="why__info">
      <div class="why__info-inner">
        <h5 class="title-section-secondary title-section-secondary--dark"><?php esc_html_e('Why Choose Us', 'topukraine');?></h5>
        <h2 class="title-section-primary"><?php esc_html_e('We Are Experts In', 'topukraine');?> <span class="title-accent-2"><?php esc_html_e('Bus Charter', 'topukraine');?></span>
          <?php esc_html_e('Service Company Since 1997', 'topukraine');?></h2>
        <p class="why__text text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor
          incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo', 'topukraine');?></p>

        <div class="achievements">
          <div class="achievements__cell">
            <div class="achievements__icon"><i class="fa-solid fa-bus-simple"></i></div>
            <div class="achievements__text">
              <p class="achievements__title">25 <span class="achievements__plus">+</span></p>
              <p class="achievements__subtitle"><?php esc_html_e('Buses Ready', 'topukraine');?></p>
            </div>
          </div>
          <div class="achievements__cell">
            <div class="achievements__icon"><i class="fa-regular fa-handshake"></i></div>
            <div class="achievements__text">
              <p class="achievements__title">2,640 <spsupan class="achievements__plus">+</spsupan>
              </p>
              <p class="achievements__subtitle"><?php esc_html_e('Satisfied Customer', 'topukraine');?></p>
            </div>
          </div>
        </div>

        <div class="achievements">
          <div class="achievements__cell">
            <div class="achievements__icon"><i class="fa-regular fa-thumbs-up"></i></div>
            <div class="achievements__text">
              <p class="achievements__title">2,836 <span class="achievements__plus">+</span></p>
              <p class="achievements__subtitle"><?php esc_html_e('Booking Done', 'topukraine');?></p>
            </div>
          </div>
          <div class="achievements__cell">
            <div class="achievements__icon"><i class="fa-solid fa-people-group"></i></div>
            <div class="achievements__text">
              <p class="achievements__title">75 <spsupan class="achievements__plus">+</spsupan>
              </p>
              <p class="achievements__subtitle"><?php esc_html_e('Professional Team', 'topukraine');?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="services">
  <div class="container">
    <div class="services__text">
      <h5 class="title-section-secondary"><?php esc_html_e('Our Services', 'topukraine');?></h5>
      <h2 class="services__title title-section-primary"><?php esc_html_e('We Provide', 'topukraine');?> <span class="title-accent-2"><?php esc_html_e('Best
          Services', 'topukraine');?></span> <?php esc_html_e('For You', 'topukraine');?></h2>
      <p class="text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua', 'topukraine');?></p>
    </div>
    <div class="services__cards">
      <section class="services__card">
        <div class="services__card-icon"><i class="fa-solid fa-shield"></i></div>
        <h3 class="services__card-title"><?php esc_html_e('Safety Guarantee', 'topukraine');?></h3>
        <p class="services__card-text text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do
          eiusmod
          tempor incididunt ut labore et dolore', 'topukraine');?></p>
        <!-- <div class="services__card-more">
          <a class="more-link" href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
      </section>
      <section class="services__card services__card--hovered" data-card-primary="true">
        <div class="services__card-icon"><i class="fa-solid fa-tag"></i></div>
        <h3 class="services__card-title"><?php esc_html_e('Discount & Promo', 'topukraine');?></h3>
        <p class="services__card-text text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do
          eiusmod
          tempor incididunt ut labore et dolore', 'topukraine');?></p>
        <!-- <div class="services__card-more">
          <a class="more-link" href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
      </section>
      <section class="services__card">
        <div class="services__card-icon"><i class="fa-solid fa-id-card"></i></div>
        <h3 class="services__card-title"><?php esc_html_e('Professional Staff', 'topukraine');?></h3>
        <p class="services__card-text text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do
          eiusmod
          tempor incididunt ut labore et dolore', 'topukraine');?></p>
        <!-- <div class="services__card-more">
          <a class="more-link" href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
      </section>
    </div>
    <div class="services__cards">
      <section class="services__card">
        <div class="services__card-icon"><i class="fa-regular fa-clock"></i></div>
        <h3 class="services__card-title"><?php esc_html_e('Schedule On Time', 'topukraine');?></h3>
        <p class="services__card-text text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do
          eiusmod
          tempor incididunt ut labore et dolore', 'topukraine');?></p>
        <!-- <div class="services__card-more">
          <a class="more-link" href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
      </section>
      <section class="services__card">
        <div class="services__card-icon"><i class="fa-solid fa-mobile"></i></div>
        <h3 class="services__card-title"><?php esc_html_e('Online Booking', 'topukraine');?></h3>
        <p class="services__card-text text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do
          eiusmod
          tempor incididunt ut labore et dolore', 'topukraine');?></p>
        <!-- <div class="services__card-more">
          <a class="more-link" href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
      </section>
      <section class="services__card">
        <div class="services__card-icon"><i class="fa-solid fa-headset"></i></div>
        <h3 class="services__card-title"><?php esc_html_e('24/7 Support', 'topukraine');?></h3>
        <p class="services__card-text text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do
          eiusmod
          tempor incididunt ut labore et dolore', 'topukraine');?></p>
        <!-- <div class="services__card-more">
          <a class="more-link" href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
      </section>
    </div>
  </div>
</section>

<div class="divider-promo" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/divider-promo.jpg);">
  <div class="divider-promo__overlay"></div>
</div>

<section class="buses">
  <div class="container">
    <h5 class="title-section-secondary"><?php esc_html_e('Our Bus', 'topukraine');?></h5>
    <div class="buses__text">
      <h2 class="buses__title title-section-primary"><?php esc_html_e('Our', 'topukraine');?> <span class="title-accent-2"><?php esc_html_e('Bus', 'topukraine');?></span> <?php esc_html_e('Collection', 'topukraine');?></h2>
      <p class="text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua', 'topukraine');?></p>
    </div>
    <div class="buses__cards">
      <div class="buses__card">
        <img class="buses__img" src="<?php bloginfo('template_url') ?>/assets/img/bus_1.jpg" alt="bus_1">
        <section class="buses__details">
          <h4 class="buses__details-title"><?php esc_html_e('Volto 403', 'topukraine');?></h4>
          <div class="buses__details-divider divider"></div>
          <ul class="buses__details-list">
            <li class="buses__details-list-item"><i class="fa-solid fa-user-group"></i> <?php esc_html_e('60 Seat', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-bed"></i> <?php esc_html_e('2 Driver Staff', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-gears"></i> <?php esc_html_e('Manual', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-money-check"></i> <?php esc_html_e('Fully Insured', 'topukraine');?></li>
          </ul>
          <!-- <div class="buses__details-more">
            <a class="more-link hover-theme" href="#">View Details <i class="fa-solid fa-arrow-right"></i></a>
          </div> -->
        </section>
      </div>
      <div class="buses__card">
        <img class="buses__img" src="<?php bloginfo('template_url') ?>/assets/img/bus_2.jpg" alt="bus_2">
        <section class="buses__details">
          <h4 class="buses__details-title"><?php esc_html_e('Etiquette 101', 'topukraine');?></h4>
          <div class="buses__details-divider divider"></div>
          <ul class="buses__details-list">
            <li class="buses__details-list-item"><i class="fa-solid fa-user-group"></i> <?php esc_html_e('60 Seat', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-bed"></i> <?php esc_html_e('2 Driver Staff', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-gears"></i> <?php esc_html_e('Manual', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-money-check"></i> <?php esc_html_e('Fully Insured', 'topukraine');?></li>
          </ul>
          <!-- <div class="buses__details-more">
            <a class="more-link hover-theme" href="#">View Details <i class="fa-solid fa-arrow-right"></i></a>
          </div> -->
        </section>
      </div>
      <div class="buses__card">
        <img class="buses__img" src="<?php bloginfo('template_url') ?>/assets/img/bus_3.jpg" alt="bus_3">
        <section class="buses__details">
          <h4 class="buses__details-title"><?php esc_html_e('Van Hool 916', 'topukraine');?></h4>
          <div class="buses__details-divider divider"></div>
          <ul class="buses__details-list">
            <li class="buses__details-list-item"><i class="fa-solid fa-user-group"></i> <?php esc_html_e('60 Seat', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-bed"></i> <?php esc_html_e('2 Driver Staff', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-gears"></i> <?php esc_html_e('Manual', 'topukraine');?></li>
            <li class="buses__details-list-item"><i class="fa-solid fa-money-check"></i> <?php esc_html_e('Fully Insured', 'topukraine');?></li>
          </ul>
          <!-- <div class="buses__details-more">
            <a class="more-link hover-theme" href="#">View Details <i class="fa-solid fa-arrow-right"></i></a>
          </div> -->
        </section>
      </div>
    </div>
  </div>
</section>

<section class="reviews">
  <div class="reviews__promo" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/reviews-promo.jpg);">
    <div class="reviews__promo-overlay"></div>
    <div class="reviews__text container">
      <h5 class="title-section-secondary title-section-secondary--dark"><?php esc_html_e('Our Testimonial', 'topukraine');?></h5>
      <h2 class="reviews__title title-section-primary"><?php esc_html_e('What Our', 'topukraine');?> <span class="title-accent-2"><?php esc_html_e('Clients', 'topukraine');?></span> <?php esc_html_e('Say', 'topukraine');?>
      </h2>
      <p class="text-section"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua', 'topukraine');?></p>
    </div>
  </div>

  <div class="container">
    <div class="reviews__slider">
      <div class="reviews__slider-item">
        <div class="reviews__slider-item-content">
          <p class="reviews__feedback"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.', 'topukraine');?></p>
          <p class="reviews__rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
          <p class="reviews__name"><?php esc_html_e('1 Bennett Miller', 'topukraine');?></p>
          <p class="reviews__date"><?php esc_html_e('May 2024', 'topukraine');?></p>
        </div>
      </div>
      <div class="reviews__slider-item">
        <div class="reviews__slider-item-content">
          <p class="reviews__feedback"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.', 'topukraine');?></p>
          <p class="reviews__rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
          <p class="reviews__name"><?php esc_html_e('2 Bennett Miller', 'topukraine');?></p>
          <p class="reviews__date"><?php esc_html_e('March 2024', 'topukraine');?></p>
        </div>
      </div>
      <div class="reviews__slider-item">
        <div class="reviews__slider-item-content">
          <p class="reviews__feedback"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.', 'topukraine');?></p>
          <p class="reviews__rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
          <p class="reviews__name"><?php esc_html_e('3 Bennett Miller', 'topukraine');?></p>
          <p class="reviews__date"><?php esc_html_e('December 2023', 'topukraine');?></p>
        </div>
      </div>
      <div class="reviews__slider-item">
        <div class="reviews__slider-item-content">
          <p class="reviews__feedback"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.', 'topukraine');?></p>
          <p class="reviews__rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
          <p class="reviews__name"><?php esc_html_e('4 Bennett Miller', 'topukraine');?></p>
          <p class="reviews__date"><?php esc_html_e('September 2023', 'topukraine');?></p>
        </div>
      </div>
      <div class="reviews__slider-item">
        <div class="reviews__slider-item-content">
          <p class="reviews__feedback"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.', 'topukraine');?></p>
          <p class="reviews__rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
          <p class="reviews__name"><?php esc_html_e('5 Bennett Miller', 'topukraine');?></p>
          <p class="reviews__date"><?php esc_html_e('August 2023', 'topukraine');?></p>
        </div>
      </div>
      <div class="reviews__slider-item">
        <div class="reviews__slider-item-content">
          <p class="reviews__feedback"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.', 'topukraine');?></p>
          <p class="reviews__rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
          <p class="reviews__name"><?php esc_html_e('6 Bennett Miller', 'topukraine');?></p>
          <p class="reviews__date"><?php esc_html_e('June 2023', 'topukraine');?></p>
        </div>
      </div>
    </div>
  </div>


</section>

<?php get_footer(); ?>