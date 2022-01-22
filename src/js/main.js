(function ($) {
  /* ===============================================================
  Load Posts
=============================================================== */
  class LoadPosts {
    constructor() {
      this.btnLoad = $('#projects .button-load');
      this.events();
    }

    events() {
      this.btnLoad.on('click', () => {
        this.activeButton();
      });
    }

    activeButton() {
      this.btnLoad.addClass('active');
    }
  }

  new LoadPosts();

  /* ===============================================================
  Search
=============================================================== */
  class Search {
    // Initialize
    constructor() {
      this.searchForm = $('#search-form');
      this.searchAltButton = $('#header-blog .social-networks .search-alt');
      this.searchCloseButton = $('#search-form-close');
      this.searchInput = $('#search-form .search-input');
      this.events();
    }

    // Events
    events() {
      this.searchAltButton.on('click', () => {
        this.toggleForm();
      });
      this.searchCloseButton.on('click', () => {
        this.closeForm();
      });
      // Input box shadow style
      this.searchInput.on('focus', () => {
        this.searchInput.parent().css('box-shadow', 'none');
      });
      this.searchInput.on('blur', () => {
        this.searchInput
          .parent()
          .css('box-shadow', '0px 15px 45px -9px rgb(0 0 0 / 20%)');
      });
    }

    // Toggle search form
    toggleForm() {
      this.searchForm.slideToggle(1000);
    }

    // Close search form
    closeForm() {
      this.searchForm.slideUp(1000);
    }
  }

  new Search();

  /* ===============================================================
  Extra
=============================================================== */
  class Extra {
    constructor() {
      this.events();
    }

    events() {
      this.scrollSpy();
      this.setHeightAboutImages();
      this.tooltips();
      $(window).resize(this.setHeightAboutImages);
    }

    scrollSpy() {
      $('a[href*="#"]:not([href="#"])').on('click', function () {
        // Get hash for create id
        let hash = this.hash;
        // Select element for move
        $('html, body').animate(
          {
            scrollTop: $(hash).offset().top,
          },
          1000
        );
        // Checking specific id (go-down)
        if (this.id == 'go-down') {
          // Adding active class
          $(this).addClass('active');
          // Remove active class with delay (After scrolled)
          setTimeout(function () {
            $('#go-down').removeClass('active');
          }, 1000);
        }
      });
    }

    setHeightAboutImages() {
      let elements = $('#about .about-list-image li');
      for (let i = 0; i < elements.length; i++) {
        let width = $(elements[i]).width();
        $(elements[i]).height(width);
      }
    }

    tooltips() {
      $('[data-toggle="tooltip"]').tooltip();
    }
  }

  new Extra();

  /* ===============================================================
  Swiper Init
=============================================================== */
  class SwiperJs {
    constructor() {
      // Partners brands slider init
      let partner = new Swiper('.partners-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        // freeMode: true,
        // centeredSlides: true,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        // pagination: {
        //   // el: '.swiper-pagination',
        //   clickable: true,
        // },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          // when window width is >= 480px
          575: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          // when window width is >= 640px
          767: {
            slidesPerView: 5,
            spaceBetween: 20,
          },
          991: {
            slidesPerView: 5,
            spaceBetween: 30,
          },
        },
      });
      // Partners viewpoint slider init
      let viewpoint = new Swiper('.viewpoint', {
        loop: true,
        autoplay: {
          delay: 8000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
      // Related post
      let relatedPost = new Swiper('.related-post-slider', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
          },
          // when window width is >= 480px
          575: {
            slidesPerView: 2,
          },
          // when window width is >= 640px
          767: {
            slidesPerView: 2,
          },
          991: {
            slidesPerView: 3,
          },
          1199: {
            slidesPerView: 3,
          },
          1375: {
            slidesPerView: 4,
          },
        },
      });
    }
  }

  new SwiperJs();

  /* ===============================================================
  Masonry Init
=============================================================== */
  class MasonryJs {
    // Initialize
    constructor() {
      // Init Masonry
      let $grid = $('.grid-masonry').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        // gutter: 30,
        horizontalOrder: true,
        // fitWidth: true,
        originLeft: false,
        transitionDuration: '0.5s',
        // initLayout: false,
        // disable window resize behavior
        // resize: false,
        stagger: 30,
        // containerStyle: null,
        // originTop: false,
        // stamp: '.stamp',
      });
      // Layout Masonry after each image loads
      $grid.imagesLoaded().progress(function () {
        $grid.masonry('layout');
      });
      $grid.masonry('reloadItems');
      $grid.masonry('layout');
    }
  }

  new MasonryJs();

  /* ===============================================================
  Nav Options
=============================================================== */
  class NavOptions {
    // Initialize
    constructor() {
      this.btnToggle = $('#nav-toggle');
      this.wrapper = $('#wrapper');
      this.navigation = $('#navigation');
      this.wrapperMask = $('#wrapper-mask');
      this.btnBack = $('#back-nav');
      this.events();
    }

    events() {
      this.btnToggle.on('click', () => {
        this.toggleNav();
      });
      this.btnBack.on('click', () => {
        this.closeNav();
      });
      this.wrapperMask.on('click', () => {
        this.closeNav();
      });
    }

    // Toggle nav
    toggleNav() {
      this.btnToggle.toggleClass('active');
      this.wrapper.toggleClass('active');
      this.navigation.toggleClass('active');
      this.wrapperMask.delay(600).fadeToggle();
    }

    // Close nav
    closeNav() {
      this.btnToggle.removeClass('active');
      this.wrapper.removeClass('active');
      this.navigation.removeClass('active');
      this.wrapperMask.fadeOut();
    }
  }

  new NavOptions();
})(jQuery);
