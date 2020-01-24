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





    <style>    
        html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


        .wrapper {
            text-align: center;
        }



        .center { 
            height: 400px;
            width: 400px;
            background: #BBDEFB;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -170px;
            margin-left: -200px;
        }

        .form{
            padding-top: 50px;
            padding-right: 30px;
            padding-bottom: 50px;
            padding-left: 30px;
        }

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

        .button2 {
            background-color: black; 
            color: white; 
        }

        .button2:hover {
            background-color: #F44336;
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
            padding: 16px 50px;
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


        .button2 {
            background-color: black; 
            color: white; 
        }

        .button2:hover {
            background-color: #e7e7e7;
            color: black;
        }

        .disabled {
            opacity: 0.6;
            cursor: allowed;
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

        table, th, td
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td
        {
            padding: 5px;
            text-align: left;
        }



    </style>


    <body class="w3-light-grey">

        <!-- Top container -->
        <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
            <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
            <?php
            if ($fetch_data->num_rows() > 0) {
                foreach ($fetch_data->result() as $u) {
                    ?> 
                    <a href="<?php echo base_url('userpanel/logout/' . $u->name); ?>"><span class="w3-bar-item w3-right">Logout</span></a>
                    <?php
                }
            }
            ?> 
        </div>

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
            <div class="w3-container w3-row">
                <div class="w3-col s4">
<?php
if ($fetch_data->num_rows() > 0) {
    foreach ($fetch_data->result() as $u) {
        ?>  
                            <img src="<?php echo base_url(); ?>/assets/images/<?php echo $u->dp ?>" class="w3-circle w3-margin-2px" style="width:70px; height:70px;">
                        </div>
                        <div class="w3-col s8 w3-bar">

                            <span>  Welcome, <strong><?php echo $u->name; ?></strong></span><br>


        <?php
    }
}
?> 
                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
                </div>
            </div>
            <hr>

            <div class="w3-bar-block">
                <a href="#section1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  USER INFORMATION</a>
                <a href="#section2" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  DEVICES</a>
                <a href="#section3" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  COMPLAIN</a>
                <a href="#section4" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  NOTIFICATION</a>
                <a href="#section5" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  CURRENT PLAN</a>
                <a href="#section6" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  PROFILE PICTURE</a>
            </div>
        </nav>


        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:300px;margin-top:43px;">

            <!-- Header -->
            <hr>
            <div id="section1">     
                <h1>&nbsp;&nbsp; YOUR INFORMATION</h1>
                <p>&nbsp;&nbsp; Your Info:-</p>

<?php
if ($fetch_data->num_rows() > 0) {
    foreach ($fetch_data->result() as $row) {
        ?>  
                        <span>  Welcome, <strong><?php echo $row->name; ?></strong></span><br>

                        <?php
                    }
                }
                ?> 

            </div>


            <hr>
            <div id="section2">
                <h1>DEVICES</h1>



                <div align="center" class="form">
<?php
if ($fetch_data->num_rows() > 0) {
    foreach ($fetch_data->result() as $u) {
        ?>  
                            <form action="<?php echo base_url('userpanel/userdevicecontrol/' . $u->name) ?>" method="post">

                                <table>
                                    <tr>
                            <?php
                            if ($u->status1 == "BULB ON") {
                                ?>
                                        <img id="myImage" src="<?php echo base_url() ?>/assets/images/<?php echo $u->device1_on ?>" style="width:150px;height:150px">
            <?php
        }
        ?>

                                        <?php
                                        if ($u->status1 == "BULB OFF") {
                                            ?>
                                        <img id="myImage" src="<?php echo base_url() ?>/assets/images/<?php echo $u->device1_off ?>" style="width:150px;height:150px">
                                            <?php
                                        }
                                        ?>




                                    &nbsp;&nbsp; <input type="submit" id="D1-on" onclick="document.getElementById('myImage').src = '<?php echo base_url() ?>/assets/images/<?php echo $u->device1_on; ?>'" class="button button1" name="led" value="BULB ON" ></input>

                                    <input type="submit" id="D1-off"  onclick="document.getElementById('myImage').src = '<?php echo base_url() ?>/assets/images/<?php echo $u->device1_off; ?>'" class="button button3" name="led" value="BULB OFF"></input>
                                    <br>
                                    <br>


                                    <?php
                                    if ($u->status2 == "FAN ON") {
                                        ?>
                                        <img id="myImage" src="<?php echo base_url() ?>/assets/images/<?php echo $u->device2_on ?>" style="width:170px;height:150px">
            <?php
        }
        ?>

        <?php
        if ($u->status2 == "FAN OFF") {
            ?>
                                        <img id="myImage" src="<?php echo base_url() ?>/assets/images/<?php echo $u->device2_off ?>" style="width:170px;height:150px">
            <?php
        }
        ?>          


                                    &nbsp;&nbsp; <input type="submit" id="D2-on" class="button button1" name="led" value="FAN ON" ></input>

                                    <input type="submit" id="D2-off" class="button button3" name="led" value="FAN OFF"></input>

                                    <br>
                                    </tr>     
                                </table>        


                            </form>


                            <br><br>

                        </div>

                        <script>
                            document.getElementById('D1-on').addEventListener('click', function () {
                                //var ip = document.getElementById('ip').value;
                                var ip = "<?php echo $u->ip ?>";
                                var on = "<?php echo $u->on ?>";
                                var url = "http://" + ip + "/D1/" + on;
                                var settings = {
                                    "async": true,
                                    "crossDomain": true,
                                    "url": url,
                                    "method": "GET",
                                    "headers": {
                                        "cache-control": "no-cache",
                                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'

                                    }
                                }
                                logger.textContent = "\nD1 Turned ON\n" + document.getElementById("logger").value;
                                $.ajax(settings).done(function (response) {
                                });
                            });

                            document.getElementById('D1-off').addEventListener('click', function () {
                                var ip = "<?php echo $u->ip ?>";
                                var off = "<?php echo $u->off ?>";
                                var url = "http://" + ip + "/D1/" + off;
                                var settings = {
                                    "async": true,
                                    "crossDomain": true,
                                    "url": url,
                                    "method": "GET",
                                    "headers": {
                                        "cache-control": "no-cache",
                                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'

                                    }
                                }
                                logger.textContent = "\nD1 Turned OFF\n" + document.getElementById("logger").value;
                                $.ajax(settings).done(function (response) {
                                });
                            });



                            document.getElementById('D2-on').addEventListener('click', function () {
                                //var ip = document.getElementById('ip').value;
                                var ip = "<?php echo $u->ip ?>";
                                var on = "<?php echo $u->on ?>";
                                var url = "http://" + ip + "/D2/" + on;
                                var settings = {
                                    "async": true,
                                    "crossDomain": true,
                                    "url": url,
                                    "method": "GET",
                                    "headers": {
                                        "cache-control": "no-cache",
                                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'

                                    }
                                }
                                logger.textContent = "\nD1 Turned ON\n" + document.getElementById("logger").value;
                                $.ajax(settings).done(function (response) {
                                });
                            });

                            document.getElementById('D2-off').addEventListener('click', function () {
                                //var ip = document.getElementById('ip').value;
                                var ip = "<?php echo $u->ip ?>";
                                var off = "<?php echo $u->on ?>";
                                var url = "http://" + ip + "/D2/" + off;
                                var settings = {
                                    "async": true,
                                    "crossDomain": true,
                                    "url": url,
                                    "method": "GET",
                                    "headers": {
                                        "cache-control": "no-cache",
                                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'

                                    }
                                }
                                logger.textContent = "\nD1 Turned ON\n" + document.getElementById("logger").value;
                                $.ajax(settings).done(function (response) {
                                });
                            });



                        </script>


        <?php
    }
}
?> 

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
<?php
if ($fetch_data->num_rows() > 0) {
    foreach ($fetch_data->result() as $u) {
        ?>  
                                    <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="<?php echo base_url('userpanel/user_complain/' . $u->name) ?>"  method="post" target="_blank">
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

                                        <input type="submit" name="user_complain" class="w3-button w3-right w3-theme" value='Send'>



                                    </form>
                                    <?php
                                }
                            }
                            ?> 
                        </div>
                    </div>
                </div>



            </div>


            <hr>
            <div id="section4">
                <h1>MESSAGE</h1>
<?php
if ($fetch_data->num_rows() > 0) {
    foreach ($fetch_data->result() as $u) {
        ?>  



                                    <?php
                                }
                            }
                            ?> 



                <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
            </div>


            <hr>
            <br>
            <br>


            <br>
            <br>

            <br>
            <br>
            <div id="section5">

                <?php
                if ($fetch_data->num_rows() > 0) {
                    foreach ($fetch_data->result() as $u) {
                        ?> 

                        <table align="center" style="width:50%">

                            <thead>
                                <tr>

                                    <th scope="col">Name:</th>
                                    <td><?php echo $u->name; ?></td>
                                </tr> 
                                <tr>
                                    <th scope="col">devices:</th>
                                    <td><?php echo $u->device; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">duration:</th>
                                    <td><?php echo $u->duration; ?> &nbsp;months</td>
                                </tr>
                                <tr>
                                    <th scope="col">Subscription details:</th>
                                    <td><?php echo $u->date; ?></td>
                                </tr>
                            </thead>
                        </table>

                        <br>
                        <br>
                        <div class="wrapper">
                            <form action="<?php echo base_url('userpanel/deactivate_plan/' . $u->name) ?>" method="post">
                                <input type="submit" class="button button3" value="Deactivate plan"></input>
                            </form>

                            <form action="<?php echo base_url('userpanel/request_reactivate_plan/' . $u->name) ?>" method="post">
                                <input type="submit" class="button button1" value="Request Reactivate plan"></input>
                            </form>
                        </div>


        <?php
    }
}
?>

            </div>

            <hr>
            <div id="section6">
                <h1>CHANGE PROFILE PICTURE</h1>

<?php
if ($fetch_data->num_rows() > 0) {
    foreach ($fetch_data->result() as $u) {
        ?>  
                        <p>

                        <div>
                            <img src="<?php echo base_url(); ?>/assets/images/<?php echo $row->dp ?>"  onclick="onClick(this)" class="w3-hover-opacity" style="width:200px; height:200px;"> 

                            </p>    
                        </div>

                        <form action="<?php echo base_url('userpanel/update/' . $u->id . '/' . $u->name); ?>" method="post">
                            <label>
                                <input type="file" name="dp" class="button button2 disabled"  placeholder="select picture" required="true">
                                <br>
                                <br>
                                <input type="submit" name="upload" class="button button2 disabled" value="UPLOAD">
                            </label>
                        </form>

                        <br>
                        <br>

                        <form action="<?php echo base_url('userpanel/update_password/' . $u->id . '/' . $u->name); ?>" method="post">
                            <label>
                                <input type="text" name="password" placeholder="enter password" required="true">
                                <br>
                                <input type="submit" name="update" class="button button2" value="update">
                            </label>
                        </form>   


        <?php
    }
}
?>            

            </div>





            <!-- Footer -->

            <!-- End page content -->
        </div>

        <script>

            function changeImage()
            {
                var image = document.getElementById('myImage');
                if (image.src.match("bulbon"))
                {
                    image.src = "<?php echo base_url() ?>/assets/images/bulboff.jpg";
                } else
                {
                    image.src = "<?php echo base_url() ?>/assets/images/bulbon.gif";
                }
            }


            function onClick(element)
            {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }



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


        </script>


    </body>
</html>
