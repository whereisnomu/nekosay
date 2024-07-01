document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector(".header__burger img");
  const mobileMenu = document.querySelector(".header__mobile-menu");
  const closeMenu = document.querySelector(".header__mobile-close img");
  const mobileLinks = document.querySelectorAll(".header__mobile-menu-list a");

  burger.addEventListener("click", () => {
    mobileMenu.classList.add("active");
  });

  closeMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
  });

  mobileLinks.forEach((link) => {
    link.addEventListener("click", () => {
      mobileMenu.classList.remove("active");
    });
  });
});
