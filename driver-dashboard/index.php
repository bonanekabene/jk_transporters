<?php
    include("../includes/driver_details.php");
    include("../includes/db.php");


    $sql_langages = mysqli_query($conn, "SELECT * from langage where driver_id = '$driver_id'");
    $langage_res = mysqli_num_rows($sql_langages);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Driver Dashboard </title>

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
            <h1><?php echo $driver_name?></h1>
            <p><?php echo $driver_email?></p>
        </div>

        <div class="action">
            <!-- notificatiuon section -->
        </div>
    </nav>

    <!-- the web banner section main container -->
    <div class="main_container"><br>
        <div class="container_left" id="sidebar">
            <ul>
                <li class="active"><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
                <li><a href="./truck.php"><i class="fas fa-gas-pump"></i> Truck </a></li>
                <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Add Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="../includes/log-driver.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right" style="margin-top: 100px">
            <div class="info_conta">
                <div class="info_content">
                    <div class="info_card-left">
                        <p> Phone </p>
                        <p><?php echo $driver_phone?></p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-phone"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p> Truck Plate </p>
                        <p><?php echo $driver_truck?></p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-truck"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p> Langage </p>
                        <p><?php echo $langage_res?></p>

                    </div>

                    <div class="info_icon">
                        <i class="fab fa-itch-io"></i>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/js.js"></script>
</body>

</html>