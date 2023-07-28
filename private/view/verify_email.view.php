<!-- Sign Up Page -->

<?php

$this->view("includes/header");
$this->view("includes/navBar");

?>

<!-- Sign Up Section Start -->

<section class="container-fluid form-container" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-6 pb-5 pt-2">
            <div class="card border-0 py-5 form-card">
                <div class="row gap-0">
                    <div class="col pt-3">
                        <h4 class="card-header custom-card-heading border-0 bg-transparent fw-bold text-center">Email Varification</h4>
                        <div class="card-body px-5">
                            <form action="#" autocomplete="off" method="post">
                                <div class="row">
                                    <div class="col myinputgroup">
                                        <label class="form-label text-light">Varification Code</label>
                                        <input type="text" value="<?= get_val('otp') ?>" name="otp" class="form-control py-3 shadow-none rounded-0" placeholder="Enter OTP">
                                        <small class="text-danger errormsg"><?=isset($errors['otp']) ? $errors['otp'] : ""; ?></small>
                                    </div>
                                </div>
                                <p class="card-text mt-4 text-light">OTP Expired? <a href="<?= BASE ?>signup/send_again"
                                        class="text-decoration-none text-warning">Send Again</a>
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

$this->view("includes/footer");

?>