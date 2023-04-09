<?php
include("../includes/all_data.php");
include("../includes/admin_details.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Dashboard </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="username">
            <h1><?php echo $admin_name ?></h1>
            <p><?php echo $admin_email ?></p>
        </div>

        <div class="action">
            <!-- search bar section -->
            <!-- <div class="search">
                <input type="text" name="" id="" placeholder="search admin....">
                <i class="fas fa-paper-plane"> </i>
            </div> -->

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
                <img src="../uploaded/<?php echo $admin_img ?>" alt="bonane kabene" srcset="" height="50">
            </div>
        </div>
    </nav>

    <!-- the web banner section main container -->
    <div class="main_container"><br>
        <div class="container_left">
            <ul>
                <li class="active"><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
                <li><a href="./drivers.php"><i class="fas fa-people-roof"> </i> Drivers </a></li>
                <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.php"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="./analytics.php"><i class="fas fa-chart-gantt"></i> Analysis </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="info_conta">
                <div class="info_content">
                    <div class="info_card-left">
                        <p> <?php echo $number_of_drivers ?> </p>
                        <p> Drivers </p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-people-roof"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p><?php echo $booking_number; ?></p>
                        <p> Booking </p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-road"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p><?php echo $trucks_number ?></p>
                        <p> Trucks </p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-truck"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p><?php echo $langage_number ?></p>
                        <p> Langage </p>

                    </div>

                    <div class="info_icon">
                        <i class="fab fa-itch-io"></i>
                    </div>
                </div>
            </div>

            <!-- container right second section -->
            <div class="booking_container">
                <div class="booking">
                    <div class="booking_header">
                        <p> Recent Bookings </p>
                        <a href="./booking.php"> View All </a>
                    </div>
                    <hr>

                    <table class="table">
                        <thead>
                            <tr>
                                <td> Name </td>
                                <td> Truck </td>
                                <td> Date </td>
                                <td> Decline </td>
                                <td> Accept </td>
                                <td> Delete </td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $d_sql = mysqli_query($conn, "SELECT * from booking");

                            //looping through query
                            while ($booking_result = mysqli_fetch_assoc($d_sql)) {
                                $b_id = $booking_result["id"];
                                $b_name = $booking_result["name"];
                                $b_truck = $booking_result["truck"];
                                $b_date = $booking_result["date"];
                                $b_accepted = $booking_result["accepted"];
                                $b_delivered = $booking_result["delivered"];

                                echo "
                                   <tr class='tr'>
                                        <td> $b_name </td>
                                        <td> $b_truck </td>
                                        <td> $b_date </td>
                                        <td class='color'><a href=''> Decline </a></td>
                                        <td class='color'><a href='../includes/accepted_book.php?id=$b_id'> $b_accepted </a></td>
                                        <td class='color'><a href='../includes/delete_booking.php?id=$b_id'> Delete </a></td>
                                   </tr> 
                                   ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="new_drivers">
                    <div class="driver">
                        <h2> New Drivers </h2>
                        <a href="./drivers.php"> View All </a>
                    </div>
                    <hr>
                    <table>
                        <thead>
                            <tr>
                                <td> name </td>
                                <td> Status </td>
                                <td> Licence </td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            //
                            //selecting data from db
                            $d_sql = mysqli_query($conn, "SELECT * from drivers ORDER BY id desc LIMIT 3");

                            //looping through query
                            while ($driver_result = mysqli_fetch_assoc($d_sql)) {
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

                                echo "
                                    <tr class='tr'>
                                        <td> $d_name </td>
                                        <td> $d_status</td>
                                        <td> $d_licence </td>
                                    </tr>   
                                ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>