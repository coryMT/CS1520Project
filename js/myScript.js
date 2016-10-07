$(document).ready(function() {
  var top = $('.nav').offset().top;

  var sticky = function() {
    var scrollTop = $(window).scrollTop();

    if(scrollTop > top) {
      $('.nav').addClass('sticky');
    } else {
      $('.nav').removeClass('sticky');
    }
  };

  sticky();

  $(window).scroll(function() {
    sticky();
  });
});