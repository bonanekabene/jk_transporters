<?php
    include("../includes/admin_details.php");

    $sql687 = mysqli_query($conn, "SELECT * FROM fuel");
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
    <title> Jk Fuel </title>

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
            </div>

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
                <li><a href="./drivers.php"><i class="fas fa-people-roof"> </i> Drivers </a></li>
                <li class="active"><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.php"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="./analytics.php"><i class="fas fa-chart-gantt"></i> Analysis </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="fuel-conta">
                <div class="fuel-left">
                    <div class="fuel-text">
                        <h2> Fuel Consumed </h2>
                        <p> The Fuel consumed by trucks </p>
                    </div>
<hr>
                    <table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td> N-Plate </td>
                                    <td> T-Name </td>
                                    <td> Driver </td>
                                    <td> Fill Date </td>
                                    <td> When </td>
                                    <td> Quantity </td>
                                    <td> Ammount </td>
                                    <td> Comment </td>
                                    <td> Hide </td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $d_sql = mysqli_query($conn, "SELECT * from fuel");

                               //looping through query
                               while($booking_result = mysqli_fetch_assoc($d_sql)){
                                   $fuel_id = $booking_result["id"];
                                   $t_plate = $booking_result["t_plate"];
                                   $t_name = $booking_result["t_name"];
                                   $d_name = $booking_result["d_name"];
                                   $date = $booking_result["d_filled"];
                                   $when = $booking_result["way"];
                                   $quantity = $booking_result["quantity"];
                                   $ammount = $booking_result["amount"];
                                   $comment = $booking_result["comment"];

                                   echo"
                                   <tr class='tr'>
                                        <td> $t_plate </td>
                                        <td> $t_name </td>
                                        <td> $d_name</td>
                                        <td> $date </td>
                                        <td> $when </td>
                                        <td> $quantity </td>
                                        <td> $ammount </td>
                                        <td> $comment </td>
                                        <td class='f-hide'><a href='../includes/delete_fuel.php?id=$fuel_id'> Hide </a></td>
                                   </tr> 
                                   ";
                               }
                            ?>
                            </tbody>
                        </table>
                    </table>
                </div>
<br>
                <div class="fuel-right">
                    <div class="fuel-r-text">
                        <h2> Fuel Expenses </h2>
                        <p> Litres bought and ammount </p>
                    </div>

                    <div class="expenses">
                        <div class="expense-card">
                            <h2> Litres </h2>
                            <p><?php echo $fuel_litres ?></p>
                        </div>

                        <div class="expense-card" >
                            <h2> Amount </h2>
                            <p><span> UGX </span> <?php echo $fuel_price ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>