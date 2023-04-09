<?php
    include("../includes/add_fuel.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Driver Fuel </title>

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
        </div>
    </nav>

    <!-- the web banner section main container -->
    <div class="main_container"><br>
        <div class="container_left" id="sidebar">
            <ul>
                <li><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
                <li><a href="./truck.php"><i class="fas fa-gas-pump"></i> Truck </a></li>
                <li class="active"><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Add Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="../includes/log-driver.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="driver-container">
                <div class="driver-left">
                    <form action="" method="post">
                         <h2 style="color: #EF4D5D; text-align: center"> Fuel Filling </h2>
                         <p style="color: green; margin-top: 6px; text-align: center"><?php echo $fuel_success;?></p>

                        <div class="form-left">
                            <div class="input-left">
                                <h2> Truck Plate </h2>
                                <input type="text" placeholder="Truck Plate UXA 567 H" name="t_plate">
                            </div>
    
                            <div class="input-left">
                                <h2> Truck Name </h2>
                                <input type="text" placeholder="Sino Truck ...." name="t_name">
                            </div>
    
                            <div class="input-left">
                                <h2> Driver Name </h2>
                                <input type="text" placeholder="Driver Name" name="d_name">
                            </div>
    
                            <div class="input-left">
                                <h2> Date Filled </h2>
                                <input type="date" name="date">
                            </div>
                        </div>
    
                        <!-- ********************************* form separation ***************************** -->
                        <div class="form-right">
                            <div class="input-right">
                                <h2> When On The Way </h2>
                                <select name="when" id="travel" style="width: 100%; padding: 10px;">
                                    <optgroup label="language">
                                        <option value="Yes"> Yes </option>
                                        <option value="No"> No </option>
                                    </optgroup>
                                </select>
                            </div>
    
                            <div class="input-right">
                                <h2> Quantity </h2>
                                <input type="number" placeholder="Number of litres" name="quantity">
                            </div>
    
                            <div class="input-right">
                                <h2> Ammount </h2>
                                <input type="number" placeholder="Ammount bought oil" name="ammount">
                            </div>
    
                            <div class="input-right">
                                <h2> Comment </h2>
                                <input type="text" placeholder="The oil got used up" name="comment">
                            </div>
    
                            <!-- <label for="travel"> choose Langage </label> -->
                    
    
                            <input type="submit" value="Add Driver" class="submit" name="fuel">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>