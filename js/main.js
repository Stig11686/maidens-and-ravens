/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/index.js":
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_aos__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/aos */ \"./js/modules/aos.js\");\n/* harmony import */ var _modules_aos__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_modules_aos__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _modules_navigation__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/navigation */ \"./js/modules/navigation.js\");\n/* harmony import */ var _modules_navigation__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_modules_navigation__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _modules_faqs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/faqs */ \"./js/modules/faqs.js\");\n/* harmony import */ var _modules_sliders__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/sliders */ \"./js/modules/sliders.js\");\n/* harmony import */ var _modules_sliders__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_modules_sliders__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _modules_productFaqs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/productFaqs */ \"./js/modules/productFaqs.js\");\n/* harmony import */ var _modules_blog__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/blog */ \"./js/modules/blog.js\");\n\n\n\n\n\n\n\n//# sourceURL=webpack://maidens-and-ravens-wp-theme/./js/index.js?");

/***/ }),

/***/ "./js/modules/aos.js":
/*!***************************!*\
  !*** ./js/modules/aos.js ***!
  \***************************/
/***/ (() => {

eval("AOS.init();\nwindow.addEventListener('load', function () {\n  AOS.refresh();\n});\n\n//# sourceURL=webpack://maidens-and-ravens-wp-theme/./js/modules/aos.js?");

/***/ }),

/***/ "./js/modules/blog.js":
/*!****************************!*\
  !*** ./js/modules/blog.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nvar blogReadMore = function () {\n  var blog = document.querySelector('#blog-archive');\n  if (!blog) return;\n  var moreBtn = document.querySelector('#read-more-posts');\n  if (!moreBtn) return;\n  var offset = 9;\n  var postsPerPage = 9;\n  moreBtn.addEventListener('click', function (e) {\n    e.preventDefault();\n    var xhr = new XMLHttpRequest();\n    xhr.open('POST', ajax_object.ajax_url);\n    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');\n    xhr.onload = function () {\n      if (xhr.status === 200) {\n        var response = JSON.parse(xhr.responseText);\n        if (response.success) {\n          var postContainer = document.getElementById('blog-archive');\n          postContainer.insertAdjacentHTML('beforeend', response.data);\n          offset += postsPerPage; // Increment offset\n        } else {\n          // No more posts to load\n          moreBtn.style.display = 'none';\n        }\n      } else {\n        console.error('Request failed. Status: ' + xhr.status);\n      }\n    };\n    xhr.onerror = function () {\n      console.error('Request failed');\n    };\n    var data = 'action=load_more_posts&offset=' + offset;\n    xhr.send(data);\n  });\n}();\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (blogReadMore);\n\n//# sourceURL=webpack://maidens-and-ravens-wp-theme/./js/modules/blog.js?");

/***/ }),

/***/ "./js/modules/faqs.js":
/*!****************************!*\
  !*** ./js/modules/faqs.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nvar faqs = document.querySelector('.faqs-section');\nvar faqAccordion = function faqAccordion() {\n  if (!faqs) return;\n  faqs.addEventListener('click', function (e) {\n    console.log('normal faqs section clicked');\n    var btn = e.target.closest('.faq-btn');\n    if (!btn) return;\n    var content = btn.nextElementSibling;\n    btn.classList.contains('faq-btn--active') ? btn.classList.remove('faq-btn--active') : btn.classList.add('faq-btn--active');\n    if (content.style.maxHeight) {\n      content.style.maxHeight = null;\n      content.style.padding = null;\n    } else {\n      content.style.maxHeight = \"\".concat(content.scrollHeight + 96, \"px\");\n    }\n  });\n}();\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (faqAccordion);\n\n//# sourceURL=webpack://maidens-and-ravens-wp-theme/./js/modules/faqs.js?");

/***/ }),

/***/ "./js/modules/navigation.js":
/*!**********************************!*\
  !*** ./js/modules/navigation.js ***!
  \**********************************/
