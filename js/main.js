const header__nav = document.querySelector(".header__nav")

window.addEventListener('scroll', () => {
  if (this.scrollY > 1) {
    header__nav.classList.add("nav-white");
  }
  else {
    header__nav.classList.remove("nav-white");
  }
});