<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" type="text/css" href="https://fonts.googleapis.com">
  <link rel="preconnect" type="text/css" href="https://fonts.gstatic.com" crossorigin>
  <link type="text/css" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Aliance production</title>
</head>

<body class="front-page">
  <div class="wrapper">
    <div class="mobile__menu">
      <ul class="mobile__menu-list flex">
        <li class="mobile__menu-item">
          <a href="#" class="mobile__menu-link">О компании</a>
        </li>
        <li class="mobile__menu-item">
          <a href="#" class="mobile__menu-link">Контрактное производство</a>

          <ul class="mobile__submenu flex">
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Дезинфицирующие средства</a>
            </li>
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Косметическая продукция</a>
            </li>
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile__menu-item">
          <a href="#" class="mobile__menu-link">Собственные торговые марки</a>

          <ul class="mobile__submenu">
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Автохимия AG-Tech</a>
            </li>
            <li class="mobile__submenu-item">
              <a href="#" class="mobile__submenu-link">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile__menu-item">
          <a href="#" class="mobile__menu-link">Новости</a>
        </li>
        <li class="mobile__menu-item">
          <a href="#" class="mobile__menu-link">Контакты</a>
        </li>
      </ul>

      <a href="tel:+74996861014" class="mobile__phone">+7 (499) 686-10-14</a>

      <ul class="mobile__info-list flex">
        <li class="mobile__info-item">
          <a href="#" class="mobile__info-link flex">
            <svg class="mobile__svg" width="24" height="24">
              <use href="img/sprite.svg#address_check"></use>
            </svg>
            <address class="mobile__info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
          </a>
        </li>
        <li class="mobile__info-item">
          <a href="mailto:a.dragunov@tdaliance.ru" class="mobile__info-link flex">
            <svg class="mobile__svg" width="24" height="24">
              <use href="img/sprite.svg#address_mail"></use>
            </svg>
            <span class="mobile__info-span">a.dragunov@tdaliance.ru</span>
          </a>
        </li>
        <li class="mobile__info-item info flex">
          <a class="info__link-vk" href="#">
            <svg class="mobile__svg" width="24" height="24">
              <use href="img/sprite.svg#address_vk"></use>
            </svg>
          </a>
          <a class="info__link-inst" href="#">
            <svg class="mobile__svg" width="24" height="24">
              <use href="img/sprite.svg#address_inst"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <nav class="header__nav  flex">
      <a href="#" class="header__mobile mobile-toggle flex">
        <div class="mobile__line-box flex">
          <div class="mobile__line line-top"></div>
          <div class="mobile__line line-between"></div>
          <div class="mobile__line line-bottom"></div>
        </div>
      </a>

      <a href="./" class="header__logo logo flex">
        <svg class="logo__svg logo-white">
          <use href="img/sprite.svg#logo_white"></use>
        </svg>
        <svg class="logo__svg logo-black">
          <use href="img/sprite.svg#logo_black"></use>
        </svg>
      </a>

      <ul class="header__menu menu flex">
        <li class="header__menu-item flex">
          <a href="./about.php" class="header__menu-link flex">О компании</a>
        </li>
        <li class="header__menu-item flex">
          <a href="#" class="header__menu-link flex">Контрактное производство</a>
        </li>
        <li class="header__menu-item flex">
          <a href="#" class="header__menu-link flex">
            Собственные торговые марки
          </a>
        </li>
        <li class="header__menu-item flex">
          <a href="#" class="header__menu-link flex">Новости</a>
        </li>
        <li class="header__menu-item flex">
          <a href="#" class="header__menu-link flex">Контакты</a>
        </li>
      </ul>

      <div class="header__buttons flex">
        <a href="tel:+74996861014" class="header__link-phone flex">
          <svg class="header__svg-phone">
            <use href="img/sprite.svg#phone"></use>
          </svg>
          <span class="header__number-phone">+7 (499) 686-10-14</span>
        </a>

        <button class="header__button btn flex" data-toggle="modal" data-target="#feedback-modal">
          <svg class="header__svg-phone">
            <use href="img/sprite.svg#phone"></use>
          </svg>
          <span class="header__button-text">
            Получить консультацию
          </span>
        </button>
      </div>
    </nav>

    <header class="header header-image">
      <div class="header__container">
        <div class="header__seporator"></div>

        <div class="header__content flex">
          <h1 class="header__title">
            <?php echo "Комплексное обеспечение товарами и расходными материалами бизнеса" ?>
          </h1>
          <p class="header__text">
            Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта:
            высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
          </p>

          <button class="header__content-button btn" data-toggle="modal" data-target="#feedback-modal">
            Подробнее о компании
          </button>
        </div>

        <!-- Оснвной блок слайдера -->
        <div class="swiper  header__features flex">
          <!-- обёртка слайдера -->
          <ul class="swiper-wrapper header__features-list flex">
            <!-- Слайды -->
            <li class="swiper-slide header__features-item flex">
              <svg class="header__svg" width="36" height="36">
                <use href="img/sprite.svg#features_icon_1"></use>
              </svg>
              <p class="header__features-text">
                Непрерывная работа c 2017 года
              </p>
            </li>
            <li class="swiper-slide header__features-item flex">
              <svg class="header__svg" width="36" height="36">
                <use href="img/sprite.svg#features_icon_2"></use>
              </svg>
              <p class="header__features-text">
                Вся продукция сертифицирована
              </p>
            </li>
            <li class="swiper-slide header__features-item flex">
              <svg class="header__svg" width="36" height="36">
                <use href="img/sprite.svg#features_icon_3"></use>
              </svg>
              <p class="header__features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header__features-item flex">
              <svg class="header__svg" width="36" height="36">
                <use href="img/sprite.svg#features_icon_4"></use>
              </svg>
              <p class="header__features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header__features-item flex">
              <svg class="header__svg" width="36" height="36">
                <use href="img/sprite.svg#features_icon_5"></use>
              </svg>
              <p class="header__features-text">
                Оперативное производство
              </p>
            </li>
          </ul>
          <!-- Постраничная навигация -->
          <!-- <div class="swiper-pagination"></div> -->
          <!-- Сейчас не нужна -->

          <div class="header__slider-buttons flex">
            <!-- Кнопки навигации вперёд/назад -->
            <button class="slider-button-prev  flex">
              <svg class="header__svg arrow-back" width="36" height="24">
                <use href="img/sprite.svg#arrow_back"></use>
              </svg>
            </button>
            <button class="slider-button-next  flex">
              <svg class="header__svg arrow-forward" width="36" height="24">
                <use href="img/sprite.svg#arrow_forward"></use>
              </svg>
            </button>
          </div>
          <!-- Прокрутка -->
          <!-- <div class="swiper-scrollbar"></div> -->
          <!-- Сейчас не нужна -->
        </div>

      </div>
    </header>

    <main class="main">
      <section class="steps">
        <div class="steps__container">
          <div class="steps__content">
            <div class="steps__seporator"></div>

            <h2 class="steps__title title">
              Схема работы
            </h2>

            <div class="swiper steps__swiper">
              <!-- обёртка слайдера -->
              <ul class="swiper-wrapper steps__list flex">
                <!-- Слайды -->
                <li class="swiper-slide steps__list-item item flex">
                  <span class="item__number flex">01</span>

                  <h3 class="item__subtitle">
                    Знакомство
                  </h3>
                  <p class="item__text">
                    Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                  </p>
                  <a href="#" class="item__link flex">
                    Оставить заявку
                  </a>
                </li>
                <li class="swiper-slide steps__list-item item flex">
                  <span class="item__number flex">02</span>

                  <h3 class="item__subtitle">
                    Заключение договора
                  </h3>
                  <p class="item__text">
                    Лишь интерактивные прототипы призваны к ответу.
                  </p>
                </li>
                <li class="swiper-slide steps__list-item item flex">
                  <span class="item__number flex">03</span>

                  <h3 class="item__subtitle">
                    Производство
                  </h3>
                  <p class="item__text">
                    А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
                    независимые
                    элементы.
                  </p>
                </li>
                <li class="swiper-slide steps__list-item item flex">
                  <span class="item__number flex">04</span>

                  <h3 class="item__subtitle">
                    Доставка
                  </h3>
                  <p class="item__text text-4">
                    В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над
                    эмоциями.
                  </p>
                </li>
              </ul>
              
              <div class="steps__slider-buttons-box flex">
                <div class="steps__slider-buttons flex">
                  <!-- Кнопки навигации вперёд/назад -->
                  <button class="slider-button-steps-prev flex">
                    <svg class="header__svg" width="36" height="20">
                      <use href="img/sprite.svg#arrow_back"></use>
                    </svg>
                  </button>
                  <button class="slider-button-steps-next flex">
                    <svg class="header__svg" width="36" height="20">
                      <use href="img/sprite.svg#arrow_forward"></use>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <!--  
            <ul class="steps__list flex">
              <li class="steps__list-item item flex">
                <span class="item__number flex">01</span>

                <h3 class="item__subtitle">
                  Знакомство
                </h3>
                <p class="item__text">
                  Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                </p>
                <a href="#" class="item__link flex">
                  <div class="item__link-line"></div>
                  Оставить заявку
                </a>
              </li>
              <li class="steps__list-item item flex">
                <span class="item__number flex">02</span>

                <h3 class="item__subtitle">
                  Заключение договора
                </h3>
                <p class="item__text">
                  Лишь интерактивные прототипы призваны к ответу.
                </p>
              </li>
              <li class="steps__list-item item flex">
                <span class="item__number flex">03</span>

                <h3 class="item__subtitle">
                  Производство
                </h3>
                <p class="item__text">
                  А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
                  независимые
                  элементы.
                </p>
              </li>
              <li class="steps__list-item item flex">
                <span class="item__number flex">04</span>

                <h3 class="item__subtitle">
                  Доставка
                </h3>
                <p class="item__text text-4">
                  В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над
                  эмоциями.
                </p>
              </li>
            </ul>
            -->
          </div>
        </div>
      </section>

      <section class="contract__manufacturing contract">
        <div class="contract__container">
          <div class="contract__seporator"></div>
    
          <h2 class="contract__title title">
            Контрактное производство
          </h2>
    
          <div class="contract__body flex">
            <ul class="contract__list flex">
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Автомобильная химия
                    </h3>
                    <p class="item__card-text">
                      Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                    </p>
                  </div>
                  
    
                  <img class="item__card-image" src="img/contracts_image/card_1_img.jpg" alt="auto-сhem">
                </a>
              </li>
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Бытовая химия
                    </h3>
                    <p class="item__card-text">
                      А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые
                      элементы.
                    </p>
                  </div>
    
                  <img class="item__card-image" src="img/contracts_image/card_2_img.jpg" alt="house-chem">
                </a>
              </li>
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Дезинфицирующие средства
                    </h3>
                    <p class="item__card-text">
                      Лишь интерактивные прототипы призваны к ответу.
                    </p>
                  </div>
    
                  <img class="item__card-image" src="img/contracts_image/card_3_img.jpg" alt="dez-chem">
                </a>
              </li>
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Пищевые аэрозоли
                    </h3>
                    <p class="item__card-text">
                      Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                    </p>
                  </div>
    
                  <img class="item__card-image" src="img/contracts_image/card_3_img.jpg" alt="food-aerosols">
                </a>
              </li>
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Косметическая продукция
                    </h3>
                    <p class="item__card-text">
                      Лишь интерактивные прототипы призваны к ответу.
                    </p>
                  </div>
    
                  <img class="item__card-image" src="img/contracts_image/card_1_img.jpg" alt="cosmetic-prod">
                </a>
              </li>
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Краски аэрозольные
                    </h3>
                    <p class="item__card-text">
                      А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые
                      элементы.
                    </p>
                  </div>
    
                  <img class="item__card-image" src="img/contracts_image/card_2_img.jpg" alt="spray-paints">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="trade__marks marks">
        <div class="marks__container">
          <div class="marks__seporator"></div>

          <h2 class="marks__title title-full title">
            Cобственные торговые марки
          </h2>
          <h2 class="marks__title title-truncated title">
            Cобственные марки
          </h2>

          <div class="marks__content flex">
            <a href="#" class="marks__link-left marks-link grid">
              <div class="marks__content-image">
                <svg class="marks__icons">
                  <use href="img/sprite.svg#ag_tech"></use>
                </svg>
              </div>

              
                <h3 class="marks__content-subtitle">
                  Автохимия AG-Tech
                </h3>
                <p class="marks__content-text">
                  Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
                </p>
              <!--
                <div class="marks__content-body"></div>
              -->
            </a>
            <a href="#" class="marks__link-right marks-link grid">
              <div class="marks__content-image">
                <svg class="marks__icons">
                  <use href="img/sprite.svg#aliance_prod_icon"></use>
                </svg>
              </div>
              
              
                <h3 class="marks__content-subtitle">
                  Автохимия AP
                </h3>
                <p class="marks__content-text">
                  Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
                </p>
              <!--
                <div class="marks__content-body"></div>
              -->
            </a>
          </div>
        </div>
      </section>

      <section class="founder">
        <div class="founder__content flex">
          <div class="founder__image">
            <img class="founder__photo" src="img/attitude_to_business/employee.jpg" alt="employee">
          </div>
  
          <div class="founder__info flex">
            <div class="founder__seporator"></div>

            <h2 class="founder__title title">
              Отношение к делу и к клиентам
            </h2>

            <p class="founder__text text-top">
              Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.
            </p>
            <p class="founder__text text-bottom">
              А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.
            </p>

            <a href="#" class="founder__link company-link flex">
              Подробнее о компании
            </a>
            <a href="#" class="founder__link mission-link flex">
              О нашей миссии
            </a>
          </div>
        </div>
      </section>

      <section class="clients">
        <div class="cliens__container">
          <div class="clients__seporator"></div>

          <div class="clients__content flex">
            <div class="clients__production production">
              <h2 class="clients__title title">
                Производим аэрозольную продукцию для разных сфер
              </h2>

              <ul class="production__list">
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_1"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Химические производства
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_2"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Автомойки
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_3"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Пищевая продукция
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_4"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Лаки и краски
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg svg-visible">
                    <use href="img/sprite.svg#p_item_5"></use>
                  </svg>
                  <svg class="production__item-svg svg-hidden">
                    <use href="img/sprite.svg#p_item_5.2"></use>
                  </svg>

                  <p class="produktion__item-text">
                    Косметические средства
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_6"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Автомобильная косметика
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_7"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Косметика по уходу за одеждой
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_8"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Косметика по уходу за обувью
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_9"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    Строительные материалы  
                  </p>
                </li>
                <li class="production__item flex">
                  <svg class="production__item-svg">
                    <use href="img/sprite.svg#p_item_10"></use>
                  </svg>
              
                  <p class="produktion__item-text">
                    И многих других
                  </p>
                </li>
              </ul>
            </div>

            <div class="clients__logotypes flex">
              <a class="clents__tiles flex" href="#">
                <!--
                                <svg class="clients__tiles-svg">
                                  <use href="img/sprite.svg#tile_1"></use>
                                </svg>
                              -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
              <a class="clents__tiles flex" href="#">
                <!--
                                  <svg class="clients__tiles-svg">
                                    <use href="img/sprite.svg#tile_1"></use>
                                  </svg>
                                -->
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="expert-blog blog">
        <div class="blog__container">
          <div class="blog__seporator"></div>

          <h2 class="blog__title title">
            Блог экспертов в области производства
          </h2>

          <div class="blog__swiper">
            <!-- обёртка слайдера -->
            <div class="swiper-wrapper blog__slider-box flex">
              <!-- Слайды -->
              <a href="#" class="swiper-slide blog__slide-link slide-1 flex">
                <h3 class="blog__slide-subtitle">
                  Современная методология разработки одухотворила всех причастных
                </h3>
                <p class="blog__slide-text">
                  Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...
                </p>
              </a>
              <a href="#" class="swiper-slide blog__slide-link slide-2 flex">
                <h3 class="blog__slide-subtitle">
                  Сложно сказать, почему жизнь прекрасна
                </h3>
                <p class="blog__slide-text">
                  Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...
                </p>
              </a>
              <a href="#" class="swiper-slide blog__slide-link slide-3 flex">
                <h3 class="blog__slide-subtitle">
                  Современная методология разработки одухотворила всех причастных
                </h3>
                <p class="blog__slide-text">
                  Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...
                </p>
              </a>
              <a href="#" class="swiper-slide blog__slide-link slide-4 flex">
                <h3 class="blog__slide-subtitle">
                  Сложно сказать, почему жизнь прекрасна
                </h3>
                <p class="blog__slide-text">
                  Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...
                </p>
              </a>
            </div>
            
            <div class="blog__slider-buttons-box flex">
              <a href="#" class="blog__link flex">
                Весь блог
              </a>

              <div class="blog__slider-buttons flex">
                <!-- Кнопки навигации вперёд/назад -->
                <button class="slider-button-blog-prev flex">
                  <svg class="blog__svg blog-arrow-back">
                    <use href="img/sprite.svg#arrow_back"></use>
                  </svg>
                </button>
                <button class="slider-button-blog-next flex">
                  <svg class="blog__svg blog-arrow-forward">
                    <use href="img/sprite.svg#arrow_forward"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <?php include_once('footer.php');?>

      

    

    <!-- 
        <section class="cta-form form">
          <div class="form__wrapper container flex">
          <img class="form__image" src="img/form_image/form_label_paint.png" alt="flacot">

          <div class="form__box flex">
            <div class="form__cooperation flex">
              <h2 class="form__title title">
                Хотите сотрудничать?
              </h2>
              <p class="form__text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
              </p>
            </div>
            
            <form class="form__cta" method="POST" action="handler.php">
              <div class="form__input-wrapper flex">
                <div class="form__input-group flex">
                  <input 
                    class="form__input input-1" 
                    id="user-name"
                    type="text" 
                    name="username" 
                    placeholder=" ">
                    <label class="form__label label-1" for="user-name">Имя</label>
                </div>
                <div class="form__input-group flex">
                  <input 
                    class="form__input input-2" 
                    id="user-phon"
                    type="tel" 
                    name="userphon" 
                    placeholder=" ">
                    <label class="form__label label-2" for="user-phon" >Номер телефона</label>
                </div>
              </div>

              <div class="form__submit-wrapper flex">
                <button class="form__button btn" type="submit">
                  Отправить заявку
                </button>

                <div class="form__notify-box flex">
                  <svg class="form__notify-icon">
                    <use href="img/sprite.svg#notify_form"></use>
                  </svg>

                  <p class="form__notify-text">
                    Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                  </p>
                </div>
              </div>
            </form>
          </div>
          </div>
        </section>
      </main>

      <footer class="footer">
      <nav class="footer__nav nav flex">
        <div class="footer__container upper flex">
          <div class="footer__logo-links flex">
            <a class="footer__logo flex" href="#">
              <svg class="footer__logo-svg">
                <use href="img/sprite.svg#footer_logo"></use>
              </svg>
            </a>
        
            <a class="footer__link-phone" href="tel:+74996861014">
              +7 (499) 686-10-14
            </a>
          </div>

          <ul class="footer__nav-list flex">
            <li class="footer__nav-item">
              <a class="footer__nav-link flex" href="#">
                <svg class="footer__nav-icon">
                  <use href="img/sprite.svg#address_check"></use>
                </svg>
                <address class="footer__nav-address">
                  г. Мосвка, Холодильный пер. 4к1с8
                </address>
              </a>
            </li>
            <li class="footer__nav-item">
              <a class="footer__nav-link flex" href="#">
                <svg class="footer__nav-icon">
                  <use href="img/sprite.svg#address_mail"></use>
                </svg>
                <span class="footer__nav-mail">
                  a.dragunov@tdaliance.ru
                </span>
              </a>
            </li>
            <li class="footer__nav-item flex">
              <a class="footer__nav-link link-vk flex" href="#">
                <svg class="footer__nav-icon">
                  <use href="img/sprite.svg#address_vk"></use>
                </svg>
              </a>
              <a class="footer__nav-link flex" href="#">
                <svg class="footer__nav-icon">
                  <use href="img/sprite.svg#address_inst"></use>
                </svg>
              </a>
            </li>
            
          </ul>
        </div>
      </nav>

      <div class="footer__container middle flex">
        <div class="middle__block-left">
          <h2 class="middle__title">
            Контрактное производство
          </h2>

          <ul class="middle__list">
            <li class="middle__item">
              <a href="#" class="middle__item-link">
                Автомобильная химия
              </a>
            </li>
            <li class="middle__item">
              <a href="#" class="middle__item-link">
                Бытовая химия
              </a>
            </li>
            <li class="middle__item">
              <a href="#" class="middle__item-link">
                Дезинфицирующие средства
              </a>
            </li>
            <li class="middle__item item-col-2">
              <a href="#" class="middle__item-link">
                Пищевые аэрозоли
              </a>
            </li>
            <li class="middle__item item-col-2">
              <a href="#" class="middle__item-link">
                Косметическая продукция
              </a>
            </li>
            <li class="middle__item item-col-2">
              <a href="#" class="middle__item-link">
                Краски аэрозольные
              </a>
            </li>
          </ul>
        </div>

        <div class="middle__block-right flex">
          <div class="middle__box">
            <h2 class="middle__title">
              Собственные марки
            </h2>
  
            <ul class="middle__list right-list">
              <li class="middle__item">
                <a href="#" class="middle__item-link">
                  Автохимия AG-Tech
                </a>
              </li>
              <li class="middle__item">
                <a href="#" class="middle__item-link">
                  Автохимия AP
                </a>
              </li>
            </ul>
          </div>

          <ul class="middle__bold-list">
            <li class="middle__bold-item bold-item-1">
              <a href="#" class="middle__bold-link">
                О компании
              </a>
            </li>
            <li class="middle__bold-item bold-item-2">
              <a href="#" class="middle__bold-link">
                Новости
              </a>
            </li>
            <li class="middle__bold-item bold-item-3">
              <a href="#" class="middle__bold-link">
                Контакты
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer__lower">
        <div class="footer__container lower flex">
          <div class="footer__legal flex">
            <p class="footer__copy">
              &copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer__confidentiality">
              Политики конфиденциальности
            </a>
          </div>

          <div class="footer__author flex">
            <span class="footer__made-in">Сделано в</span>
            <span class="footer__dev">Дизайн и разработка:</span>
            <svg class="footer__author-icon">
              <use href="img/sprite.svg#footer_ruso"></use>
            </svg>
          </div>
        </div>
      </div>
      </footer>

      <div class="modal flex">
      <div class="modal__dialog">
        <h2 class="modal__title title">
          Есть вопросы?
        </h2>

        <a href="#" class="modal__close flex" data-toggle="modal">
          <svg class="modal__close-icon" width="24" height="24">
            <use href="img/sprite.svg#modal_close"></use>
          </svg>
        </a>

        <p class="modal__text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
  
        <form action="#" class="modal__form">
          <div class="modal__input-wrapper flex">
            <div class="modal__input-group flex">
              <input 
                class="modal__input input-1" 
                id="modal-user-name"
                type="text" 
                name="username" 
                placeholder="">
                <label class="modal__label label-1" for="modal-user-name">Имя</label>
            </div>
            <div class="modal__input-group flex">
              <input 
                class="modal__input input-2" 
                id="modal-user-phon"
                type="tel" 
                name="userphon" 
                placeholder="">
                <label class="modal__label label-2" for="modal-user-phon" >Номер телефона</label>
            </div>
          </div>

          <div class="modal__submit-wrapper flex">
            <button class="modal__button btn" type="submit">
              Отправить заявку
            </button>

            <div class="modal__notify-box flex">
              <svg class="modal__notify-icon">
                <use href="img/sprite.svg#notify_form"></use>
              </svg>

              <p class="modal__notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
      </div>
    -->
  
</body>

</html>