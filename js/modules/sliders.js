jQuery(document).ready(function(){
    jQuery('.testimonial__slider').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 3000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        autoplay: true,
        fade: true,
        cssEase: 'linear'
        // prevArrow: jQuery('.slider-arrows .prev'),
        // nextArrow: jQuery('.slider-arrows .next'),
    });

    jQuery('.testimonial-slider').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        autoplay: true,
        cssEase: 'linear',
        prevArrow: jQuery('.slider-arrows .prev'),
        nextArrow: jQuery('.slider-arrows .next'),
    });
  });