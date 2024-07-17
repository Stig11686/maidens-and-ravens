jQuery(document).ready(function(){
    jQuery('.testimonial-slider').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true,
        prevArrow: jQuery('.testimonial-slider .prev'),
        nextArrow: jQuery('.testimonial-slider .next'),
    });
  });