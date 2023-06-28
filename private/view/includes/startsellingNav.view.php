<!-- Start Selling Nav Page -->


<nav class="navbar fixed-top navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold heading-text" href="<?= BASE ?>startselling/<?= Auth::user("users_id") ?>">
            <img src="<?= ASSETS ?>image\logo.svg" alt="LOCALJOBCONNECT" width="50" height="30">LJC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <form class="d-flex mx-lg-5 mt-lg-0 mt-3 w-md-50 w-100" action="<?= BASE ?>search" method="GET">
                <input class="form-control me-2" type="search" name="search"
                    placeholder="What service are you looking for today ?" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="profile-icon">
                    <a href="<?= BASE ?>profile" class="text-decoration-none">
                        <i class="fa-regular fa-bell rounded-circle"></i>
                    </a>
                </li>
                <li class="profile-icon">
                    <a href="<?= BASE ?>profile" class="text-decoration-none">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                </li>

                <li class="profile-icon"><a href="<?= BASE ?>profile" class="text-decoration-none">
                        <i class="fa-regular fa-circle-question"></i>
                    </a>
                </li>

                <li class="profile-icon">
                    <a href="<?= BASE ?>profile/<?= Auth::user("users_id"); ?>" class="text-decoration-none">
                        <i class="fa-solid fa-toggle-on"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <a class="nav-link dropdown-toggle" href="<?= BASE ?>profile" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            if (Auth::loggedIn()) {
                                echo Auth::user('firstname');
                            } else {
                                echo "No Name";
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            <li class="m-auto"><a class="dropdown-item buy-btn"
                                    href="<?= BASE ?>profile/<?= Auth::user('users_id') ?>">Switch to Selling</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item"
                                    href="<?= BASE ?>userprofile/<?= Auth::user('users_id') ?>">Profile</a></li>
                            <li><a class="dropdown-item" href="<?= BASE ?>hiring">Hire Employees</a></li>
                            <li><a class="dropdown-item" href="#">New Jobs</a></li>
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
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>