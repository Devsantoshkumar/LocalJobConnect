<!-- Sign Up Page -->

<?php

$this->view("includes/header");
$this->view("includes/navBar");

?>

<!-- Sign Up Section Start -->

<section class="container" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-4">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-8 pb-5">
            <div class="card border-0 py-4 shadow">
                <div class="row gap-0">
                    <div class="col pt-3">
                        <h4 class="card-header custom-card-heading border-0 bg-white text-center"><?=$formHeading; ?></h4>
                        <div class="card-body px-5">
                            <form autocomplete="off" method="post">
                                <div class="row">
                                    <div class="col myinputgroup">
                                        <label class="form-label">First name</label>
                                        <input type="text" value="<?= get_val('firstname') ?>" name="firstname" class="form-control shadow-none rounded-0 bg-light" placeholder="Enter your first name">
                                        <small class="text-danger errormsg"><?=isset($errors['firstname']) ? $errors['firstname'] : ""; ?></small>
                                    </div>
                                    <div class="col myinputgroup">
                                        <label class="form-label">Last name</label>
                                        <input type="text" value="<?= get_val('lastname') ?>" name="lastname" class="form-control shadow-none rounded-0 bg-light" placeholder="Enter your last name">
                                        <small class="text-danger errormsg"><?=isset($errors['lastname']) ? $errors['lastname'] : ""; ?></small>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col myinputgroup">
                                        <label class="form-label">Email</label>
                                        <input type="email" value="<?= get_val('email') ?>" name="email" class="form-control shadow-none rounded-0 bg-light" placeholder="Ex. example@gmail.com">
                                        <small class="text-danger errormsg"><?=isset($errors['email']) ? $errors['email'] : ""; ?></small>
                                    </div>
                                    <div class="col myinputgroup">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" id="phone" value="<?= get_val('password') ?>" name="phone" class="form-control shadow-none rounded-0 bg-light" placeholder="+91-0000000000">
                                        <small class="text-danger errormsg"><?=isset($errors['phone']) ? $errors['phone'] : ""; ?></small>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col myinputgroup">
                                        <label class="form-label">Password</label>
                                        <input type="password" id="pass" name="password" class="form-control shadow-none rounded-0 bg-light" placeholder="Create new password">
                                        <small class="text-danger errormsg"><?=isset($errors['password']) ? $errors['password'] : ""; ?></small>
                                    </div>
                                    <div class="col myinputgroup">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control shadow-none rounded-0 bg-light" placeholder="confirm password">
                                        <input type="checkbox" class="mt-2" name="check" id="check">
                                        <span class="heading-text">Show password</span>
                                    </div>
                                </div>

                                <p class="card-text">Already have an account?<a href="<?= BASE ?>signin"
                                        class="text-decoration-none">Sign in</a>
                                </p>
                                <p class="card-text">By creating an account or logging in, you agree to LOCAL JOB
                                    CONNECT <a href="#" class="text-decoration-none">Conditions
                                        of Use</a>and <a href="#" class="text-decoration-none">Privacy Policy.</a>
                                </p>
                                <input type="submit" value="Submit" name="signup" class="btn custom-button rounded-0 text-white shadow-sm fw-bold">
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

$this->view("includes/footer.content");
$this->view("includes/footer");

?>