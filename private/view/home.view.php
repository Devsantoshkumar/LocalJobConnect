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

<section class="navbar navbar-light mt-5 mx-md-5">
    <div class="bg-text my-5">
        <h1 class="text-white fw-bold mx-3">Search Between More <br> Then 50,00 Open Jobs.</h1>
    </div>
    <div class="container-fluid">
        <form class="d-flex input-group w-75">
            <span class="input-group-text bg-success" id="basic-addon1"><i
                    class="fa-solid fa-magnifying-glass text-white"></i></span>
            <input class="form-control me-2" type="search" class="" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>
</section>

<!-- Background Content Section End -->

<?php $this->view("includes/footer"); ?>