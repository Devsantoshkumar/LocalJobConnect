<!-- User Profile Page  -->

<?php

$this->view("includes/header");
$this->view("includes/profileNav");

?>

<!-- For the black space -->
<section class="container-fluid profile-nav">

</section>

<!-- User Profile Main Section Start -->

<section class="container-fluid my-4">
    <?php if ($rows): ?>
        <div class="row">
            <div class="col-3 card h-100 ms-5 border-0 px-4 py-3 shadow-sm">
                <div class="m-auto">
                    <div class="userprofile-img m-auto pb-2">
                        <?php
                        $image = $rows[0]->image;
                        if (empty($image)) {
                            $image = ASSETS . "image/user.png";
                            echo "<img src=' " . $image . "' alt='image'>";
                        } else {
                            echo "<img src='" . BASE . "uploads/" . $image . "' alt='image'>";
                        }
                        ?>
                    </div>
                    <span class="ms-3">
                        <a href="#" class="text-decoration-none">
                            <?php
                            if (Auth::loggedIn()) {
                                echo Auth::user('firstname') . " " . Auth::user('lastname');
                            } else {
                                echo "No Name";
                            }
                            ?>
                        </a>
                    </span>
                </div>
                <a href="<?= BASE ?>userprofile/update/<?= Auth::user("users_id"); ?>"
                    class="text-decoration-none mt-2 text-center fw-bold link-btn">Edit Profile</a>
                <hr>
                <ul class="profile-list list-unstyled">
                    <li>
                        <p><i class="fa-solid fa-location-dot fa-bounce me-2"></i>From</p>

                        <p>

                            <?php
                            $currentLocation = $rows[0]->current_location;
                            if ($currentLocation !== null && $currentLocation !== '') {
                                echo $currentLocation;
                            } else {
                                echo "None";
                            }
                            ?>

                        </p>
                    </li>
                    <li>
                        <p><i class="fa-solid fa-user-large fa-bounce me-2"></i>Member</p>

                        <p>
                            <?= date("M y", strtotime($rows[0]->date)); ?>
                        </p>
                    </li>
                </ul>
                <hr>
                <ul class="user-profile-list list-unstyled">
                    <li>
                        <form id="bioForm" class="w-100">
                            <h6 class="d-flex justify-content-between"><span class="fw-bold heading-text">Description</span>
                                <span id="addbio" class="text-primary heading-text" style="cursor:pointer;">Add
                                    New</span>
                            </h6>
                            <div id="bioinputs">
                            </div>
                        </form>
                    </li>
                </ul>
                <p class="user-profile-text" id="bio_data">
                </p>
                <hr>
                <ul class="user-profile-list list-unstyled">
                    <li>
                        <p class="m-0">Language</p>
                        <a href="#" class="text-decoration-none">Add New</a>
                    </li>
                </ul>
                <p class="user-profile-text">
                    English
                </p>
                <p class="user-profile-text">
                    Hindi
                </p>
                <hr>
                <ul class="user-profile-list list-unstyled">
                    <li>
                        <form id="skillForm" class="w-100">
                            <h6 class="d-flex justify-content-between"><span class="fw-bold heading-text">Skills</span>
                                <span id="addSkills" class="text-primary heading-text" style="cursor:pointer;">Add
                                    New</span>
                            </h6>
                            <div id="skillinputs">

                        </form>
                    </li>
                </ul>
                <p class="user-profile-text" id="skill_data">

                </p>
                <hr>
                <ul class="user-profile-list list-unstyled">
                    <li>
                        <form id="educationForm" class="w-100">
                            <h6 class="d-flex justify-content-between"><span class="fw-bold heading-text">Educations</span>
                                <span id="addeducations" class="text-primary heading-text" style="cursor:pointer;">Add
                                    New</span>
                            </h6>
                            <div id="educationinputs"> </div>

                        </form>
                    </li>
                </ul>
                <p class="user-profile-text" id="education_data"></p>
            </div>
            <div class="col">
                <div class="d-flex flex-row align-items-center card border-0 p-3 shadow-sm">
                    <a href="#" class="active text-decoration-none heading-text mx-3">Active Gig</a>
                    <a href="#" class="text-decoration-none heading-text text-dark mx-3">Paused</a>
                </div>
                <div class="m-4 card-hover card border-0 shadow" style="width:260px; height:400px;">
                    <div class="explore-img">
                        <div>
                            <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                        </div>
                    </div>
                    <span class="p-3">
                        <a href="#" class="text-decoration-none">Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Nostrum, asperiores?
                        </a>
                    </span>
                    <span class="p-3"><a href="#" class="text-decoration-none fw-bold"><i
                                class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a>
                    </span>
                    <div class="d-flex justify-content-between">
                        <span class="p-3"><a href="#" class="text-decoration-none"><i
                                    class="fa-solid fa-ellipsis fs-5"></i></a>
                        </span>
                        <span class="p-3"><a href="#" class="text-decoration-none fs-5 fw-bold"><span
                                    class="fs-6 fw-lighter">Starting From</span>
                                $100</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<!-- User Profile Main Section End -->


