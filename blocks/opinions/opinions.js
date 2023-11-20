var swiper = new Swiper(".opinions", {
  slidesPerView: 1,
  // loop: true,
  navigation: {
    nextEl: ".sw-next",
    prevEl: ".sw-prev"
  },
  autoplay: {
    delay: 4500,
    disableOnInteraction: false
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40
    },
    1000: {
      slidesPerView: 2,
      spaceBetween: 40
    }
  }
});
