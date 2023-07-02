<?php $this->view("includes/header"); ?>
<?php $bgColor = "bg-white text-dark" ?>
<?php $this->view("includes/navbar", ['bgColor'=>$bgColor]); ?>



<div class="container topShift">
    <div class="row">
        <div class="col">
            <div class="card border-0 shadow-sm p-2">
                <div class="card-body d-flex align-items-center gap-3">
                    <h1 class="h5 fw-bold text-uppercase border-bottom border-success border-3 py-1">Job Category:</h1>
                    <h2 class="h5 fw-bold text-muted">Home Designer</h2>
                </div>
            </div>
        </div>
    </div>
    

    <div class="row py-3">
        <div class="col-3">
            <div class="card border-0 shadow-sm py-4">
            <h6 class="px-3 border-bottom pb-3">Search Filters:</h6>
            <ul class="list-group px-2">
                <li class="list-group-item border-0 border-bottom rounded-0">
                    <span class="fw-bold text-muted">Location</span>
                    <div class="py-2">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lucknow
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Kanpur
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Delhi
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mumbai
                        </label>
                        </div>
                    </div>
                </li>
                <li class="list-group-item border-0 border-bottom rounded-0">
                    <span class="fw-bold text-muted">Experience</span>
                    <div class="py-2">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            10 Years to above
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            5 Years
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            3 Years
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            1 Year
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Fresher
                        </label>
                        </div>
                    </div>
                </li>
                <li class="list-group-item border-0 rounded-0">
                    <span class="fw-bold text-muted">Distence</span>
                    <div class="py-2">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            1m-5m
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            5m-10m
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            10m-15m
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            15m-20m
                        </label>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 shadow-sm p-3">
                <form action="">
                    <div class="input-group border">
                        <input type="search" class="form-control bg-transparent border-0 rounded-0 shadow-none" name="search" id="searchEmployee" placeholder="Search..">
                        <button type="submit" class="btn bg-primary text-white rounded-0 border-0">Search</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col employee_cards py-3">
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
                     <div class="employeeCard p-2 shadow-sm">
                        <div class="cover_image">
                            <img src="<?=ASSETS ?>image/banner3.jpg" alt="" class="cover">
                            <div class="profile_emp">
                              <img src="<?=ASSETS ?>image/emp1.jpg" alt="" class="imgprofile"> 
                            </div>
                        </div>
                        <div class="employee_details">
                           <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Kamini Yadav</h1>
                           <span class="d-block text-center">Child Caretaker</span>
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
                              <img src="<?=ASSETS ?>image/emp2.jpg" alt="" class="imgprofile"> 
                            </div>
                        </div>
                        <div class="employee_details">
                           <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Raj Kumar</h1>
                           <span class="d-block text-center">Home Designer</span>
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
                              <img src="<?=ASSETS ?>image/emp3.jpg" alt="" class="imgprofile"> 
                            </div>
                        </div>
                        <div class="employee_details">
                           <h1 class="h6 py-2 text-uppercase fw-bold mb-0 text-center">Rohan Yadav</h1>
                           <span class="d-block text-center">Carpainter</span>
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
        </div>
    </div>
</div>





<?php 

$this->view("includes/footer.content");
$this->view("includes/footer"); 

?>