<hmtl>
    <head>
        <title>PLAN DETAILS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
        
        
        

        
            
        
        
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
        
        
    
   <h3>CRUD Operation using Codeigniter</h3><br />  
   
       
        
        
    <form  action="<?php echo base_url('user_login/updatedp') ?>" method="POST" ">
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>
                     
                     <th>IMAGE-ID</th>  
                     <th>IMAGE</th> 
                     <th>NAME</th>
                     <th>CHANGE</th>
                    
                       
                </tr>  
           <?php  
           if($row->num_rows() > 0)  
           {  
                foreach($row->result() as $row)  
                {  
           ?>  
                <tr>  
                     
                     <td><?php echo $row->id ?></td>  
                     <td>
                     <img src="<?php echo base_url(); ?>assets/images/<?php echo $row->image; ?>" class="img-circle" style="width:200px;height:200px "  alt="User Avatar">
                    </td>
                    <td><?php echo $row->key?></td>
                     <?php 
                     $btnid= $row->id;
                     ?>
                     <td>
                         <a href="<?php echo base_url('user_login/change_dp/'.$row->id); ?>" class="btn btn-info btn-lg">CHANGE</a>
                         <a href="<?php echo base_url('user_login/delete/'.$row->id); ?>" class="btn btn-danger btn-lg">DELETE</a>
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
          
          
          
          
          
          
      </div> 
        
        
        
        
        
        
        
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
                        url: '<?php echo base_url(). 'Email_controller/deleteAll'?>',
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
    
    </body>

</html>