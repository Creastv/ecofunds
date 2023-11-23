(function ($) {
  setTimeout(function () {
    document.querySelector(".realization-gallery").style.display = "block";
    $(".realization-gallery").isotope({
      itemSelector: ".wr",
      layoutMode: "masonry"
    });
  }, 1000);
})(jQuery);

var swiper = new Swiper(".slider", {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});
