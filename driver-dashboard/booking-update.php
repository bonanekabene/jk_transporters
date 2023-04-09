<?php
   //include("../includes/add-book-driver.php");
   include("../includes/driver_details.php");
   include("../includes/driver_update_booking.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Driver Booking </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="toggle-btn">
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
            <li><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
            <li><a href="./truck.php"><i class="fas fa-gas-pump"></i> Truck </a></li>
            <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Add Fuel </a></li>
            <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
            <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
            <li><a href="../includes/log-driver.php"><i class="fa fa-sign-out"></i> Log out </a></li>
        </ul>
        </div>

        <div class="container_right">
            <div class="driver-container">
                <div class="driver-left">
                    
                    <form action="" method="post">
                        <div class="form-left">
                            <h2 style="text-align: center; margin: 10px"> Update booking   </h2>
                            <p style="color: green; margin-top: 6px; text-align: center"><?php echo $book_success;?></p>
    
                            <div class="input-left">
                                <h2> Name </h2>
                                <input type="text" placeholder="Name" name="name">
                            </div>
    
                            <div class="input-left">
                                <h2> Truck </h2>
                                <input type="text" placeholder="Truck Plate UXA 567 H" name="truck">
                            </div>
    
                            <div class="input-left">
                                <h2> Mobile </h2>
                                <input type="tel" placeholder="Number +256 ...." name="mobile">
                            </div>
    
                            <div class="input-left">
                                <h2> Date  </h2>
                                <input type="date" name="date" >
                            </div>
                        </div>

                        <input type="submit" value="Book Now" class="submit" name="book">
                    </form>
                </div>


            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>