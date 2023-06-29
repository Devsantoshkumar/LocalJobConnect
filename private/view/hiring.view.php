<?php

$this->view("includes/header");
$this->view("includes/startsellingnav");


?>

<section class="hiring-section">
    <div class="hiring-banner">
        <img src="<?= ASSETS ?>image\hired.jpg" alt="image">
    </div>
    <div class="hiring-overlay d-flex align-items-center">
        <div class="hiring-overlay-text bg-tex mb-5 mt-5">
            <h1 class="bg-text text-white fw-bold mx-md-5 mx-3 mb-3 fs-1"><span class="heading-color">Confidence
                </span>meets Value</h1>
            <p class="text-white fw-bold heading-text mx-md-5 mx-3 fs-6">join us for a fulfilling career
            </p>
        </div>
    </div>
</section>

<section class="container my-5" style="min-height:100vh;">
    <h1 class="heading-text hiring-heading text-center fw-bold">
        Hire <span class="heading-color"> Employees</span>
    </h1>
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 pb-5 pt-3">
            <div class="card border-0 shadow-sm">
                <div class="row gap-0">
                         
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$this->view("includes/footer.content");
$this->view("includes/footer");

?>