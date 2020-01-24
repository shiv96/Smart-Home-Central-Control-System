<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL_PATH . '/'; ?>css/trumbowyg.css" />
<!-- Main content -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Edit Manager</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <?php if (isset($error_msg)) { ?>
                        <div class="alert alert-danger text-center">
                            <strong>
                                <?php echo $error_msg; ?>
                            </strong>
                        </div>
                    <?php } ?>
                    <?php if (isset($success_msg)) { ?>
                        <div class="alert alert-success text-center">
                            <strong>
                                <?php echo $success_msg; ?>
                            </strong>
                        </div>
                    <?php } ?>
                    <div class="card">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-header">
                                <strong>Edit Manager </strong>
                                <small>Page</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Name<span class="req">*</span></label>
                                            <input type="text" name="name" class="form-control string_only" value="<?php echo $name; ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="surname">Surname<span class="req">*</span></label>
                                            <input type="text" name="surname" class="form-control string_only" value="<?php echo $surname; ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="staff_no">Staff Number<span class="req">*</span></label>
                                            <input type="text" name="staff_no" class="form-control" value="<?php echo $staff_no; ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="login_id">Login Id<span class="req">*</span></label>
                                            <input type="text" name="login_id" class="form-control" value="<?php echo $login_id; ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password">Password<span class="req">*</span></label>
                                            <input type="text" name="password" class="form-control" minlength="6" maxlength="20" value="<?php echo base64_decode($password); ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="image_file">Profile Pic</label>
                                            <input type="file" accept="image/*" class="form-control" name="profile_pic" />
                                            <label class="req">Only .jpg, .png, .gif and .jpeg image file allowed.</label>
                                            <br/>
                                            <?php if(!empty($profile_pic)) { ?>
                                                <a class="req" href="<?php echo BASE_URL."/manager/remove_profile_pic/".$manager_id; ?>">Remove <i class="fa fa-times"></i></a> ||
                                                <a target="_blank" href="<?php echo UPLOAD_URL_PATH."manager_profile_pic/".$profile_pic; ?>">View >></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="image_file">Identity Proof</label>
                                            <input type="file" accept="image/*" class="form-control" name="identity_proof" />
                                            <label class="req">Only .jpg, .png, .gif and .jpeg image file allowed.</label>
                                            <br/>
                                            <?php if(!empty($identity_proof)) { ?>
                                                <a class="req" href="<?php echo BASE_URL."/manager/remove_identity_proof/".$manager_id; ?>">Remove <i class="fa fa-times"></i></a> ||
                                                <a target="_blank" href="<?php echo UPLOAD_URL_PATH."manager_identity_proof/".$identity_proof; ?>">View >></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Status<span class="req">*</span></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1" <?php
                                                if ($status == 1) {
                                                    echo "checked='checked'";
                                                }
                                                ?>> Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="0" <?php
                                                if ($status == 0) {
                                                    echo "checked='checked'";
                                                }
                                                ?>> Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-sm btn-primary" name="submit" value="SAVE"/>  
                            </div>
                            <!--/.row-->
                        </form>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
    <!-- /.conainer-fluid -->
</main>