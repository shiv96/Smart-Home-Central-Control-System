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
                    <a href="<?php echo base_url('userpanel/logout'); ?>"><span class="w3-bar-item w3-right">Logout</span></a>
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

            <?php
            if ($fetch_data->num_rows() > 0) {
                foreach ($fetch_data->result() as $u) {
                    ?>

                    <div class="w3-bar-block">
                        <a href="<?php echo base_url('userpanel/user_view/' . $u->name) ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  USER INFORMATION</a>
                        <a href="<?php echo base_url('userpanel/user_devices_view/' . $u->name) ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  DEVICES</a>
                        <a href="<?php echo base_url('userpanel/user_complain_view/' . $u->name) ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  COMPLAIN</a>
                        <a href="<?php echo base_url('userpanel/user_notification_view/' . $u->name) ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  NOTIFICATION</a>
                        <a href="<?php echo base_url('userpanel/user_current_plan_view/' . $u->name) ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  CURRENT PLAN</a>
                        <a href="<?php echo base_url('userpanel/user_setting_view/'. $u->name)?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  PROFILE PICTURE</a>
                    </div>
                </nav>


                <!-- Overlay effect when opening sidebar on small screens -->
                <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

                <!-- !PAGE CONTENT! -->
                <div class="w3-main" style="margin-left:300px;margin-top:43px;">

                    <!-- Header -->
                    <hr>
                    <div>     
                        

                        <?php
                    }
                }
                ?> 

            </div>

            <div>
                <h1>CHANGE PROFILE PICTURE</h1>

                <?php
                if ($fetch_data->num_rows() > 0) {
                    foreach ($fetch_data->result() as $u) {
                        ?>  
                        <p>

                        <div>
                            <img src="<?php echo base_url(); ?>/assets/images/<?php echo $u->dp ?>"  onclick="onClick(this)" class="w3-hover-opacity" style="width:200px; height:200px;"> 

                            </p>    
                        </div>

                        <form action="<?php echo base_url('userpanel/update/' . $u->id . '/' . $u->name); ?>" method="post">
                            <label>
                                <input type="file" name="dp" class="button button2"  placeholder="select picture" required="true">
                                <br>
                                <br>
                                <input type="submit" name="upload" class="button button2" value="UPLOAD">
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
        </div>


        <hr>



    </body>
</html>
