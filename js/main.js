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

const changeNavHeight = (height) => {
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



/*

const modalToogle = document.querySelectorAll('[data-toggle=modal]');
const modalClose = document.querySelector(".modal__close");


modalToogle.forEach((element) => {
  element.addEventListener("click", (event) => {
    event.preventDefault();
    modal.classList.add("modal__open");
  });
});
modalClose.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.remove("modal__open");
});

modal.onclick = function(event) {
  if ( event.target == modal ) {
    modal.classList.remove("modal__open"); 
  }
};
window.onkeydown = function(event) {
  const key = event.key; 
  if (key === "Escape") {
    modal.classList.remove("modal__open");
  }
};

*/