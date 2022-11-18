<!DOCTYPE html>
<html lang="ru">
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
    <title><?php echo $page_title ?> - Aliance production</title>
  </head>

<body>
  <div class="wrapper about-wrap">
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

    <nav class="header__nav about-nav nav-white flex">
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

    <header class="autohim__header header-in-pages">
      <div class="header__container autohim-container container-in-pages">
        <picture class="autohim__img img-in-pages">
          <source type="image/webp" srcset="img/internal_pages/avto-him.webp">
          <source type="image/jpeg" srcset="img/internal_pages/avto-him.png">
          <img class="autohim__img img-in-pages" src="img/internal_pages/avto-him.png" alt="autohim">
        </picture>
        <!-- <img class="autohim__img img-in-pages" src="img/internal_pages/avto-him.png" alt="autohim"> -->

        <div class="autohim__seporator seporator seporator-in-pages"></div>
        <h1 class="autohim__title title-in-pages title">
          <?php echo $page_title ?>
        </h1>
        <div class="autohim__links links-in-pages flex">
          <a class="autohim__link link-in-main link-pages" href="#">
            Главная
          </a>
          <div class="autohim__line line-in-pages"></div>
          <a class="autohim__link link-previous-page link-pages" href="#">
            Контрактное производство
          </a>
          <div class="autohim__line line-in-pages"></div>
          <a class="autohim__link link-in-page link-pages" href="#">
            Автомобильная химия
          </a>
        </div>
      </div>
    </header>