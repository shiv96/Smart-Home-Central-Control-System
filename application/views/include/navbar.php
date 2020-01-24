<?php
$page_nm1 = $this->uri->segment(1);
$page_nm2 = $this->uri->segment(2);
$admin_name = $this->session->userdata('name');
$admin_type = $this->session->userdata('admin_type');
?>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" target="_blank" href="<?php echo str_replace("admin/", "", site_url()); ?>"><?php echo WEBSITE_NAME; ?></a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown" style="padding-right: 10px;">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <b> <span class="d-md-down-none">Welcome <?php echo $admin_name; ?></span></b>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="<?php echo base_url('changepassword'); ?>"><i class="fa fa-key"></i> Change Password</a>
                    <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link <?php
                        if ($page_nm1 == 'dashboard') {
                            echo 'active';
                        }
                        ?>" href="<?php echo base_url('dashboard'); ?>"><i class="icon-speedometer"></i> Dashboard </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  <?php
                        if ($page_nm1 == 'manager') {
                            echo 'active';
                        }
                        ?>" href="<?php echo base_url('manager'); ?>"><i class="fa fa-user-circle-o"></i> Managers </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  <?php
                        if ($page_nm1 == 'worker') {
                            echo 'active';
                        }
                        ?>" href="<?php echo base_url('worker'); ?>"><i class="fa fa-users"></i> Workers </a>
                    </li>

                    <li class="nav-item nav-dropdown <?php
                    if ($page_nm1 == 'settings') {
                        echo 'open';
                    }
                    ?>">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa fa-gear"></i> Setting
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link <?php
                                if ($page_nm1 == 'settings/general_settings') {
                                    echo 'active';
                                }
                                ?>" href="<?php echo base_url('settings/general_settings'); ?>"><i class=""></i> General Setting</a>
                            </li>
                           <li class="nav-item">
                                <a class="nav-link <?php
                                if ($page_nm1 == 'settings/general_settings') {
                                    echo 'active';
                                }
                                ?>" href="<?php echo base_url('user_login/homeimage'); ?>"><i class=""></i> Change Home Image</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link <?php
                                if ($page_nm1 == 'settings/general_settings') {
                                    echo 'active';
                                }
                                ?>" href="<?php echo base_url('user_login/aboutimage'); ?>"><i class=""></i> Change About Image</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link <?php
                                if ($page_nm1 == 'settings/general_settings') {
                                    echo 'active';
                                }
                                ?>" href="<?php echo base_url('user_login/shivimage'); ?>"><i class=""></i> Change shiv Image</a>
                            </li>
                            
                        </ul>
                        
                    <li class="nav-item">
                        <a class="nav-link  <?php
                        if ($page_nm1 == 'message') {
                            echo 'active';
                        }
                        ?>" href="<?php echo base_url('user_message'); ?>"><i class="fa fa-users"></i> Messages </a>
                    </li> 
                    
                   
                        
                        
                        
                        
                        
                    </li>                   
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>