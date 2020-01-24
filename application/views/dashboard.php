<!-- Main content -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Installation Status</strong>                                        
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Site URL</th>
                                    <td><a target="_blank" href="<?php echo str_replace("admin/", "", site_url()); ?>"><?php echo str_replace("admin/", "", site_url()); ?></a></td>
                                </tr>
                                <tr>
                                    <th>Site Name</th>
                                    <td><?php echo WEBSITE_NAME; ?></td>
                                </tr>
                                <tr>
                                    <th>Admin E-mail</th>
                                    <td><?php echo $this->session->userdata('email'); ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!-- /.conainer-fluid -->
</main>
