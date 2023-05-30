<!-- Edit Profile Page  -->

<?php

$this->view("includes/header");
$this->view("includes/profileNav");

?>

<!-- Edit Profile Main Section start -->

<section class="container my-5" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 pb-5 pt-3">
            <div class="card border-0 shadow-sm">
                <div class="row gap-0">
                    <!-- <div class="col-md-6">
                        <img src="assets\image\signin-imagee1.jpg" class="img-fluid rounded-start h-100" alt="image">
                    </div> -->
                    <div class="col pt-3">
                        <h4 class="card-header heading-text heading-color fw-bold border-0 bg-white text-center mb-3">
                            EDIT YOUR PROFILE
                        </h4>
                        <div class="card-body">
                            <form action="#" autocomplete="off" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Enter the First Name">
                                    <label for="floatingInput">First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                        placeholder="Enter the Last Name">
                                    <label for="floatingPassword">Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                        placeholder="Enter your Phone Number">
                                    <label for="floatingPassword">Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Enter Your Description"
                                        id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Bio</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                        placeholder="Enter Your Skills">
                                    <label for="floatingPassword">Skills</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                        placeholder="Enter Your Qualification">
                                    <label for="floatingPassword">Education</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                        placeholder="Enter Your Current Location">
                                    <label for="floatingPassword">Current Location</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Select Your Country</option>
                                        <option value="1">INDIA</option>
                                        <option value="2">RUSSIA</option>
                                        <option value="3">AMERICA</option>
                                    </select>
                                    <label for="floatingSelect">Country</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Select Your State</option>
                                        <option value="1">Uttar Pradesh</option>
                                        <option value="2">Rajasthan</option>
                                        <option value="3">Delhi</option>
                                    </select>
                                    <label for="floatingSelect">State</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Select Your City</option>
                                        <option value="1">Lucknow</option>
                                        <option value="2">Sitapur</option>
                                        <option value="3">Hardio</option>
                                    </select>
                                    <label for="floatingSelect">City</label>
                                </div>
                                <input type="submit" value="Save & Update" name="signin" class="btn link-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Edit Profile Main Section End -->

<?php

$this->view("includes/footer");

?>