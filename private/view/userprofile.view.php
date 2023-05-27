<!-- User Profile Page  -->

<?php

$this->view("includes/header");
$this->view("includes/profileNav");

?>

<!-- For the black space -->
<section class="container-fluid profile-nav">

</section>

<!-- User Profile Main Section Start -->

<section class="container-fluid my-4">
    <div class="row">
        <div class="col-3 card h-75 ms-5 border-0 px-4 py-3 shadow-sm">
            <div class="m-auto">
                <div class="userprofile-img">
                    <img src="assets\image\employee (1).jpg" alt="image">
                </div>
                <span>
                    <a href="#" class="text-decoration-none">
                        <?php

                        if (Auth::loggedIn()) {
                            echo Auth::user('firstname');
                        } else {
                            echo "No Name";
                        }
                        ?>
                    </a>
                </span>
            </div>
            <hr>
        </div>
        <div class="col">
            <div class="d-flex flex-row align-items-center card border-0 p-3 shadow-sm">
                <a href="#" class="text-decoration-none heading-text text-dark mx-3">Active Gig</a>
                <a href="#" class="text-decoration-none heading-text text-dark mx-3">Paused</a>
            </div>
        </div>
    </div>
</section>

<!-- User Profile Main Section End -->


<?php

$this->view("includes/footer");

?>