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
                        <img src="<?=ASSETS ?>image/signin-image.jpg" class="img-fluid rounded-start h-100" alt="image">
                    </div>
                    <div class="col-md-6 pt-3">
                        <h4 class="card-header heading-text heading-color fw-bold border-0 bg-white text-center">Varify OTP
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
                            <form autocomplete="off" method="post">

                                <div class="mb-3">
                                    <label class="form-label">Enter 6 Digit OTP</label>
                                    <input type="text" value="<?= get_val('otp') ?>" name="otp" class="form-control" placeholder="Enter OTP">
                                </div>

                                <p class="card-text">OTP has been expired?<a href="<?= BASE ?>signup/send_again"
                                        class="text-decoration-none">Send Again</a>
                                </p>
                                <p class="card-text">By creating an account or logging in, you agree to LOCAL JOB
                                    CONNECT <a href="#" class="text-decoration-none">Conditions
                                        of Use</a>and <a href="#" class="text-decoration-none">Privacy Policy.</a>
                                </p>
                                <input type="submit" value="Varify OTP" name="signup" class="btn link-btn">
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