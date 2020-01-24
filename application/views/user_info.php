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
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        /* The popup chat - hidden by default */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            min-height: 200px;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
            opacity: 1;
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
                        <a href="<?php echo base_url('userpanel/user_setting_view/' . $u->name) ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  PROFILE PICTURE</a>
                    </div>
                </nav>


                <!-- Overlay effect when opening sidebar on small screens -->
                <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

                <!-- !PAGE CONTENT! -->
                <div class="w3-main" style="margin-left:300px;margin-top:43px;">

                    <!-- Header -->
                    <hr>
                    <div>     
                        <h1>&nbsp;&nbsp; YOUR INFORMATION</h1>
                        <p>&nbsp;&nbsp; Your Info:-</p>


                        <span>  Welcome, <strong><?php echo $u->name; ?></strong></span><br>


                        <button class="open-button" onclick="openForm()">Chat</button>
                        <div class="chat-popup" id="myForm">
                            <?php
                            if ($fetch_msg->num_rows() > 0) {
                                foreach ($fetch_msg->result() as $u) {
                                    ?>
                                    <form id="myform" action="<?php echo base_url('userpanel/chatbox/' . $u->name) ?>" class="form-container" method="post">

                                        <?php
                                    }
                                }
                                ?> 
                                <h1>Chat</h1>

                                <label for="msg"><b>Message</b></label>
                                <textarea>
                                    <?php
                                    if ($fetch_msg->num_rows() > 0) {
                                        foreach ($fetch_msg->result() as $u) {
                                            ?>

                                            <?php echo $u->msg; ?>
                                            <?php
                                        }
                                    }
                                    ?> 

                                     <?php
                    }
                }
                ?>      
                                </textarea>
                                <br>
                                <input type="text" placeholder="Type here......" name="msg" value="" required="true">
                                <br>
                                <br><input type="submit" class="btn" name="submit" value="Send">
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>


                        </div>

                       

                <script type="text/javascript">
                    function openForm() {
                        document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                    }

                    $(document).ready(function () {
                        var form = $('#myform');

                        $('#submit').click(function () {

                            $.ajax({

                                url: form.attr("action"),
                                type: 'post',
                                data: $("#myform input").serialize(),

                                success: function (data)
                                {
                                    console.log(data);
                                }
                            });
                        });

                    });
                </script>

            </div>


        </div>


        <hr>



    </body>
</html>
