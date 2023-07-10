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
        <div class="col-7 pb-5 pt-2">
            <div class="card border-0 py-5 shadow">
                <div class="row gap-0">
                    <div class="col pt-3">
                        <h4 class="card-header custom-card-heading border-0 bg-white text-center">Email Varification</h4>
                        <div class="card-body px-5">
                            <form action="#" autocomplete="off" method="post">
                                <div class="row">
                                    <div class="col myinputgroup">
                                        <label class="form-label">Enter OTP</label>
                                        <input type="text" value="<?= get_val('otp') ?>" name="otp" class="form-control py-3 shadow-none rounded-0 bg-light" placeholder="Enter OTP">
                                        <small class="text-danger errormsg"><?=isset($errors['otp']) ? $errors['otp'] : ""; ?></small>
                                    </div>
                                </div>
                                <p class="card-text mt-4">OTP Expired?<a href="<?= BASE ?>signup/send_again"
                                        class="text-decoration-none">Send Again</a>
                                </p>
                                <p class="card-text">By creating an account or logging in, you agree to LOCAL JOB
                                    CONNECT <a href="#" class="text-decoration-none">Conditions
                                        of Use</a>and <a href="#" class="text-decoration-none">Privacy Policy.</a>
                                </p>
                                <input type="submit" value="Varify" name="signup" class="btn custom-button rounded-0 text-white shadow-sm fw-bold">
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