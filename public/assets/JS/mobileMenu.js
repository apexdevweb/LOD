const mobileMenu = document.querySelector(".mobile-menu__container");
console.log(mobileMenu);
const barres = document.querySelectorAll(".mobile-menu__barre");
console.log(barres);
const navBar = document.querySelector(".globale-nav");
if (mobileMenu && navBar) {
  mobileMenu.addEventListener("click", () => {
    navBar.classList.toggle("mobileViewNavbar");
    barres.forEach((myBarre, index) => {
      if (navBar.classList.contains("mobileViewNavbar")) {
        if (index === 0) {
          myBarre.style.width = "10px";
          myBarre.style.transform = "translateX(-8px)";
        } else if (index === 2) {
          myBarre.style.width = "10px";
          myBarre.style.transform = "translateX(8px)";
        }
      } else {
        if (index === 0) {
          myBarre.style.width = "25px";
          myBarre.style.transform = "translateX(0)";
        } else if (index === 2) {
          myBarre.style.width = "25px";
          myBarre.style.transform = "translateX(0)";
        }
      }
    });
  });
}
