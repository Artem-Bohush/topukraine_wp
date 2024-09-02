<?php
/*
Template Name: Contacts
*/
?>

<?php get_header(); ?>

<section class="promo" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/new18.jpg);">
  <div class="container">
    <div class="promo__overlay"></div>
    <div class="promo__content">
      <div class="promo__content-text">
        <h1 class="promo__title"><?php esc_html_e('Наші Контакти', 'topukraine');?></h1>
        <p class="promo__text"><?php esc_html_e("Якщо у вас виникли запитання, будь ласка, зв'яжіться з нами зручним для вас способом", 'topukraine');?></p>
      </div>
      <ul class="promo__breadcrumbs">
        <li><?php esc_html_e('Головна', 'topukraine');?></li>
        <li class="promo__breadcrumbs-arrows"><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></li>
        <li><?php esc_html_e('Контакти', 'topukraine');?></li>
      </ul>
    </div>
  </div>
</section>

<section class="contact-us">
  <div class="container">
    <div class="content-double">
      <div class="content-double__segment">
        <?php echo do_shortcode('[contact-form-7 id="97b2255" title="Contact form" html_class="contact-us__form form"]'); ?>
        <!-- <form class="contact-us__form form" id="contactForm">
          <div class="form__row">
            <div class="form__input-item">
              <label for="name">Ім'я</label>
              <input type="text" id="name" name="name" placeholder="Ваше ім'я">
            </div>
            <div class="form__input-item">
              <label for="tel">Телефон <span style="color: red;">*</span></label>
              <input type="tel" id="tel" name="tel" placeholder="Бажано з Viber або Whatsapp" required>
            </div>
          </div>
          <div class="form__row">
            <div class="form__input-item">
              <label for="email">E-mail адреса</label>
              <input type="email" id="email" name="email">
            </div>
          </div>
          <div class="form__row">
            <div class="form__input-item">
              <label for="subject">Тема</label>
              <input type="text" id="subject" name="subject" placeholder="Тема вашого питання">
            </div>
          </div>
          <div class="form__row">
            <div class="form__input-item">
              <label for="message">Повідомлення</label>
              <textarea id="message" cols="30" rows="10" name="message"
                placeholder="Текст вашого питання"></textarea>
            </div>
          </div>
          <div class="form__row">
            <div class="form__input-item">
              <div class="form__input-submit">
                <button class="link-btn link-text" type="submit">Знайти Квиток</button>
              </div>
            </div>
          </div>
        </form> -->
      </div>
      <div class="content-double__segment">
        <div class="contact-us__text">
          <h5 class="title-section-secondary"><?php esc_html_e('Контакти', 'topukraine');?></h5>
          <h2 class="title-section-primary"><?php esc_html_e("Зв'яжіться з нами", 'topukraine');?></h2>
          <p class="text-section"><?php esc_html_e("Оберіть зручний для вас спосіб зв'язку: телефоний дзвінок чи переписка в месенджері, електронний лист чи, за потреби, відвідайте наш офіс. Завжди готові вас вислухати.", 'topukraine');?></p>
        </div>
        <div class="contact-us__address-row">
          <div class="contact-us__address-item">
            <div class="contact-us__address-icon">
              <i class="fa-solid fa-city"></i>
            </div>
            <div>
              <h4 class="contact-us__title"><?php esc_html_e('Київ', 'topukraine');?></h4>
              <a class="text-section" href="https://maps.app.goo.gl/exKgo7NLDMBcasjw6" target="_blank"><?php esc_html_e('вул. Генерала Наумова, 66', 'topukraine');?></a>
            </div>
          </div>
          <!-- <div class="contact-us__address-item">
            <div class="contact-us__address-icon">
              <i class="fa-regular fa-building"></i>
            </div>
            <div>
              <h4 class="contact-us__title"><?php esc_html_e('', 'topukraine');?>Badung</h4>
              <p class="text-section"><?php esc_html_e('', 'topukraine');?>Jl. Sunset Road No.815, Kuta</p>
            </div>
          </div> -->
        </div>
        <div class="contact-us__address-row">
          <div class="contact-us__address-item">
            <div class="contact-us__address-icon">
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div>
              <h4 class="contact-us__title"><?php esc_html_e('Напишіть нам', 'topukraine');?></h4>
              <a class="text-section" href="mailto:davydkomar@gmail.com">davydkomar@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="contact-us__address-row">
          <div class="contact-us__address-item">
            <div class="contact-us__address-icon">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div>
              <h4 class="contact-us__title"><?php esc_html_e('Подзвоніть нам', 'topukraine');?></h4>
              <a class="text-section" href="tel:+380976632332">+ (380)-97-663-23-32&nbsp;&nbsp;<i class="fa-brands fa-viber" style="color: #7360F2;"></i>&nbsp;<i class="fa-brands fa-whatsapp" style="color: #40C351;"></i>&nbsp;<i class="fa-brands fa-telegram" style="color: #259CD8;"></i></a><br>
              <div style="padding: 2px 0;"></div>
              <a class="text-section" href="tel:+4915678947111">+ (49)-15-6789-47111&nbsp;&nbsp;<i class="fa-brands fa-whatsapp" style="color: #40C351;"></i></a>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <h4 class="contact-us__title"><?php esc_html_e('Ми в соцмережах', 'topukraine');?></h4>
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
    </div>
  </div>
</section>

<!-- <div class="contact-us-map">
  <div class="container">
    
  </div>
</div> -->

<?php get_footer(); ?>
