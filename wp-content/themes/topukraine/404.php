<?php get_header(); ?>

<section class="promo promo-404" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/404.jpg);">
  <div class="promo__overlay"></div>
  <div class="promo__content promo__content-404">
    <h1 class="promo__title">404</h1>
    <h2 class="content__subtitle-404"><?php esc_html_e('Упс, сторінку не знайдено', 'topukraine');?></h2>
    <p class="promo__text"><?php esc_html_e('На жаль, ми не змогли знайти сторінку, на яку ви хотіли потрапити. Ймовірно сторінки не існує або сталася технічна помилка. Перевірте і спробуйте ще раз.', 'topukraine');?></p>
    <a class="link-404 link-btn link-text" href="<?php echo get_permalink(pll_get_post(9));?>"><span><?php esc_html_e('Назад до Головної', 'topukraine');?></span></a>
  </div>
</section>

<?php get_footer(); ?>
