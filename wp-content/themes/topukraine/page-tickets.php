<?php
/*
Template Name: Tickets
*/
?>

<?php get_header(); ?>

<section class="promo" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/new19.jpg);">
  <div class="container">
    <div class="promo__overlay"></div>
    <div class="promo__content">
      <div class="promo__content-text">
        <h1 class="promo__title">Квитки</h1>
        <p class="promo__text">Лорем іпсум долор сіт амет, консектетур адіпісцінг еліт. Ут еліт
          теллус, луктус нек улламкорпер маттіс, пульвінар лео.</p>
      </div>
      <ul class="promo__breadcrumbs">
        <li>Головна</li>
        <li class="promo__breadcrumbs-arrows"><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></li>
        <li>Квитки</li>
      </ul>
    </div>
  </div>
</section>

<section class="book-frame">
  <div class="container">
    <div id="app" data-spa="1" data-ptoken="33c9935a2f904942991964a81b67dd49" data-lang="uk" data-env="prod"></div>
  </div>
</section>

<section class="routes">
  <div class="routes__inner">
    <div class="routes__picture" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/bus-road.jpg);">
      <div class="routes__picture-info">
        <h3 class="routes__picture-info-title">Знижка 5%</h3>
        <p>при покупці чи бронюванні квитка на сайті</p>
        <h4 class="routes__picture-info-sub-title">Також знижки діють:</h4>
        <ul class="routes__picture-info-discount-list">
          <li>пенсіонерам, інвалідам - <span class="discount-value">10%</span></li>
          <li>студентам віком 16-18 років – <span class="discount-value">10%</span></li>
          <li>дітям віком до 10 років – <span class="discount-value">50%</span></li>
          <li>дітям віком 10-15 років – <span class="discount-value">20%</span></li>
        </ul>
      </div>
    </div>
    <div class="routes__info">
      <div class="routes__info-inner">
        <h5 class="title-section-secondary title-section-secondary--dark">Маршрути</h5>
        <h2 class="title-section-primary title">Перевезення з <span class="title-accent-2">України</span> в <span class="title-accent-2">Німеччину</span></h2>
        <p class="routes__text text-section">Протягом 15 років наша компанія здійснює пасажирські перевезення з України (Київ) в Німеччину (Бонн) та у зворотньому напрямку.</p><br>
        <p class="routes__text text-section">Наш маршрут пролягає в Україні через Київ, Житомир, Рівне та Львів. У Німеччнині через Дрезден, Лейпціг, Єна, Ерфурт, Кассель, Падерборн, Дортмунд, Бохум, Ессен, Дуйсбург, Дюссельдорф, Кельн та Бонн.</p>
        <div class="routes__info-schedule">
          <div class="routes__info-schedule-to">
            <p class="routes__info-schedule-day">Кожної середи:</p>
            <p class="routes__info-schedule-direction"><span style="text-decoration: underline;">Україна</span> &nbsp;<i class="fa-solid fa-angle-right"></i>&nbsp; <span style="text-decoration: underline;">Німеччина</span></p>
            <p class="routes__info-schedule-price">4 000 грн.</p>
          </div>
          <div class="routes__info-schedule-from">
            <p class="routes__info-schedule-day">Кожної суботи:</p>
            <p class="routes__info-schedule-direction"><span style="text-decoration: underline;">Німеччина</span> &nbsp;<i class="fa-solid fa-angle-right"></i>&nbsp; <span style="text-decoration: underline;">Україна</span></p>
            <p class="routes__info-schedule-price">100 €</p>
          </div>
        </div>
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

