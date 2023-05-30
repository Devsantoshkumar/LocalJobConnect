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
                            <a href="<?=BASE ?>users/add" class="btn btn-sm btn-primary shadow-sm">Create</a>
                        </h5>
                        <?php if(false): $id = 0; ?>
                        <table class="table table-bordered my-4">
                        <thead class="table-light">
                          <tr class="tableDataHeading">
                            <th class="p-3">S.No.</th>
                            <th class="p-3">User</th>
                            <th class="p-3">Role</th>
                            <th class="p-3">Status</th>
                            <th class="p-3">Action</th>
                          </tr>
                        </thead>
                          <tbody>
                            <?php foreach($team as $row): $id++; ?>
                          <tr class="tableData">
                            <td><?=$id; ?></td>
                            <td>
                                <span class="d-block"><?=$row->firstname; ?> <?=$row->lastname; ?></span>
                                <span class="d-block text-muted"><?=$row->email; ?></span>
                            </td>
                            <td><?=$row->rank; ?></td>
                            <?php
                            
                             if($row->email_varified == NULL){
                                 $status = "Non verified";
                                 $bgColor = "--transPink";
                                 $textColor = "--lightPink";
                             }else{
                                $status = "Verified";
                                $bgColor = "--transGreen";
                                $textColor = "--darkGreen";
                             }
                            
                            ?>
                            <td><span class="badge" style="color: var(<?=$textColor; ?>); background-color: var(<?=$bgColor; ?>)"><?=$status; ?></span></td>
                            <td>
                                <a href="<?=BASE ?>users/delete/<?=$row->users_id; ?>" class="mx-1 text-danger"><span class="material-symbols-outlined">delete</span></a>
                                <a href="<?=BASE ?>users/edit/<?=$row->users_id; ?>" class="mx-1 text-success"><span class="material-symbols-outlined">border_color</span></a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                          </tbody>
                        </table>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="card border-0 shadow-sm p-2 my-3">
                    <div class="card-body overflow-auto">
                        <h5 class="d-flex align-items-center justify-content-between">
                            <span>All users</span>
                            <a href="<?=BASE ?>users/add" class="btn btn-sm btn-primary shadow-sm">Create</a>
                        </h5>
                        <?php if(false): $id = 0; ?>
                        <table class="table table-bordered my-4">
                        <thead class="table-light">
                          <tr class="tableDataHeading">
                            <th class="p-3">S.No.</th>
                            <th class="p-3">User</th>
                            <th class="p-3">Role</th>
                            <th class="p-3">Status</th>
                            <th class="p-3">Action</th>
                          </tr>
                        </thead>
                          <tbody>
                            <?php foreach($rows as $row): $id++; ?>
                          <tr class="tableData">
                            <td><?=$id; ?></td>
                            <td>
                                <span class="d-block"><?=$row->firstname; ?> <?=$row->lastname; ?></span>
                                <span class="d-block text-muted"><?=$row->email; ?></span>
                            </td>
                            <td><?=$row->rank; ?></td>
                            <?php
                            
                             if($row->email_varified == NULL){
                                 $status = "Non verified";
                                 $bgColor = "--transPink";
                                 $textColor = "--lightPink";
                             }else{
                                $status = "Verified";
                                $bgColor = "--transGreen";
                                $textColor = "--darkGreen";
                             }
                            
                            ?>
                            <td><span class="badge" style="color: var(<?=$textColor; ?>); background-color: var(<?=$bgColor; ?>)"><?=$status; ?></span></td>
                            <td>
                                <a href="<?=BASE ?>users/delete/<?=$row->users_id; ?>" class="mx-1 text-danger"><span class="material-symbols-outlined">delete</span></a>
                                <a href="<?=BASE ?>users/edit/<?=$row->users_id; ?>" class="mx-1 text-success"><span class="material-symbols-outlined">border_color</span></a>
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