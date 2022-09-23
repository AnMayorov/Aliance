const header__nav = document.querySelector(".header__nav");
const logo = document.querySelector(".logo__svg use");
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
  logo.href.baseVal = "img/sprite.svg#logo_black";
}
const lightModeOff = (event) => {
  header__nav.classList.remove("nav-white");
  logo.href.baseVal = "img/sprite.svg#logo_white";
}

window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
}); 
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

