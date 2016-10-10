$(window).scroll(function() {
  if($(this).scrollTop() > $('header').height()) {
    $('.nav').addClass('sticky');
  } else {
    $('.nav').removeClass('sticky');
  }
});