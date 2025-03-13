document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeButton = document.getElementById("menu-close");

  menuButton.addEventListener("click", function () {
    mobileMenu.classList.add("active");
  });

  closeButton.addEventListener("click", function () {
    mobileMenu.classList.remove("active");
  });
});
