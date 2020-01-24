<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMART HOMES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>

  
  
<style> 

.fa {
  padding: 15px;
  font-size: 20px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

.fa:hover {
    opacity: 1.0;
}

.fa-facebook {
  opacity: 0.6;
  filter: alpha(opacity=50);
  background: #000000;
  color: white;
}

.fa-google {
 opacity: 0.6;
  filter: alpha(opacity=50);
  background: #000000;
  color: white;
}

.fa-instagram {
  opacity: 0.6;
  filter: alpha(opacity=50);
  background: #000000;
  color: white;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

video {
  width: 100%;
  height: auto;
} 


button {
    background-color: Transparent;
    background-repeat:no-repeat;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}

.dropdown .dropdown-menu {
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;

    max-height: 0;
    display: block;
    overflow: hidden;
    opacity: 0;
}

.dropdown:hover .dropdown-menu {
    max-height: 200px;
    opacity: 1;
}


</style>
  
</head>


<body>




    
    
 <video width="400" autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
  <source src="<?php echo base_url();?>assets/images/bg1.mp4" type="video/mp4">
</video>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FUTURE HOMES</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th"></span> Facilities <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Plans</a></li>
            <li><a href="#">Devices</a></li>
            <li><a href="#">Technologis</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">House Verification</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
      </li>  
      
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-pencil"></span>About Us</a></li>
    
     <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th"></span> SIGN UP <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('login/index')?>"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
            <li><a href="<?php echo base_url('')?>" ><span class="glyphicon glyphicon-log-in"></span>User Login </a></li>
          </ul>
     </li>    
    </ul>
  </div>
</nav>    
    
     
<div class="content">
<footer>
    
        <div class="container">
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-google"> </a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
            <p></p>
            <p>Copyright © 2018 Smart Homes</p>
        </div>
   
</footer> 
</div>       
    
    
    
</body>
</html>