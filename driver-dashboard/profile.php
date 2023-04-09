<?php
   include("../includes/driver_profile_update.php")

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Driver Profile </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">
</head>

<body>
    <nav>
        <div class="toggle-btn" >
            <i class="fas fa-bars" id="btn"></i>
        </div>

        
        <div class="username">
            <h1> <?php echo $driver_name?> </h1>
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
            <li class="active"><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
            <li><a href="../includes/log-driver.php"><i class="fa fa-sign-out"></i> Log out </a></li>
        </ul>
        </div>

        <div class="container_right">
            <div class="driver-container">
                <div class="driver-left">
                    <form action="" method="post">
                        <h2 style="color: #EF4D5D; text-align: center"> Update Profile  </h2>
                        <p style="color: green; text-align: center"><?php echo $profile_success?></p>
                        <div class="form-left">
                            <div class="input-left">
                                <h2> Name </h2>
                                <input type="text" placeholder="Name" name="username">
                            </div>

                            <div class="input-left">
                                <h2> Email </h2>
                                <input type="Email" placeholder="Email" name="useremail">
                            </div>

                            <div class="input-left">
                                <h2> Password </h2>
                                <input type="Password" placeholder="Password" name="userpassword">
                            </div>
    
                            <div class="input-left">
                                <h2> Truck Plate </h2>
                                <input type="text" placeholder="Truck Plate UXA 567 H" name="truck">
                            </div>
    
                            <div class="input-left">
                                <h2> Mobile </h2>
                                <input type="tel" placeholder="Number +256 ...." name="mobile">
                            </div>
    
                            <div class="input-left">
                                <h2> Age </h2>
                                <input type="number" placeholder="Age " name="age">
                            </div>
                        </div>
    
                        <!-- ********************************* form separation ***************************** -->
                        <div class="form-right">
                            <div class="input-right">
                                <h2> Licence Number </h2>
                                <input type="text" placeholder="Licence number RGG 56675 ......" name="licence">
                            </div>
    
                            <div class="input-right">
                                <h2> Years of Experience </h2>
                                <input type="number" placeholder="Years of Experience" name="experience ">
                            </div>
    
    
                            <div class="input-right">
                                <h2> Address </h2>
                                <input type="text" placeholder="Address Bulenga" name="address">
                            </div>
    
                            <!-- <label for="travel"> choose Langage </label> -->
                            <!-- <select name="" id="travel" style="width: 300px;">
                                <optgroup label="language">
                                    <option value="php"> php </option>
                                    <option value="html"> html </option>
                                </optgroup>
                            </select> -->
    
                            <input type="submit" value="Add Driver" class="submit" name="profile">
                        </div>
                    </form>
                </div>

                <!-- <div class="driver-right img-bonane">
                    <img src="../assests/imgs/bonane.jpg" alt="" srcset="">
                </div> -->
            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>