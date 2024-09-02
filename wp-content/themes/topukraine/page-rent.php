<?php
/*
Template Name: Rent
*/
?>

<?php get_header(); ?>

<section class="promo" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/rent-promo.jpg);">
  <div class="container">
    <div class="promo__overlay"></div>
    <div class="promo__content">
      <div class="promo__content-text">
        <h1 class="promo__title"><?php esc_html_e('Оренда автобуса', 'topukraine'); ?></h1>
        <p class="promo__text"><?php esc_html_e('Замовляйте автобус з водієм для ваших подорожей, заходів та особливих подій', 'topukraine'); ?></p>
      </div>
      <ul class="promo__breadcrumbs">
        <li><?php esc_html_e('Головна', 'topukraine'); ?></li>
        <li class="promo__breadcrumbs-arrows"><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></li>
        <li><?php esc_html_e('Оренда', 'topukraine'); ?></li>
      </ul>
    </div>
  </div>
</section>

<section class="rent">
  <div class="container">
    <div class="rent__header">
      <h5 class="title-section-secondary"><?php esc_html_e('Оренда автобуса', 'topukraine'); ?></h5>
      <h2 class="services__title title-section-primary"><?php esc_html_e('Замовлення', 'topukraine'); ?> <span class="title-accent-2"><?php esc_html_e("автобуса", 'topukraine'); ?></span> <?php esc_html_e('з водієм', 'topukraine'); ?></h2>
      <p class="text-section"><?php esc_html_e('Наша компанія надає послуги оренди автобуса для різноманітних потреб: екскурсії, тури, корпоративні події, спортивні заходи, весілля, шкільні поїздки, релігійні заходи, трансфери до/з аеропорту, подорожі на відпочинок та багато іншого.', 'topukraine'); ?></p>
      <br>
      <p class="text-section"><?php esc_html_e("На даний момент сторінка перебуває на стадії розробки. Для отримання детальної інформації, будь ласка, зв'яжіться з нами по телефону, через месенджери чи надішліть нам електронний лист або ж заповніть форму на сторінці Контакти. Ми з радістю відповімо на всі ваші запитання та допоможемо організувати ідеальну поїздку!", 'topukraine'); ?></p>
      <br>
    </div>
    
  </div>
</section>

<?php get_footer(); ?>
