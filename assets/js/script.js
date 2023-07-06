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

  // Scroll Script Code

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#navbar").css('background-color', 'var(--white-color)');
    } else {
      $("#navbar").css('background-color', 'transparent');
    }
  });

  // Show password code

  $('#check').on('click', showPassword);

  function showPassword() {
    if ($('#check').prop('checked')) {
      $('#pass').attr('type', 'text');
    } else {
      $('#pass').attr('type', 'password');
    }
  }

});

// SideBar Code

const togglebtn = document.querySelector('#toggle-btn');
const sidebar = document.querySelector('#sidebar');
const hideSidebar = document.querySelector("#hide-sidebar");


togglebtn.onclick = function () {
  sidebar.classList.toggle('active');
};

hideSidebar.onclick = function () {
  sidebar.classList.remove('active');
}