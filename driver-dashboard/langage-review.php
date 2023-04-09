<?php
    include("../includes/db.php");
    include("../includes/driver_details.php");

    $get_langage_id = $_GET["id"];

    //item data from db
    //selecting data from db
    $d_sql = mysqli_query($conn, "SELECT * from langage where id = '$get_langage_id'");

    //looping through query
    $langage_result = mysqli_fetch_assoc($d_sql);
        $l_id = $langage_result["id"];
        $item = $langage_result["item_name"];
        $type = $langage_result["type"];
        $code = $langage_result["code"];
        $s_name = $langage_result["s_name"];
        $s_number = $langage_result["s_number"];
        $s_address = $langage_result["s_address"];
        $s_date = $langage_result["s_date"];
        $s_time = $langage_result["s_time"];
        $r_name = $langage_result["r_name"];
        $r_number = $langage_result["r_number"];
        $r_address = $langage_result["r_address"];
        $paid = $langage_result["paid"];
        $delivered = $langage_result["delivered"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Langage Review </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="username">
            <h1> <?php echo $driver_name?> </h1>
            <p><?php echo $driver_email?></p>
        </div>

        <div class="action">
            <!-- add driver btn -->

        </div>
    </nav>

    <!-- the web banner section main container -->
    <div class="main_container"><br>
        <div class="container_left">
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
            <div class="item-review">
                <div class="item-text">
                    <h2 class="r-h2"><?php echo $l_id?></h2>
                    <p class="r-p"><?php echo $item?></p>

                    <div class="item-card-conta">
                        <div class="content">
                            <h2> Paid </h2>
                            <p><?php echo $paid?></p>
                        </div>

                        <div class="content">
                            <h2> Picked </h2>
                            <p><?php echo $delivered?></p>
                        </div>

                        <div class="content">
                            <h2> Price  </h2>
                            <p> 1000 </p>
                        </div>
                    </div>
                </div>

                <div class="review-info">
                    <div class="info-card">
                        <h2> Sender Information </h2>
                        <p> Name: <span> <?php echo $s_name?> </span> </p>
                        <p> Code: <span><?php echo $code?></span> </p>
                        <p> Contact: <span><?php echo $s_number?></span> </p>
                        <p> Address: <span><?php echo $s_address?></span> </p>
                        <p> Date Sent: <span><?php echo $s_date?></span> </p>
                        <p> Time Sent: <span><?php echo $s_time?></span></p>
                    </div>

                    <div class="info-card" style="margin-left: 170px;">
                        <h2> Reciever Information </h2>
                        <p> Name: <span> <?php echo $r_name?> </span> </p>
                        <p> Code: <span><?php echo $code?></span> </p>
                        <p> Contact: <span><?php echo $r_number?></span> </p>
                        <p> Address: <span><?php echo $r_address?></span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>