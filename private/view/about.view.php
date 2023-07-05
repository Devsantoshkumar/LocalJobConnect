<!-- About us Page -->


<?php

$this->view("includes/header");
$this->view("includes/navbar");

?>

<!-- About Background image section starts -->

<section class="container-fluid position-relative p-0">
    <div class="bg-about">
        <img src="<?= ASSETS ?>image/About us.jpg" alt="">
    </div>
    <div class="about-cover">

    </div>

</section>

<!-- About Background Section End -->

<section class="container-fluid my-5 p-0">
    <div class="container p-0">
        <div class="row">
            <h1 class="heading-text  fw-bold heading-underline">About
                <span class="heading-text heading-color fw-bold">Us</span>
            </h1>
        </div>
        <div class="row my-5">
            <div class="col-4">
                <div class="about-img">
                    <img src="<?= ASSETS?>image/explore-bg (2).jpg" alt="">
                </div>
            </div>
            <div class="col-8 px-5 d-flex align-items-center justify-content-center">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui sed vitae quod asperiores, molestias
                    dolore fugit consectetur vero eaque voluptate atque quas, quo voluptatem, optio accusantium ex?
                    Molestias optio nobis accusamus delectus architecto. Fugit, enim ab, quam quibusdam repudiandae
                    laborum inventore eius, facilis voluptatum libero quod eum nemo. At, odit.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
$this->view("includes/footer.content");
$this->view("includes/footer");

?>