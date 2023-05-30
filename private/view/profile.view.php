<!-- PROFILE PAGE  -->

<?php

$this->view("includes/header");
$this->view("includes/profileNav");

?>


<!-- PROFILE MAIN SECTION START -->

<section class="container-fluid profile-nav">

</section>




<section class="container-fluid my-4">
    <div class="row">
        <div class="col-3 card h-75 border-0 p-4 shadow-sm">
            <div class="d-flex flex-row align-items-center gap-4 p-4">
                <div class="profile-img">
                    <img src="assets\image\employee (1).jpg" alt="image">
                </div>
                <span>
                    <a href="#" class="text-decoration-none">
                        <?php

                        if (Auth::loggedIn()) {
                            echo Auth::user('firstname');
                        } else {
                            echo "No Name";
                        }
                        ?>
                    </a>
                </span>
            </div>
            <hr>
            <ul class="profile-list list-unstyled">
                <li>
                    <a href="#">Inbox Response Rate</a>

                    <a href="#">100%</a>
                </li>
                <li>
                    <a href="#">Inbox Response Time</a>
                    <a href="#">100%</a>
                </li>
                <li>
                    <a href="#">Order Response Rate</a>
                    <a href="#">100%</a>
                </li>
                <li>
                    <a href="#">Delivered On Time</a>
                    <a href="#">100%</a>
                </li>
                <li>
                    <a href="#">Order Completion</a>
                    <a href="#">100%</a>
                </li>
                <hr>
                <li>
                    <a href="#">Total Earning</a>
                    <a href="#">US $0</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <div class="d-flex flex-row justify-content-between align-items-center card border-0 p-4 shadow-sm">
                <h1 class="fs-5 profile-content-head">Active Orders - 0($0)</h1>
                <select class="form-select w-25" aria-label="Default select example">
                    <option selected>Active Orders -0($0)</option>
                    <option value="1">Completed</option>
                    <option value="2">Canceled</option>
                    <option value="3">Pending</option>
                </select>
            </div>
            <h1 class="fs-6 profile-content-head mt-5 mb-1 p-3">Upgrade Your Work
                <hr>
            </h1>
            <div class="card border-0 p-4 shadow-sm">
                <h1 class="fs-5 profile-content-head">3 Steps to become a top seller on Local Job Connect</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente perspiciatis beatae, neque sint
                </p>
                <ul class="list-unstyled profile-content-list">
                    <li>
                        <div class="profile-list-img">
                            <img src="assets\image\profile-section (1).png" alt="image">
                        </div>
                        <h1 class="fs-6 profile-heading-head text-center">Get Noticed</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius iure veritatis rerum ratione
                            et recusandae, necessitatibus obcaecati accusantium! Magni, hic?

                        </p>

                    </li>
                    <li>
                    <li>
                        <div class="profile-list-img">
                            <img src="assets\image\profile-section (2).png" alt="image">
                        </div>
                        <h1 class="fs-6 profile-heading-head text-center">Get More Skill & Exposure</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius iure veritatis rerum ratione
                            et recusandae, necessitatibus obcaecati accusantium! Magni, hic?

                        </p>
                    </li>
                    </li>
                    <li>
                    <li>
                        <div class="profile-list-img">
                            <img src="assets\image\profile-section (3).png" alt="image">
                        </div>
                        <h1 class="fs-6 profile-heading-head text-center">Become a Successful Seller!</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius iure veritatis rerum ratione
                            et recusandae, necessitatibus obcaecati accusantium! Magni, hic?

                        </p>

                    </li>
                    </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-around">
                    <li><a href="#" class="text-decoration-none link-btn">Share your Gig</a></li>
                    <li><a href="#" class="text-decoration-none link-btn">Explore Learn</a></li>
                    <li><a href="#" class="text-decoration-none link-btn">Explore Courses</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- PROFILE MAIN SECTION END -->


<?php

$this->view("includes/footer");

?>