<!-- NavBar Section Start -->

<!-- <nav class="navbar navbar-expand-lg fixed-top <?= isset($bgColor) ? $bgColor : ""; ?> shadow-sm" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="assets\image\logo.svg" alt="LOCALJOBCONNECT" width="50" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav m-auto">
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
            <a href="<?= BASE ?>signin" class="text-decoration-none link-btn mx-2">
                <i class="fa-solid fa-user me-2"></i>Sign In
            </a>
        </div>
    </div>
</nav> -->


<nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="assets\image\LJC Logo.png" width="100" height="30" alt="image">
        </a>
        <!-- <form action="">
            <div class="searchbar">
                <span class="pt-1 px-2 text-success" id="basic-addon1"><i
                        class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="d-none d-md-block" name="search"
                    placeholder="What services you want to search Today?" aria-label="search"
                    aria-describedby="basic-addon1">
            </div>
        </form> -->
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