<?php
    include("../includes/db.php");
    include("../includes/driver-delete.php");
   // include("../includes/admin_id.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Drivers </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="username">
            <h1><?php echo $admin_name?></h1>
            <p><?php echo $admin_email?></p>
        </div>

        <div class="action">
            <!-- search bar section -->
            <div class="search">
                <input type="text" name="" id="" placeholder="coming soon" disabled>
                <i class="fas fa-paper-plane"> </i>
            </div>

            <!-- add driver btn -->
            <div class="btn">
                <a href="./drivers-form.php"> <button> Add Driver </button></a>
            </div>

            <!-- notificatiuon section -->
            <!-- <div class="notification">
                <div class="display-btn" id="notification">
                    <i class="fas fa-bell"></i>

                    <div class="noti_nu">
                        <p> 30 </p>
                    </div>
                </div>

                <div class="notifi_menu" id="notifi_menu">
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
                    </div>
                </div>
            </div> -->

            <div class="img">
                <img src="../uploaded/<?php echo $admin_img?>" alt="bonane kabene" srcset="" height="50">
            </div>
        </div>
    </nav>

    <!-- the web banner section main container -->
    <div class="main_container"><br>
        <div class="container_left">
            <ul>
                <li><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
                <li class="active"><a href="./drivers.php"><i class="fas fa-people-roof"> </i> Drivers </a></li>
                <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.php"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="fuel-conta">
                <div class="fuel-left driver-left">
                    <div class="fuel-text">
                        <h2> Driver's List </h2>
                        <p> List of our trusted drivers </p>
                        <p style="color: green; margin-top: 6px;"><?php echo $delete_success;?></p>
                    </div>
<hr>
                    <table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td> Driver Name </td>
                                    <td> Truck Plate </td>
                                    <td> Mobile </td>
                                    <td> Age  </td>
                                    <td> Licence No </td>
                                    <td> Experience </td>
                                    <td> Date Joined </td>
                                    <td> Address </td>
                                    <td> Status </td>
                                    <td> Disable </td>
                                    <td> Action </td>
                                </tr>
                            </thead>

                            <tbody> 
                                <?php  
                                    //
                                    //selecting data from db
                                    $d_sql = mysqli_query($conn, "SELECT * from drivers");

                                    //looping through query
                                    while($driver_result = mysqli_fetch_assoc($d_sql)){
                                        $d_id = $driver_result["id"];
                                        $d_name = $driver_result["name"];
                                        $truck = $driver_result["truck"];
                                        $d_mobile = $driver_result["mobile"];
                                        $d_age = $driver_result["age"];
                                        $d_licence = $driver_result["licence"];
                                        $d_experience = $driver_result["experience"];
                                        $d_joined = $driver_result["date"];
                                        $d_address = $driver_result["address"];
                                        $d_status = $driver_result["status"];

                                        echo"
                                            <tr class='tr'>
                                                <td> $d_name </td>
                                                <td> $truck </td>
                                                <td> $d_mobile </td>
                                                <td> $d_age  </td>
                                                <td> $d_licence </td>
                                                <td> $d_experience YRS </td>
                                                <td>  $d_joined </td>
                                                <td> $d_address </td>
                                                <td> $d_status </td>
                                                <td class='f-hide'><a href='../includes/disable_driver.php?id=$d_id'>  Disable </a></td>
                                                <th><a href='./drivers-update.php?id=$d_id' class='action-drivers'><i class='fas fa-pen-to-square'></i></a>     <a href='../includes/driver-delete.php?id=$d_id' class='action-drivers' style='margin-left: 9px;'><i class='fas fa-trash-can'></i></a></th>
                                            </tr> 
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>

            <br>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>