<!-- Start Selling Nav Page -->


<nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="<?= ASSETS ?>image\LJC Logo.png" width="100" height="30" alt="image">
        </a>
        <form action="" class="mx-0 mx-lg-3">
            <div class="searchbar">
                <span class="text-success p-2" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="p-2" name="search" placeholder="Search your Work" aria-label="search"
                    aria-describedby="basic-addon1" autocomplete="off">
            </div>
        </form>
        <button class="navbar-toggler" id="toggle-btn">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 w-100 d-flex align-items-center justify-content-between mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fs-5" aria-current="page" href="<?= BASE ?>">
                        <i class="fa-solid fa-paper-plane"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="<?= BASE ?>explore">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="<?= BASE ?>explore">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="<?= BASE ?>explore">
                        <i class="fa-solid fa-toggle-on"></i>
                    </a>
                </li>
                <li class="nav-item dropdown drop-img">
                    <a class="nav-link drop-link" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= ASSETS ?>image/user.png" alt="image">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start">
                        <li class="m-auto"><a class="dropdown-item buy-btn"
                                href="<?= BASE ?>startselling/<?= Auth::user("users_id"); ?>">Switch to Selling</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
                                href="<?= BASE ?>userprofile/<?= Auth::user('users_id') ?>">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Refer a Friend</a></li>
                        <li><a class="dropdown-item" href="#">Sitting</a></li>
                        <li><a class="dropdown-item" href="#">Billing</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">English <i class="fa-solid fa-globe ms-2"></i></a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-indian-rupee-sign me-2"></i>
                                INR</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= BASE ?>signout">Logout <i
                                    class="fa-solid fa-power-off ms-2"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<?php

$this->view("includes/sidebar");

?>

<!--  -->