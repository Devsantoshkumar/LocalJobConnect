<!-- search nav page -->


<!-- Search nav Section Start -->

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="assets\image\logo.svg" width="40" height="30" alt="image">
        </a>
        <form class="d-flex ms-4 w-50" role="search">
            <div class="input-group">
                <input type="text" class="form-control d-none d-md-flex searchbar"
                    placeholder="What services you want to search Today?" aria-label="Username"
                    aria-describedby="basic-addon1">
                <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                        class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </form>
        <button class="navbar-toggler" id="toggle-btn">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASE ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE ?>/explore">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE ?>/seller"> Become a Seller </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE ?>/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE ?>/about">About Us</a>
                </li>
            </ul>
        </div>
        <button class="link-btn d-none d-lg-flex">
            <a href="<?= BASE ?>/signin" class="text-decoration-none text-white">Sign In</a>
        </button>
    </div>
</nav>


<?php

$this->view("includes/sidebar");

?>


<!-- Search nav section end -->