<section class="schedule">
  <div class="container">
    <div class="schedule__wrapper">

      <div class="schedule__table-group">
        <h4 class="schedule__table-group-direction"><span style="text-decoration: underline;">Україна</span> &nbsp;<i class="fa-solid fa-angle-right"></i>&nbsp; <span style="text-decoration: underline;">Німеччина</span></h4>
        <p class="schedule__table-group-time text-section">Час у дорозі: 38 год 05 хв</p>
        <div class="schedule__table">
          <div class="schedule__table-header">Міста</div>
          <div class="schedule__table-header">Зупинки</div>
          <div class="schedule__table-header">Відправлення</div>

          <div class="schedule__table-cell schedule__table-cell--none"></div>
          <div class="schedule__table-cell schedule__table-cell--none" style="font-weight: 600;">Україна</div>
          <div class="schedule__table-cell schedule__table-cell--none"></div>

          <div class="schedule__table-cell">Київ</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/SCDb2WdKHDH6px4F9" target="_blank">АС «Київ», вул. С.Петлюри, 32</a>
          </div>
          <div class="schedule__table-cell">06:15</div>

          <div class="schedule__table-cell">Житомир</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://maps.app.goo.gl/wBfxAVkjriqJK6TW6" target="_blank">АС, вул. Київська, 93</a>
          </div>
          <div class="schedule__table-cell">08:00</div>

          <div class="schedule__table-cell">Рівне</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/w2MMxTCbQsLUrAj76" target="_blank">АС, вул. Київська, 40</a>
          </div>
          <div class="schedule__table-cell">10:45</div>

          <div class="schedule__table-cell">Львів</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://maps.app.goo.gl/AtHieJi4PTRcrQAn9" target="_blank">АС, вул. Стрийська, 109</a>
          </div>
          <div class="schedule__table-cell">14:30</div>

          <div class="schedule__table-cell schedule__table-cell--none"></div>
          <div class="schedule__table-cell schedule__table-cell--none" style="font-weight: 600;word-break: unset;">Німеччина</div>
          <div class="schedule__table-cell schedule__table-cell--none">-1 год.</div>

          <div class="schedule__table-cell">Дрезден</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/eo83B9e3EyoTDZ2V6" target="_blank">Bayrische Straße, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">07:30</div>

          <div class="schedule__table-cell">Лейпціг</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/6raj7g45Cj71im8UA" target="_blank">Goethestraße 11, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">09:30</div>

          <div class="schedule__table-cell">Єна</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/LuWB8XGuWZjJq7cWA" target="_blank">Göschwitz (паркінг)</a>
          </div>
          <div class="schedule__table-cell">10:40</div>

          <div class="schedule__table-cell">Ерфурт</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/wq4ucisxpshbFanP6" target="_blank">Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">11:30</div>

          <div class="schedule__table-cell">Кассель</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/EoYJn6s5NVgMNfk58" target="_blank">Wilhelmshöher Allee 241, Bahnhof</a>
          </div>
          <div class="schedule__table-cell">13:40</div>

          <div class="schedule__table-cell">Падерборн</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/363y38zmKwAjxkAi7" target="_blank">Autohof Mönkeloh/A33</a>
          </div>
          <div class="schedule__table-cell">14:50</div>

          <div class="schedule__table-cell">Дортмунд</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/6XVd7yahbLi3gJqf6" target="_blank">ZOB Steinstraße 39, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">16:30</div>

          <div class="schedule__table-cell">Бохум</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/fNLvPJJvKf2MCxa57" target="_blank">Wittener Straße (під мостом), Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">17:00</div>

          <div class="schedule__table-cell">Ессен</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/WFvgCq4mjJrmgQbb6" target="_blank">ZOB Freiheit (біля вокзалу)</a>
          </div>
          <div class="schedule__table-cell">17:25</div>

          <div class="schedule__table-cell">Дуйсбург</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/fA7y1KBMhycNU3GX7" target="_blank">Mercatorstraße (автовокзал), Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">18:00</div>

          <div class="schedule__table-cell">Дюссельдорф</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/UwX1MNUYcTFPm3Ae7" target="_blank">ZOB, Worringer Straße 140, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">18:35</div>

          <div class="schedule__table-cell">Кельн</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/fT6Y1Drof48ERecr5" target="_blank">Flughafen Terminal 2</a>
          </div>
          <div class="schedule__table-cell">19:25</div>

          <div class="schedule__table-cell">Бонн</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/pawzNcDcT8wxRVb58" target="_blank">Thomastraße 36, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">19:50 (прибуття)</div>

        </div>
      </div>

      <div class="schedule__table-group">
        <h4 class="schedule__table-group-direction"><span style="text-decoration: underline;">Німеччина</span> &nbsp;<i class="fa-solid fa-angle-right"></i>&nbsp; <span style="text-decoration: underline;">Україна</span></h4>
        <p class="schedule__table-group-time text-section">Час у дорозі: 35 год 30 хв</p>
        <div class="schedule__table">
          <div class="schedule__table-header">Міста</div>
          <div class="schedule__table-header">Зупинки</div>
          <div class="schedule__table-header">Відправлення</div>

          <div class="schedule__table-cell schedule__table-cell--none"></div>
          <div class="schedule__table-cell schedule__table-cell--none" style="font-weight: 600;word-break: unset;">Німеччина</div>
          <div class="schedule__table-cell schedule__table-cell--none"></div>

          <div class="schedule__table-cell">Бонн</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/pawzNcDcT8wxRVb58" target="_blank">Thomastraße 36, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">04:00</div>

          <div class="schedule__table-cell">Кельн</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/fT6Y1Drof48ERecr5" target="_blank">Flughafen Terminal 2</a>
          </div>
          <div class="schedule__table-cell">04:40</div>

          <div class="schedule__table-cell">Дюссельдорф</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/UwX1MNUYcTFPm3Ae7" target="_blank">ZOB, Worringer Straße 140, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">05:25</div>

          <div class="schedule__table-cell">Дуйсбург</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/fA7y1KBMhycNU3GX7" target="_blank">Mercatorstraße (автовокзал), Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">06:00</div>

          <div class="schedule__table-cell">Ессен</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/WFvgCq4mjJrmgQbb6" target="_blank">ZOB Freiheit (біля вокзалу)</a>
          </div>
          <div class="schedule__table-cell">06:35</div>

          <div class="schedule__table-cell">Бохум</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/fNLvPJJvKf2MCxa57" target="_blank">Wittener Straße (під мостом), Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">07:00</div>

          <div class="schedule__table-cell">Дортмунд</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/6XVd7yahbLi3gJqf6" target="_blank">ZOB Steinstraße 39, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">07:30</div>

          <div class="schedule__table-cell">Падерборн</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/363y38zmKwAjxkAi7" target="_blank">Autohof Mönkeloh/A33</a>
          </div>
          <div class="schedule__table-cell">09:00</div>

          <div class="schedule__table-cell">Кассель</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/EoYJn6s5NVgMNfk58" target="_blank">Wilhelmshöher Allee 241, Bahnhof</a>
          </div>
          <div class="schedule__table-cell">10:05</div>

          <div class="schedule__table-cell">Ерфурт</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/wq4ucisxpshbFanP6" target="_blank">Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">13:10</div>

          <div class="schedule__table-cell">Єна</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/LuWB8XGuWZjJq7cWA" target="_blank">Göschwitz (паркінг)</a>
          </div>
          <div class="schedule__table-cell">14:00</div>

          <div class="schedule__table-cell">Лейпціг</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/6raj7g45Cj71im8UA" target="_blank">Goethestraße 11, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">15:10</div>

          <div class="schedule__table-cell">Дрезден</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/eo83B9e3EyoTDZ2V6" target="_blank">Bayrische Straße, Hauptbahnhof</a>
          </div>
          <div class="schedule__table-cell">17:10</div>

          <div class="schedule__table-cell schedule__table-cell--none"></div>
          <div class="schedule__table-cell schedule__table-cell--none" style="font-weight: 600;">Україна</div>
          <div class="schedule__table-cell schedule__table-cell--none">+1 год.</div>

          <div class="schedule__table-cell">Львів</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://maps.app.goo.gl/AtHieJi4PTRcrQAn9" target="_blank">АС, вул. Стрийська, 109</a>
          </div>
          <div class="schedule__table-cell">10:00</div>

          <div class="schedule__table-cell">Рівне</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/w2MMxTCbQsLUrAj76" target="_blank">АС, вул. Київська, 40</a>
          </div>
          <div class="schedule__table-cell">13:20</div>

          <div class="schedule__table-cell">Житомир</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://maps.app.goo.gl/wBfxAVkjriqJK6TW6" target="_blank">АС, вул. Київська, 93</a>
          </div>
          <div class="schedule__table-cell">15:40</div>

          <div class="schedule__table-cell">Київ</div>
          <div class="schedule__table-cell schedule__table-cell--gray">
            <a class="schedule__table-cell-link" href="https://goo.gl/maps/SCDb2WdKHDH6px4F9" target="_blank">АС «Київ», вул. С.Петлюри, 32</a>
          </div>
          <div class="schedule__table-cell">17:30 (прибуття)</div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="tickets__questions">
  <div class="container">

    <div class="tickets__questions-wrapper">
      <div class="tickets__questions-item tickets__questions-item-image" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/children-transportation.jpg);">
        <!-- <img src="<?php bloginfo('template_url') ?>/assets/img/children-transportation.jpg" alt="child sitting in seat"> -->
      </div>
      <div class="tickets__questions-item tickets__questions-item-text">
        <h2 class="title-section-primary title">Перевезення <span class="title-accent-2">Дітей</span></h2>
        <ul>
          <li>Дозвіл (згода, довіреність) для виїзду неповнолітньої дитини за кордон необхідно оформляти, якщо дитина виїжджає взагалі без батьків або тільки з одним з них.</li>
          <li>Якщо дитина виїжджає взагалі без батьків, тоді заява підписується обома батьками. Якщо з одним з батьків, тоді тільки тим, хто не бере участі в поїздці</li>
          <li>Такий документ підлягає обов’язковому нотаріальному посвідченню з видачею спеціального бланка, який необхідно пред’являти на пунктах прикордонного контролю.</li>
        </ul>
      </div>
    </div>

    <div class="tickets__questions-wrapper">
      <div class="tickets__questions-item tickets__questions-item-text">
        <h2 class="title-section-primary title">Перевезення <span class="title-accent-2">Багажу</span></h2>
        <ul>
          <li>Для безкоштовного перевезення багажу, загальною масою до 50кг, на одного пасажира надається 2 місця розмірами 30х45х70см та ручна поклажа до 5кг. Кожне наступне місце (максимально 2) тарифікується – 1кг/1€. Додатковий багаж (велосипеди, побутова техніка тощо) перевозиться за наявності вільного місця в багажному відділенні автобуса і тільки при попередньому узгодженні з перевізником.</li>
          <li>Перевезення тварин можливе лише за умови придбання окремого місця для тварини (-20% повної вартості), наявності всіх необхідних документів та щеплень для перетину кордонів та сплати гривневого еквіваленту 30€ (за курсом на дату оплати) застави на випадок пошкодження або забруднення твариною салону автобусу</li>
          <li>Перевізник не несе відповідальності за збереження цінних речей під час поїздки.</li>
        </ul>
      </div>
      <div class="tickets__questions-item tickets__questions-item-image" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/luggage-transportation.jpg);">
        <!-- <img src="<?php bloginfo('template_url') ?>/assets/img/luggage-transportation.jpg" alt="suitcase for travel"> -->
      </div>
    </div>

    <div class="tickets__questions-wrapper">
      <div class="tickets__questions-item tickets__questions-item-image" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/popular_questions.jpg);">
        <!-- <img src="<?php bloginfo('template_url') ?>/assets/img/popular_questions.jpg" alt="people are chatting at the bus"> -->
      </div>
      <div class="tickets__questions-item tickets__questions-item-text">
        <h2 class="title-section-primary title">Поширені <span class="title-accent-2">Запитання</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <div class="expand__panel">
          <div class="expand__title expand__title--close">
            <i class="fa-solid fa-angles-right"></i>
            <h3><?php esc_html_e('Чи є у вас доставка багажу?', 'topukraine'); ?></h3>
          </div>
          <div class="expand__text expand__text--close">
            <ul>
              <li><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'topukraine'); ?></li>
            </ul>
          </div>
        </div>
        <div class="expand__panel">
          <div class="expand__title expand__title--close">
            <i class="fa-solid fa-angles-right"></i>
            <h3><?php esc_html_e('Чи є можливість страхування вантажу?', 'topukraine'); ?></h3>
          </div>
          <div class="expand__text expand__text--close">
            <ul>
              <li><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'topukraine'); ?></li>
            </ul>
          </div>
        </div>
        <div class="expand__panel">
          <div class="expand__title expand__title--close">
            <i class="fa-solid fa-angles-right"></i>
            <h3><?php esc_html_e('Чи надаєте ви послуги перевезень для бізнесу?', 'topukraine'); ?></h3>
          </div>
          <div class="expand__text expand__text--close">
            <ul>
              <li><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'topukraine'); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>