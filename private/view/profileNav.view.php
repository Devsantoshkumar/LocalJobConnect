<!-- PROFILE NAV PAGE  START-->

<nav class="navbar fixed-top navbar-expand-lg bg-white shadow">
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
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>profile">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        My Business
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Order</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Gig</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Earnings</a></li>
                        <li><a class="dropdown-item" href="#">Workspace</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Growth & Marketing
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Scale Your Business</a></li>
                        <li><a class="dropdown-item" href="#">Contacts</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Learn</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Analytics
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="#">Repeat Business</a></li>
                    </ul>
                </li>
            </ul>
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

                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            <li class="m-auto"><a class="dropdown-item buy-btn" href="#">Switch to Buying</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
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
                            <li><a class="dropdown-item" href="#">Logout <i class="fa-solid fa-power-off ms-2"></i></a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- PROFILE NAV PAGE END -->