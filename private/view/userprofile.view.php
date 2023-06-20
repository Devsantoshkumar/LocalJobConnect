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
                    <div class="userprofile-img mb-3">
                        <img src="<?= BASE ?>uploads/<?= $rows[0]->image; ?>" alt="image">
                    </div>
                    <span class="ms-3">
                        <a href="#" class="text-decoration-none">
                            <?php
                            if (Auth::loggedIn()) {
                                echo Auth::user('firstname');
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
                            <?= $rows[0]->current_location; ?>
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
                        <p class="m-0">Description</p>
                        <button id="bio_add" class="bg-transparent text-primary border-0">Add New</button>
                    </li>
                    <li id="bio_form_box">
                        <form action="" id="bio_form" class="hidden p-2 w-100 px-0">
                            <textarea id="bio_desc" name="bio_description" class="form-control my-2" rows="5"
                                placeholder="Write Bio" style="overflow:hidden;"><?= $rows[0]->bio; ?></textarea>
                            <button id="add_bio" class="btn btn-sm btn-secondary mt-1">Add</button>
                            <button class="btn btn-sm btn-danger mt-1">Cancel</button>
                        </form>
                    </li>
                </ul>
                <p class="user-profile-text" id="bio_data">
                    <?= $rows[0]->bio; ?>
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
                            <h6 class="d-flex justify-content-between"><span>Skills</span> <span id="addSkills"
                                    class="text-primary heading-text" style="cursor:pointer;">Add
                                    New</span></h6>
                            <div id="inputs">

                        </form>
                    </li>
                </ul>

                <?php foreach ($rows as $row): ?>
                    <p class="user-profile-text" id="skill_data">
                        <i class="fa-solid fa-plus fw-bold me-2"></i>
                        <?= $row->skills_id; ?>
                    </p>
                <?php endforeach; ?>
                <hr>
                <ul class="user-profile-list list-unstyled">
                    <li>
                        <p class="m-0 heading-text">Education</p>
                        <button id="education_add" class="bg-transparent text-primary border-0">Add New</button>
                    </li>
                    <li id="education_form_box"></li>
                </ul>
                <?php foreach ($rows as $row): ?>
                    <p class="user-profile-text" id="education_data">
                        <i class="fa-solid fa-user-graduate fw-bold fs-5 me-2" style="color: #1cbe72;"></i>
                        <?= $row->educations_id; ?>
                    </p>
                <?php endforeach; ?>
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
                    <span class="p-3"><a href="#" class="text-decoration-none">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Nostrum, asperiores?</a></span>
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

$this->view("includes/footer");

?>


<script>

    $(document).ready(function () {

        const formInputs = `<div class="input-group mb-1"> 
                                <input type="text" class="form-control mt-2" id="skill" placeholder="Skill name">
                            </div>
                            <div class="input-group mb-1">
                                <textarea id="skillDesc" rows="2" class="form-control mt-2" placeholder="Skill description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success mt-2">Add</button>
                        </div>`;

        $("#addSkills").on("click", (e) => {
            $("#inputs").html(formInputs);
        })



        $("#skillForm").submit(function (e) {
            e.preventDefault()

            const formData = {
                skill_name: $("#skill").val(),
                skill_description: $("#skillDesc").val()
            }
            var form = this;

            $.ajax({
                type: "POST",
                url: "",
                data: formData,
                success: function (response) {
                    alert(response)
                    // Reset the form
                    form.reset();
                },
                error: function (xhr, status, error) {
                    console.log(error)
                }
            })
        })



    })

</script>