/***/ (() => {

eval("// /**\n//  * File navigation.js.\n//  *\n//  * Handles toggling the navigation menu for small screens and enables TAB key\n//  * navigation support for dropdown menus.\n//  */\n// ( function() {\n// \tconst siteNavigation = document.getElementById( 'site-navigation' );\n\n// \t// Return early if the navigation doesn't exist.\n// \tif ( ! siteNavigation ) {\n// \t\treturn;\n// \t}\n\n// \tconst button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];\n\n// \t// Return early if the button doesn't exist.\n// \tif ( 'undefined' === typeof button ) {\n// \t\treturn;\n// \t}\n\n// \tconst menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];\n\n// \t// Hide menu toggle button if menu is empty and return early.\n// \tif ( 'undefined' === typeof menu ) {\n// \t\tbutton.style.display = 'none';\n// \t\treturn;\n// \t}\n\n// \tif ( ! menu.classList.contains( 'nav-menu' ) ) {\n// \t\tmenu.classList.add( 'nav-menu' );\n// \t}\n\n// \t// Toggle the .toggled class and the aria-expanded value each time the button is clicked.\n// \tbutton.addEventListener( 'click', function() {\n// \t\tsiteNavigation.classList.toggle( 'toggled' );\n\n// \t\tif ( button.getAttribute( 'aria-expanded' ) === 'true' ) {\n// \t\t\tbutton.setAttribute( 'aria-expanded', 'false' );\n// \t\t} else {\n// \t\t\tbutton.setAttribute( 'aria-expanded', 'true' );\n// \t\t}\n// \t} );\n\n// \t// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.\n// \tdocument.addEventListener( 'click', function( event ) {\n// \t\tconst isClickInside = siteNavigation.contains( event.target );\n\n// \t\tif ( ! isClickInside ) {\n// \t\t\tsiteNavigation.classList.remove( 'toggled' );\n// \t\t\tbutton.setAttribute( 'aria-expanded', 'false' );\n// \t\t}\n// \t} );\n\n// \t// Get all the link elements within the menu.\n// \tconst links = menu.getElementsByTagName( 'a' );\n\n// \t// Get all the link elements with children within the menu.\n// \tconst linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );\n\n// \t// Toggle focus each time a menu link is focused or blurred.\n// \tfor ( const link of links ) {\n// \t\tlink.addEventListener( 'focus', toggleFocus, true );\n// \t\tlink.addEventListener( 'blur', toggleFocus, true );\n// \t}\n\n// \t// Toggle focus each time a menu link with children receive a touch event.\n// \tfor ( const link of linksWithChildren ) {\n// \t\tlink.addEventListener( 'touchstart', toggleFocus, false );\n// \t}\n\n// \t/**\n// \t * Sets or removes .focus class on an element.\n// \t */\n// \tfunction toggleFocus(event) {\n// \t\tif ( event.type === 'focus' || event.type === 'blur' ) {\n// \t\t\tlet self = this;\n// \t\t\t// Move up through the ancestors of the current link until we hit .nav-menu.\n// \t\t\twhile ( ! self.classList.contains( 'nav-menu' ) ) {\n// \t\t\t\t// On li elements toggle the class .focus.\n// \t\t\t\tif ( 'li' === self.tagName.toLowerCase() ) {\n// \t\t\t\t\tself.classList.toggle( 'focus' );\n// \t\t\t\t}\n// \t\t\t\tself = self.parentNode;\n// \t\t\t}\n// \t\t}\n\n// \t\tif ( event.type === 'touchstart' ) {\n// \t\t\tconst menuItem = this.parentNode;\n// \t\t\tevent.preventDefault();\n// \t\t\tfor ( const link of menuItem.parentNode.children ) {\n// \t\t\t\tif ( menuItem !== link ) {\n// \t\t\t\t\tlink.classList.remove( 'focus' );\n// \t\t\t\t}\n// \t\t\t}\n// \t\t\tmenuItem.classList.toggle( 'focus' );\n// \t\t}\n// \t}\n// }() );\n\n//# sourceURL=webpack://maidens-and-ravens-wp-theme/./js/modules/navigation.js?");

/***/ }),

/***/ "./js/modules/productFaqs.js":
/*!***********************************!*\
  !*** ./js/modules/productFaqs.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nvar faqs = document.querySelector('#custom-product-info .product-details-section');\nvar productFields = function productFields() {\n  if (!faqs) return;\n  faqs.addEventListener('click', function (e) {\n    console.log('product fields clicked');\n    var btn = e.target.closest('.faq-btn');\n    if (!btn) return;\n    var content = btn.nextElementSibling;\n    btn.classList.contains('faq-btn--active') ? btn.classList.remove('faq-btn--active') : btn.classList.add('faq-btn--active');\n    if (content.style.maxHeight) {\n      content.style.maxHeight = null;\n      content.style.padding = null;\n    } else {\n      content.style.maxHeight = \"\".concat(content.scrollHeight + 96, \"px\");\n    }\n  });\n}();\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (productFields);\n\n//# sourceURL=webpack://maidens-and-ravens-wp-theme/./js/modules/productFaqs.js?");

/***/ }),

/***/ "./js/modules/sliders.js":
/*!*******************************!*\
  !*** ./js/modules/sliders.js ***!
  \*******************************/
/***/ (() => {

eval("jQuery(document).ready(function () {\n  jQuery('.testimonial__slider').slick({\n    dots: false,\n    infinite: true,\n    autoplaySpeed: 2000,\n    speed: 3000,\n    slidesToShow: 1,\n    adaptiveHeight: true,\n    arrows: false,\n    autoplay: true,\n    fade: true,\n    cssEase: 'linear'\n    // prevArrow: jQuery('.slider-arrows .prev'),\n    // nextArrow: jQuery('.slider-arrows .next'),\n  });\n  jQuery('.testimonial-slider').slick({\n    dots: false,\n    infinite: true,\n    autoplaySpeed: 3000,\n    speed: 1000,\n    slidesToShow: 1,\n    adaptiveHeight: true,\n    arrows: false,\n    autoplay: true,\n    cssEase: 'linear',\n    prevArrow: jQuery('.slider-arrows .prev'),\n    nextArrow: jQuery('.slider-arrows .next')\n  });\n});\n\n//# sourceURL=webpack://maidens-and-ravens-wp-theme/./js/modules/sliders.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./js/index.js");
/******/ 	
/******/ })()
;