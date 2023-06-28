<!-- Start Selling Page -->

<?php

$this->view("includes/header");
$this->view("includes/startsellingNav");
// show($rows);
// show($search);
?>


<!-- Banner Section Start -->

<section class="banner-section">
    <div class="banner-image-box">
        <img src="<?= ASSETS ?>image\bg-2.jpg" alt="image" class="bg-image">
    </div>
    <div class="image-text-section">
        <div class="bg-tex mb-5 mt-5">
            <h1 class="heading-text text-white fw-bold mx-md-5 mx-3 mb-3 fs-1">Work Your Way</h1>
            <p class="text-white fw-bold heading-text mx-md-5 mx-3 fs-6">You bring the skill. We'll make earning easy.
            </p>
        </div>
        <div class="container-fluid mx-md-5">
            <a href="<?= BASE ?>profile/<?= Auth::user("users_id") ?>"
                class="text-decoration-none text-center link-btn p-3 fs-5">Become
                a
                Seller</a>
        </div>
    </div>
    <div class="banner-cover">
        <ul class="list-unstyled banner-cover-list">
            <li class="m-2">
                <p class="fs-4 text-center fw-bold">A Gig is Bought Every</p>
                <h1 class="text-center fw-bold">4 SEC</h1>
            </li>
            <li>
                <P class="fs-4 text-center fw-bold">Transactions</P>
                <h1 class="text-center fw-bold">50K+</h1>
            </li>
            <li>
                <P class="fs-4 text-center fw-bold">Price Range</P>
                <h1 class="text-center fw-bold">$5 - $10,000</h1>
            </li>
        </ul>
    </div>
</section>

<!-- Banner Section End -->

<!-- Become a Seller section start -->


<section class="container-fluid my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center fs-2 fw-bold heading-text">Top Rated <span
                        class="fw-bold fs-2 heading-text heading-color"> Seller</span></h1>
                <p class="text-center mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo!
                </p>
            </div>
        </div>
        <div class="job-category mt-2">
            <a href="#" class="text-decoration-none m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image\user.png" alt="user image">
                    </div>
                    <span class="heading-text">@username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, consectetur.</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter me-5">Starting From</span>
                    $100
                </span>
            </a>
            <a href="#" class="text-decoration-none m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image/user.png" alt="user image">
                    </div>
                    <span class="heading-text">username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, reiciendis?</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter">Starting From</span>
                    $100
                </span>
            </a>
            <a href="#" class="text-decoration-none m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image/user.png" alt="user image">
                    </div>
                    <span class="heading-text">username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, reiciendis?</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter">Starting From</span>
                    $100
                </span>
            </a>
            <a href="#" class="text-decoration-none m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image/user.png" alt="user image">
                    </div>
                    <span class="heading-text">username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, reiciendis?</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter">Starting From</span>
                    $100
                </span>
            </a>
            <a href="#" class="text-decoration-none m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image/user.png" alt="user image">
                    </div>
                    <span class="heading-text">username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, reiciendis?</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter">Starting From</span>
                    $100
                </span>
            </a>
            <a href="#" class="text-decoration-none card-hover m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image/user.png" alt="user image">
                    </div>
                    <span class="heading-text">username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, reiciendis?</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter">Starting From</span>
                    $100
                </span>
            </a>
            <a href="#" class="text-decoration-none card-hover m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image/user.png" alt="user image">
                    </div>
                    <span class="heading-text">username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, reiciendis?</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter">Starting From</span>
                    $100
                </span>
            </a>
            <a href="#" class="text-decoration-none card-hover m-5 text-dark card border-0 shadow"
                style="width:260px; height:450px;">
                <div class="explore-img">
                    <div>
                        <img src="<?= ASSETS ?>image\electrical-card.jpg" alt="image" class="image-fluid">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3">
                    <div class="user-img">
                        <img src="<?= ASSETS ?>image/user.png" alt="user image">
                    </div>
                    <span class="heading-text">username</span>
                </div>
                <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, reiciendis?</p>
                <span class="p-2">
                    <i class="fa-solid fa-star fa-bounce heading-color me-3"></i>4.7 (1.3K)
                </span>
                <span class="p-2 fw-bold"><span class="fs-6 fw-lighter">Starting From</span>
                    $100
                </span>
            </a>
        </div>
        <div class="d-flex align-items-center justify-content-center mt-5">
            <a href="#" class="text-decoration-none link-btn">Explore Job</a>
        </div>
    </div>
</section>


<!-- Become a Seller Section End -->

<!-- How it work Section Starts -->

<section class="container-fluid my-5">
    <div class="container">
        <div class="row mb-5">
            <h4 class="work-process-heading">How It
                <span style="color:var(--green-color);">Works</span>
            </h4>
        </div>
        <div class="row mb-3">
            <ul class="list-unstyled work-list d-flex justify-content-around">
                <li class="me-3">
                    <div class="work-process-img m-auto">
                        <img src="<?= ASSETS ?>image\gig.png" alt="image">
                    </div>
                    <h5 class="text-center">1. Create a Gig</h5>
                    <p class="text-center">Sign up for free, set up your Gig, and offer your work to our
                        global audience.
                    </p>
                </li>
                <li class="mx-3">
                    <div class="work-process-img m-auto">
                        <img src="<?= ASSETS ?>image\email.png" alt="image">
                    </div>
                    <h5 class="text-center">2. Deliver Great Work</h5>
                    <p class="text-center">Get notified when you get an order and use our system to discuss
                        details with customers.</p>
                </li>
                <li class="ms-3">
                    <div class="work-process-img m-auto">
                        <img src="<?= ASSETS ?>image\paid.png" alt="image">
                    </div>
                    <h5 class="text-center">3. Get Paid</h5>
                    <p class="text-center">Get paid on time, every time. Payment is available for
                        withdrawal as soon as it clears.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- How it work Section End -->

<!-- Query Section Start -->

<section class="container-fluid my-5">
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col">
                <h1 class="text-center fs-2 fw-bold heading-text">Any <span
                        class="fw-bold fs-2 heading-text heading-color"> Query</span></h1>
                <p class="text-center mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Accordion Item #4
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Accordion Item 5
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                Accordion Item 6
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Query Section End -->

<section class="container-fluid my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center fw-bold heading-text text-dark fs-4">
                    Sign up and Creat your first <span class="fw-bold heading-text heading-color fs-4">Gig Today</span>
                </p>
                <div class="d-flex align-item-center justify-content-center">
                    <a href="<?= BASE ?>profile/<?= Auth::user("users_id"); ?>"
                        class="link-btn text-decoration-none text-center">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

$this->view("includes/footer.content");
$this->view("includes/footer");


?>