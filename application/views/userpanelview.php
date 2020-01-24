<!DOCTYPE html>
<html>
<title>USER PANEL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>



<script type="text/javascript">
		document.write([
			"\<script src='",
			("https:" == document.location.protocol) ? "https://" : "http://",
			"ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js' type='text/javascript'>\<\/script>" 
		].join(''));
</script>


<style>    
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


  body
  {
      position: relative; 
  }
  
  #section1 {padding-top:50px;height:700px;}
  #section2 {padding-top:50px;height:700px;}
  #section3 {padding-top:50px;height:700px;}
  #section4 {padding-top:50px;height:700px;}
  #section5 {padding-top:50px;height:700px;}
  #section6 {padding-top:50px;height:700px;}
  
  
  


	.button {
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 16px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
		cursor: pointer;
	}

	.button1 {
		background-color: white; 
		color: black; 
	}

	.button1:hover {
		background-color: #4CAF50;
		color: white;
	}

	.button3 {
		background-color: white; 
		color: black; 
	}

	.button3:hover {
		background-color: #F44336;
		color: white;
	}

	.ip{
		background-color: #fffff; /* Green */
		border: none;
		color: black;
		padding: 16px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		-webkit-transition-duration: 0.4s; /* Safari */
	}

	.footer{
		background:#64B5F6;
		width:100%;
		height:100px;
		position:absolute;
		bottom:0;
		left:0;
	}
        
        


</style>


<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logout</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
        <img src="<?php echo base_url();?>/assets/images/ironman.jpg" class="w3-circle w3-margin-2px" style="width:70px; height:70px;">
    </div>
    <div class="w3-col s8 w3-bar">
        <span>  Welcome, <strong>User</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
 
  <div class="w3-bar-block">
    <a href="#section1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  OVERVIEW</a>
    <a href="https://ironpool.000webhostapp.com/app/led/devices.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  DEVICES</a>
    <a href="#section3" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  COMPLAIN</a>
    <a href="#section4" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  NOTIFICATION</a>
    <a href="#section5" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  HISTORY</a>
    <a href="#section6" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  SETTINGS</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
   
  <div id="section1">     
  <h1>&nbsp;&nbsp; OVERVIEW</h1>
  <p>&nbsp;&nbsp; Your Info:-</p>
  </div>
  
  
  <hr>
  <div id="section2" class="center">
  <h1>DEVICES</h1>
  
  
	<div align="center" class="form">
       <form action="" method="get">
                          <button type="button" id="D1-on" class="button button1" >LED  ON</button>
			  <button type="button" id="D1-off" class="button button3" >LED  OFF</button>
			  <br>
			  <button type="button" id="D2-on" class="button button1" >FAN  ON</button>
			  <button type="button" id="D2-off" class="button button3" >FAN  OFF</button>
			  <br>
			  <button type="button" id="D3-on" class="button button1" >BULB ON</button>
			  <button type="button" id="D3-off" class="button button3" >BULB OFF</button>
			  <br>
        </form>
		<br><br>
                
                 <div style='text-align: right;position:
                      fixed;z-index:9999999;bottom: 0; width: 100%;
                      cursor: pointer;line-height: 0;
                      display:block !important;'>
    <a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."
       target="_blank"
       href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img">
        <img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div>
	 </div>
  
  </div>
  
  
  <hr>
  <div id="section3">
  <h1>&nbsp;&nbsp; COMPLAIN</h1>
  
  
  
  
  <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or any complain.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Ahmedabad, INDIA</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 000000000</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  saloni24298@gmail.com</p>
    </div>
    <div class="w3-col m7">
        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="<?php echo base_url('user_login/user_complain')?>"  method="post" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
    
           <button type="submit" name="user_complain" class="w3-button w3-right w3-theme">Send</button>
          
            <?php 
            echo $this->session->flashdata('email_sent'); 
            ?> 
            <?php 
            echo $this->session->flashdata('success1'); 
            ?> 
            
      </form>
    </div>
  </div>
</div>

  
  
  </div>
  
  
  <hr>
  <div id="section4">
  <h1>MESSAGE</h1>
  <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
  </div>
  
  
  <hr>
  <div id="section5">
  <h1>HISTOREY</h1>
  <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
  </div>

   <hr>
  <div id="section6">
  <h1>SETTINGS</h1>
  <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
  </div>
  


  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}



   
		document.getElementById('D1-on').addEventListener('click', function() {
				var url = "https://ironpool.000webhostapp.com/api/led/update.php?id=1&status=on";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});
		
		document.getElementById('D1-off').addEventListener('click', function() {
				var url = "https://ironpool.000webhostapp.com/api/led/update.php?id=1&status=off";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});
		
		
		document.getElementById('D2-on').addEventListener('click', function() {
				var url = "https://monker.000webhostapp.com/api/led/update.php?id=2&status=on";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});
		
		document.getElementById('D2-off').addEventListener('click', function() {
				var url = "https://monker.000webhostapp.com/api/led/update.php?id=2&status=off";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});
		
		
		document.getElementById('D3-on').addEventListener('click', function() {
				var url = "https://monker.000webhostapp.com/api/led/update.php?id=3&status=on";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});
		
		document.getElementById('D3-off').addEventListener('click', function() {
				var url = "https://monker.000webhostapp.com/api/led/update.php?id=3&status=off";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});

		
	
</script>

</body>
</html>
