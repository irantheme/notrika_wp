/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./css/main.scss */ "./src/css/main.scss");
/* harmony import */ var _js_main__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/main */ "./src/js/main.js");
/* harmony import */ var _js_main__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_main__WEBPACK_IMPORTED_MODULE_1__);



/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports) {

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
      this.spinnerAlt = $('#spinner-alt');
      this.searchAlt = $('#search-alt');
      this.searchResults = $('#search-form .search-results');
      this.events();
      this.timer;
      this.previousSearchInputValue = '';
      this.spinnerStatus = false;
      this.isOpen = false;
    } // Events


    events() {
      // Toggle and close form
      this.searchAltButton.on('click', () => {
        this.open();
      });
      this.searchCloseButton.on('click', () => {
        this.close();
      }); // Input box shadow style

      this.searchInput.on('focus', () => {
        this.searchInput.parent().css('box-shadow', 'none');
      });
      this.searchInput.on('blur', () => {
        this.searchInput.parent().css('box-shadow', '0px 15px 45px -9px rgb(0 0 0 / 20%)');
      }); // Trigger keypress

      $(document).on('keydown', e => {
        this.keyPressDispatcher(e);
      }); // Trigger keyup

      this.searchInput.on('keyup', () => {
        // Get input search input value
        var searchInputValue = this.searchInput.val(); // Check search input value

        if (searchInputValue != this.previousSearchInputValue) {
          clearTimeout(this.timer);

          if (searchInputValue) {
            // Check search input value with previous value & length
            this.enableSpinner(); // Enable spinner

            this.timer = setTimeout(() => {
              // Get live search data
              this.trigger();
            }, 1000);
          } else {
            this.searchResults.html('');
            this.disableSpinner();
            this.searchResults.hide();
          }
        }

        this.previousSearchInputValue = searchInputValue;
      }); // Hide search results

      $('#wrapper > *').not('#search-form').on('click', () => {
        this.searchResults.hide();
      });
    }

    trigger() {
      this.searchResults.show(); // Get json data with api

      $.getJSON(wpData.root_url + '/wp-json/json/v1/search/?term=' + this.searchInput.val(), result => {
        $('.search-results').html(`
          <div class="row">
          ${result.generalInfo.length ? '' : '<div class="search-not-found">نتیجه ای برای کلمات جستجو شده یافت نشد</div>'}
          ${result.generalInfo.map(item => `
                <div class="col-lg-4 col-md-6">
                  <div class="list-post-style list-post-dark">
                    ${item.imageSrc ? `<div class="list-post-style-img">
                      <a href="${item.permalink}">
                        ${item.imageSrc ? '<img src="' + item.imageSrc + '" alt="تصویر پست">' : ''}
                      </a>
                    </div>` : ''}
                    <div class="list-post-style-content">
                      <h3><a href="${item.permalink}">${item.title}</a></h3>
                      <span>${item.date}</span>
                    </div>
                  </div>
                </div>
              `).join('')}
            </div>
        `); // Stop spinner!

        this.disableSpinner();
      });
    } // Open search form


    open() {
      this.searchForm.slideToggle(1000);
      this.isOpen = true;
    } // Close search form


    close() {
      this.searchForm.slideUp(1000);
      this.isOpen = false;
    }

    keyPressDispatcher(e) {
      if (e.keyCode == 83 && !this.isOpen && !$('input, textarea').is(':focus')) {
        this.open();
      }

      if (e.keyCode == 27 && this.isOpen) {
        this.close();
      }
    } // Spinner alt active (Rotate)


    enableSpinner() {
      this.searchAlt.hide();
      this.spinnerAlt.show();
    } // Search alt active (Disable rotate spinner)


    disableSpinner() {
      this.searchAlt.show();
      this.spinnerAlt.hide();
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
        let hash = this.hash; // Select element for move

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1000); // Checking specific id (go-down)

        if (this.id == 'go-down') {
          // Adding active class
          $(this).addClass('active'); // Remove active class with delay (After scrolled)

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
          disableOnInteraction: false
        },
        // pagination: {
        //   // el: '.swiper-pagination',
        //   clickable: true,
        // },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 3,
            spaceBetween: 10
          },
          // when window width is >= 480px
          575: {
            slidesPerView: 3,
            spaceBetween: 10
          },
          // when window width is >= 640px
          767: {
            slidesPerView: 5,
            spaceBetween: 20
          },
          991: {
            slidesPerView: 5,
            spaceBetween: 30
          }
        }
      }); // Partners viewpoint slider init

      let viewpoint = new Swiper('.viewpoint', {
        loop: true,
        autoplay: {
          delay: 8000,
          disableOnInteraction: false
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      }); // Related post

      let relatedPost = new Swiper('.related-post-slider', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1
          },
          // when window width is >= 480px
          575: {
            slidesPerView: 2
          },
          // when window width is >= 640px
          767: {
            slidesPerView: 2
          },
          991: {
            slidesPerView: 3
          },
          1199: {
            slidesPerView: 3
          },
          1375: {
            slidesPerView: 4
          }
        }
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
        stagger: 30 // containerStyle: null,
        // originTop: false,
        // stamp: '.stamp',

      }); // Layout Masonry after each image loads

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
    } // Toggle nav


    toggleNav() {
      this.btnToggle.toggleClass('active');
      this.wrapper.toggleClass('active');
      this.navigation.toggleClass('active');
      this.wrapperMask.delay(600).fadeToggle();
    } // Close nav


    closeNav() {
      this.btnToggle.removeClass('active');
      this.wrapper.removeClass('active');
      this.navigation.removeClass('active');
      this.wrapperMask.fadeOut();
    }

  }

  new NavOptions();
})(jQuery);

/***/ })

/******/ });
//# sourceMappingURL=index.js.map