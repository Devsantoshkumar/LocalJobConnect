<!-- search nav page -->


<!-- Search nav Section Start -->

<nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="assets\image\LJC Logo.png" width="100" height="30" alt="image">
        </a>
        <form action="">
            <div class="searchbar">
                <span class="text-success p-2" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="p-2" name="search" placeholder="Search your Work"
                    aria-label="search" aria-describedby="basic-addon1" autocomplete="off">
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
                    <a class="nav-link" href="<?= BASE ?>explore">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE ?>seller"> Become a Seller </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE ?>contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE ?>about">About Us</a>
                </li>
            </ul>
        </div>
        <button class="link-btn d-none d-lg-flex">
            <a href="<?= BASE ?>signin" class="text-decoration-none text-white">Sign In</a>
        </button>
    </div>
</nav>


<?php

$this->view("includes/sidebar");

?>


<!-- Search nav section end -->