<!-- Start Selling Page -->

<?php

$this->view("includes/header");
$this->view("includes/startsellingNav")

    ?>


<!-- Banner Section Start -->

<section class="banner-section">
    <div class="banner-image-box">
        <img src="<?= ASSETS ?>image\bg-2.jpg" alt="image" class="bg-image">
    </div>
    <div class="image-text-section">
        <div class="bg-text mb-3 mt-5">
            <h1 class="heading-text text-white fw-bold mx-md-5 mx-3 mb-3 fs-1">Work Your Way</h1>
            <p class="text-white fw-bold heading-text mx-md-5 mx-3 fs-6">You bring the skill. We'll make earning easy.
            </p>
        </div>
        <div class="container-fluid mx-md-5">
            <button class="btn text-center link-btn p-3 fs-5">Become a Seller</button>
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


<?php

$this->view("includes/footer");


?>