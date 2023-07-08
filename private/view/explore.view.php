<!-- Explore Page -->


<?php

$this->view("includes/header");
$this->view("includes/navbar");

?>

<section class="banner-section position-relative">
    <div class="banner-image-box">
        <img src="<?= ASSETS ?>image/explore-bg (2).jpg" alt="image" class="bg-image">
    </div>
    <div class="banner-bg-overlay">
        <div class="explore-text">
            <h1 class="mb-4">Explore More Job</h1>
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
        <h1 class="heading-color heading-text fs-2 fw-bold text-center">Explore Your Interest</h1>
        <p class="heading-text text-center fs-6 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
            reiciendis.</p>
    </div>
    <div class="explore">
        <div class="m-sm-4 m-auto card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
        <div class="m-auto m-sm-4 card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
        <div class="m-auto m-sm-4 card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
        <div class="m-auto m-sm-4 card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
        <div class="m-auto m-sm-4 card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
        <div class="m-auto m-sm-4 card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
        <div class="m-auto m-sm-4 card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
        <div class="m-auto m-sm-4 card border-0 shadow-sm" style="width:260px; height:450px;">
            <div class="explore-img">
                <div>
                    <img src="assets\image\electrical-card.jpg" alt="image" class="image-fluid">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center gap-4 p-3">
                <div class="user-img rounded-circle">
                    <img src="assets\image\employee (4).jpg" alt="image" class="image-fluid rounded-circle">
                </div>
                <span><a href="#" class="text-decoration-none text-dark">@username</a></span>
            </div>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nostrum, asperiores?</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold"><i
                        class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)</a></span>
            <span class="p-3"><a href="#" class="text-decoration-none text-dark fw-bold">$100</a></span>
        </div>
    </div>
    <div class="d-flex justify-content-center my-5">
        <a href="#" class="text-decoration-none link-btn p-3">Explore More</a>
    </div>
</section>

<!-- Explore Main content End -->

<?php

$this->view("includes/footer.content");

$this->view("includes/footer");

?>