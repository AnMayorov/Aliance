<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon_alianse.ico"></link>
  <link rel="stylesheet" href="css/style.css">
  <script>
    /*! modernizr 3.6.0 (Custom Build) | MIT *
    * https://modernizr.com/download/?-webp-setclasses !*/
    !function(e,n,A){function o(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function t(e,n){return typeof e===n}function a(){var e,n,A,o,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(o=t(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=o:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=o),s.push((o?"":"no-")+l.join("-"))}}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var t=e.split("."),a=Modernizr[t[0]];if(2==t.length&&(a=a[t[1]]),"undefined"!=typeof a)return Modernizr;n="function"==typeof n?n():n,1==t.length?Modernizr[t[0]]=n:(!Modernizr[t[0]]||Modernizr[t[0]]instanceof Boolean||(Modernizr[t[0]]=new Boolean(Modernizr[t[0]])),Modernizr[t[0]][t[1]]=n),o([(n&&0!=n?"":"no-")+t.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=t(e,"undefined")||t(e.call,"undefined")?function(e,n){return n in e&&t(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),a(),o(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
  </script>
    <script src="js/swiper-bundle.min.js" defer></script>
    <script src="js/just-validate.production.min.js" defer></script>
    <script src="js/main.js" defer></script>
  <title>Aliance production</title>
</head>

<body class="front-page">
  <div class="wrapper">
    <div class="mobile__menu">
      <ul class="mobile__menu-list flex">
        <li class="mobile__menu-item">
          <a href="./about.php" class="mobile__menu-link">О компании</a>
        </li>
        <li class="mobile__menu-item">
          <a href="./contract.php" class="mobile__menu-link">Контрактное производство</a>

          <ul class="mobile__submenu flex">
            <li class="mobile__submenu-item">
              <a href="./autohim.php" class="mobile__submenu-link">Автомобильная химия</a>
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
          <a href="./own.php" class="mobile__menu-link">Собственные торговые марки</a>

          <ul class="mobile__submenu">
            <li class="mobile__submenu-item">
              <a href="./agtech.php" class="mobile__submenu-link">Автохимия AG-Tech</a>
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
          <a href="./contacts.php" class="mobile__menu-link">Контакты</a>
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
          <a class="info__link-vk" href="https://vk.com/" target="_blank">
            <svg class="mobile__svg" width="24" height="24">
              <use href="img/sprite.svg#address_vk"></use>
            </svg>
          </a>
          <a class="info__link-inst" href="https://www.instagram.com/" target="_blank">
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
          <a href="./contract.php" class="header__menu-link flex">Контрактное производство</a>
        </li>
        <li class="header__menu-item flex">
          <a href="./own.php" class="header__menu-link flex">
            Собственные торговые марки
          </a>
        </li>
        <li class="header__menu-item flex">
          <a href="#" class="header__menu-link flex">Новости</a>
        </li>
        <li class="header__menu-item flex">
          <a href="./contacts.php" class="header__menu-link flex">Контакты</a>
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
                  <button class="slider-button-steps-prev btn flex">
                    <svg class="header__svg" width="36" height="20">
                      <use href="img/sprite.svg#arrow_back"></use>
                    </svg>
                  </button>
                  <button class="slider-button-steps-next btn flex">
                    <svg class="header__svg" width="36" height="20">
                      <use href="img/sprite.svg#arrow_forward"></use>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
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
                <a href="./autohim.php" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Автомобильная химия
                    </h3>
                    <p class="item__card-text">
                      Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                    </p>
                  </div>
      
                  <picture>
                    <source type="image/webp" srcset="img/contracts_image/card-1-img.webp">
                    <source type="image/jpeg" srcset="img/contracts_image/card_1_img.jpg">
                    <img class="item__card-image" src="img/contracts_image/card_1_img.jpg" alt="auto-сhem">
                  </picture>
                </a>
              </li>
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Бытовая химия
                    </h3>
                    <p class="item__card-text">
                      А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
                      независимые
                      элементы.
                    </p>
                  </div>
      
                  <picture class="item__card-image">
                    <source type="image/webp" srcset="img/contracts_image/card-2-img.webp">
                    <source type="image/jpeg" srcset="img/contracts_image/card_2_img.jpg">
                    <img class="item__card-image" src="img/contracts_image/card_2_img.jpg" alt="house-chem">
                  </picture>
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
      
                  <picture>
                    <source type="image/webp" srcset="img/contracts_image/card-3-img.webp">
                    <source type="image/jpeg" srcset="img/contracts_image/card_3_img.jpg">
                    <img class="item__card-image" src="img/contracts_image/card_3_img.jpg" alt="dez-chem">
                  </picture>
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
      
                  <picture>
                    <source type="image/webp" srcset="img/contracts_image/card-3-img.webp">
                    <source type="image/jpeg" srcset="img/contracts_image/card_3_img.jpg">
                    <img class="item__card-image" src="img/contracts_image/card_3_img.jpg" alt="food-aerosols">
                  </picture>
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
      
                  <picture>
                    <source type="image/webp" srcset="img/contracts_image/card-1-img.webp">
                    <source type="image/jpeg" srcset="img/contracts_image/card_1_img.jpg">
                    <img class="item__card-image" src="img/contracts_image/card_1_img.jpg" alt="cosmetic-prod">
                  </picture>
                </a>
              </li>
              <li class="contract__item item flex">
                <a href="#" class="item__card-link flex">
                  <div class="item__card-box flex">
                    <h3 class="item__card-subtitle">
                      Краски аэрозольные
                    </h3>
                    <p class="item__card-text">
                      А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
                      независимые
                      элементы.
                    </p>
                  </div>
      
                  <picture>
                    <source type="image/webp" srcset="img/contracts_image/card-2-img.webp">
                    <source type="image/jpeg" srcset="img/contracts_image/card_2_img.jpg">
                    <img class="item__card-image" src="img/contracts_image/card_2_img.jpg" alt="spray-paints">
                  </picture>
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
            <a href="./agtech.php" class="marks__link-left marks-link grid">
              <div class="marks__content-image">
                <svg class="marks__icons">
                  <use href="img/sprite.svg#ag_tech"></use>
                </svg>
              </div>
      
              <h3 class="marks__content-subtitle">
                Автохимия AG-Tech
              </h3>
              <p class="marks__content-text">
                Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
                поставленных обществом задач.
              </p>
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
                Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
                поставленных обществом задач.
              </p>
            </a>
          </div>
        </div>
      </section>

      <section class="founder">
        <div class="founder__content flex">
          <div class="founder__image">
            <picture class="founder__photo">
              <source type="image/webp" srcset="img/attitude_to_business/employee.webp">
              <source type="image/jpeg" srcset="img/attitude_to_business/employee.jpg">
              <img class="founder__photo" src="img/attitude_to_business/employee.jpg" alt="employee">
            </picture>
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

            <a href="#" class="founder__link company-link flex" data-toggle="modal" data-target="#feedback-modal">
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
                <picture class="clients__tile-img">
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
                <picture >
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
                <picture >
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
                <picture >
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
                <picture >
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
                <picture >
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
                <picture >
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
                <picture >
                  <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                  <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                  <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
                </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
              </a>
              <a class="clents__tiles flex" href="#">
              <picture >
                <source type="image/webp" srcset="img/clients_icons/tile-colored-1.webp">
                <source type="image/jpeg" srcset="img/clients_icons/tile-colored_1.jpg">
                <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client">
              </picture>
                <!-- <img class="clients__tile-img" src="img/clients_icons/tile-colored_1.jpg" alt="client"> -->
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
              <a href="./blog.php" class="blog__link flex">
                Весь блог
              </a>

              <div class="blog__slider-buttons flex">
                <!-- Кнопки навигации вперёд/назад -->
                <button class="slider-button-blog-next btn flex">
                  <svg class="blog__svg blog-arrow-back">
                    <use href="img/sprite.svg#arrow_back"></use>
                  </svg>
                </button>
                <button class="slider-button-blog-prev btn flex">
                  <svg class="blog__svg blog-arrow-forward">
                    <use href="img/sprite.svg#arrow_forward"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <?php include_once('footer.php') ?>

      

    

    
  
