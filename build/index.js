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
/* harmony import */ var _js_modules_MainMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/modules/MainMenu */ "./src/js/modules/MainMenu.js");
/* harmony import */ var _js_modules_Extra__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/modules/Extra */ "./src/js/modules/Extra.js");
/* harmony import */ var _js_modules_Search__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/modules/Search */ "./src/js/modules/Search.js");
/* harmony import */ var _js_modules_LoadPosts__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/modules/LoadPosts */ "./src/js/modules/LoadPosts.js");
/* harmony import */ var _js_modules_MasonryJs__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/modules/MasonryJs */ "./src/js/modules/MasonryJs.js");
/* harmony import */ var _js_modules_SwiperJs__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/modules/SwiperJs */ "./src/js/modules/SwiperJs.js");
/* harmony import */ var _js_modules_Like__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/modules/Like */ "./src/js/modules/Like.js");








let mainMenu = new _js_modules_MainMenu__WEBPACK_IMPORTED_MODULE_1__["default"]();
let extra = new _js_modules_Extra__WEBPACK_IMPORTED_MODULE_2__["default"]();
let search = new _js_modules_Search__WEBPACK_IMPORTED_MODULE_3__["default"]();
let loadPosts = new _js_modules_LoadPosts__WEBPACK_IMPORTED_MODULE_4__["default"]();
let masonryJs = new _js_modules_MasonryJs__WEBPACK_IMPORTED_MODULE_5__["default"]();
let swiper = new _js_modules_SwiperJs__WEBPACK_IMPORTED_MODULE_6__["default"]();
let like = new _js_modules_Like__WEBPACK_IMPORTED_MODULE_7__["default"]();

/***/ }),

/***/ "./src/js/modules/Extra.js":
/*!*********************************!*\
  !*** ./src/js/modules/Extra.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

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
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).resize(this.setHeightAboutImages);
  }

  scrollSpy() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('a[href*="#"]:not([href="#"])').on('click', function () {
      // Get hash for create id
      let hash = this.hash; // Select element for move

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('html, body').animate({
        scrollTop: jquery__WEBPACK_IMPORTED_MODULE_0___default()(hash).offset().top
      }, 1000); // Checking specific id (go-down)

      if (this.id == 'go-down') {
        // Adding active class
        jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active'); // Remove active class with delay (After scrolled)

        setTimeout(function () {
          jquery__WEBPACK_IMPORTED_MODULE_0___default()('#go-down').removeClass('active');
        }, 1000);
      }
    });
  }

  setHeightAboutImages() {
    let elements = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#about .about-list-image li');

    for (let i = 0; i < elements.length; i++) {
      let width = jquery__WEBPACK_IMPORTED_MODULE_0___default()(elements[i]).width();
      jquery__WEBPACK_IMPORTED_MODULE_0___default()(elements[i]).height(width);
    }
  }

  tooltips() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('[data-toggle="tooltip"]').tooltip();
  }

}

/* harmony default export */ __webpack_exports__["default"] = (Extra);

/***/ }),

/***/ "./src/js/modules/Like.js":
/*!********************************!*\
  !*** ./src/js/modules/Like.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);


class Like {
  constructor() {
    this.events();
  }

  events() {
    console.log('Like class events');
  }

}

/* harmony default export */ __webpack_exports__["default"] = (Like);

/***/ }),

/***/ "./src/js/modules/LoadPosts.js":
/*!*************************************!*\
  !*** ./src/js/modules/LoadPosts.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Load Posts
=============================================================== */

class LoadPosts {
  constructor() {
    this.btnLoad = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .button-load');
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

/* harmony default export */ __webpack_exports__["default"] = (LoadPosts);

/***/ }),

/***/ "./src/js/modules/MainMenu.js":
/*!************************************!*\
  !*** ./src/js/modules/MainMenu.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Nav Options
=============================================================== */

class MainMenu {
  // Initialize
  constructor() {
    this.btnOpen = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#nav-open');
    this.wrapper = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#wrapper');
    this.navigation = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#navigation');
    this.wrapperMask = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#wrapper-mask');
    this.btnClose = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#back-nav');
    this.events();
    this.isOpen = false;
  }

