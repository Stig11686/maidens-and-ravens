jQuery(document).ready(function(){
    jQuery('.testimonial__slider').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        autplay: true,
        fade: true,
        cssEase: 'linear'
        // prevArrow: jQuery('.slider-arrows .prev'),
        // nextArrow: jQuery('.slider-arrows .next'),
    });
  });