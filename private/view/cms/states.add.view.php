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
                            <span>Add New State</span>
                            <a href="<?=BASE ?>states" class="btn btn-sm btn-danger shadow-sm">Cancel</a>
                        </h5>

                        <form method="POST" autocomplete="off">
                            <div class="row justify-content-md-center p-4">
                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">State Name</label>
                                        <input type="text" name="state_name" class="p-2 px-3 form-control w-100 py-3 shadow-none rounded" placeholder="State name">
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['state_name']) ? $errors['state_name'] : ""; ?></small>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 my-3">
                                    <div class="input-group d-flex flex-column position-relative">
                                        <label for="fname" class="form-label">State Name</label>
                                        <?php if($countryData): ?>
                                        <select name="country_id" class="form-control w-100 shadow-none py-3 rounded" id="countryId">
                                            <option value="">Select Country</option>
                                            <?php foreach($countryData as $crow): ?>
                                            <option value="<?=$crow->countrys_id; ?>"><?=$crow->country_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php endif; ?>
                                        <small class="text-danger position-absolute errorMsg"><?=isset($errors['country_id']) ? $errors['country_id'] : ""; ?></small>
                                    </div>
                                </div>

                                <div class="col-12 my-4">
                                    <button class="btn btn-sm btn-primary shadow-sm">Add State</button>
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