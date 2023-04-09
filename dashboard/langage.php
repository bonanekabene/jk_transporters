<?php
include("../includes/db.php");
include("../includes/admin_details.php");

//number of langage
$d_n_sql = mysqli_query($conn, "SELECT * from langage");
$number_of_langages = mysqli_num_rows($d_n_sql);

//number of piaded
$number_paid = mysqli_query($conn, "SELECT * from langage where paid = 'yes'");
$number_of_paid = mysqli_num_rows($number_paid);

//number of deliverd
$d_n_sql = mysqli_query($conn, "SELECT * from langage where delivered = 'yes'");
$number_of_delivered = mysqli_num_rows($d_n_sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Langage </title>

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
                <input type="text" name="" id="" placeholder="Cooming Soon" disabled>
                <i class="fas fa-paper-plane"> </i>
            </div>

            <!-- add driver btn -->
            <div class="btn">
                <a href="./langage-form.php"> <button> Add Langage </button></a>
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
                <li class="active"><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
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
                        <p> <?php echo $number_of_langages ?> </p>
                        <p> Langages </p>

                    </div>

                    <div class="info_icon">
                        <i class="fab fa-itch-io"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p><?php echo $number_of_delivered ?></p>
                        <p> Paid </p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                <div class="info_content">
                    <div class="info_card-left">
                        <p><?php echo $number_of_paid ?></p>
                        <p> Picked </p>

                    </div>

                    <div class="info_icon">
                        <i class="fas fa-dolly"></i>
                    </div>
                </div>
            </div>

            <div class="langage_container">
                <div class="text">
                    <h2> Langages in store </h2>
                    <p> * ( S ) is the sender and ( R ) is the receiver </p>
                </div>

                <table class="l_table">
                    <thead>
                        <tr class="langage-tr">
                            <td> Item </td>
                            <td> Type </td>
                            <td> Code </td>
                            <td> S-Name </td>
                            <td> S-Number </td>
                            <td> R-name </td>
                            <td> R-Number </td>
                            <td> Picked </td>
                            <td> Paid </td>
                            <td> View Item </td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        //selecting data from db
                        $d_sql = mysqli_query($conn, "SELECT * from langage");

                        //looping through query
                        while ($langage_result = mysqli_fetch_assoc($d_sql)) {
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

                            echo "
                                <tr class='tr'>
                                    <td> $item </td>
                                    <td> $type </td>
                                    <td> $code </td>
                                    <td> $s_name  </td>
                                    <td> $s_number </td>
                                    <td> $r_name </td>
                                    <td> $r_number </td>
                                    <td><a href='../includes/langage-paid.php?id=$l_id' class='l-color'> $paid  </a></td>
                                    <td><a href='../includes/langage_delivered.php?id=$l_id' class='l-color'> $delivered </a></td>
                                    <td><a href='./langage-review.php?id=$l_id' class='l-view'> View </a></td>
                                </tr> 
                                        ";
                        }


                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>