<?php

$this->view("includes/footer.content");

$this->view("includes/footer");

?>


<script>

    $(document).ready(function () {

        // Bio Form Code Starts

        const bioFormInputs = `<div class="input-group mb-1">
                                <textarea id="bioDesc" rows="5" class="form-control mt-2" placeholder="Write your Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success mt-2">Add</button>`;

        $("#addbio").on("click", (e) => {
            $("#bioinputs").html(bioFormInputs);
        });

        function fetchBioData() {
            $.ajax({
                type: "GET",
                url: "",
                data: { bio: "getbio", users_id: "<?= Auth::user('users_id'); ?>" },
                success: function (response) {
                    $("#bio_data").html(response);
                    let value = $("#bio_data").text();
                    let trimvalue = $.trim(value);
                    if (trimvalue != '') {

                        $("#bioDesc").text(trimvalue);
                    } else {
                        $("#bio_data").html(`
                        <div class="d-flex align-items-center">
                            <p>No Record Found</p>
                        </div>
                        `);
                    }

                },
                error: function (xhr, status, error) {
                    console.log(error)
                }
            })
        }


        fetchBioData();


        $("#bioForm").submit(function (e) {
            e.preventDefault()

            const bioFormData = {
                users_id: "<?= Auth::user('users_id') ?>",
                bio: $("#bioDesc").val(),
                bioData: "biodata"
            }

            // console.log(bioFormData);

            let formB = this;

            $.ajax({
                type: "POST",
                url: "",
                data: bioFormData,
                success: function (response) {
                    // Reset the form
                    formB.reset();
                    fetchBioData();
                },
                error: function (xhr, status, error) {
                    console.log(error)
                }
            })
        });

        // Bio Form Code Ends

        // Skill form code start

        const formInputs = `<div class="input-group mb-1"> 
                                <input type="text" class="form-control mt-2" id="skill" placeholder="Skill name">
                            </div>
                            <div class="input-group mb-1">
                                <textarea id="skillDesc" rows="2" class="form-control mt-2" placeholder="Skill description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success mt-2">Add</button>
                        </div>`;

        $("#addSkills").on("click", (e) => {
            $("#skillinputs").html(formInputs);
        })


        function fetchData() {
            $.ajax({
                type: "GET",
                url: "",
                data: { skills: "getSkill" },
                success: function (response) {
                    $("#skill_data").html(response);
                },
                error: function (xhr, status, error) {
                    console.log(error)
                }
            })
        }


        fetchData();



        $("#skillForm").submit(function (e) {
            e.preventDefault()

            const formData = {
                skill_name: $("#skill").val(),
                skill_description: $("#skillDesc").val(),
                skillData: "skill_data"
            }

            let form = this;

            $.ajax({
                type: "POST",
                url: "",
                data: formData,
                success: function (response) {
                    // Reset the form
                    form.reset();
                    fetchData();
                },
                error: function (xhr, status, error) {
                    console.log(error)
                }
            })
        });

        // Skill form code end


        // Education Form code Starts

        const formeducatoin = `<div class="input-group mb-1"> 
                                <input type="text" class="form-control mt-2" id="education" placeholder="School/College name">
                            </div>
                            <div class="input-group mb-1">
                                <textarea id="educationDesc" rows="2" class="form-control mt-2" placeholder="Course description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success mt-2">Add</button>`;

        $("#addeducations").on("click", (e) => {
            $("#educationinputs").html(formeducatoin);
        });


        function fetcheducationData() {
            $.ajax({
                type: "GET",
                url: "",
                data: { educations: "getEducation" },
                success: function (response) {
                    $("#education_data").html(response);
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
        }


        fetcheducationData();


        $("#educationForm").submit(function (e) {
            e.preventDefault()

            const educationdata = {
                education_name: $("#education").val(),
                education_description: $("#educationDesc").val(),
                educationData: "education_data"
            };

            let formss = this;


            // This is ajax request is for inserting the data into database

            $.ajax({
                url: "",
                type: "POST",
                data: educationdata,
                success: function (data) {
                    formss.reset(); //Reset the form
                    fetcheducationData();
                }
            });

        });
        // Education form code ends
    });
</script>