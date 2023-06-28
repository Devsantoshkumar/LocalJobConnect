<!-- Search View php -->

<?php

$this->View("includes/header");
$this->View("includes/searchnav");

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
            <div class="col-11 m-auto col-lg-8 card border-0 shadow-sm mx-lg-4">
                <form action="" class="my-5">
                    <div class="input-group">
                        <input type="text" class="cardsearch form-control d-none d-md-flex"
                            placeholder="What services you want to search Today?" aria-label="Username"
                            aria-describedby="basic-addon1" value="<?= $search ?>">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                    <a href="#" class="text-decoration-none ms-2 mt-2">Advance Search</a>
                </form>
                <hr>
                <?php if ($rows): ?>
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


    const togglebtn = document.querySelector('#toggle-btn');
    const sidebar = document.querySelector('#sidebar');

    togglebtn.onclick = function () {
        if (!togglebtn.classList.contains('active')) {
            togglebtn.classList.toggle('active');
            sidebar.classList.toggle('active');
        } else {
            togglebtn.classList.remove('active');
            sidebar.classList.remove('active');
        }
    };

    window.onclick = function (e) {
        if (e.target === togglebtn && e.target === sidebar) {
            // togglebtn.classList.remove('active');
            // sidebar.classList.remove('active');
            console.log("hello");
        }
    };




</script>
<?php

$this->view("includes/footer.content");
$this->View("includes/footer");

?>