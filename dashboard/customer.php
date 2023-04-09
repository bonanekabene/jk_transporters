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
    <title> Jk Customers </title>

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
            <div class="search">
                <input type="text" name="" id="" placeholder="coming soon" disabled>
                <i class="fas fa-paper-plane"> </i>
            </div>

            <!-- add driver btn -->
            <div class="btn">
                <a href="./customer-form.php"> <button> + Customer </button></a>
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
                <li><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                <li><a href="./booking.php"><i class="fas fa-road"></i> Booking </a></li>
                <li><a href="./drivers.php"><i class="fas fa-people-roof"> </i> Drivers </a></li>
                <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li class="active"><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.php"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="./analytics.php"><i class="fas fa-chart-gantt"></i> Analytics </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="fuel-conta">
                <div class="fuel-left driver-left">
                    <div class="fuel-text">
                        <h2> Customer's List </h2>
                        <p> List of our trusted customers </p>
                    </div>
                    <hr>
                    <table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td> Name </td>
                                    <td> Mobile </td>
                                    <td> Email </td>
                                    <td> Age </td>
                                    <td> Address </td>
                                    <td> Date Joined </td>
                                    <td> Action </td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                //selecting data from db
                                $d_sql = mysqli_query($conn, "SELECT * from customers");

                                //looping through query
                                while ($langage_result = mysqli_fetch_assoc($d_sql)) {
                                    $l_id = $langage_result["id"];
                                    $name = $langage_result["name"];
                                    $email = $langage_result["email"];
                                    $mobile = $langage_result["mobile"];
                                    $age = $langage_result["age"];
                                    $address = $langage_result["address"];
                                    $date = $langage_result["date"];

                                    echo "
                                            <tr class='tr'>
                                                <td> $name </td>
                                                <td> $mobile</td>
                                                <td> $email </td>
                                                <td> $age </td>
                                                <td> $address  </td>
                                                <td> $date </td>
                                                <th><a href='./customer-update.php?id=$l_id' class='action-drivers'><i class='fas fa-pen-to-square'></i></a>     <a href='../includes/customer-delete.php?id=$l_id' class='action-drivers' style='margin-left: 9px;'><i class='fas fa-trash-can'></i></a></th>
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