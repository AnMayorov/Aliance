
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
                class="modal__input" 
                id="modal-user-name"
                type="text" 
                name="username" 
                placeholder="">
                <label class="modal__label" for="modal-user-name">Имя</label>
            </div>
            <div class="modal__input-group flex">
              <input 
                class="modal__input" 
                id="modal-user-phon"
                type="tel" 
                name="userphon" 
                placeholder="">
                <label class="modal__label" for="modal-user-phon" >Номер телефона</label>
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
      