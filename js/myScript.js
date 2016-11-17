$(window).scroll(function() {
  if($(this).scrollTop() > $('header').height()) {
    $('.nav').addClass('sticky');
  } else {
    $('.nav').removeClass('sticky');
  }
});

function submitForm() {
  if(document.getElementById('firstName').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your first name.';
    return false;
  } else if(document.getElementById('lastName').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your last name.';
    return false;
  } else if(document.getElementById('email').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your email address.';
    return false;
  } else if(document.getElementById('message').value == '') {
    document.getElementById('error').innerHTML = 'Please send a short message about why you are contacting me!';
    return false;
  } else {
    return true;
  }
}