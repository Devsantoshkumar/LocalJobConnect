<?php

$this->view("includes/header");
$this->view("includes/navbar");

?>

<!-- Background Content Section Start -->

<section class="banner-section">
    <div class="banner-image-box">
        <img src="assets\image\bg-1.jpg" alt="image" class="bg-image">
    </div>
    <div class="image-text-section">
        <div class="bg-text mb-3">
            <h1 class="text-white fw-bold mx-md-5 mx-3 mb-3 fs-1">Talent ?<br> Meet Opportunity.</h1>
            <p class="text-white fw-bold mx-md-5 mx-3 fs-6">Search Between More Then 50,000+ Open Jobs.</p>
        </div>
        <div class="container-fluid mx-md-4">
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


<!-- Background Content Section End -->


<!-- Job Categories Section Start -->

<section class="containerfluid my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center fs-2 fw-bold heading-text">Browse Jobs By <span
                        class="fw-bold fs-2 heading-text heading-color"> Categories</span></h1>
                <p class="text-center mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo!
                </p>
            </div>
        </div>
        <?php if($category_data): ?>
        <div class="job-category mt-2">
            <?php foreach($category_data as $rows): ?>
            <a href="<?=BASE ?>employees/<?=$rows->categorys_id; ?>" class="job-category-box text-decoration-none text-dark rounded card border-0 shadow-sm pt-3 m-sm-4 m-auto">
                <i class="fa-solid fa-lightbulb"></i>
                <div class="job-category-content">
                    <!-- <div class="d-flex align-item-center justify-content-center"> -->
                        <h1 class="fw-bold fs-6 heading-text text-center card-title"><?=$rows->category_name; ?></h1>
                    <!-- </div> -->
                    <p><?=$rows->category_description; ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="d-flex justify-content-center mt-2 p-2">
            <a href="#" class="text-decoration-none fw-bold link-btn text-center">Explore More</a>
        </div>
    </div>
</section>

<!-- Job Categories Section End -->

<!-- Working Process Section Start -->

<section class="container-fluid my-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <h4 class="work-process-heading mt-5">How It
                <span style="color:var(--green-color);">Works</span>
            </h4>
        </div>
        <div class="row mb-3">
            <ul class="list-unstyled work-list d-flex justify-content-around">
                <li class="me-sm-3 col-12 col-sm-4 order-1">
                    <div class="work-process-img m-auto">
                        <img src="assets\image\gig.png" alt="image">
                    </div>
                    <h5 class="text-center">1. Create Your Acccount</h5>
                    <p class="text-center">Sign up for free, set up your Gig, and offer your work to our
                        global audience.
                    </p>

                </li>
                <li class="mx-sm-3 pb-5 col-12 col-sm-4 order-2">
                    <div class="work-process-img m-auto">
                        <img src="assets\image\email.png" alt="image">
                    </div>
                    <h5 class="text-center">2. Deliver Great Work</h5>
                    <p class="text-center">Get notified when you get an order and use our system to discuss
                        details with customers.</p>
                </li>
                <li class="ms-sm-3 col-12 col-sm-4 order-3">
                    <div class="work-process-img m-auto">
                        <img src="assets\image\paid.png" alt="image">
                    </div>
                    <h5 class="text-center">3. Get Paid</h5>
                    <p class="text-center">Get paid on time, every time. Payment is available for
                        withdrawal as soon as it clears.
                    </p>
                </li>
            </ul>
            <div class="offeset-md-1 col-md-3 work-process-text m-auto">

            </div>
            <div class="offeset-md-1 col-md-3 m-auto work-process-text">

            </div>
            <div class="offeset-md-1 col-md-3 m-auto work-process-text">

            </div>
        </div>
    </div>
</section>

<!-- Working Process Section End -->

<!-- Paid Section Start -->
<section class="container-fluid my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center fw-bold heading-text fs-2 py-3">Top Paid <span
                        class="fs-2 heading-color">Employees</span></h1>
                <p class="w-50 m-auto fs-6 text-center pb-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, vitae facilis. Quaerat dolore
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme">
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>

                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li class="fs-5"><i class="fa-solid fa-dollar-sign heading-color"></i>30000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Paid Section End -->

<!-- Client Section Start -->

<section class="container-fluid my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center fw-bold heading-text fs-2 py-3">Our Client <span
                        class="fs-2 heading-color">Reviews</span></h1>
                <p class="w-50 m-auto fs-6 text-center pb-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, vitae facilis. Quaerat dolore
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme">
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>

                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>
                    <div class="item card client shadow border">
                        <div class="client-img">
                            <img src="assets\image\logo.svg" alt="image" class="rounded-circle">
                        </div>
                        <h5 class="text-center card-title heading-text">Jatin Yadav</h5>
                        <p class="card-body text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident, molestias.</p>
                        <ul class="list-unstyled d-flex align-item-center justify-content-center">
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                            <li><i class="fa-solid fa-star heading-color"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Section Start -->


<?php

$this->view("includes/footer.content");
$this->view("includes/footer");

?>