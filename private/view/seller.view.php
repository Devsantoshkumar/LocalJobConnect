<!-- Seller page -->

<?php

$this->view("includes/header");
$this->view("includes/navbar");

?>

<!-- Banner Section Start -->

<section class="banner-section">
    <div class="banner-image-box">
        <img src="<?= ASSETS ?>image/seller.jpg" alt="image" class="bg-image">
    </div>
    <div class="image-text-section">
        <div class="bg-text mb-3">
            <h1 class="text-white fw-bold mx-md-5 mx-3 mb-3 fs-1">Work Your Way</h1>
            <p class="text-white fw-bold mx-md-5 mx-3 fs-6">You bring the skill. We'll make earning easy.</p>
        </div>
        <div class="container-fluid mx-md-4">
            <form action="<?= BASE ?>search" class="mb-4">
                <div class="home-searchbar">
                    <span class="text-success p-2" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="p-2" name="search" placeholder="Search your Work" aria-label="search"
                        aria-describedby="basic-addon1" autocomplete="off">
                </div>
            </form>
            
        </div>
    </div>
    <div class="banner-cover bg-transparent">
         <!-- Swiper -->
         <div class="container">
            <div class="swiper mySwiper">
                <?php if($hireData): ?>
                <div class="swiper-wrapper">
                    <?php foreach($hireData as $row): ?>
                    <a href="<?=BASE ?>empdetail/<?=$row->employee_id?>" class="swiper-slide card p-3">
                     <div class="hiredCard  d-flex gap-2 flex-wrap align-items-center">
                        <div class="hireImgBox">
                            <img src="<?=BASE ?>uploads/<?=$row->image; ?>" alt="">
                        </div>
                        <div>
                           <h5 class="hireName"><?=$row->firstname; ?> <?=isset($row->lastname) ? $row->lastname : ""; ?></h5>
                           <?php 
                             if($row->emp_status == 0){
                                $status = "Pending";
                                $color = "danger";
                             }else{
                                $status = "Accepted";
                                $color = "success";
                             }

                           ?>
                           <h6 class="badge bg-<?=$color; ?>"><span>Request <?=$status; ?></span></h6>
                        </div>
                     </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <!-- Add Previous and Next buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
         </div>
    </div>
</section>


<!-- Community Section Start -->

<section class="containerfluid mt-5 mb-3">
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h1 class="text-center fs-2 fw-bold heading-text">Join Our <span
                        class="fw-bold fs-2 heading-text heading-color"> Community</span></h1>
                <p class="text-center mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo!
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">

            <?php if($catedata): ?>
            <div class="job-category mt-2">
                <?php foreach($catedata as $rows): ?>
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

            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <a href="#" class="text-decoration-none fw-bold link-btn text-center p-3">Explore More</a>
        </div>
    </div>
</section>

<!-- Community Section End -->


<!-- Working Process for Seller Section Start -->

<section class="container-fluid my-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <h4 class="work-process-heading pt-5">How It
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

<!-- Working Process for Seller Section End -->



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
                    Sign up and Get Your First<span class="fw-bold heading-text heading-color fs-4"> Work Today</span>
                </p>
                <div class="d-flex align-item-center justify-content-center">
                    <a href="<?= BASE ?>signup" class="link-btn text-decoration-none text-center">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$this->view("includes/footer.content");
$this->view("includes/footer");

?>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>