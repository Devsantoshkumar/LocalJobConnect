<!-- Search View php -->

<?php

$this->View("includes/header");
$this->view("includes/searchnav");


// $this->View("includes/searchnav");

// show($rows);
// show($search);

?>

<!-- sub navigation starts -->

<?php if (isset($search)): ?>

    <section class="container-fluid">
        <div class="row d-none d-sm-flex">
            <div class="col p-0">
                <nav class="nav">
                    <a class="nav-link" href="#">Electrician</a>
                    <a class="nav-link" href="#">Plumber</a>
                    <a class="nav-link" href="#">HouseMaid</a>
                    <a class="nav-link" href="#">Painter</a>
                    <a class="nav-link" href="#">Cleanner</a>
                    <a class="nav-link" href="#">BabySitter</a>
                </nav>
            </div>
        </div>
    </section>

    <!-- sub navigation ends -->

    <h1 class="search-title m-5 fs-3">Top Search :
        <?= $search ?>
    </h1>


    <section class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <h5 class="heading-text fw-bold text-center">Filter By</h5>
                <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Categories
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectCategory"
                                            id="">Electrical</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectCategory"
                                            id="">Plumber</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectCategory"
                                            id="">HouseMaid</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectCategory"
                                            id="">Painter</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectCategory"
                                            id="">Cleanner</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Location
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><input type="text" class="form-control" name="location" id=""
                                            placeholder="Location">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Experience
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectExperience"
                                            id="">Fresher</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectExperience"
                                            id="">1 Year</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectExperience"
                                            id="">3 Year</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectExperience"
                                            id="">5 Year</li>
                                    <li class="mb-2 customCheck"><input type="checkbox" class="mx-3" name="selectExperience"
                                            id="">10 Year</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($rows): ?>
                <div class="col-11 m-auto col-lg-8 card border-0 shadow-sm mx-lg-4">
                    <form action="" class="mb-5 mt-3 search-box">
                        <div class="drop-down">
                            <div class="drop-down-items shadow-sm" id="selectState">
                                <span id="drop-text">State</span>
                                <i class="fa-solid fa-caret-down mt-1" id="stateIcon"></i>
                            </div>
                            <ul class="drop-down-list list-unstyled shadow-sm" id="stateName">
                                <li class="drop-down-list-items sname">Uttar Pradesh</li>
                                <li class="drop-down-list-items sname">Madhay Pradesh</li>
                                <li class="drop-down-list-items sname">Rajasthan</li>
                                <li class="drop-down-list-items sname">Andhra Pradesh</li>
                                <li class="drop-down-list-items sname">Arunachal Pradesh</li>
                                <li class="drop-down-list-items sname">Bihar</li>
                                <li class="drop-down-list-items sname">Himachal Pradesh</li>

                            </ul>
                        </div>
                        <div class="drop-down mx-2">
                            <div class="drop-down-items shadow-sm" id="selectCity">
                                <span id="span">City</span>
                                <i class="fa-solid fa-caret-down mt-1" id="cityIcon"></i>
                            </div>
                            <ul class="drop-down-list list-unstyled shadow-sm" id="cityName">
                                <li class="drop-down-list-items cname">Lucknow</li>
                                <li class="drop-down-list-items cname">Sitapur</li>
                                <li class="drop-down-list-items cname">Hardoi</li>
                                <li class="drop-down-list-items cname">Jaipur</li>
                            </ul>
                        </div>
                        <div class="cardsearch">
                            <input type="text" class="d-none d-md-flex" placeholder="What services you want to search Today?"
                                aria-label="search" name="search" aria-describedby="basic-addon1" value="<?= $search ?>">
                            <span class="text-success" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                        <!-- <a href="#" class="text-decoration-none ms-2 mt-2">Advance Search</a> -->
                    </form>
                    <hr>

                    <?php foreach ($rows as $row): ?>
                        <div class="profile-card">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="client-img">
                                        <a href="#">
                                            <img src="<?= BASE ?>uploads/<?= $rows[0]->image; ?>" alt="image">
                                        </a>

                                    </div>
                                    <ul class="list-unstyled mx-2 p-3">
                                        <li>
                                            <?= $rows[0]->firstname ?>
                                            <?= $rows[0]->lastname ?>
                                        </li>
                                        <li>
                                            <?= $rows[0]->skill_name ?>
                                        </li>
                                        <li>
                                            <?= $rows[0]->current_location ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="like-icon shadow">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <div class="">
                                <ul class="list-unstyled d-flex justify-content-around">
                                    <li>$20/hr</li>
                                    <li>$100K + earned</li>
                                    <li>Top Rated</li>

                                </ul>
                            </div>
                            <p>
                                <?= $rows[0]->bio ?>
                            </p>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No results found.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<script>

    // Select State Code

    const selectState = document.getElementById("selectState");

    const stateName = document.getElementById("stateName");
    const droptext = document.getElementById("drop-text");
    const stateIcon = document.getElementById("stateIcon");

    selectState.onclick = () => {
        // selectState.classList.toggle('state');
        stateName.classList.toggle('state');
        stateIcon.classList.toggle('dropIcon');
    }



    // Select City Code

    const selectCity = document.getElementById("selectCity");
    const cityName = document.getElementById("cityName");
    const span = document.getElementById("span");
    const cityIcon = document.getElementById("cityIcon");

    selectCity.onclick = () => {
        // selectCity.classList.toggle('city');
        cityName.classList.toggle('city');
        cityIcon.classList.toggle('drop-cityIcon');
    }

    window.onclick = function (e) {
        if (e.target !== selectState && e.target !== stateName && e.target !== droptext && e.target !== stateIcon
            && e.target !== selectCity && e.target !== cityName && e.target !== span && e.target !== cityIcon) {
            selectState.classList.remove('state');
            stateName.classList.remove('state');
            selectCity.classList.remove('city');
            cityName.classList.remove('city');
            stateIcon.classList.remove('dropIcon');
            cityIcon.classList.remove('drop-cityIcon');
        }
    };

    const stateItems = document.querySelectorAll(".sname");
    
    for (let item of stateItems) {
        item.onclick = (e)=>{
           droptext.innerText = e.target.innerText;
        }
    }


    const cityItems =document.querySelectorAll(".cname");

    for (let item  of cityItems) {
        item.onclick = (e)=>{
            span.innerText = e.target.innerText;
        }
    }


</script>
<?php

$this->view("includes/footer.content");
$this->View("includes/footer");

?>