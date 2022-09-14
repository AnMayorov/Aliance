const header__nav = document.querySelector(".header__nav");
const logo = document.querySelector(".logo__svg use");

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