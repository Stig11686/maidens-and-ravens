(()=>{var t={920:()=>{AOS.init()},811:()=>{jQuery(document).ready((function(){jQuery(".testimonial-slider").slick({dots:!1,infinite:!0,speed:2e3,slidesToShow:1,adaptiveHeight:!0,arrows:!0})}))}},e={};function i(s){var a=e[s];if(void 0!==a)return a.exports;var n=e[s]={exports:{}};return t[s](n,n.exports,i),n.exports}(()=>{"use strict";i(920);var t=document.querySelector(".faqs-section");t&&t.addEventListener("click",(function(t){var e=t.target.closest(".faq-btn");if(e){var i=e.nextElementSibling;e.classList.contains("faq-btn--active")?e.classList.remove("faq-btn--active"):e.classList.add("faq-btn--active"),i.style.maxHeight?(i.style.maxHeight=null,i.style.padding=null):i.style.maxHeight="".concat(i.scrollHeight+96,"px")}})),i(811)})()})();