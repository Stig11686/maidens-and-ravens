(()=>{var e={920:()=>{AOS.init()},811:()=>{jQuery(document).ready((function(){jQuery(".testimonial__slider").slick({dots:!1,infinite:!0,autoplaySpeed:2e3,speed:3e3,slidesToShow:1,adaptiveHeight:!0,arrows:!1,autoplay:!0,fade:!0,cssEase:"linear"})}))}},t={};function a(i){var s=t[i];if(void 0!==s)return s.exports;var n=t[i]={exports:{}};return e[i](n,n.exports,a),n.exports}(()=>{"use strict";a(920);var e=document.querySelector(".faqs-section");e&&e.addEventListener("click",(function(e){var t=e.target.closest(".faq-btn");if(t){var a=t.nextElementSibling;t.classList.contains("faq-btn--active")?t.classList.remove("faq-btn--active"):t.classList.add("faq-btn--active"),a.style.maxHeight?(a.style.maxHeight=null,a.style.padding=null):a.style.maxHeight="".concat(a.scrollHeight+96,"px")}})),a(811)})()})();