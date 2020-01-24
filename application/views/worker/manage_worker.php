<script type="text/javascript" src="<?php echo ASSETS_URL_PATH . '/'; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo ASSETS_URL_PATH . '/'; ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo ASSETS_URL_PATH . '/'; ?>js/jquery.dataTables_new.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL_PATH . '/'; ?>css/jquery.dataTables.css" />
<script>
    $(document).ready(function () {
        $("#delete_btn").click(function (event) {
            if (!confirm('Are you sure you want to delete this record?')) {
                e.preventDefault();
                return false;
            } else {
                var arr = new Array();
                $("input:checked").each(function () {
                    arr.push($(this).attr("id"));
                }); //each

                if (arr.length === 0) {
                    alert("Please choose any record for delete operation.");
                    return false;
                } else {
                    $.ajax({
                        url: '<?= base_url("worker/delete_worker/"); ?>/' + arr,
                        success: function (result) {
                            $("input:checked").each(function () {
                                var id = $(this).attr('id');
                                $('#' + id).fadeOut(800);
                            });
                        },
                        error: function () {
                            alert("Error while calling the server!");
                        }
                    });
                }
            }
        });
    });//click
</script>
<script>
    $(document).ready(function () {
        $("#active_btn").click(function (event) {
            if (!confirm('Are you sure you want to active this record?')) {
                e.preventDefault();
                return false;
            } else {
                var arr = new Array();
                $("input:checked").each(function () {
                    arr.push($(this).attr("id"));
                }); //each
                if (arr.length === 0) {
                    alert("Please choose any record for active operation.");
                    return false;
                } else {
                    $.ajax({
                        url: '<?= base_url("worker/active_worker/"); ?>/' + arr,
                        success: function (result) {
                            $("input:checked").each(function () {
                                var id = $(this).attr('id');
                                $('#' + 'status' + id).html('<span class="badge badge-success">Active</span>');
                                $('.delete_chbox').each(function () { //loop through each checkbox
                                    this.checked = false;  //select all checkboxes with class "checkbox1"               
                                });
                                $('#checkedAll').each(function () { //loop through each checkbox
                                    this.checked = false;  //select all checkboxes with class "checkbox1"               
                                });
                            });
                        },
                        error: function () {
                            alert("Error while calling the server!");
                        }
                    });
                }
            }
        });
    });//click
</script>
<script>
    $(document).ready(function () {
        $("#inactive_btn").click(function (event) {
            if (!confirm('Are you sure you want to inactive this record?')) {
                e.preventDefault();
                return false;
            } else {
                var arr = new Array();
                $("input:checked").each(function () {
                    arr.push($(this).attr("id"));
                }); //each
                if (arr.length === 0) {
                    alert("Please choose any record for inactive operation.");
                    return false;
                } else {
                    $.ajax({
                        url: '<?= base_url("worker/inactive_worker/"); ?>/' + arr,
                        success: function (result) {
                            $("input:checked").each(function () {
                                var id = $(this).attr('id');
                                $('#' + 'status' + id).html('<span class="badge badge-danger">Inactive</span>');
                                $('.delete_chbox').each(function () { //loop through each checkbox
                                    this.checked = false;  //select all checkboxes with class "checkbox1"               
                                });
                                $('#checkedAll').each(function () { //loop through each checkbox
                                    this.checked = false;  //select all checkboxes with class "checkbox1"               
                                });
                            });
                        },
                        error: function () {
                            alert("Error while calling the server!");
                        }
                    });
                }
            }
        });
    });//click
</script>
<script>
    $(document).ready(function () {
        $('#checkedAll').click(function (event) {  //on click 
            if (this.checked) { // check select status
                $('.delete_chbox').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            } else {
                $('.delete_chbox').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });
            }
        });

    });
</script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "scrollX": true
        });
    });
</script>
<!-- Main content -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Manage Worker</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12">
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
                        <div class="card-header">
                            <strong>Manage Worker List</strong>
                            <small>Page</small>
                            <div class="tbl-operation text-right well">
                                <a href="<?= base_url('worker/add_worker/') ?>" class="btn btn-info btn-sm text-left" >Add Worker</a>
                                <input type="button" id="active_btn" value="Active" class="btn btn-success btn-sm"  />
                                <input type="button" id="inactive_btn" value="Inactive" class="btn btn-warning btn-sm"  />
                                <input type="button" id="delete_btn" value="Delete" class="btn btn-danger btn-sm"  />
                            </div>
                        </div>
                        <div class="card-body">

                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Select All <br><input type="checkbox" id="checkedAll"></th>
                                        <th>No</th>
                                        <th>Manager Name</th>
                                        <th>Name</th>
                                        
                                        <th>Login Id</th>
                                        <th>device link</th>
                                        <th>Email</th>
                                       
                                        <th>Deactivate</th>
                                        <th>Activate</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data as $val):
                                        $worker_id = $val['worker_id'];
                                        ?>
                                        <tr class="even" id="<?php echo $val['worker_id']; ?>">
                                            <td><input class="delete_chbox" type="checkbox" id="<?php echo $val['worker_id']; ?>" name="id" value="<?php echo $val['worker_id']; ?>"></td>
                                            <td><?php
                                                echo $no;
                                                $no++;
                                                ?></td>
                                            <td><?php echo $val['manager']; ?></td>
                                            <td><?php echo $val['name'].' '.$val['surname']; ?></td>
                                            
                                            <td><?php echo $val['login_id']; ?></td>
                                            <td><a href="<?php echo base_url('userpanel/uname/'.$val['name'])?>"><?php echo $val['name']?>&nbsp;Devices</td>
                                            <td><?php echo $val['email']; ?></td>
                                             <td><a href="<?= base_url('userpanel/reactivate_previous_plan/'.$val['name']) ?>" class="edit btn btn-primary btn-sm">Reactivate Plan</a></td>
                                    
                                            <td><a href="<?php echo base_url('userpanel/deactivate/'.$val['name'])?>"><button type="button" class="btn btn-danger">Deactivate Sevice</button></a></td>
                                            <td><a href="<?php echo base_url('userpanel/activate/'.$val['name'])?>"><button type="button" class="btn btn-success">Activate Sevice</button></a></td>
                                            <td><a href="<?= base_url('worker/edit_worker/' . $worker_id) ?>" class="edit btn btn-primary btn-sm">Edit</a></td>
                                        
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>