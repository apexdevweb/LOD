const mobileMenu = document.querySelector(".mobile-menu__container");
const navBar = document.querySelector(".globale-nav");
if (mobileMenu && navBar) {
  mobileMenu.addEventListener("click", () => {
    navBar.classList.toggle("mobileViewNavbar");
  });
}
