function swiperInit() {
  var gallerySlider = document.querySelectorAll(".gallery-slider");
  if (gallerySlider.length > 0) {
    gallerySlider.forEach((slider) => {
      slider.style.setProperty("--swiper-theme-color", "currentColor");
      const swiper = new Swiper(slider.querySelector(".swiper"), {
        // Optional parameters
        slidesPerView: "auto",
        spaceBetween: 0,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        loop: true,
        // If we need pagination
        pagination: false,
      });
    });
  }
  var priceplanSlider = document.querySelectorAll(".priceplan-slider");
  if (priceplanSlider.length > 0) {
    priceplanSlider.forEach((slider) => {
      const swiper = new Swiper(slider, {
        // Optional parameters
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
          },
          1200: {
            slidesPerView: 3,
          },
        },
      });
    });
  }
  var testimonialSlider = document.querySelectorAll(".testimonial-slider");
  if (testimonialSlider.length > 0) {
    testimonialSlider.forEach((slider) => {
      slider.style.setProperty("--swiper-theme-color", "currentColor");
      const swiper = new Swiper(slider.querySelector(".swiper"), {
        // Optional parameters
        slidesPerView: "auto",
        spaceBetween: 0,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        loop: true,
        // If we need pagination
        pagination: false,
      });
    });
  }
  var genericsliderSlider = document.querySelectorAll(".generic-sliderWrap");
  if (genericsliderSlider.length > 0) {
    if (genericsliderSlider.length > 0) {
      genericsliderSlider.forEach((slider) => {
        var galleryTop = slider.querySelector(".generic-slider");
        var galleryThumbs = slider.querySelector(".generic-thumbs");
        const swiper1 = new Swiper(galleryTop, {
          loop: false,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
        var galleryThumbs = new Swiper(galleryThumbs, {
          spaceBetween: 10,
          centeredSlides: true,
          slidesPerView: "auto",
          touchRatio: 0.2,
          slideToClickedSlide: true,
          loop: false,
          loopedSlides: 1,
          // effect: "fade",
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
        swiper1.controller.control = galleryThumbs;
        galleryThumbs.controller.control = swiper1;
      });
    }
  }
  var blogSlider = document.querySelectorAll(".blog-slider");
  if (blogSlider.length > 0) {
    blogSlider.forEach((slider) => {
      slider.style.setProperty("--swiper-theme-color", "currentColor");
      const breakpoint = window.matchMedia("(min-width:768px)");
      // keep track of swiper instances to destroy later
      let mySwiper;

      const breakpointChecker = function () {
        // if larger viewport and multi-row layout needed
        if (breakpoint.matches === true) {
          // clean up old instances and inline styles when available
          if (mySwiper !== undefined) mySwiper.destroy(true, true);

          // or/and do nothing
          return;

          // else if a small viewport and single column layout needed
        } else if (breakpoint.matches === false) {
          // fire small viewport version of swiper
          return enableSwiper();
        }
      };

      const enableSwiper = function () {
        mySwiper = new Swiper(slider, {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 30,
          navigation: false,
          pagination: {
            el: ".swiper-pagination",
          },
        });
      };

      // keep an eye on viewport size changes
      breakpoint.addListener(breakpointChecker);

      // kickstart
      breakpointChecker();
    });
  }
  var servicesSlider = document.querySelectorAll(".services-slider");
  if (servicesSlider.length > 0) {
    servicesSlider.forEach((slider) => {
      slider.style.setProperty("--swiper-theme-color", "currentColor");
      const breakpoint = window.matchMedia("(min-width:992px)");
      // keep track of swiper instances to destroy later
      let mySwiper;

      const breakpointChecker = function () {
        // if larger viewport and multi-row layout needed
        if (breakpoint.matches === true) {
          // clean up old instances and inline styles when available
          if (mySwiper !== undefined) mySwiper.destroy(true, true);

          // or/and do nothing
          return;

          // else if a small viewport and single column layout needed
        } else if (breakpoint.matches === false) {
          // fire small viewport version of swiper
          return enableSwiper();
        }
      };

      const enableSwiper = function () {
        mySwiper = new Swiper(slider, {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 30,
          navigation: false,
          pagination: {
            el: ".swiper-pagination",
          },
        });
      };

      // keep an eye on viewport size changes
      breakpoint.addListener(breakpointChecker);

      // kickstart
      breakpointChecker();
    });
  }
  var productCarouselSlider = document.querySelectorAll(".product-carousel");
  if (productCarouselSlider.length > 0) {
    productCarouselSlider.forEach((slider) => {
      slider.style.setProperty("--swiper-theme-color", "currentColor");
      const swiper = new Swiper(slider.querySelector(".swiper"), {
        slidesPerView: 2.1,
        spaceBetween: 24,
        pagination: false,
        centeredSlides: true,
        freeMode: {
          enabled: true,
          sticky: false,
          momentumBounce: false,
        },
        loop: true,
        breakpoints: {
          992: {
            slidesPerView: 3.1,
          },
          1200: {
            slidesPerView: 4.5,
            spaceBetween: 32,
          },
        },
      });
    });
  }
}
function mobileDropdown() {
  var closerBtns = document.querySelectorAll(
    '.main-header .offcanvas .offcanvas-body .main-nav .navbar-nav .nav-item [data-bs-toggle="close"]'
  );
  if (closerBtns.length > 0) {
    closerBtns.forEach((closerBtn) => {
      closerBtn.addEventListener("click", (e) => {
        e.target
          .closest("li.nav-item.dropdown")
          .querySelector("a.nav-link.dropdown-toggle")
          .click();
      });
    });
  }
}
function headerSpace() {
  var lastScrollTop = 0;
  function updateHeaderhight() {
    var t = null;
    document.querySelectorAll("header.main-header").forEach(function (e) {
      t += e.offsetHeight;
    }),
      document.documentElement.style.setProperty("--headerHight", t + "px");
  }
  window.addEventListener(
    "scroll",
    function () {
      var t = window.pageYOffset || document.documentElement.scrollTop;
      t > 240 && jQuery("body").addClass("sticky-animate"),
        t > 200
          ? jQuery("body").addClass("sticky-active")
          : jQuery("body").removeClass("sticky-active sticky-animate"),
        (lastScrollTop = t);
    },
    !1
  ),
    window.addEventListener("resize", updateHeaderhight),
    window.addEventListener("scroll", updateHeaderhight);
    updateHeaderhight();
}
document.addEventListener("DOMContentLoaded", () => {
  // headerSpace();
  swiperInit();
  mobileDropdown();
});
window.addEventListener("resize", () => {
});
document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
