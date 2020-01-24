<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>&nbsp;&nbsp;CHANGE about IMAGE</h2>
  <br>
  
  <?php $key="about";?>
  <form class="form-horizontal" action="<?php echo base_url('user_login/change_aboutimage/'.$key);?>" method="post">
    <div class="form-group">
       
      <div class="col-sm-10">
          <input type="file" class="form-control" id="img" placeholder="" name="img" required="true">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
         
            <input type="submit" name="upload" class="btn btn-default" value="Submit">
     
         </div>
    </div>
  </form>
</div>

</body>
</html>
8