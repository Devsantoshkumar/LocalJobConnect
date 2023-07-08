<div class="sidebar">
        <div class="sidebar-content shadow-sm">
            <h5 class="fs-4 fw-bold p-4 dashboard-logo d-flex align-items-center gap-2 ">
                <span>
                   <img src="<?=ASSETS ?>image/user.png" alt="">
                </span>
                LJC
            </h5>
            <ul class="sidebar-menus px-3">
                
                <!-- dashboard tabs -->
                <li class="my-1"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">dashboard</span><span>Dashboard</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
               
                <!-- User tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">person</span><span>Users</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseUser" class="accordion-collapse ps-3 collapse" aria-labelledby="headingUser" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="<?=BASE ?>users" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="<?=BASE ?>users/add" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- Roles and permissions tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseRole" aria-expanded="true" aria-controls="collapseRole"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">folder_managed</span><span>Role & Permission</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseRole" class="accordion-collapse ps-3 collapse" aria-labelledby="headingRole" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- category tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseCate" aria-expanded="true" aria-controls="collapseCate"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">category</span><span>Category</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseCate" class="accordion-collapse ps-3 collapse" aria-labelledby="headingCate" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="<?=BASE ?>countrys" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Country List</a></li>
                        <li class=""><a href="<?=BASE ?>countrys/add" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Country</a></li>
                        <li class=""><a href="<?=BASE ?>states" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> State List</a></li>
                        <li class=""><a href="<?=BASE ?>states/add" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create List</a></li>
                        <li class=""><a href="<?=BASE ?>citys" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i>City List</a></li>
                        <li class=""><a href="<?=BASE ?>citys/add" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create City</a></li>
                    </ul>
                </div>

                <!-- post tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="true" aria-controls="collapsePost"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">post_add</span><span>Post</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapsePost" class="accordion-collapse ps-3 collapse" aria-labelledby="headingPost" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- meta data tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseMeta" aria-expanded="true" aria-controls="collapseMeta"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">query_stats</span><span>Meta Data</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseMeta" class="accordion-collapse ps-3 collapse" aria-labelledby="headingMeta" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- comments tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseComment" aria-expanded="true" aria-controls="collapseComment"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">comment</span><span>Comments</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseComment" class="accordion-collapse ps-3 collapse" aria-labelledby="headingComment" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- settings tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">settings</span><span>Settings</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseSettings" class="accordion-collapse ps-3 collapse" aria-labelledby="headingSettings" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- mail tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseMail" aria-expanded="true" aria-controls="collapseUser"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">mail</span><span>Mail</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseMail" class="accordion-collapse ps-3 collapse" aria-labelledby="headingMail" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2">List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2">View</a></li>
                    </ul>
                </div>
            </ul>
        </div>
</div>