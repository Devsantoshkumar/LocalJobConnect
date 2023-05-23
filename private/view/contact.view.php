<!-- Contact us Page -->


<?php

$this->view("includes/header");
$this->view("includes/navbar");

?>
<section class="banner-section">
    <div class="banner-image-box">
        <img src="assets\image\contact us.jpg" alt="image" class="bg-image">
    </div>
</section>

<section class="container-fluid my-5" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 pb-5 pt-3">
            <div class="card border-0 shadow-sm">
                <div class="row gap-0">
                    <div class="col-md-6">
                        <img src="assets\image\contact us 2.jpg" class="img-fluid rounded-start h-100" alt="image">
                    </div>
                    <div class="col-md-6 pt-3">
                        <h4 class="card-header heading-text heading-color fw-bold border-0 bg-white text-center">
                            Contact Us
                        </h4>
                        <div class="card-body">
                            <form action="#" autocomplete="off" method="post">

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value=""
                                        placeholder="Enter Your Firstname" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value=""
                                        placeholder="Enter Your Last name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" placeholder="Enter Your email" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationCustom03"
                                        placeholder="Enter Your City" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">State</label>
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose Your State</option>
                                        <option>Uttar Pradesh</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Bihar</option>
                                        <option>Rajasthan</option>
                                        <option>Madhya Pradesh</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom05" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="validationCustom05"
                                        placeholder="Portal Code" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                                <input type="submit" value="Send" name="signup" class="btn link-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$this->view("includes/footer");

?>