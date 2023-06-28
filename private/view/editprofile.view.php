<!-- Edit Profile Page  -->

<?php

$this->view("includes/header");
$this->view("includes/profileNav");

// show($rows);

?>

<!-- Edit Profile Main Section start -->

<section class="container my-5" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 pb-5 pt-3">
            <div class="card border-0 shadow-sm">
                <div class="row">
                    <div class="col">
                        <?php 
                        
                        if(count($errors)>0){
                            show($errors);
                        }
                        
                        ?>
                    </div>
                </div>
                <div class="row gap-0">
                    <div class="col pt-3">
                        <h4 class="card-header heading-text heading-color fw-bold border-0 bg-white text-center mb-3">
                            EDIT YOUR PROFILE
                        </h4>
                        <div class="card-body">
                            <?php if ($rows): ?>
                                <form autocomplete="off" method="post" enctype="multipart/form-data">
                                    <div class="profile-img m-auto mb-3">
                                        <img src="<?=BASE ?>uploads/<?= $rows[0]->image; ?>" alt="image">
                                    </div>
                                    <div class="text-center mb-3">
                                        <label for="edit_image" class="link-btn">
                                         <input type="file" name="image" id="edit_image" class="d-none">Edit image
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" value="<?= $rows[0]->firstname; ?>" class="form-control" id="floatingInput"
                                            placeholder="Enter the First Name" name="firstname">
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?= $rows[0]->lastname; ?>" id="floatingPassword"
                                            placeholder="Enter the Last Name" name="lastname">
                                        <label for="floatingPassword">Last Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" value="<?= $rows[0]->phone; ?>" class="form-control" id="floatingPassword"
                                            placeholder="Enter your Phone Number" name="phone">
                                        <label for="floatingPassword">Phone Number</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPassword" value="<?= $rows[0]->current_location?>"
                                            name="current_location" placeholder="Enter Your Current Location">
                                        <label for="floatingPassword">Current Location</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="country_id"
                                            aria-label="Floating label select example">
                                            <option selected>Select Your Country</option>
                                            <option value="<?= $rows[0]->country_id?>">INDIA</option>
                                            <option value="<?= $rows[0]->country_id?>">RUSSIA</option>
                                            <option value="<?= $rows[0]->country_id?>">AMERICA</option>
                                        </select>
                                        <label for="floatingSelect">Country</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="state_id"
                                            aria-label="Floating label select example">
                                            <option selected>Select Your State</option>
                                            <option  value="<?= $rows[0]->state_id?>">Uttar Pradesh</option>
                                            <option  value="<?= $rows[0]->state_id?>">Rajasthan</option>
                                            <option  value="<?= $rows[0]->state_id?>">Delhi</option>
                                        </select>
                                        <label for="floatingSelect">State</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="city_id" value="<?= $rows[0]->city_id?>"
                                            aria-label="Floating label select example">
                                            <option selected>Select Your City</option>
                                            <option  value="<?= $rows[0]->state_id?>">Lucknow</option>
                                            <option  value="<?= $rows[0]->state_id?>">Sitapur</option>
                                            <option  value="<?= $rows[0]->state_id?>">Hardio</option>
                                        </select>
                                        <label for="floatingSelect">City</label>
                                    </div>
                                    <input type="submit" value="Save & Update" class="btn link-btn">
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Edit Profile Main Section End -->

<?php

$this->view("includes/footer.content");
$this->view("includes/footer");

?>