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
                        url: '<?= base_url("manager/delete_manager/"); ?>/' + arr,
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
                        url: '<?= base_url("manager/active_manager/"); ?>/' + arr,
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
                        url: '<?= base_url("manager/inactive_manager/"); ?>/' + arr,
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
        <li class="breadcrumb-item">Manage Manager</li>
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
                            <strong>Manage Manager List</strong>
                            <small>Page</small>
                            <div class="tbl-operation text-right well">
                                <a href="<?= base_url('manager/add_manager/') ?>" class="btn btn-info btn-sm text-left" >Add Manager</a>
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
                                        <th>Name</th>
                                        <th>Staff Number</th>
                                        <th>Login Id</th>
                                        <th>Email</th>
                                        <th>Profile Pic</th>
                                        <th>Identity Proof</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data as $val):
                                        $manager_id = $val['manager_id'];
                                        ?>
                                        <tr class="even" id="<?php echo $val['manager_id']; ?>">
                                            <td><input class="delete_chbox" type="checkbox" id="<?php echo $val['manager_id']; ?>" name="id" value="<?php echo $val['manager_id']; ?>"></td>
                                            <td><?php
                                                echo $no;
                                                $no++;
                                                ?></td>
                                            <td><?php echo $val['name'].' '.$val['surname']; ?></td>
                                            <td><?php echo $val['staff_no']; ?></td>
                                            <td><?php echo $val['login_id']; ?></td>
                                            <td><?php echo $val['email']; ?></td>
                                            <td><?php if(!empty($val['profile_pic'])) { ?>
                                                <a target="_blank" href="<?php echo UPLOAD_URL_PATH.'manager_profile_pic/'.$val['profile_pic']; ?>">View >></a>
                                                <?php } else {
                                                    echo "N/A";
                                                } ?>
                                            </td>
                                            <td><?php if(!empty($val['identity_proof'])) { ?>
                                                <a target="_blank" href="<?php echo UPLOAD_URL_PATH.'manager_identity_proof/'.$val['identity_proof']; ?>">View >></a>
                                                <?php } else {
                                                    echo "N/A";
                                                } ?>
                                            </td>
                                            <td id="status<?php echo $val['manager_id']; ?>"><?php
                                                if ($val['status'] == 1) {
                                                    echo '<span class="badge badge-success">Active</span>';
                                                } else {
                                                    echo '<span class="badge badge-danger">Inactive</span>';
                                                }
                                                ?>
                                            </td>
                                            <td><a href="<?= base_url('manager/edit_manager/' . $manager_id) ?>" class="edit btn btn-primary btn-sm">Edit</a></td>
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