<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Profile Picture</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h11> WELCOME TO IMAGE UPLOADING PAGE <h1>
<div class="container">
 
    <form action="<?php echo base_url('user_login/change')?>" method="post">
        
        <input type="hidden" name="txt_hidden" value="<?php echo $row->id; ?>"> 
        
    <div class="form-group">
      <label for="image">IMAGE</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>
      
       
    <input type="submit" class="btn btn-default" value="UPLOAD" name="upload">
  </form>
</div>
        
         <?php if(isset($_SESSION['success1']))   
    {?>
        <div class="alert alert-success"> <?php echo $_SESSION['success1']; ?> </div>
     <?php   
    } ?>

</body>
</html>
