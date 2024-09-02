<?php
/*
Template Name: Return
*/
?>

<?php get_header(); ?>

<section class="promo" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/refund.jpg);">
  <div class="container">
    <div class="promo__overlay"></div>
    <div class="promo__content">
      <div class="promo__content-text">
        <h1 class="promo__title"><?php esc_html_e('Умови повернення', 'topukraine'); ?></h1>
        <p class="promo__text"><?php esc_html_e('Змінились плани? Обираючи нас, Вам гарантується право повернути придбаний квиток.', 'topukraine'); ?></p>
      </div>
      <ul class="promo__breadcrumbs">
        <li><?php esc_html_e('Головна', 'topukraine'); ?></li>
        <li class="promo__breadcrumbs-arrows"><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></li>
        <li><?php esc_html_e('Повернення квитків', 'topukraine'); ?></li>
      </ul>
    </div>
  </div>
</section>

<section class="return-ticket">
  <div class="container">
    <div class="return-ticket__header">
      <h5 class="title-section-secondary"><?php esc_html_e('Повернення квитків', 'topukraine'); ?></h5>
      <h2 class="services__title title-section-primary"><?php esc_html_e('Політика', 'topukraine'); ?> <span class="title-accent-2"><?php esc_html_e("повернення", 'topukraine'); ?></span> <?php esc_html_e('квитка', 'topukraine'); ?></h2>
      <p class="text-section"><?php esc_html_e('Шановні пасажири, ми розуміємо, що обставини можуть змінюватися, і Вам можете знадобитися повернути квиток. Наша політика повернення квитків залежить від того, де ви придбали квиток.', 'topukraine'); ?></p>
      <p class="text-section"><?php esc_html_e("Ми намагаємося бути максимально гнучкими для Вас і розуміємо, що ваші плани можуть змінюватися. Якщо у вас є питання щодо нашої політики повернення квитків, будь ласка, зв'яжіться з нами.", 'topukraine'); ?></p>
      <br>
    </div>
    <div class="expand__wrapper">
      <div class="expand__panel">
        <div class="expand__title expand__title--close">
          <i class="fa-solid fa-angles-right"></i>
          <h3><?php esc_html_e('Ви придбали квиток через наш сайт?', 'topukraine');?></h3>
        </div>
        <div class="expand__text expand__text--close">
          <p><?php esc_html_e('Якщо ви придбали квиток через наш сайт, ви можете отримати повернення за умови:', 'topukraine');?></p>
          <ul>
            <li>- <?php esc_html_e('якщо до відправлення залишилося 72 години або більше, ми повернемо вам 75% від вартості поїздки;', 'topukraine');?></li>
            <li>- <?php esc_html_e('якщо до відправлення залишилося від 24 до 72 годин, ми повернемо вам 50% від вартості поїздки;', 'topukraine');?></li>
            <li>- <?php esc_html_e('якщо до відправлення залишилося менше 24 годин, ми не зможемо повернути вам кошти за поїздку;', 'topukraine');?></li>
          </ul><br>
          <p><?php esc_html_e('Подати запит на поверення квитка ви можете будь-яким зручним для вас способом - зателефонувавши чи написавши у месенджер за номером, вказаним на сторінці "Контакти", надіславши листа на наш email адрес або заповнивши форму на сторінці "Контакти".', 'topukraine');?></p>
        </div>
      </div>
      <div class="expand__panel">
        <div class="expand__title expand__title--close">
          <i class="fa-solid fa-angles-right"></i>
          <h3><?php esc_html_e('Ви придбали квиток напряму (по телефону)?', 'topukraine');?></h3>
        </div>
        <div class="expand__text expand__text--close">
          <ul>
            <li><?php esc_html_e('Якщо ви придбали квиток у нас напряму (по телефону), оплатуивши на карту чи банківські реквізити, ми вирішуємо питання повернення індивідуально. Ваші обставини будуть враховані при прийнятті рішення.', 'topukraine');?></li>
          </ul><br>
          <p><?php esc_html_e('Подати запит на поверення квитка ви можете будь-яким зручним для вас способом - зателефонувавши чи написавши у месенджер за номером, вказаним на сторінці "Контакти", надіславши листа на наш email адрес або заповнивши форму на сторінці "Контакти".', 'topukraine');?></p>
        </div>
      </div>
      <div class="expand__panel">
        <div class="expand__title expand__title--close">
          <i class="fa-solid fa-angles-right"></i>
          <h3><?php esc_html_e('Ви придбали квиток через агента?', 'topukraine');?></h3>
        </div>
        <div class="expand__text expand__text--close">
          <ul>
            <li><?php esc_html_e('Якщо ви придбали квиток через агента (наприклад Busfor, BlaBlaCar, ContraBus, Infobus та ін.), будь ласка, зверніться до нього для повернення квитка. Ми не можемо обробляти запити на повернення квитків, придбаних через агентів.', 'topukraine');?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>