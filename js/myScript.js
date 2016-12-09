(function($) {

  /**
   * This function was not written by me. Credit to:
   *
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */
  $.fn.visible = function(partial) {

    var $t            = $(this),
        $w            = $(window),
        viewTop       = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top          = $t.offset().top,
        _bottom       = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };

})(jQuery);

//Cache all sections
var allSliders = $('.slider');

//This is used for animating sections, just adds a class already-in so that they can't be animated again
allSliders.each(function(i, el) {
  var element = $(el);
  if (element.visible(true)) {
    element.addClass('already-in');
  }
});

//Cache all the links in my nav menu
var navLinks = $('#nav > nav > ul > li > a');
var sections = $('.slider');

//Map each section to its corresponding nav link
var sectionToLink = {};
sections.each(function() {
  sectionToLink[$(this).attr('id')] = $('#nav > nav > ul > li > a[href =\\#' + $(this).attr('id') + ']');
});

//Highlights an optino in the nav menu when that section is the one currently in the top of the screen
function highlight() {
  var scrollPos = $(window).scrollTop();

  sections.each(function() {
    var sectionTop = $(this).offset().top;
    if(scrollPos <= sectionTop) {
      var id = $(this).attr('id');
      var navLink = sectionToLink[id];
      if(!navLink.hasClass('active-menu')) {
        navLinks.removeClass('active-menu');
        navLink.addClass('active-menu');
      }
      return false;
    }
  });
}

$(window).scroll(function() {

  highlight();

  if($(window).scrollTop() == 0) {
    allSliders.each(function(i, el) {
      var element = $(el);
      element.removeClass('already-in');
      element.removeClass('come-in');
    });
  }

  allSliders.each(function(i, el) {
    var element = $(el);
    if (element.visible(true)) {
      element.addClass('come-in');
    }
  });

  if($(this).scrollTop() > $('header').height()) {
    $('.nav').addClass('sticky');
  } else {
    $('.nav').removeClass('sticky');
  }

});

function submitForm() {
  if (document.getElementById('firstName').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your first name.';
    return false;
  } else if (document.getElementById('lastName').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your last name.';
    return false;
  } else if (document.getElementById('email').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your email address.';
    return false;
  } else if (document.getElementById('message').value == '') {
    document.getElementById('error').innerHTML = 'Please send a short message about why you are contacting me!';
    return false;
  } else {
    return true;
  }
}