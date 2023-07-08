<!-- Explore Page -->


<?php

$this->view("includes/header");
$this->view("includes/navbar");

?>

<section class="banner-section position-relative">
    <div class="banner-image-box">
        <img src="<?= ASSETS ?>image/About Us.jpg" alt="image" class="bg-image">
    </div>
    <div class="banner-bg-overlay">
        <div class="explore-text">
            <h1 class="mb-4">More About Us</h1>
            <form action="<?= BASE ?>search">
                <div class="home-searchbar">
                    <span class="text-success p-2" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="p-2" name="search" placeholder="Search your Work" aria-label="search"
                        aria-describedby="basic-addon1" autocomplete="off">
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Explore main content start -->

<section class="container-fluid my-5">
    <div class="row">
        <h1 class="heading-color heading-text fs-2 fw-bold text-center">About Us</h1>
        <p class="heading-text text-center fs-6 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
            reiciendis.</p>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 m-md-5 m-auto about-img">
            <img src="<?= ASSETS ?>image/explore-bg (2).jpg" alt="" class="mt-3">
        </div>
        <div class="col-12 col-md-6 m-md-5">
            <p class="text-center mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque error ipsam
                eius
                sint odio. Harum,
                cupiditate voluptatum. Similique earum molestiae, eum omnis accusamus, mollitia nihil natus laborum
                quam
                cupiditate quidem.</p>

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 m-md-5 order-2 order-md-1">
            <p class="text-center mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque error ipsam
                eius
                sint odio. Harum,
                cupiditate voluptatum. Similique earum molestiae, eum omnis accusamus, mollitia nihil natus laborum
                quam
                cupiditate quidem.</p>

        </div>
        <div class="col-12 col-md-6 m-md-5 m-auto order-1 order-md-2 about-img">
            <img src="<?= ASSETS ?>image/explore-bg (2).jpg" alt="" class="mt-3">
        </div>

    </div>
</section>

<!-- Explore Main content End -->

<?php

$this->view("includes/footer.content");

$this->view("includes/footer");

?>