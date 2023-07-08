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
                            <span>Add New Country</span>
                            <a href="<?=BASE ?>countrys" class="btn btn-sm btn-danger shadow-sm">Cancel</a>
                        </h5>

                        <form method="POST" autocomplete="off">
                            <div class="row justify-content-md-center p-4">
                                <div class="col-12 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">Country Name</label>
                                        <input type="text" name="country_name" class="p-2 px-3 form-control w-100 py-3 shadow-none rounded" placeholder="Country name">
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['state_name']) ? $errors['state_name'] : ""; ?></small>
                                    </div>
                                </div>

                                <div class="col-12 my-4">
                                    <button class="btn btn-sm btn-primary shadow-sm">Add Country</button>
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