<!-- Main content -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Change Password</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
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
                        <form method="POST">
                            <div class="card-header">
                                <strong>Change Password</strong>
                                <small>Page</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Old Password<span class="req">*</span></label>
                                            <input class="form-control" type="password" autocomplete="off"  name="old_password"  required/>
                                        </div>
                                    </div>
                                </div>
                                <!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">New Password<span class="req">*</span></label>
                                            <input class="form-control" minlength="6" type="password" autocomplete="off" name="new_password" required/>
                                        </div>
                                    </div>
                                </div>
                                <!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Confirm Password<span class="req">*</span></label>
                                            <input class="form-control" minlength="6" type="password" autocomplete="off" name="confirm_password" required/>    
                                        </div>
                                    </div>
                                </div>
                                <!--/.row-->
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
