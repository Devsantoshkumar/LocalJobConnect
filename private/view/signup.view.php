<!-- Sign Up Page -->

<?php

$this->view("includes/header");
$this->view("includes/navBar");

?>

<!-- Sign Up Section Start -->

<section class="container my-5" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 pb-5 pt-3">
            <div class="card border-0 shadow-sm">
                <div class="row gap-0">
                    <div class="col-md-6">
                        <img src="assets\image\signin-image.jpg" class="img-fluid rounded-start h-100" alt="image">
                    </div>
                    <div class="col-md-6 pt-3">
                        <h4 class="card-header heading-text heading-color fw-bold border-0 bg-white text-center">Sign Up
                        </h4>
                        <?php if (count($errors) > 0): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong>
                                <?php foreach ($errors as $errors): ?><br>
                                    <?= $errors ?>
                                <?php endforeach; ?>
                                <span type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></span>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <form action="#" autocomplete="off" method="post">

                                <div class="mb-3">
                                    <label class="form-label">Enter Your First Name</label>
                                    <input type="text" value="<?= get_val('firstname') ?>" name="firstname"
                                        class="form-control" placeholder="Enter your First Name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Enter Your Last Name</label>
                                    <input type="text" value="<?= get_val('lastname') ?>" name="lastname"
                                        class="form-control" placeholder="Enter your Last Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" value="<?= get_val('email') ?>" name="email"
                                        class="form-control" placeholder="abcd123@gmail.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" id="pass" value="<?= get_val('password') ?>" name="password"
                                        class="form-control" placeholder="At least 6 characters">
                                    <input type="checkbox" class="mt-2" name="check" id="check">
                                    <span class="heading-text fs-6">Show password</span>
                                </div>
                                <p class="card-text">Already have an account?<a href="<?= BASE ?>signin"
                                        class="text-decoration-none">Sign in</a>
                                </p>
                                <p class="card-text">By creating an account or logging in, you agree to LOCAL JOB
                                    CONNECT <a href="#" class="text-decoration-none">Conditions
                                        of Use</a>and <a href="#" class="text-decoration-none">Privacy Policy.</a>
                                </p>
                                <input type="submit" value="Sign Up" name="signup" class="btn link-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sign Up section End -->



<?php

$this->view("includes/footer");

?>