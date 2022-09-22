const header__nav = document.querySelector(".header__nav");
const logo = document.querySelector(".logo__svg use");
const mMenuToggle = document.querySelector(".mobile-toggle");
const menu = document.querySelector(".mobile__menu");

window.addEventListener('scroll', () => {
  if (this.scrollY > 1) {
    header__nav.classList.add("nav-white");
    logo.href.baseVal = "img/sprite.svg#logo_black";
  }
  else {
    header__nav.classList.remove("nav-white");
    logo.href.baseVal = "img/sprite.svg#logo_white";
  }
}); 
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.toggle("is-open");
});

