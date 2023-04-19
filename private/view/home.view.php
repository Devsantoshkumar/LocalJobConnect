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
        <div class="bg-text mb-5">
            <h1 class="text-white fw-bold mx-md-5 mx-3 mb-3 fs-1">Talent ?<br> Meet Opportunity.</h1>
            <p class="text-white fw-bold mx-md-5 mx-3 fs-6">Search Between More Then 50,000+ Open Jobs.</p>
        </div>
        <div class="container-fluid mx-md-5">
            <form class="d-flex input-group">
                <span class="input-group-text bg-success" id="basic-addon1"><i
                        class="fa-solid fa-magnifying-glass text-white"></i></span>
                <input class="form-control me-2" type="search" class="" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <!-- Background Content Section End -->


    <!-- Working Process Section Start -->

    <section class="container-fluid my-5">
        <div class="container">
            <div class="row">
                <h4 class="work-process-heading">How It <span style="color:var(--green-color);">Works</span></h4>
            </div>
            <div class="row my-5">
                <div class="offeset-md-1 col-md-3">
                    <i class="fa-solid fa-file-invoice"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel similique obcaecati possimus ratione
                        accusamus doloribus provident. Reiciendis eligendi voluptate qui.</p>
                </div>
                <div class="offeset-md-1 col-md-3">
                    <i class="fa-solid fa-users-viewfinder"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia laudantium amet consequatur
                        nihil voluptas voluptate incidunt, enim quaerat? At!</p>
                </div>
                <div class="offeset-md-1 col-md-3">
                    <i class="fa-solid fa-file-shield"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quibusdam iusto consectetur
                        sequi expedita in quasi atque optio,
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Working Process Section End -->

    <?php $this->view("includes/footer"); ?>