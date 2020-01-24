<hmtl>
    <head>
        <title>COMPLAIN DETAILS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
        <script type="text/javascript" src="<?php echo ASSETS_URL_PATH . '/'; ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo ASSETS_URL_PATH . '/'; ?>js/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo ASSETS_URL_PATH . '/'; ?>js/jquery.dataTables_new.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL_PATH . '/'; ?>css/jquery.dataTables.css" />
</head>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "scrollX": true
        });
    });
</script>
<!-- Main content -->
<main class="main">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Manage Worker</li>
    </ol>
    
    <!-- Breadcrumb -->
   
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12">
                   <?php
		if($this->session->flashdata('success_msg')){
                    ?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
                <?php		
                    }
                ?>


            <?php
		if($this->session->flashdata('error_msg')){
            ?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
            <?php		
		}
            ?>
                    <form  action="<?php echo base_url('user_message/index') ?>" method="POST">
                    <div class="card">
           
                        <div class="card-body">

                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="50px"><input type="checkbox" id="master"></th>
                                        <th>CUSTOMER-ID</th>  
                                        <th>NAME</th> 
                                        <th>EMAIL-ID</th>
                                        <th>SUBJECT</th> 
                                        <th>MESSAGE</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
           ?>  
                <tr>  
                     <td><input type="checkbox" class="sub_chk" data-id="<?php echo $row->cid; ?>"></td>
                     <td><?php echo $row->cid;?></td>  
                     <td><?php echo $row->name; ?></td> 
                     <td><?php echo $row->email; ?></td>
                     <td><?php echo $row->subject; ?></td>
                     <td><?php echo $row->msg; ?></td>
                     <?php 
                     $btnid= $row->cid;
                     ?>  
                     <td>
                         <a href="<?php echo base_url('user_message/delete_complain/'.$row->cid); ?>" class="btn btn-info btn-lg">SOLVED </a>
                     </td> 
                </tr>  
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?>  
                            </table>
                            
                            
                            <button style="margin-bottom: 10px" class="btn btn-danger btn-lg delete_all">Delete All Selected</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
 
        
        
        
        
        
        
        
<script type="text/javascript">
    $(document).ready(function () {
 
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });
 
        $('.delete_all').on('click', function(e) {
 
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  
 
            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  
 
                var check = confirm("Are you sure you want to delete this row?");  
                if(check == true){  
 
                    var join_selected_values = allVals.join(","); 
 
                    $.ajax({
                        url: '<?php echo base_url(). 'user_message/deleteAll'?>',
                        type: 'POST',
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                          console.log(data);
                          $(".sub_chk:checked").each(function() {  
                              $(this).parents("tr").remove();
                          });
                          alert("Item Deleted successfully.");
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
 
                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });
    });
</script>
        
        
        
    
    </form>
    
    

</html>