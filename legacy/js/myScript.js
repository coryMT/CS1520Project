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
  } else if(document.getElementById('lastName').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your last name.';
  } else if(document.getElementById('email').value == '') {
    document.getElementById('error').innerHTML = 'You must enter your email address.';
  } else if(document.getElementById('message').value == '') {
    document.getElementById('error').innerHTML = 'Please send a short message about why you are contacting me!';
  } else {
    window.location.href = 'mailto:cmt75@pitt.edu';
    submit();
  }
}