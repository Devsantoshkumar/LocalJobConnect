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
                            <span>Add New Category</span>
                            <a href="<?=BASE ?>users" class="btn btn-sm btn-primary shadow-sm">Category</a>
                        </h5>

                        <form method="POST">
                            <div class="row justify-content-md-center p-4">
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">Job Category</label>
                                        <input type="text" name="firstname" class="p-2 px-3 form-control w-100 shadow-none rounded" placeholder="Category name">
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['firstname']) ? $errors['firstname'] : ""; ?></small>
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-center my-4">
                                    <button class="btn btn-sm btn-primary shadow-sm">Add Category</button>
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