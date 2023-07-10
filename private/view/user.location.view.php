<!-- Sign Up Page -->

<?php

$this->view("includes/header");
$this->view("includes/navBar");

?>

<!-- Sign Up Section Start -->

<section class="container" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-8 pb-5 pt-2">
            <div class="card border-0 py-4 shadow">
                <div class="row gap-0">
                    <div class="col pt-3">
                        <h4 class="card-header custom-card-heading border-0 bg-white text-center">Location details</h4>
                        <div class="card-body px-5">
                            <form autocomplete="off" method="post">
                                <div class="row">
                                    <div class="col myinputgroup">
                                        <label class="form-label">Job Category</label>
                                        <?php if($categories): ?>
                                        <select name="job_category_id" id="jobCategory" class="form-control rounded-0 bg-light shadow-none">
                                           <option value="">Select Category</option>
                                           <?php foreach($categories as $crows): ?>
                                            <option value="<?=$crows->categorys_id; ?>"><?=$crows->category_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php endif; ?>
                                        <small class="text-danger errormsg"></small>
                                    </div>
                                    <div class="col myinputgroup">
                                        <label class="form-label">Country</label>
                                        <select name="country_id" id="country" class="form-control rounded-0 bg-light shadow-none">
                                            <option value="">Select Country</option>
                                        </select>
                                        <small class="text-danger errormsg"></small>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col myinputgroup">
                                        <label class="form-label">State</label>
                                        <select name="state_id" id="state" class="form-control rounded-0 bg-light shadow-none">
                                            <option value="">Select State</option>
                                        </select>
                                        <small class="text-danger errormsg"></small>
                                    </div>
                                    <div class="col myinputgroup">
                                        <label class="form-label">City</label>
                                        <select name="city_id" id="city" class="form-control rounded-0 bg-light shadow-none">
                                            <option value="">Select City</option>
                                        </select>
                                        <small class="text-danger errormsg"></small>
                                    </div>
                                </div>

                                <p class="card-text">Already have an account?<a href="<?= BASE ?>signin"
                                        class="text-decoration-none">Sign in</a>
                                </p>
                                <p class="card-text">By creating an account or logging in, you agree to LOCAL JOB
                                    CONNECT <a href="#" class="text-decoration-none">Conditions
                                        of Use</a>and <a href="#" class="text-decoration-none">Privacy Policy.</a>
                                </p>
                                <button class="btn custom-button rounded-0 text-white shadow-sm fw-bold">Submit</button>
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