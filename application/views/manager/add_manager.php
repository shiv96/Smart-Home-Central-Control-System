<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL_PATH . '/'; ?>css/trumbowyg.css" />
<!-- Main content -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Add Manager</li>
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
                                <strong>Add Manager </strong>
                                <small>Page</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Name<span class="req">*</span></label>
                                            <input type="text" name="name" class="form-control string_only" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="surname">Surname<span class="req">*</span></label>
                                            <input type="text" name="surname" class="form-control string_only" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="staff_no">Staff Number<span class="req">*</span></label>
                                            <input type="text" name="staff_no" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="login_id">Login Id<span class="req">*</span></label>
                                            <input type="text" name="login_id" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password">Password<span class="req">*</span></label>
                                            <input type="text" name="password" class="form-control" minlength="6" maxlength="20" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="image_file">Profile Pic</label>
                                            <input type="file" accept="image/*" class="form-control" name="profile_pic" />
                                            <label class="req">Only .jpg, .png, .gif and .jpeg image file allowed.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="image_file">Identity Proof</label>
                                            <input type="file" accept="image/*" class="form-control" name="identity_proof" />
                                            <label class="req">Only .jpg, .png, .gif and .jpeg image file allowed.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Status<span class="req">*</span></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1" checked="checked"> Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="0"> Inactive
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