<!DOCTYPE html>
<html>
<title>SMART HOMES</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("<?php echo base_url(); ?>/assets/images/<?php echo $data['home']; ?>");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">SMART HOMES</a>
    <a href="" class="w3-bar-item w3-button">PLANS</a>
  
  

    
    <input type="text" class="w3-bar-item w3-button" placeholder="Search" name="search">
        <a href="" class="w3-bar-item w3-button"><button class="btn btn-default" type="submit">
         <i class="glyphicon glyphicon-search"></i></button>
       </a>  
    
    
    
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
        <a href="<?php echo base_url('user_login/updatedp')?>" class="w3-bar-item w3-button">SETTINGS</a>  
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
       
    </div>
    
    
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
   
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>“In order to be effective, be responsive. In order to be responsive, listen.” 
          “When we ground ourselves in the present moment, we spontaneously connect better with others.
          We become more responsive and less reactive, listening more deeply and speaking with greater clarity.”</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>"Every great dream begins with a dreamer. Always remember, you have within you the strength,
          the patience, and the passion to reach for the stars to change the world."</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>“There are three responses to a piece of design – yes, no, WOW! &nbsp; And Wow is the one to aim for.”</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>"Service to the MAN is Service to the GOD"</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Let Us Automate.</h3>
      <br>
      <br>
     
      <p>"The first rule of any technology used in a business is that automation applied to an efficient
          operation will magnify the efficiency.
          The second is that automation applied to an inefficient operation will magnify the inefficiency."
      </p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="<?php echo base_url();?>/assets/images/<?php echo $data['about']; ?>" alt="Buildings" width="700" height="200">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
          <img src="<?php echo base_url()?>assets/images/<?php echo $data['shiv']; ?>" alt="Shiv" style="width:100%">
        <div class="w3-container">
          <h3>Shiv Hansoti</h3>
          <p class="w3-opacity">Founder And CEO</p>
          <p class="w3-opacity">IOT Engineer</p>
          <p>"My armour was never a distraction nor a hobby but a coocon
              and now I am a changed man. You can take away my house
              all my trick and toys but one thing you can't take away
              <br>
              I am IRONMAN".&emsp;&emsp;</p>&emsp;&emsp;
         
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Saloni Goyal</h3>
          <p class="w3-opacity">Founder And CEO</p>
          <p class="w3-opacity">Fullstack Web Developer</p>
          <p>Actually, I am not the boss but my task is to create thing,
             design things and make everything look cooler.</p>
          <br>
          <br>
          <br>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="<?php echo base_url();?>assets/images/<?php echo $data['security']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Security camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="<?php echo base_url();?>assets/images/<?php echo $data['expertsys']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Expert System">
    </div>
    <div class="w3-col l3 m6">
        <img src="<?php echo base_url();?>assets/images/<?php echo $data['drone']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="DRONE">
    </div>
    <div class="w3-col l3 m6">
      <img src="<?php echo base_url();?>assets/images/<?php echo $data['smartdev']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="SMART DEVICES">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="<?php echo base_url();?>assets/images/<?php echo $data['smarthomes']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="HOME AUTOMATION">
    </div>
    <div class="w3-col l3 m6">
      <img src="<?php echo base_url();?>assets/images/<?php echo $data['dl']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="MACHINE LEARNING">
    </div>
    <div class="w3-col l3 m6">
      <img src="<?php echo base_url();?>assets/images/<?php echo $data['ml']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="DEEP LEARNING">
    </div>
    <div class="w3-col l3 m6">
      <img src="<?php echo base_url();?>assets/images/<?php echo $data['robot']; ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="ROBOTS">
    </div>
  </div>
</div>


<video width="100%" autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
  <source src="<?php echo base_url();?>assets/images/bg1.mp4" type="video/mp4">
</video>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-white w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Mainly we work on IOT based platforms and Web based Applications.</p>
     
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-cloud w3-margin-right"></i>Internet Of Things</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Development</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-globe w3-margin-right"></i>Artificial Intelligence</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Ahmedabad, INDIA</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 701-630-3510</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: smarthomes@gmail.com</p>
    <br>
    
     <?php 
         echo $this->session->flashdata('email_sent'); 
         echo form_open('/user_login/email'); 
      ?> 
    
    <?php if(isset($_SESSION['success']))   
    {?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
     <?php   
    } ?>
    
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
          <button class="w3-button w3-black" type="submit" name="query">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
          
         <?php 
         echo form_close(); 
         ?> 
      </p>
   
    <br>
    <!-- Image of location/map -->
    
    
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  </footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
