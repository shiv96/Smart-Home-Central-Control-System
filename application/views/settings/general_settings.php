<!-- Main content -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">General Settings</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
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
                        <form method="POST" enctype='multipart/form-data'>
                            <div class="card-header">
                                <strong>General Settings</strong>
                                <small>Page</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Site name<span class="req">*</span></label>
                                            <input type="text" name="website_title" value="<?php echo $data['website_title']; ?>" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Logo <span class="req">*</span></label>
                                            <?php if (!empty($data['logo'])) { ?>
                                                <div class="col-md-3">
                                                    <img style="width: 250px;" src="<?php echo str_replace('admin/', '', BASE_URL . '/upload/') . $data['logo']; ?>">
                                                </div>
                                            <?php } ?>
                                            <input type="file" class="form-control" name="logo">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Favicon Icon <span class="req">*</span></label>
                                            <?php if (!empty($data['favicon'])) { ?>
                                                <div class="col-md-3">
                                                    <img src="<?php echo str_replace('admin/', '', BASE_URL . '/upload/') . $data['favicon']; ?>">
                                                </div>
                                            <?php } ?>
                                            <input type="file" class="form-control" name="favicon">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Copyright Text <span class="req">*</span></label>
                                            <textarea name="copyright_text" class="form-control" required><?php echo $data['copyright_text']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Email Receiver<span class="req">*</span></label>
                                            <input type="email" name="email_receiver" value="<?php echo $data['email_receiver']; ?>" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Email Sender<span class="req">*</span></label>
                                            <input type="email" name="email_sender" value="<?php echo $data['email_sender']; ?>" class="form-control" required/>
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