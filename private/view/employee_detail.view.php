<?php $this->view("includes/header"); ?>
<?php $bgColor = "bg-white text-dark" ?>
<?php $this->view("includes/navbar", ['bgColor'=>$bgColor]); ?>



<div class="container-fluid topShift bg-white">

<?php if($userData):?>
    
<div class="row">
    <!-- sidebar side start-->
    <div class="col-12 col-md-3 order-2 order-md-1 p-0 py-3 bg-white shadow-sm">
        <h5 class="border-bottom px-4 text-uppercase pb-3 m-0">Similar Profiles</h5>
        <div class="col employee_cards profile_details_recommonded_cards p-4 py-2">
            <div class="employeeCard p-2 shadow-sm">
            <div class="cover_image">
                <img src="<?=ASSETS ?>image/banner1.jpg" alt="" class="cover">
                <div class="profile_emp">
                    <img src="<?=ASSETS ?>image/emp1.jpg" alt="" class="imgprofile"> 
                </div>
            </div>
            <div class="employee_details">
                <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Rohini Duggal</h1>
                <span class="d-block text-center">Hosemaid</span>
                <hr>
                <div class="mygrid d-flex flex-column justify-content-center align-items-center">
                    <div class="experience text-center"><span class="fw-bold text-muted">Experience: </span> <span>3 Years</span></div>
                    <div class="experience text-center"><span class="fw-bold text-muted">Location: </span> <span>Lucknow</span></div>
                </div>
                
                <div class="actionButtons d-flex flex-column align-items-center justify-content-between pb-3 px-3">
                    <p class="emp_price btn shadow-none px-0 pb-0 fs-6">Service charges: &#x20B9;4545</p>
                    <a href="<?=BASE ?>empdetail" class="btn btn-sm text-white fw-bold w-100 py-2 rounded border-0 shadow-sm">View Detail</a>
                </div>

            </div>
            </div>
            <div class="employeeCard p-2 shadow-sm">
            <div class="cover_image">
                <img src="<?=ASSETS ?>image/banner3.jpg" alt="" class="cover">
                <div class="profile_emp">
                    <img src="<?=ASSETS ?>image/emp2.jpg" alt="" class="imgprofile"> 
                </div>
            </div>
            <div class="employee_details">
                <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Mohan Bhagawt</h1>
                <span class="d-block text-center">Electrician</span>
                <hr>
                <div class="mygrid d-flex flex-column justify-content-center align-items-center">
                    <div class="experience text-center"><span class="fw-bold text-muted">Experience: </span> <span>3 Years</span></div>
                    <div class="experience text-center"><span class="fw-bold text-muted">Location: </span> <span>Lucknow</span></div>
                </div>
                
                <div class="actionButtons d-flex flex-column align-items-center justify-content-between pb-3 px-3">
                    <p class="emp_price btn shadow-none px-0 pb-0 fs-6">Service charges: &#x20B9;4545</p>
                    <a href="<?=BASE ?>empdetail" class="btn btn-sm text-white fw-bold w-100 py-2 rounded border-0 shadow-sm">View Detail</a>
                </div>

            </div>
            </div>
            <div class="employeeCard p-2 shadow-sm">
            <div class="cover_image">
                <img src="<?=ASSETS ?>image/banner4.jpg" alt="" class="cover">
                <div class="profile_emp">
                    <img src="<?=ASSETS ?>image/emp3.jpg" alt="" class="imgprofile"> 
                </div>
            </div>
            <div class="employee_details">
                <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Sunil Kumar</h1>
                <span class="d-block text-center">Plumber</span>
                <hr>
                <div class="mygrid d-flex flex-column justify-content-center align-items-center">
                    <div class="experience text-center"><span class="fw-bold text-muted">Experience: </span> <span>3 Years</span></div>
                    <div class="experience text-center"><span class="fw-bold text-muted">Location: </span> <span>Lucknow</span></div>
                </div>
                
                <div class="actionButtons d-flex flex-column align-items-center justify-content-between pb-3 px-3">
                    <p class="emp_price btn shadow-none px-0 pb-0 fs-6">Service charges: &#x20B9;4545</p>
                    <a href="<?=BASE ?>empdetail" class="btn btn-sm text-white fw-bold w-100 py-2 rounded border-0 shadow-sm">View Detail</a>
                </div>

            </div>
            </div>
            <div class="employeeCard p-2 shadow-sm">
            <div class="cover_image">
                <img src="<?=ASSETS ?>image/banner5.jpg" alt="" class="cover">
                <div class="profile_emp">
                    <img src="<?=ASSETS ?>image/emp4.jpg" alt="" class="imgprofile"> 
                </div>
            </div>
            <div class="employee_details">
                <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Shiksha Verma</h1>
                <span class="d-block text-center">Home Decorator</span>
                <hr>
                <div class="mygrid d-flex flex-column justify-content-center align-items-center">
                    <div class="experience text-center"><span class="fw-bold text-muted">Experience: </span> <span>3 Years</span></div>
                    <div class="experience text-center"><span class="fw-bold text-muted">Location: </span> <span>Lucknow</span></div>
                </div>
                
                <div class="actionButtons d-flex flex-column align-items-center justify-content-between pb-3 px-3">
                    <p class="emp_price btn shadow-none px-0 pb-0 fs-6">Service charges: &#x20B9;4545</p>
                    <a href="<?=BASE ?>empdetail" class="btn btn-sm text-white fw-bold w-100 py-2 rounded border-0 shadow-sm">View Detail</a>
                </div>

            </div>
            </div>
            <div class="employeeCard p-2 shadow-sm">
            <div class="cover_image">
                <img src="<?=ASSETS ?>image/banner1.jpg" alt="" class="cover">
                <div class="profile_emp">
                    <img src="<?=ASSETS ?>image/emp5.jpg" alt="" class="imgprofile"> 
                </div>
            </div>
            <div class="employee_details">
                <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Kamal Hashan</h1>
                <span class="d-block text-center">Party Organiger</span>
                <hr>
                <div class="mygrid d-flex flex-column justify-content-center align-items-center">
                    <div class="experience text-center"><span class="fw-bold text-muted">Experience: </span> <span>3 Years</span></div>
                    <div class="experience text-center"><span class="fw-bold text-muted">Location: </span> <span>Lucknow</span></div>
                </div>
                
                <div class="actionButtons d-flex flex-column align-items-center justify-content-between pb-3 px-3">
                    <p class="emp_price btn shadow-none px-0 pb-0 fs-6">Service charges: &#x20B9;4545</p>
                    <a href="<?=BASE ?>empdetail" class="btn btn-sm text-white fw-bold w-100 py-2 rounded border-0 shadow-sm">View Detail</a>
                </div>

            </div>
            </div>
        </div>
    </div>
    <!-- sidebaer side end -->

    <!-- Image side start-->
    <div class="col order-1 order-md-2 p-0">
    <div class="card border-0  rounded-0">
        <div class="profile_details_image_container">
            <div class="profile_details_cover">
                <img id="bannerImageShow" alt="">
            </div>
            <div class="profile_details_overlay">
                <div class="text-uppercase d-flex flex-column text-white profile_details_info">
                <span class="profile_details_name"><?=$userData[0]->firstname; ?> <?=isset($userData[0]->lastname)? $userData[0]->lastname : ""; ?></span>
                <?php 
                   $category = new Category();
                   $cateId = $userData[0]->job_category_id;
                   $cateData = $category->where("categorys_id", $cateId);
                ?>
                <span class="profile_details_profession"><?=isset($cateData[0]->category_name) ? $cateData[0]->category_name : "Update Profession"; ?></span>
                </div>
                <div id="bannerImageForm" class="bannerFormImage">
                    <label for="bannerImage" class='text-center'><i class="fa-solid fa-camera text-light"></i></label>
                    <input type="hidden" id="uid" value="<?=$userId; ?>" class="d-none">
                    <input type="file" name="cover" id="bannerImage" class="d-none">
                </div>
            </div>
            <div class="profile_details_profile rounded-circle p-1 bg-white">
               <img id="profileImageShow" class="rounded-circle" alt="">
               <div id="profileImageForm" class="profileFormImage">
                    <label for="profileImage" class='text-center'><i class="fa-solid fa-camera"></i></label>
                    <input type="hidden" id="userId" value="<?=$userId; ?>" class="d-none">
                    <input type="file" name="image" id="profileImage" class="d-none">
               </div>
            </div>
        </div>
        <ul class="list-group rounded-0 d-flex align-items-center list-group-horizontal-sm bg-white shadow-sm border-0 tab">
            <li class="list-group-item rounded-0 tablinks" data-tab="tab1">About</li>
            <li class="list-group-item rounded-0 tablinks" data-tab="tab2">Portfolio</li>
            <li class="list-group-item rounded-0 tablinks" data-tab="tab3">Gallery</li>
            <li class="list-group-item rounded-0 tablinks" data-tab="tab4">Settings</li>
            <li class="list-group-item rounded-0 tablinks" data-tab="tab5">Create Profile</li>
            <a href="<?=BASE ?>empdetail/employee_hire" class="hire_me text-decoration-none ms-auto">Hire Me</a>
        </ul>

        <div>
        <div id="tab5" class="tabcontent">
            <h5>About me</h5>
            <p class="border p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam id dolores sed molestias deserunt, totam doloribus quis nobis consectetur reiciendis voluptatem enim recusandae aliquam, provident velit! Reprehenderit veniam ipsum cupiditate assumenda recusandae sint, commodi ad officia quos ratione magnam blanditiis ab optio qui omnis quibusdam quas distinctio temporibus tenetur reiciendis modi saepe aspernatur placeat. Similique deserunt cum commodi, modi quidem tempora totam inventore illo alias nisi ullam natus, possimus dolorum saepe doloribus atque repellendus autem, reprehenderit blanditiis sunt impedit perspiciatis. Inventore ut veniam explicabo obcaecati, rem reiciendis iste labore? Ab totam assumenda libero suscipit vitae illum, ipsa neque quisquam dolorem.</p>
            <h5>Education</h5>
            <ul class="list-unstyled">
                <li class="border p-2 my-2"><strong class="px-3">BCA :</strong> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci.</span></li>
                <li class="border p-2 my-2"><strong class="px-3">BCA :</strong> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci.</span></li>
                <li class="border p-2 my-2"><strong class="px-3">BCA :</strong> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci.</span></li>
            </ul>

            <h5>Skills</h5>
            <ul class="list-unstyled">
                <li class="border p-2 my-2"><strong class="px-3">BCA :</strong> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci.</span></li>
                <li class="border p-2 my-2"><strong class="px-3">BCA :</strong> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci.</span></li>
                <li class="border p-2 my-2"><strong class="px-3">BCA :</strong> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci.</span></li>
            </ul>

        </div>
        <div id="tab2" class="tabcontent">
            <h3>Tab 21 Content</h3>
            <p>This is the content for Tab 2.</p>
        </div>
        <div id="tab3" class="tabcontent">
            <h3>Tab 3 Content</h3>
            <p>This is the content for Tab 3.</p>
        </div>
        <div id="tab4" class="tabcontent">
            <h3>Tab 4 Content</h3>
            <p>This is the content for Tab 4.</p>
        </div>

        <!-- data edit page section start -->
        <div id="tab1" class="tabcontent p-0">
            <div class="card rounded-0 border-0">
                <div class="card-header rounded-0">Edit Profile</div>
                <div class="card-body p-0">
                    <div class="d-flex">
                    <div class="nav shadow-sm w-25 bg-light flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link rounded-0 text-start" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Edit Profile</button>
                        <button class="nav-link rounded-0 text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add Skills</button>
                        <button class="nav-link rounded-0 text-start" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Change Password</button>
                        <button class="nav-link rounded-0 text-start" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Change Email</button>
                        <button class="nav-link rounded-0 text-start" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                    </div>
                    <div class="tab-content w-100" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <form method="POST" action="<?=BASE ?>empdetail/edit_emp_info/<?=$userData[0]->users_id; ?>">
                                <div class="container">
                                    <div class="row">
                                        <div class="col my-2">
                                            <label for="fname">First name</label>
                                          <input type="text" value="<?=$userData[0]->firstname; ?>" class="py-3 form-control bg-light border-0 border-bottom border-info border-2 shadow-none rounded-0" placeholder="First name">
                                        </div>
                                        <div class="col my-2">
                                            <label for="fname">Last name</label>
                                            <input type="text" value="<?=$userData[0]->lastname; ?>" class="py-3 form-control bg-light border-0 border-bottom border-info border-2 shadow-none rounded-0" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col my-2 custom-inputs">
                                            <label for="bio">Your Bio</label>
                                            <textarea name="bio"  value="<?=$userData[0]->bio; ?>" id="bio" rows="5" class="p-2 bg-light rounded-0 border-0 border-bottom border-info border-2 shadow-none w-100" placeholder="About bio"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col my-2">
                                            <select name="job_category_id" class="p-3 bg-light rounded-0 border-0 border-bottom border-2 border-info shadow-none form-control my-3" id="">
                                                <option value="">Select Category</option>
                                                   <?php if($jobCategories): ?>
                                                    <?php foreach($jobCategories as $row): ?>
                                                        <?php 
                                                        
                                                          if($row->categorys_id == $userData[0]->job_category_id){
                                                             $selected = "selected";
                                                          }else{
                                                             $selected = "";
                                                          }
                                                            
                                                        ?>
                                                        <option value="<?=$row->categorys_id; ?>" <?=$selected; ?>><?=$row->category_name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col d-flex align-items-center my-2">
                                            <input type="text" value="<?=$userData[0]->country_name; ?>" class="py-3 form-control bg-light border-0 border-bottom border-info border-2 shadow-none rounded-0" placeholder="Last name" disabled>
                                            <select name="country_id" id="country" class="p-3 bg-light rounded-0 border-0 border-bottom border-2 border-info shadow-none form-control my-3">
                                                <option value="">Select Country</option>
                                            </select>
                                            <small class="text-danger errormsg"></small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col d-flex align-items-center my-2">
                                            <input type="text" value="<?=$userData[0]->state_name; ?>" class="py-3 form-control bg-light border-0 border-bottom border-info border-2 shadow-none rounded-0" placeholder="Last name" disabled>
                                            <select name="state_id" id="state" class="p-3 bg-light rounded-0 border-0 border-bottom border-2 border-info shadow-none form-control my-3">
                                                <option value="">Select State</option>
                                            </select>
                                            <small class="text-danger errormsg"></small>
                                        </div>
                                        <div class="col d-flex align-items-center my-2">
                                            <input type="text" value="<?=$userData[0]->city_name; ?>" class="py-3 form-control bg-light border-0 border-bottom border-info border-2 shadow-none rounded-0" placeholder="Last name" disabled>
                                            <select name="city_id" id="city" class="p-3 bg-light rounded-0 border-0 border-bottom border-2 border-info shadow-none form-control my-3">
                                                <option value="">Select City</option>
                                            </select>
                                            <small class="text-danger errormsg"></small>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <form action="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col my-2">
                                            <label for="fname">First name</label>
                                          <input type="text" class="form-control bg-light border-0 border-bottom border-info border-2 shadow-none rounded-0" placeholder="First name">
                                        </div>
                                        <div class="col my-2">
                                            <label for="fname">Last name</label>
                                          <input type="text" class="form-control bg-light border-0 border-bottom border-info border-2 shadow-none rounded-0" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col my-2 custom-inputs">
                                            <label for="bio">Your Bio</label>
                                            <textarea name="bio" id="bio" rows="5" class="p-2 bg-light rounded-0 border-0 border-bottom border-info border-2 shadow-none w-100" placeholder="About bio"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- data edit page section start -->


        </div>
        </div>
    </div>
    <!-- image side end -->
</div>

<?php endif; ?>
</div>
    



<?php 

$this->view("includes/footer.content");
$this->view("includes/footer"); 

?>


<script>
    $(document).ready(function() {
    var defaultTab = "tab1";
    $("#" + defaultTab).show();
    $(".tablinks[data-tab='" + defaultTab + "']").addClass("active");

    $(".tablinks").click(function() {
        var tabId = $(this).data("tab");

        $(".tabcontent").hide();

        $(".tablinks").removeClass("active");
        
        $("#" + tabId).show();
        $(this).addClass("active");
    });
});

</script>