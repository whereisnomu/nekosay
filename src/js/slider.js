let swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  loop: true,
  autoplay: {
    delay: 5000,
  },

  breakpoints: {
    320: {
      slidesPerView: 2,
    },

    769: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

let swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  spaceBetween: 10,
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
