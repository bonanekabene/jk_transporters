<?php
    include("../includes/driver-truck-data.php");

    $sql687 = mysqli_query($conn, "SELECT * FROM fuel where driver_id = $driver_id");
    $fuel_result = mysqli_fetch_assoc($sql687);

    $fuel_price = $fuel_result["amount"];
    $fuel_litres =$fuel_result["quantity"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Driver Truck </title>

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
            <div class="img">
                <img src="../uploaded/<?php echo $driver_img?>" alt="bonane kabene" srcset="" height="50">
            </div>
        </div>
    </nav>

    <!-- the web banner section main container -->
    <div class="main_container"><br>
        <div class="container_left" id="sidebar">
        <ul>
            <li><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
            <li class="active"><a href="./truck.php"><i class="fas fa-gas-pump"></i> Truck </a></li>
            <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Add Fuel </a></li>
            <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
            <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
            <li><a href="../includes/log-driver.php"><i class="fa fa-sign-out"></i> Log out </a></li>
        </ul>
        </div>

        <div class="container_right">
            <div class="driver-container bonanekk6">
                <div class="driver-left bonanek">
                    <div class="bonane">
                        <h2> Truck Information</h2>

                        <div class="plate">
                            <p> Number Plate: <span><?php echo $t_plate?></span></p>
                            <p> Truck: <span><?php echo $t_name?></span></p>
                            <p> Model: <span><?php echo $mode?></span></p>
                            <p> Stage: <span><?php echo $stage?></span></p>
                            <p> Route: <span><?php echo $route?></span></p>
                            <p> Engine Number: <span><?php echo $engine?></span></p>
                        </div>
                    </div>
                </div>

                <div class="driver-right bonanekk">
                    <div class="fuel-used">
                        <h2 class="h22"> Fuel USed </h2>

                        <div class="fuel-used-co">
                            <div class="litre-fuel">
                                <h2> <?php echo $fuel_litres?></h2>
                                <p> Litres </p>
                            </div>

                            <div class="litre-fuel">
                                <h2><?php echo $fuel_price?></h2>
                                <p> UGX </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>