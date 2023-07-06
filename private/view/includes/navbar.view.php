<!-- NavBar Section Start -->

<nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="assets\image\LJC Logo.png" width="100" height="30" alt="image">
        </a>
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