document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
      document.addEventListener('scroll', () => {
        window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
      });
    }

    /**
     * Mobile nav toggle
     */
    const mobileNavToggleButton = document.querySelector('.mobile-nav-toggle');
    if (mobileNavToggleButton) {
      mobileNavToggleButton.addEventListener('click', (event) => {
        event.preventDefault();
        mobileNavToggle();
      });
    }

    function mobileNavToggle() {
      document.body.classList.toggle('mobile-nav-active');
      mobileNavToggleButton.classList.toggle('bi-list');
      mobileNavToggleButton.classList.toggle('bi-x');
    }

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll('#navbar a').forEach(navbarlink => {
      if (!navbarlink.hash) return;
      let section = document.querySelector(navbarlink.hash);
      if (!section) return;
      navbarlink.addEventListener('click', () => {
        if (document.body.classList.contains('mobile-nav-active')) {
          mobileNavToggle();
        }
      });
    });

    /**
     * Toggle mobile nav dropdowns
     */
    const navDropdowns = document.querySelectorAll('.sidebar .nav-item.dropdown > a');
    navDropdowns.forEach(dropdownToggle => {
      dropdownToggle.addEventListener('click', function(event) {
        event.preventDefault();
        const isActive = this.classList.contains('active');
        navDropdowns.forEach(item => item.classList.remove('active'));
        if (!isActive) {
          this.classList.add('active');
        }
      });
    });

    /**
     * Scroll top button
     */
    const scrollTop = document.querySelector('.scroll-top');
    if (scrollTop) {
      const toggleScrollTop = () => {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      };
      window.addEventListener('load', toggleScrollTop);
      document.addEventListener('scroll', toggleScrollTop);
      scrollTop.addEventListener('click', () => {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }

    /**
     * Hero Slider
     */
    const swiper = new Swiper(".sliderFeaturedPosts", {
      spaceBetween: 0,
      speed: 500,
      centeredSlides: true,
      loop: true,
      slideToClickedSlide: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".custom-swiper-button-next",
        prevEl: ".custom-swiper-button-prev",
      },
    });

    /**
     * Open and close the search form.
     */
    const searchOpen = document.querySelector('.js-search-open');
    const searchClose = document.querySelector('.js-search-close');
    const searchWrap = document.querySelector(".js-search-form-wrap");

    if (searchOpen && searchClose && searchWrap) {
      searchOpen.addEventListener("click", (e) => {
        e.preventDefault();
        searchWrap.classList.add("active");
      });

      searchClose.addEventListener("click", (e) => {
        e.preventDefault();
        searchWrap.classList.remove("active");
      });
    }

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
      selector: '.glightbox'
    });

    /**
     * Animation on scroll function and init
     */
    function aos_init() {
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }

    window.addEventListener('load', () => {
      aos_init();
    });

  });
