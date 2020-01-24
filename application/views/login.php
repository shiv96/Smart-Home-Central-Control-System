<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?php echo WEBSITE_FAVICON_IMAGE; ?>"/> 
        
        <title><?php echo WEBSITE_NAME; ?> | Admin</title>
        <!-- Icons -->
        <link href="<?php echo ASSETS_URL_PATH . '/'; ?>vendors/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo ASSETS_URL_PATH . '/'; ?>vendors/css/simple-line-icons.min.css" rel="stylesheet">
        <!-- Main styles for this application -->
        <link href="<?php echo ASSETS_URL_PATH . '/'; ?>css/style.css" rel="stylesheet">
        <!-- Styles required by this views -->
    </head>
    <body class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <a href="<?php echo base_url(); ?>"> <img class="img-rounded" style="width: 250px;padding-bottom: 20px;" src="<?php echo WEBSITE_LOGO_IMAGE; ?>" alt="Logit"></a>
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
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-group mb-0">
                        <div class="card p-4">
                            <div class="card-body">
                                <form method="POST">
                                    <h3>Login</h3>
                                    <p class="text-muted">Please sign in to your account</p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                        <input type="email" name="email" value="<?php
                                        if (isset($_POST['email'])) {
                                            echo $_POST['email'];
                                        }
                                        ?>" autocomplete="off" class="form-control" placeholder="Email" required/>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                                        <input type="password" name="password" autocomplete="off" class="form-control" placeholder="Password" required/>
                                    </div>
                                    <div class="input-group mb-0">
                                        <input type="submit" class="btn btn-primary px-4" name="submit"  value="Login"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 text-right">
                                <a href="<?php echo base_url('forgot_password') ?>" class="btn btn-link px-0">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="ml-auto"><span class="tt-footer__copyright developed">Designed & Developed With <i class="fa fa-heart" style="color: #cf2027;" aria-hidden="true"></i> By <a href="http://www.vethics.com/" target="_blank"><img src="<?php echo UPLOAD_URL_PATH.'vethics-header-logo_blue.svg'; ?>" alt="vethics" /></a></span></div>
        </div>
        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #fff;
                color: #000;
                text-align: center;
            }
            span.tt-footer__copyright.developed {
                font-size: 16px;
                display: inline-block;
                padding:    0;
            }
            span.tt-footer__copyright.developed i {
                margin: 0 4px;
            }
        </style>
    </body>
</html>
