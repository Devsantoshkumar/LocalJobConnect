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

  // Skill form code

  const skill_form = $("#skill_form");
  const skill_form_box = $("#skill_form_box");
  const skill_add = $("#skill_add");

  skill_add.on("click", () => {
    skill_form_box.html(`<form action="" id="skill_form" class="p-2 w-100 px-0">
    <input type="text" id="skill" class="form-control px-2" placeholder="Enter skill">
    <textarea id="skill_desc" name="skill_description" class="form-control my-2" rows="2" placeholder="Write description" style="overflow:hidden;"></textarea>
    <button type="submit" id="add_skill" class="btn btn-sm btn-secondary mt-1">Add</button>
    <button class="btn btn-sm btn-danger mt-1">Cancel</button>
    </form>`);
  });

  $("#skill_form").on("click", (e) => {
    e.preventDefault();
    // const skill = $("skill").val();
    // const skill_desc = $("#skill_desc").val();
    alert("It is working");

    $.ajax({
      url: "",
      type: "POST",
      data: { skill: skill, skill_desc: skill_desc,skill_add: "skill_add"},
      success: function (data) {
        $("#skill_data").html(data);
      }

    });
  });

  // Education form code

  const education_form = $("#education_form");
  const education_form_box = $("#education_form_box");
  const education_add = $("#education_add");

  education_add.on("click", () => {
    education_form_box.html(`<form action="" id="education_form" class="p-2 w-100 px-0">
    <input type="text" id="education" class="form-control px-2" placeholder="Enter education">
    <textarea id="education_desc" name="education_description" class="form-control my-2" rows="2" placeholder="Write description" style="overflow:hidden;"></textarea>
    <button id="add_education" class="btn btn-sm btn-secondary mt-1">Add</button>
    <button class="btn btn-sm btn-danger mt-1">Cancel</button>
    </form>`);
  });

  $("#add_education").on("click", (e) => {
    e.preventDefault();
    const education = $("education").val();
    const education_desc = $("#education_desc").val();

    $.ajax({
      url: "",
      type: "POST",
      data: { education: education, education_desc: education_desc },
      success: function (data) {
        $("#education_data").html(data);
      }

    });
  });

  // Bio form code

  const bio_form = $("#bio_form");
  const bio_add = $("#bio_add");

  bio_add.on("click", () => {
    bio_form.show();
    $("#bio_data").hide();
  });

});