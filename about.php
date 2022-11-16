
<?php
  $page_title = 'О компании'; 
  $header_style = 'header-in-pages';
  include_once('header-page.php') ?>



<section class="expert-chem-block chem-block">
  <div class="chem-block__container">
    <div class="chem-block__body flex">
      <picture  class="chem-block__image">
        <source type="image/webp" srcset="img/about_page/expert_chem.webp">
        <source type="image/jpeg" srcset="img/about_page/expert_chem.jpg">
        <img class="chem-block__image" src="img/about_page/expert_chem.jpg" alt="chemical_production">
      </picture>
      
  
      <div class="chem-block__info flex">
        <div class="chem-block__seporator seporator"></div>
  
        <h2 class="chem-block__title title">
          Мы - эксперты в области производства химии
        </h2>
  
        <p class="chem-block__text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость
          поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть
          объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример
          континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих
          проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового
          участия.
        </p>
      </div>
    </div>

  <?php include_once('./template-parts/swiper-features-block.php') ?>
  </div>
</section>

<section class="our-production">
  <div class="our-production__container grid">

    <div class="our-production__info grid-box-1 flex">
      <div class="our-production__seporator seporator"></div>
      <h2 class="our-production__title title">
        Наше производство
      </h2>
    </div>

    <div class="our-production__info grid-box-2 flex">
      <p class="our-production__text">
        Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает
        широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров
        создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса
        кластеризации усилий.
      </p>

      <p class="our-production__text o-p-t">
        Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые
        горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка
        сегодняшнего дня требует анализа анализа существующих паттернов поведения.
      </p>

      <div class="our-production__box-list flex">
        <ul class="production__list our__list">
          <li class="production__item our__item-col-1 flex">
            <svg class="production__item-svg our-svg">
              <use href="img/sprite.svg#p_item_2"></use>
            </svg>
      
            <p class="produktion__item-text">
              Автомобильная химия
            </p>
          </li>
          <li class="production__item our__item-col-1 flex">
            <svg class="production__item-svg our-svg">
              <use href="img/sprite.svg#p_item_11"></use>
            </svg>
      
            <p class="produktion__item-text">
              Бытовая химия
            </p>
          </li>
          <li class="production__item our__item-col-1 flex">
            <svg class="production__item-svg our-svg">
              <use href="img/sprite.svg#p_item_12"></use>
            </svg>
      
            <p class="produktion__item-text">
              Дезинфицирующие средства
            </p>
          </li>
          <li class="production__item our__item flex">
            <svg class="production__item-svg our-svg">
              <use href="img/sprite.svg#p_item_5.2"></use>
            </svg>
      
            <p class="produktion__item-text">
              Пищевые аэрозоли
            </p>
          </li>
          <li class="production__item our__item flex">
            <svg class="production__item-svg our-svg svg-visible">
              <use href="img/sprite.svg#p_item_5"></use>
            </svg>
      
            <p class="produktion__item-text">
              Косметическая продукция
            </p>
          </li>
          <li class="production__item our__item flex">
            <svg class="production__item-svg our-svg">
              <use href="img/sprite.svg#p_item_4"></use>
            </svg>
      
            <p class="produktion__item-text">
              Краски аэрозольные
            </p>
          </li>
        </ul>
      </div>  
    </div>

    <picture  class="our-production__img grid-box-3">
      <source type="image/webp" srcset="img/about_page/our-production.webp">
      <source type="image/jpeg" srcset="img/about_page/our_production.jpg">
      <img class="our-production__img" src="img/about_page/our_production.jpg" alt="lab-worker">
    </picture>
  </div>
</section>

<?php include_once('./template-parts/founder.php') ?>
<?php include_once('./template-parts/about-research.php') ?>
<?php include_once('./template-parts/clients-section.php') ?>
<?php include_once('footer.php') ?>


