<?php
$page_title = 'Автохимия AG-Tech';
$page_header_link = 'Собственные торговые марки';
$header_style = 'header-in-pages';
include_once('autohim-header.php');
?>

<?php include_once('./template-parts/own-production-section.php') ?>

<section class="distributor">
  <div class="distributor__content flex">
    <div class="distributor__info flex">
      <div class="distributor__seporator seporator"></div>

      <h2 class="distributor__title title">
        Генеральный дистрибьютор премиальной
        автохимии
      </h2>

      <p class="distributor__text">
        Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и морали..
      </p>

      <ul class="distributor__list grid">
        <li class="distributor__item row-1 flex">
          <svg class="distributor__item-svg">
            <use href="img/sprite.svg#p_item_1"></use>
          </svg>
        
          <p class="distributor__item-text text-item-1">
            Полное описание товаров
          </p>
        </li>
        <li class="distributor__item row-2 flex">
          <svg class="distributor__item-svg">
            <use href="img/sprite.svg#p_item_2"></use>
          </svg>
        
          <p class="distributor__item-text">
            Актуальные цены
          </p>
        </li>
        <li class="distributor__item row-3 flex">
          <svg class="distributor__item-svg">
            <use href="img/sprite.svg#p_item_4"></use>
          </svg>
        
          <p class="distributor__item-text text-item-5">
            Лаки и краски
          </p>
        </li>
        <li class="distributor__item row-4 flex">
          <svg class="distributor__item-svg">
            <use href="img/sprite.svg#p_item_1"></use>
          </svg>
        
          <p class="distributor__item-text">
            Химические производства
          </p>
        </li>
      </ul>

      <button class="distributor__button btn flex">
        <svg class="distributor__button-svg">
          <use href="img/sprite.svg#catalog_btn"></use>
        </svg>
        Скачать каталог
      </button>
    </div>
    
    <div class="distributor__box-img">
      <picture class="distributor__img">
        <source type="image/webp" srcset="img/internal_pages/catalog.webp">
        <source type="image/jpeg" srcset="img/internal_pages/catalog.png">
        <img class="distributor__img" src="img/internal_pages/catalog.png" alt="catalog">
      </picture>
    </div>
  </div>
</section>

<?php include_once('./template-parts/research-center.php') ?>
<?php  include_once('./template-parts/steps-section.php') ?>
<?php include_once('./template-parts/clients-section.php') ?>
<?php include_once('footer.php') ?>