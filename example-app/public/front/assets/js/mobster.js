;$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items: 3,
    center: true,
    nav: true,
    dots: false,
    loop: true,
  });
});

;$(document).ready(function() {
  $("a.page-scroll").click(function() {
       $('html, body').animate({
           scrollTop: $(".mouse-here").offset().top
       }, 1500);
   });
  });


wow = new WOW();

wow.init();