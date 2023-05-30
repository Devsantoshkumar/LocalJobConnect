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
    <?php if($rows): ?>
    <div class="row">
        <div class="col-3 card h-100 ms-5 border-0 px-4 py-3 shadow-sm">
            <div class="m-auto">
                <div class="userprofile-img mb-3">
                    <img src="<?=ASSETS ?>image/<?=$rows[0]->image; ?>" alt="image">
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
            <a href="<?= BASE ?>editprofile" class="text-decoration-none mt-2 text-center fw-bold link-btn">Edit Profile</a>
            <hr>
            <ul class="profile-list list-unstyled">
                <li>
                    <p><i class="fa-solid fa-location-dot fa-bounce me-2"></i>From</p>

                    <p>India</p>
                </li>
                <li>
                    <p><i class="fa-solid fa-user-large fa-bounce me-2"></i>Member</p>

                    <p>Apr 2022</p>
                </li>
            </ul>
            <hr>
            <ul class="user-profile-list list-unstyled">
                <li>
                    <p class="m-0">Description</p>
                    <a href="#" class="text-decoration-none">Edit Description</a>
                </li>
            </ul>
            <p class="user-profile-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptate magni distinctio! Labore
                accusamus, facere fuga cumque excepturi eveniet assumenda?
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
                    <p class="m-0 heading-text">Skills</p>
                    <a href="#" class="text-decoration-none">Add New</a>
                </li>
            </ul>
            <p class="user-profile-text">
                <i class="fa-solid fa-plus fw-bold me-2"></i> Electrician
            </p>
            <p class="user-profile-text">
                <i class="fa-solid fa-plus fw-bold me-2"></i>Plumber
            </p>
            <hr>
            <ul class="user-profile-list list-unstyled">
                <li>
                    <p class="m-0 heading-text">Education</p>
                    <a href="#" class="text-decoration-none">Add New</a>
                </li>
            </ul>
            <p class="user-profile-text">
                <i class="fa-solid fa-user-graduate fw-bold fs-5 me-2" style="color: #1cbe72;"></i> XII - KV IIM, Lucknow
            </p>
            <p class="user-profile-text">
                <i class="fa-solid fa-user-graduate fw-bold fs-5 me-2" style="color: #1cbe72;"></i>X - KV, Sitapur
            </p>
        </div>
        <div class="col">
            <div class="d-flex flex-row align-items-center card border-0 p-3 shadow-sm">
                <a href="#" class="active text-decoration-none heading-text mx-3">Active Gig</a>
                <a href="#" class="text-decoration-none heading-text text-dark mx-3">Paused</a>
            </div>
            <div class="m-4 card-hover card border-0 shadow" style="width:260px; height:400px;">
                <div class="explore-img">
                    <div>
                        <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
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