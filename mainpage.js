const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollCommonOptions = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

// Header container
ScrollReveal().reveal(".header__image img", {
  ...scrollCommonOptions,
  origin: "right",
  delay: 400,
});

ScrollReveal().reveal(
  [".header__content h4", ".header__content .section__header"],
  {
    ...scrollCommonOptions,
    delay: 500,
  }
);

ScrollReveal().reveal(".header__content p", {
  ...scrollCommonOptions,
  delay: 1000,
});

ScrollReveal().reveal(".header__btn", {
  ...scrollCommonOptions,
  delay: 1500,
});

// About container
ScrollReveal().reveal(".about__image img", {
  ...scrollCommonOptions,
  origin: "left",
  delay: 1000,
});

ScrollReveal().reveal(
  [".about__content .section__header", ".about__content .section__description"],
  {
    ...scrollCommonOptions,
    delay: 500,
  }
);

ScrollReveal().reveal(".about__card", {
  ...scrollCommonOptions,
  delay: 1000,
  interval: 500,
});

// Trainer container
ScrollReveal().reveal(".trainer__container .section__header", {
  ...scrollCommonOptions,
  origin: "left",
  delay: 900,
});

ScrollReveal().reveal(".trainer__card", {
  ...scrollCommonOptions,
  origin: "left",
  delay: 900,
  interval: 600,
});

// Class container
ScrollReveal().reveal(".class__container .section__header, .class__card", {
  ...scrollCommonOptions,
  delay: 500,
  interval: 500,
});
// Client container
ScrollReveal().reveal(".client__container .section__header", {
  ...scrollCommonOptions,
  delay: 500,
});

ScrollReveal().reveal(".client__container .section__description", {
  ...scrollCommonOptions,
  delay: 500,
});

ScrollReveal().reveal(".client__card", {
  ...scrollCommonOptions,
  delay: 500,
  interval: 500,
});


// Price container
ScrollReveal().reveal(".price__card", {
  ...scrollCommonOptions,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 20,
});

