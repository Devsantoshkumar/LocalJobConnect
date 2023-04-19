<?php

$this->view("includes/header");
$this->view("includes/navbar");

?>

<!-- Background image Section Start -->

<section>
    <img src="assets\image\bg-1.jpg" alt="image" class="bg-image">
</section>

<!-- Background image Section End -->

<!-- Background Content Section Start -->

<section class="navbar navbar-light mt-5 mx-md-5 bg-box">
    <div class="bg-text mb-5">
        <h1 class="text-white fw-bold mx-3 mb-3">Talent ?<br> Meet Opportunity.</h1>
        <span class="text-white fw-bold mx-3">Search Between More Then 50,000+ Open Jobs.</span>
    </div>
    <div class="container-fluid">
        <form class="d-flex input-group w-50">
            <span class="input-group-text bg-success" id="basic-addon1"><i
                    class="fa-solid fa-magnifying-glass text-white"></i></span>
            <input class="form-control me-2" type="search" class="" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>
    <button class="btn btn-success start-btn">Get Started</button>
</section>

<!-- Background Content Section End -->

<!-- Working Process Section Start -->

<section class="container-fluid">
<div class="container">
    <div class="row">
        <h4>How It Works</h4>
    </div>
</div>
</section>



<!-- Working Process Section End -->

<?php $this->view("includes/footer"); ?>