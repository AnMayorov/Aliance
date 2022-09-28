const header__nav = document.querySelector(".header__nav");
const logoWhite = document.querySelector(".logo-white");
const logoBlack = document.querySelector(".logo-black");
const mMenuToggle = document.querySelector(".mobile-toggle");
const menu = document.querySelector(".mobile__menu");

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
  logoWhite.style.display = "none";
  logoBlack.style.display = "block";
}
const lightModeOff = (event) => {
  header__nav.classList.remove("nav-white");
  logoWhite.style.display = "block";
  logoBlack.style.display = "none";
}

window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
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

const steps = new Swiper('.steps__swiper', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-steps-next',
    prevEl: '.slider-button-steps-prev',
  },
  breakpoints: {
    485: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
    /*spaceBetween: 100,*/  // сейчас не нужно
  }
});

