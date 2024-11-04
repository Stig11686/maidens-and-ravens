jQuery(document).ready(function(){
    jQuery('.testimonial__slider').slick({
        dots: jQuery('testimonial__slider .dots'),
        infinite: true,
        autoplaySpeed: 5000,
        speed: 2000,
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
        autoplaySpeed: 3000,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        autoplay: true,
        cssEase: 'linear',
        prevArrow: jQuery('.slider-arrows .prev'),
        nextArrow: jQuery('.slider-arrows .next'),
    });
  });