<?php $this->view("includes/header"); ?>
<?php $bgColor = "bg-white text-dark" ?>
<?php $this->view("includes/navbar", ['bgColor'=>$bgColor]); ?>



<div class="container-fluid topShift bg-white">

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
                <img src="<?=ASSETS ?>image/banner3.jpg" alt="">
            </div>
            <div class="profile_details_overlay">
                <div class="text-uppercase d-flex flex-column text-white profile_details_info">
                <span class="profile_details_name">Sonam Kapoor</span>
                <span class="profile_details_profession">Home Designer</span>
                </div>
            </div>
            <div class="profile_details_profile rounded-circle p-1 bg-white">
            <img src="<?=ASSETS ?>image/emp1.jpg" class="rounded-circle" alt="">
            </div>
        </div>
        <ul class="list-group rounded-0 d-flex align-items-center list-group-horizontal-sm bg-white shadow-sm border-0 tab">
            <li class="list-group-item rounded-0 tablinks" data-tab="tab1">About</li>
            <li class="list-group-item rounded-0 tablinks" data-tab="tab2">Portfolio</li>
            <li class="list-group-item rounded-0 tablinks" data-tab="tab3">Gallery</li>
            <li class="list-group-item rounded-0 tablinks" data-tab="tab4">Settings</li>
            <a href="<?=BASE ?>empdetail/employee_hire" class="hire_me text-decoration-none ms-auto">Hire Me</a>
        </ul>

        <div class="mt-2">
        <div id="tab1" class="tabcontent">
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
        </div>

    </div>
    </div>
    <!-- image side end -->
</div>
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