  events() {
    this.btnOpen.on('click', () => {
      this.open();
    });
    this.btnClose.on('click', () => {
      this.close();
    });
    this.wrapperMask.on('click', () => {
      this.close();
    });
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('keydown', e => {
      this.keyPressDispatcher(e);
    });
  } // Toggle nav


  open() {
    this.btnOpen.addClass('active');
    this.wrapper.addClass('active');
    this.navigation.addClass('active');
    this.wrapperMask.delay(600).fadeIn();
    this.isOpen = true;
  } // Close nav


  close() {
    this.btnOpen.removeClass('active');
    this.wrapper.removeClass('active');
    this.navigation.removeClass('active');
    this.wrapperMask.fadeOut();
    this.isOpen = false;
  } // Open & close with keypress


  keyPressDispatcher(e) {
    if (e.keyCode == 77 && !this.isOpen && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('input, textarea').is(':focus')) {
      this.open();
    }

    if (e.keyCode == 27 && this.isOpen && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('input, textarea').is(':focus')) {
      this.close();
    }
  }

}

/* harmony default export */ __webpack_exports__["default"] = (MainMenu);

/***/ }),

/***/ "./src/js/modules/MasonryJs.js":
/*!*************************************!*\
  !*** ./src/js/modules/MasonryJs.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Masonry Init
=============================================================== */

class MasonryJs {
  // Initialize
  constructor() {
    // Init Masonry
    let $grid = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.grid-masonry').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true,
      // gutter: 30,
      // horizontalOrder: true,
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

/* harmony default export */ __webpack_exports__["default"] = (MasonryJs);

/***/ }),

/***/ "./src/js/modules/Search.js":
/*!**********************************!*\
  !*** ./src/js/modules/Search.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Search
=============================================================== */

class Search {
  // Initialize
  constructor() {
    this.searchForm = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-form');
    this.searchAltButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#header-blog .social-networks .search-alt');
    this.searchCloseButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-form-close');
    this.searchInput = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-form .search-input');
    this.spinnerAlt = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#spinner-alt');
    this.searchAlt = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-alt');
    this.searchResults = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-form .search-results');
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
    }); // Trigger keypress

    jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('keydown', e => {
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

    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#wrapper > *').not('#search-form').on('click', () => {
      this.searchResults.hide();
    });
  }

  trigger() {
    this.searchResults.show(); // Get json data with api

    jquery__WEBPACK_IMPORTED_MODULE_0___default.a.getJSON(wpData.root_url + '/wp-json/json/v1/search/?term=' + this.searchInput.val(), result => {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.search-results').html(`
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
    this.searchForm.fadeIn(500);
    this.isOpen = true;
    setTimeout(() => {
      this.searchInput.focus();
    }, 1001);
  } // Close search form


  close() {
    this.searchForm.fadeOut(500);
    this.isOpen = false;
  } // Open & close with keypress


  keyPressDispatcher(e) {
    if (e.keyCode == 83 && !this.isOpen && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('input, textarea').is(':focus')) {
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

/* harmony default export */ __webpack_exports__["default"] = (Search);

/***/ }),

/***/ "./src/js/modules/SwiperJs.js":
/*!************************************!*\
  !*** ./src/js/modules/SwiperJs.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
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
      slidesPerView: 1,
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
        // 320: {
        //   slidesPerView: 1,
        // },
        // // when window width is >= 480px
        // 575: {
        //   slidesPerView: 2,
        // },
        // // when window width is >= 640px
        // 767: {
        //   slidesPerView: 2,
        // },
        // 991: {
        //   slidesPerView: 3,
        // },
        // 1199: {
        //   slidesPerView: 3,
        // },
        1376: {
          slidesPerView: 2
        }
      }
    });
    let galleryPost = new Swiper('.gallery-swiper', {
      navigation: {
        nextEl: '.post-image-next',
        prevEl: '.post-image-prev'
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      }
    });
  }

}

/* harmony default export */ __webpack_exports__["default"] = (SwiperJs);

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["jQuery"]; }());

/***/ })

/******/ });
//# sourceMappingURL=index.js.map