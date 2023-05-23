<?php $this->view("cms/cms_includes/header") ?>

<div class="container-fluid p-0 admin-wrapper">

       <?php $this->view("cms/cms_includes/sidebar") ?>

    <div class="content p-3 px-4 position-relative">

        <?php $this->view("cms/cms_includes/toolbar") ?>

        <!-- Users page content start -->

        <div class="row">
            <div class="col">
                <div class="card border-0 shadow-sm p-2 my-3">
                    <div class="card-body">
                        <h5 class="d-flex border-bottom py-3 align-items-center justify-content-between">
                            <span>Add New User</span>
                            <a href="<?=BASE ?>users" class="btn btn-sm btn-primary shadow-sm">Users List</a>
                        </h5>

                        <form method="POST">
                            <div class="row justify-content-md-center p-4">
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">First name</label>
                                        <input type="text" name="firstname" class="p-2 px-3 form-control w-100 shadow-none rounded" placeholder="First name">
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['firstname']) ? $errors['firstname'] : ""; ?></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">Last name</label>
                                        <input type="text" name="lastname" class="p-2 px-3 form-control w-100 shadow-none rounded" placeholder="Last name">
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['lastname']) ? $errors['lastname'] : ""; ?></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">Email address</label>
                                        <input type="text" name="email" class="p-2 px-3 form-control w-100 shadow-none rounded" placeholder="Email address">
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['email']) ? $errors['email'] : ""; ?></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">Select Role</label>
                                        <select name="rank" id="" class="form-control w-100 shadow-none rounded">
                                            <option value="">--select role--</option>
                                            <option value="admin">Admin</option>
                                            <option value="creator">Creator</option>
                                            <option value="normal">Normal</option>
                                        </select>
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['rank']) ? $errors['rank'] : ""; ?></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">Password</label>
                                        <input type="password" name="password" class="p-2 px-3 form-control w-100 shadow-none rounded" placeholder="Password">
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['password']) ? $errors['password'] : ""; ?></small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">Confirm password</label>
                                        <input type="password" name="cpassword" class="p-2 px-3 form-control w-100 shadow-none rounded" placeholder="Confirm password">
                                    </div>
                                </div>

                                <div class="col-12 my-4">
                                    <button class="btn btn-sm btn-primary shadow-sm">Create</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- Users page content end -->

    </div>
    
</div>

<?php $this->view("cms/cms_includes/footer") ?>