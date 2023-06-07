$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 5,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  });

});

// Show password Function

check.onclick = showPassword;

function showPassword() {
  if (check.checked) {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
}