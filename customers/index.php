<?php
 include("../includes/customer_data.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer Dashboard </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="toggle-btn" >
            <i class="fas fa-bars" id="btn"></i>
        </div>

        <div class="username">
            <h1><?php echo $customer_name?></h1>
            <p><?php echo $customer_email?></p>
        </div>

        <div class="action">
            <!-- notificatiuon section -->
            <!-- <div class="notification">
                <i class="fas fa-bell"></i>

                <div class="noti_nu">
                    <p> 30 </p>
                </div> -->

                <!-- <div class="notifi_menu">
                    <p class="p"> Recent notification </p>

                    <div class="notifi_data">
                        <div class="data">
                            <p> bonane </p>
                            <p> Booked </p>
                            <p> UVX 568 H </p>
                            <p> Paid </p>
                            <a href="">
                                <p> View </p>
                            </a>
                            <a href=""><i class="fas fa-xmark"></i></a>
                        </div>

                        <div class="data">
                            <p> bonane </p>
                            <p> Booked </p>
                            <p> UVX 568 H </p>
                            <p> Paid </p>
                            <a href="">
                                <p> View </p>
                            </a>
                            <a href=""><i class="fas fa-xmark"></i></a>
                        </div>

                        <div class="data">
                            <p> bonane </p>
                            <p> Booked </p>
                            <p> UVX 568 H </p>
                            <p> Paid </p>
                            <a href="">
                                <p> View </p>
                            </a>
                            <a href=""><i class="fas fa-xmark"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="img">
                <img src="../assests/imgs/default.png" alt="bonane kabene" srcset="" height="50">
            </div> -->
        </div>
    </nav>

    <!-- the web banner section main container -->
    <div class="main_container"><br>
        <div class="container_left" id="sidebar">
            <ul>
                <li class="active"><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./profile.html"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="../includes/cust_log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right" style="margin-top: 100px">
            <div class="info_conta">
                <div class="info_content">
                    <div class="info_card-left">
                        <p> Booking </p>
                        <p> 21 </p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-road"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p> Delivred </p>
                        <p> 789 </p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-truck"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p> Contact Us </p>
                        <a href="mailto:bonanekabene67@gmail.com" style="text-decoration: none;"><p> Email </p></a>

                    </div>

                    <div class="info_icon">
                        <a href=""><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/js.js"></script>
</body>

</html>