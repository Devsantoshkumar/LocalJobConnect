<!-- PROFILE PAGE  -->

<?php

$this->view("includes/header");
$this->view("profileNav");

?>


<!-- PROFILE MAIN SECTION START -->

<section class="container-fluid profile-nav">

</section>



<section class="container-fluid my-5">
    <div class="profile-section card border-0 p-3 bg-white shadow">
        <div class="profile-card">
            <div class="profile-img rounded-circle">
                <img src="assets\image\employee (4).jpg" class="image-fluid" alt="image">
            </div>
            <a href="#" class="text-decoration-none ms-2">
                <?= Auth::user('firstname') ?>
            </a>
            <span class="ms-5">N/A</span>
        </div>
        <hr>
        <div class="profile-card-content">
            <ul class="profile-card-list list-unstyled">
                <li>Inbox response rate </li>
                <li>Inbox response time </li>
                <li>Order response time </li>
                <li>Delivered on time </li>
                <li>Order completion </li>
            </ul>
        </div>
        <hr>
        <a href="#" class="text-decoration-none ms-2 text-dark">Total Earning <span class="ms-5">US$100</span></a>
    </div>
    <div class="profile-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos soluta sequi delectus, nam quod cum ad sunt vero
            libero assumenda deserunt minima incidunt saepe! Perferendis cupiditate debitis aliquid distinctio, tenetur
            quas necessitatibus veritatis iure quisquam reiciendis culpa praesentium est reprehenderit adipisci
            consequuntur autem dicta perspiciatis id! Similique, cupiditate! Autem saepe a dolore fugiat sint sed quos
            quas est deserunt! Vel, debitis! Dolores minus tempora maxime nulla libero ullam similique eveniet cumque
            amet tempore eos repellendus, doloribus adipisci minima laudantium officia autem eius reiciendis et.
            Perferendis eligendi fuga deserunt unde eum, dolores tempora ad qui atque animi recusandae placeat quod
            iusto.</p>
    </div>
</section>

<!-- PROFILE MAIN SECTION END -->


<?php

$this->view("includes/footer");

?>