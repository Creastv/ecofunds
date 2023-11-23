(window.load = function (event) {
  const togglerNav = document.querySelector(".js-navbar__toggler");
  const nav = document.querySelector(".js-navbar__navigation");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      nav.classList.add("active");
      togglerNav.classList.add("active");
      // document.querySelector("body").style.overflow = "hidden";
      navFlag = true;
    } else {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      // document.querySelector("body").style.overflow = "inherit";
      navFlag = false;
    }
  });

  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll(".js-navbar__navigation a");
  for (let i = 0; i < itemsNAv.length; i++) {
    itemsNAv[i].addEventListener("click", () => {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    });
  }
  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });
  // sticy nabvbar
  const navbar = document.querySelector(".js-navbar");
  document.addEventListener("scroll", () => {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (window.pageYOffset) {
      navbar.classList.add("active");
      // document.querySelector("#header").style.paddingTop = navbar.clientHeight + "px";
    } else {
      navbar.classList.remove("active");
      // document.querySelector("#header").style.paddingTop = "0";
    }
  });

  // set body padding top by geting header height
  // function heightHeader() {
  //   const heightHeader = document.querySelector(".js-navbar");
  //   document.querySelector("body").style.paddingTop = heightHeader.clientHeight + "px";
  // }
  // window.addEventListener("resize", heightHeader);
  // heightHeader();

  //   // scroll to section
})();
