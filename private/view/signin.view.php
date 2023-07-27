<!-- Sign Up Page -->

<?php

$this->view("includes/header");
$this->view("includes/navBar");

?>

<!-- Sign Up Section Start -->

<section class="container-fluid form-container" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-4">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-5 py-5">
            <div class="card form-card border-0 py-4">
                <div class="row gap-0">
                    <div class="col pt-3">
                        <h4 class="card-header custom-card-heading fw-bold border-0 bg-transparent text-center">Signin Account</h4>
                        <div class="card-body px-5">
                            <form autocomplete="off" method="post">
                                <div class="row">
                                    <div class="col myinputgroup">
                                        <label class="form-label text-light">Username or email</label>
                                        <input type="email" value="<?= get_val('email') ?>" name="email" class="form-control shadow-none rounded-0 py-3" placeholder="username or email">
                                        <small class="text-danger errormsg"><?=isset($errors['email']) ? $errors['email'] : ""; ?></small>
                                    </div>
                                </div>
                                
                                <div class="row my-3">
                                    <div class="col myinputgroup">
                                        <label class="form-label text-light">Password</label>
                                        <input type="password" id="pass" name="password" class="form-control shadow-none rounded-0 py-3" placeholder="password">
                                        <small class="text-danger errormsg"><?=isset($errors['password']) ? $errors['password'] : ""; ?></small>
                                        <input type="checkbox" class="mt-2" name="check" id="check">
                                        <span class="heading-text text-light">Show password</span>
                                    </div>
                                </div>

                                <p class="card-text text-light">Create new account? <a href="<?= BASE ?>signup/employee"
                                        class="text-decoration-none text-warning">Employee</a>
                                        <a href="<?= BASE ?>signup/employer"
                                        class="text-decoration-none ms-3 text-warning">Employer</a>
                                </p>
                                <input type="submit" value="Login" name="signup" class="btn custom-button rounded-0 text-white shadow-sm fw-bold">
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