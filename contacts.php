<?php
$page_title = 'Контакты'; 
$header_style = 'header-in-pages';
include_once('header-page.php') ?>

<section class="social">
  <div class="social__container flex">
    <ul class="social__list flex">
      <li class="social__item-numb flex">
        <a href="tel:+74996861014" class="social__numb-link">+7 (499) 686-10-14</a>
      </li>
      <li class="social__item social-item-address flex">
        <a href="#" class="social__item-link link flex">
          <svg class="social__item-icon address-check-icon">
            <use href="img/sprite.svg#address_check"></use>
          </svg>
          <address class="social-address">
            г. Мосвка, Холодильный пер. 4к1с8
          </address>
        </a>
      </li>
      <li class="social__item social-item-mail flex">
        <a href="mailto:a.dragunov@tdaliance.ru" class="social__item-link link flex">
          <svg class="social__item-icon">
            <use href="img/sprite.svg#address_mail"></use>
          </svg>
          <span class="social__mail">
            a.dragunov@tdaliance.ru
          </span>
        </a>
      </li>
      <li class="social__item flex">
        <a href="https://vk.com/" target="_blank" class="social__item-link link social-vk flex">
          <svg class="social__item-icon">
            <use href="img/sprite.svg#address_vk"></use>
          </svg>
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="social__item-link link social-inst flex">
          <svg class="social__item-icon">
            <use href="img/sprite.svg#address_inst"></use>
          </svg>
        </a>
      </li>
    </ul>

    <div class="social__image-box">
      <picture class="social__point-map">
        <source type="image/webp" srcset="img/internal_pages/contact-page-map.webp">
        <source type="image/jpeg" srcset="img/internal_pages/contact_page_map.jpg">
        <img class="social__point-map" src="img/internal_pages/contact_page_map.jpg" alt="point-map">
      </picture>
    </div>
    <div class="social__image-mobile">
      <picture class="social__point-map">
        <source type="image/webp" srcset="img/internal_pages/contact-mobile-map.webp">
        <source type="image/jpeg" srcset="img/internal_pages/contact-mobile-map.jpg">
        <img class="social__point-map" src="img/internal_pages/contact-mobile-map.jpg" alt="point-map">
      </picture>
    </div>
  </div>
</section>

<?php include_once('footer.php') ?>