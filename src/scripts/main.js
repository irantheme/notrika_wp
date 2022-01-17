(function ($) {
  /* ===============================================================
  Extra
=============================================================== */
  // Share single toggle span
  function shareSingleToggleSpan() {
    $('.share-like .share-like-holder .social-media a').hover(
      function () {
        $(this).animate({ width: '100px' });
      },
      function () {
        $(this).animate({ width: '1.8rem' });
      }
    );
  }
  shareSingleToggleSpan();
  /* ===============================================================
  Search alt blog toggle
=============================================================== */
  // Toggle search form
  function toggleSearchFrom() {
    // Open search form section
    $('#header-blog .social-networks .search-alt').click(function () {
      $('#search-form').slideToggle(1000);
    });
    // Close search form section
    $('#search-form-close').click(function () {
      $('#search-form').slideUp(1000);
    });
    // Search form focused (Box shadow style)
    $('#search-form .search-box .search-input').on('focus', function () {
      console.log('lsjdf');
      $(this).parent().css('box-shadow', 'none');
    });
    $('#search-form .search-box .search-input').on('blur', function () {
      $(this).parent().css('box-shadow', '0px 15px 45px -9px rgb(0 0 0 / 20%)');
    });
  }
  toggleSearchFrom();
  /* ===============================================================
  Nav toggle
=============================================================== */
  // Nav toggle
  function navToggle() {
    // Nav toggle (open) actions
    $('#nav-toggle').click(function () {
      // Toggle active class to nav toggle button
      $(this).toggleClass('active');
      // Toggle active class to wrapper
      $('#wrapper').toggleClass('active');
      // Toggle active class to navigation
      $('#navigation').toggleClass('active');
      // Fade toggle wrapper mask
      $('#wrapper-mask').delay(600).fadeToggle();
    });
    // Nav close actions
    $('#back-nav, #wrapper-mask').click(function () {
      // Remove active class to nav toggle button
      $('#nav-toggle').removeClass('active');
      // Remove active class to wrapper
      $('#wrapper').removeClass('active');
      // Remove active class to navigation
      $('#navigation').removeClass('active');
      // Fade out wrapper mask
      $('#wrapper-mask').fadeOut();
    });
  }
  navToggle();
  /* ===============================================================
  Set height of list image in about
=============================================================== */
  // Set height of about list images
  function setHeightAboutImages() {
    let elements = $('#about .about-list-image li');
    for (let i = 0; i < elements.length; i++) {
      let width = $(elements[i]).width();
      $(elements[i]).height(width);
    }
  }
  setHeightAboutImages();
  $(window).resize(setHeightAboutImages);
  // Initialize bootstrap tooltip
  function tooltipInit() {
    $('[data-toggle="tooltip"]').tooltip();
  }
  tooltipInit();
  /* ===============================================================
  Animate scroll spy
=============================================================== */
  // Animation scroll spy
  function scrollSpy() {
    $('a[href*="#"]:not([href="#"])').click(function () {
      // Get hash for create id
      var hash = this.hash;
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
  scrollSpy();
  /* ===============================================================
  Masonry package init
=============================================================== */
  // Masonry package js init
  function masonryPkgInit() {
    // init Masonry
    var $grid = $('.grid-masonry').masonry({
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
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress(function () {
      $grid.masonry('layout');
    });
    $grid.masonry('reloadItems');
    $grid.masonry('layout');
  }
  masonryPkgInit();
  /* ===============================================================
  Load more
=============================================================== */
  function loadMore() {
    $('.button-load').click(function () {
      $(this).toggleClass('active');
    });
  }
  loadMore();
  /* ===============================================================
  Init swiper sliders
=============================================================== */
  function partnersSlider() {
    // Partners brands slider init
    var partner = new Swiper('.partners-slider', {
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
    var viewpoint = new Swiper('.viewpoint', {
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
    var swiper = new Swiper('.related-post-slider', {
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
  partnersSlider();
})(jQuery);
