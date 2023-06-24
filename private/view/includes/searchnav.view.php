<!-- search nav page -->


<!-- Search nav Section Start -->

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="assets\image\logo.svg" alt="LOCALJOBCONNECT" width="50" height="30"><span>LJC</span>
        </a>
        <div class="d-flex">
            <form class="d-flex">
                <div class="input-group searchbar">
                    <input class="form-control d-sm-block d-none" type="search"
                        placeholder="What service are you looking for today ?" aria-label="Search" id="basic-addon1">
                    <button class="input-group-text link-btn fw-bold" type="submit" id="basic-addon1">
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav d-lg-flex d-none">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>explore">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>seller">Become a Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>about">About Us</a>
                </li>
            </ul>
            <a href="<?= BASE ?>signin" class="text-decoration-none link-btn d-lg-block d-none mx-2">
                <i class="fa-solid fa-user me-2"></i>Sign In
            </a>
            <button class="toggler btn d-lg-none order-sm-3 order-2" id="toggle-btn">
                <i class="fa-solid fa-bars" id="toggle-icon"></i>
            </button>
        </div>
    </div>
</nav>

<?php

$this->view("includes/sidebar");

?>


<!-- Search nav section end -->