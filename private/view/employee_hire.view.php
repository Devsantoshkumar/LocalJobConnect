<?php $this->view("includes/header"); ?>
<?php $bgColor = "bg-white text-dark" ?>
<?php $this->view("includes/navbar", ['bgColor' => $bgColor]); ?>



<div class="container-fluid topShift">
    <?php if ($data): ?>
        <div class="row">
            <div class="col-12 col-md-3 order-2 order-md-1 p-1">
                <div class="card border-0 rounded-0 shadow-sm">
                    <h5 class="border-bottom p-3 px-4">Reviews:</h5>
                    <ul class="list-group px-2">
                        <li class="list-group-item border-0 border-bottom rounded-0">
                            <div class="row">
                                <div class="col d-flex align-items-center gap-3">
                                    <div class="hire_page_employer_profile_box hire_page_employer_review_profile">
                                        <img src="<?= ASSETS ?>image/emp3.jpg" alt="">
                                    </div>
                                    <div class="hire_page_employer_info">
                                        <h6 class="d-block p-0 m-0">Santosh Kumar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="reveiw_star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, excepturi!</p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 border-bottom rounded-0">
                            <div class="row">
                                <div class="col d-flex align-items-center gap-3">
                                    <div class="hire_page_employer_profile_box hire_page_employer_review_profile">
                                        <img src="<?= ASSETS ?>image/emp3.jpg" alt="">
                                    </div>
                                    <div class="hire_page_employer_info">
                                        <h6 class="d-block p-0 m-0">Santosh Kumar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="reveiw_star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, excepturi!</p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 border-bottom rounded-0">
                            <div class="row">
                                <div class="col d-flex align-items-center gap-3">
                                    <div class="hire_page_employer_profile_box hire_page_employer_review_profile">
                                        <img src="<?= ASSETS ?>image/emp3.jpg" alt="">
                                    </div>
                                    <div class="hire_page_employer_info">
                                        <h6 class="d-block p-0 m-0">Santosh Kumar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="reveiw_star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, excepturi!</p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 border-bottom rounded-0">
                            <div class="row">
                                <div class="col d-flex align-items-center gap-3">
                                    <div class="hire_page_employer_profile_box hire_page_employer_review_profile">
                                        <img src="<?= ASSETS ?>image/emp3.jpg" alt="">
                                    </div>
                                    <div class="hire_page_employer_info">
                                        <h6 class="d-block p-0 m-0">Santosh Kumar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="reveiw_star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, excepturi!</p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 border-bottom rounded-0">
                            <div class="row">
                                <div class="col d-flex align-items-center gap-3">
                                    <div class="hire_page_employer_profile_box hire_page_employer_review_profile">
                                        <img src="<?= ASSETS ?>image/emp3.jpg" alt="">
                                    </div>
                                    <div class="hire_page_employer_info">
                                        <h6 class="d-block p-0 m-0">Santosh Kumar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="reveiw_star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, excepturi!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-9 order-1 order-md-2 p-1">
                <div class="card w-100 p-3 rounded-0 border-0 shadow-sm">
                    <div class="row">
                        <div class="col-3">
                            <div class="hire_page_profile_box">
                                <img src="<?= BASE ?>uploads/<?= $data[0]->image; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="employee_hire_page_info">
                                <h1>
                                    <?= $data[0]->firstname; ?>
                                    <?= isset($data[0]->lastname) ? $data[0]->lastname : ""; ?>
                                </h1>
                                <h3 class="text-muted"><span>
                                        <?= $data[0]->category_name; ?>
                                    </span> <span class="ms-3"><i class="fa-solid fa-location-dot"></i>
                                        <?= $data[0]->city_name; ?>
                                    </span></h3>
                                <h5 class="d-flex mt-3 align-items-center gap-2 text-uppercase"><span>Cost per hour: </span>
                                    <span><i class="fa-solid fa-indian-rupee-sign"></i> 343</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-white mt-2 border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom d-flex align-items-center gap-3 p-3">
                        <div class="hire_page_employer_profile_box">
                            <img src="<?= BASE ?>uploads/<?= Auth::user("image"); ?>" alt="">
                        </div>
                        <div class="hire_page_employer_info">
                            <h6 class="d-block p-0 m-0">
                                <?= Auth::user("firstname"); ?>
                                <?= Auth::user("lastname") ? Auth::user("lastname") : ""; ?>
                            </h6>
                            <span class="d-block text-muted">
                                <?= Auth::user("email"); ?>
                            </span>
                        </div>
                    </div>
                    <div class="card-body px-5">
                        <form method="POST">
                            <div class="input-group">
                                <input type="hidden" name="employer_id" value="<?= Auth::user("users_id"); ?>">
                            </div>

                            <div class="input-group d-flex flex-column">
                                <input type="text" name="offered_cost"
                                    class="form-control w-100 py-3 bg-light border-0 border-bottom shadow-none"
                                    placeholder="Offered cost">
                                <small class="text-danger">
                                    <?= isset($errors['offered_cost']) ? $errors['offered_cost'] : ""; ?>
                                </small>
                            </div>

                            <div class="input-group d-flex flex-column mt-3">
                                <textarea name="hiring_description" id=""
                                    class="form-control w-100 bg-light shadow-none border-0 border-bottom "
                                    placeholder="Explain about work" rows="5"></textarea>
                                <small class="text-danger">
                                    <?= isset($errors['offered_cost']) ? $errors['offered_cost'] : ""; ?>
                                </small>
                            </div>

                            <div class="input-group mt-4">
                                <button type="submit" class="btn rounded-0 shadow-sm hireBtnEmployerPage">Hire Now</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-white mt-2 border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom d-flex align-items-center gap-3 p-3">
                        <div class="hire_page_employer_profile_box">
                            <img src="<?= ASSETS ?>image/emp3.jpg" alt="">
                        </div>
                        <div class="hire_page_employer_info">
                            <h6 class="d-block p-0 m-0">
                                <?= Auth::user("firstname"); ?>
                                <?= Auth::user("lastname"); ?>
                            </h6>
                            <span class="d-block text-muted">
                                <?= Auth::user("email"); ?>
                            </span>
                        </div>
                    </div>
                    <div class="card-body px-5">
                        <form method="POST" action="<?= BASE ?>/empdetail/comment">
                            <div class="input-group">
                                <input type="hidden" name="review_employer_id" value="<?= Auth::user("users_id"); ?>">
                                <input type="hidden" name="review_employee_id" value="<?= $employee_id ?>">
                            </div>
                            <div class="input-group">
                                <label>
                                    <input type="radio" class="star" name="review_star" value="1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <label>
                                    <input type="radio" class="star" name="review_star" value="2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <label>
                                    <input type="radio" class="star" name="review_star" value="3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <label>
                                    <input type="radio" class="star" name="review_star" value="4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <label>
                                    <input type="radio" class="star" name="review_star" value="5">
                                    <i class="fa-solid fa-star"></i>
                                </label>

                            </div>
                            <div class="input-group mt-3">
                                <textarea name="review_description" id=""
                                    class="form-control bg-light shadow-none border-0 border-bottom "
                                    placeholder="Write your review..." rows="5"></textarea>
                            </div>

                            <div class="input-group mt-4">
                                <button type="submit" class="btn rounded-0 shadow-sm hireBtnEmployerPage">Comment</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    <?php endif; ?>
</div>


<?php

$this->view("includes/footer.content");
$this->view("includes/footer");

?>