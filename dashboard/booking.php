<?php
    include("../includes/db.php");
    include("../includes/admin_details.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Booking </title>

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

                <div class="search-result">
                    <table>
                        <thead>
                            <tr>
                                <td> Name </td>
                                <td> Truck </td>
                                <td> Date </td>
                                <td> Decline </td>
                                <td> Accept </td>
                                <td> Delete </td>
                                <td> View </td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td> bonane </td>
                                <td> UXV 345 A </td>
                                <td> 10/02/2023 </td>
                                <td class="color"><a href=""> Decline </a></td>
                                <td class="color"><a href=""> Accept </a></td>
                                <td class="color"><a href=""> Delete </a></td>
                                <td class="view"> <a href=""> View </a> </td>
                            </tr>    
                        
                        </tbody>
                        </table>
                </div>
            </div>

            <!-- add driver btn -->
            <div class="btn">
                <a href="./booking-form.php"> <button> Add Booking </button></a>
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
                <li class="active"><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
                <li><a href="./drivers.php"><i class="fas fa-people-roof"> </i> Drivers </a></li>
                <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.html"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="./analytics.php"><i class="fas fa-chart-gantt"></i> Analytics </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="booking_container">
                <div class="booking">
                    <div class="booking_header">
                        <p> Bookings </p>
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

                        <tbody class="overflow">
                            <?php
                                $d_sql = mysqli_query($conn, "SELECT * from booking");

                               //looping through query
                               while($booking_result = mysqli_fetch_assoc($d_sql)){
                                   $b_id = $booking_result["id"];
                                   $b_name = $booking_result["name"];
                                   $b_truck = $booking_result["truck"];
                                   $b_date = $booking_result["date"];
                                   $b_accepted = $booking_result["accepted"];
                                   $b_delivered = $booking_result["delivered"];

                                   echo"
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

                <div class="new_drivers" style="width: 40% !important">
                    <div class="driver">
                        <h2> Reports of Picked </h2>
                    </div>
<hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <td> Sender </td>
                                <td> Truck </td>
                                <td> Date </td>
                                <!-- <td> Amount </td> -->
                                <td> Status </td>
                            </tr>
                        </thead>

                        <tbody>                            
                            <?php
                                $d_sql = mysqli_query($conn, "SELECT * from booking where delivered = 'yes'");

                               //looping through query
                               while($booking_result = mysqli_fetch_assoc($d_sql)){
                                   $b_id = $booking_result["id"];
                                   $b_name = $booking_result["name"];
                                   $b_truck = $booking_result["truck"];
                                   $b_date = $booking_result["date"];
                                   $b_accepted = $booking_result["accepted"];
                                   $b_delivered = $booking_result["delivered"];

                                   echo"
                                   <tr class='tr'>
                                        <td> $b_name </td>
                                        <td> $b_truck </td>
                                        <td> $b_date </td>
                                        <td> $b_delivered</td>
                                   </tr> 
                                   ";
                               }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="container-booking">
                <div class="cleared">
                    <h2> Accepted Bookings </h2>
                </div>
<hr>
                <table class="table">
                    <thead>
                        <tr>
                            <td> Name </td>
                            <td> Truck </td>
                            <td> Date </td>
                            <td> Phone </td>
                            <td> Picked </td>
                            <td> Delete </td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                $d_sql = mysqli_query($conn, "SELECT * from booking where accepted = 'yes'");

                               //looping through query
                               while($book_a_result = mysqli_fetch_assoc($d_sql)){
                                   $b_id = $book_a_result["id"];
                                   $b_name = $book_a_result["name"];
                                   $b_truck = $book_a_result["name"];
                                   $b_phone = $book_a_result["phone"];
                                   $b_date = $book_a_result["truck"];
                                   $b_accepted = $book_a_result["accepted"];
                                   $b_delivered = $book_a_result["delivered"];

                                   echo"
                                   <tr class='tr'>
                                        <td> $b_name </td>
                                        <td> $b_truck </td>
                                        <td> $b_date </td>
                                        <td> $b_phone</td>
                                        <td class='color'><a href='../includes/delivered-booking.php?id=$b_id'> $b_delivered </a></td>
                                        <td class='color'><a href='../includes/delete_booking.php?id=$b_id'> Delete </a></td>
                                   </tr> 
                                   ";
                               }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br><br>

    <script src="./js/js.js"></script>
</body>

</html>