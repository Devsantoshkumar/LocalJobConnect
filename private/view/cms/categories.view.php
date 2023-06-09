<?php $this->view("cms/cms_includes/header") ?>

<div class="container-fluid p-0 admin-wrapper">

       <?php $this->view("cms/cms_includes/sidebar") ?>

    <div class="content p-3 px-4 position-relative">

        <?php $this->view("cms/cms_includes/toolbar") ?>

        <!-- Users page content start -->

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 p-3 px-0">
            <div class="col my-2 my-md-0">
                <div class="card shadow-sm border-0 p-3 userCards">
                    <div class="userCardTitle d-flex align-items-center justify-content-between p-2">
                        <span class="fw-bold text-muted">Active</span>
                        <span class="material-symbols-outlined rounded p-2 fs-4">person</span>
                    </div>
                    <div class="card-body p-2">
                        <div class="card-title h4 fw-bold">232K</div>
                        <small class="text-muted">Total Users</small>
                    </div>
                </div>
            </div>
            <div class="col my-2 my-md-0">
                <div class="card shadow-sm border-0 p-3 userCards">
                    <div class="userCardTitle d-flex align-items-center justify-content-between p-2">
                        <span class="fw-bold text-muted">Administrations</span>
                        <span class="material-symbols-outlined rounded p-2 fs-4">person_add</span>
                    </div>
                    <div class="card-body p-2">
                        <div class="card-title h4 fw-bold">232K</div>
                        <small class="text-muted">Total Users</small>
                    </div>
                </div>
            </div>
            <div class="col my-2 my-md-0">
                <div class="card shadow-sm border-0 p-3 userCards">
                    <div class="userCardTitle d-flex align-items-center justify-content-between p-2">
                        <span class="fw-bold text-muted">Verified</span>
                        <span class="material-symbols-outlined rounded p-2 fs-4">verified_user</span>
                    </div>
                    <div class="card-body p-2">
                        <div class="card-title h4 fw-bold">232K</div>
                        <small class="text-muted">Total Users</small>
                    </div>
                </div>
            </div>
            <div class="col my-2 my-md-0">
                <div class="card shadow-sm border-0 p-3 userCards">
                    <div class="userCardTitle d-flex align-items-center justify-content-between p-2">
                        <span class="fw-bold text-muted">Non Verified</span>
                        <span class="material-symbols-outlined rounded p-2 fs-4">no_accounts</span>
                    </div>
                    <div class="card-body p-2">
                        <div class="card-title h4 fw-bold">232K</div>
                        <small class="text-muted">Total Users</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
            <div class="card border-0 shadow-sm p-2 my-3">
                    <div class="card-body overflow-auto">
                        <h5 class="d-flex align-items-center justify-content-between">
                            <span>Team Administration</span>
                            <a href="<?=BASE ?>categories/add" class="btn btn-sm btn-primary shadow-sm">Create</a>
                        </h5>
                        <?php if($categories_data): $id = 0; ?>
                        <table class="table table-bordered my-4">
                        <thead class="table-light">
                          <tr class="tableDataHeading">
                            <th class="p-3">S.No.</th>
                            <th class="p-3">Category Name</th>
                            <th class="p-3">Created By</th>
                            <th class="p-3">Status</th>
                            <th class="p-3">Action</th>
                          </tr>
                        </thead>
                          <tbody>
                            <?php foreach($categories_data as $row): $id++; ?>
                          <tr class="tableData">
                            <td><?=$id; ?></td>
                            <td>
                                <span class="d-block text-capitalize"><?=$row->category_name; ?></span>
                            </td>
                            <?php  
                               
                               $users = new User();
                               $createdBy = $row->created_by;
                               $userData = $users->where("users_id",  $createdBy);
                            
                            ?>
                            <td class="text-capitalize"><?=isset($userData[0]->firstname) ? $userData[0]->firstname : "Not Found"; ?> <?=isset($userData[0]->lastname) ? $userData[0]->lastname : ""; ?></td>
                            <?php
                            
                             if($row->category_status == 0){
                                 $status = "Inactive";
                                 $bgColor = "--transPink";
                                 $textColor = "--lightPink";
                             }else{
                                $status = "Active";
                                $bgColor = "--transGreen";
                                $textColor = "--darkGreen";
                             }
                            
                            ?>
                            <td><span class="badge" style="color: var(<?=$textColor; ?>); background-color: var(<?=$bgColor; ?>)"><?=$status; ?></span></td>
                            <td>
                                <a href="<?=BASE ?>categories/delete/<?=$row->categorys_id; ?>" class="mx-1 text-danger"><span class="material-symbols-outlined">delete</span></a>
                                <a href="<?=BASE ?>categories/edit/<?=$row->categorys_id; ?>" class="mx-1 text-success"><span class="material-symbols-outlined">border_color</span></a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                          </tbody>
                        </table>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- Users page content end -->

    </div>
    
</div>

<?php $this->view("cms/cms_includes/footer") ?>