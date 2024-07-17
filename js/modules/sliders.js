jQuery(document).ready(function(){
    jQuery('.testimonial-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true,
        prevArrow: jQuery('.slider-arrows .prev'),
        nextArrow: jQuery('.slider-arrows .next'),
    });
  });