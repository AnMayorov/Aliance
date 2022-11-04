const header__nav = document.querySelector(".header__nav");
const logoWhite = document.querySelector(".logo-white");
const logoBlack = document.querySelector(".logo-black");
const mMenuToggle = document.querySelector(".mobile-toggle");
const menu = document.querySelector(".mobile__menu");
const isFront = document.body.classList.contains("front-page");

const openMenu = (event) => {  //функция открытия меню
  menu.classList.add("is-open"); //вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow="hidden"; //запрещаем прокрутку сайта под меню
  lightModeOn();
};
const closeMenu = (event) => {  //функция закрытия меню
  menu.classList.remove("is-open"); //убирает класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow=""; //разрешает прокрутку сайта под меню
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
};

const lightModeOn = (event) => {
  header__nav.classList.add("nav-white");
  // logoWhite.style.display = "none";
  // logoBlack.style.display = "block";
}
const lightModeOff = (event) => {
  header__nav.classList.remove("nav-white");
  // logoWhite.style.display = "block";
  // logoBlack.style.display = "none";
}

const changeNavHeight = (height) => {  // Меняем высоту шапки 
  header__nav.style.height = height;
}

window.addEventListener('scroll', () => {
  this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("5.875rem");

  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
}); 
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper('.swiper', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1.3,
    },
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,

    },
    992: {
      slidesPerView: 3,
    },
    1100: {
      slidesPerView: 5,
    },
    /*spaceBetween: 100,*/  // сейчас не нужно
  }
});

const stepsSwiper = new Swiper('.steps__swiper', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-steps-next',
    prevEl: '.slider-button-steps-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1.07,
    },
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 2,
    },
    /*spaceBetween: 100,*/  // сейчас не нужно
  }
});

const blogSwiper = new Swiper('.blog__swiper',{
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: '.slider-button-blog-prev',
    prevEl: '.slider-button-blog-next',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    992: {
      slidesPerView: 2,
    },
  }
});


const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal__dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" || 
    (!event.composedPath().includes(modalDialog) && 
    modal.classList.contains("modal__open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("modal__open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && 
    modal.classList.contains ("modal__open")
  ) {
    modal.classList.toggle("modal__open");
  }
});


const thx = document.querySelector(".thx");
const thxDialog = document.querySelector(".thx__dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "thx" ||
    event.target.parentNode.dataset.toggle == "thx" || 
    (!event.composedPath().includes(thxDialog) && 
    thx.classList.contains("thx__open"))
  ) {
    event.preventDefault();
    thx.classList.toggle("thx__open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && 
    thx.classList.contains ("thx__open")
  ) {
    thx.classList.toggle("thx__open");
  }
});

/* Верификация полей ввода */
const forms = document.querySelectorAll("form"); 
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
  .addField("[name=username]", [
    {
      rule: "required",
      errorMessage: "Укажите имя",
    },
    {
      rule: "maxLength",
      value: 50,
      errorMessage: "Максимально 50 символов",
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: "required",
      errorMessage: "Укажите телефон",
    },
  ])
  /* Отправка данных на сервер */
  .onSuccess((event) => {
    const thisForm = event.target; //наша форма
    const formData = new FormData(thisForm); //данные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alert("Форма отправлена!");
          } else {
            alert("Ошибка. Текст ошибки: " .response.statusText);
          }
      });
    };
    ajaxSend(formData);
  });
});


/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
};
 /* профикс в любом раскладе будет +7 () */

// ======================================
/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    //
    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
















