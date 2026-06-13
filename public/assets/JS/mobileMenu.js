const mobileMenu = document.querySelector(".mobile__menu--container");
const navBar = document.querySelector(".globale__nav--container");

mobileMenu.addEventListener("click", () => {
  navBar.classList.toggle("mobileMenuView");
});
