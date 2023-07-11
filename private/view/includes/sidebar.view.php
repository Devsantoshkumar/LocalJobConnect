<!-- sidebar page -->

<div id="sidebar" class="sidebar-responsive shadow-sm">
    <div class="sidebar-content">
        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= BASE ?>"
                class="text-decoration-none fs-4 pt-2 fw-bold sidebar-logo heading-text heading-color d-flex align-items-center gap-2 ">
                <span>
                    <img src="<?= ASSETS ?>image\logo.svg" alt="">
                </span>
                LJC
            </a>
            <span class="close-btn me-3" id="hide-sidebar"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <ul class="navbar-nav p-3">
            <li class="nav-item mx-3">
                <a class="nav-link" aria-current="page" href="<?= BASE ?>">Home</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" aria-current="page" href="<?= BASE ?>explore">Explore</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" aria-current="page" href="<?= BASE ?>seller">Become a Seller</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" aria-current="page" href="<?= BASE ?>contact">Contact Us</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" aria-current="page" href="<?= BASE ?>about">About Us</a>
            </li>
            <hr class="mb-4">
        </ul>

        <a href="<?= BASE ?>signin" class="text-decoration-none link-btn mx-3">
            <i class="fa-solid fa-user me-2"></i>Sign In
        </a>
    </div>
</div>