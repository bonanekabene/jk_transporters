<?php
   //including files
   include("../includes/admin_details.php");
   include("../includes/db.php");

   $customer_success = "";
   $cost_update = $_GET["id"];

    //update customer update 
    if (isset($_POST["update"])) {
    
        //admin data
        $cost_name = $_POST["name"];
        $cost_mobile = $_POST["mobile"];
        $cost_email = $_POST["email"];
        $cost_age = $_POST["age"];
        $cost_address = $_POST["address"];
        $cost_password = md5($_POST["password"]);
    
        if (!empty($cost_name) || !empty($cost_mobile) || !empty($cost_email) || !empty($cost_age) || !empty($cost_address) || !empty($cost_password)) {
    
            //updating user information
            $sql1 = mysqli_query($conn, "UPDATE customers set name = '$cost_name', mobile = '$cost_mobile', email = '$cost_email', age = '$cost_age', address = '$cost_address', password = '$cost_password' where id = $cost_update");
            $customer_success = "Updated Customer Successfully";
    
            //message
            $driver_update_success = "Profile updated successfully";
        } else {
            $profile_error = "Form can not be empty";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Customer Update </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="username">
            <h1><?php echo $admin_name;?></h1>
            <p><?php echo $admin_email;?></p>
        </div>

        <div class="action">
            <!-- notificatiuon section -->
            <div class="notification">

                <div class="notifi_menu">
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
            </div>

            <div class="img">
                <img src="../uploaded/<?php echo $admin_img;?>" alt="bonane kabene" srcset="" height="50">
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
                <li><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.php"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="./analytics.php"><i class="fas fa-chart-gantt"></i> Analysis </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="driver-form">
                <div class="driver-form-text">
                    <h2> Update Customer </h2>
                    <p style="color:green"> <?php echo $customer_success ?></p>
                </div>

                <form action="" method="post">
                    <div class="form-left">
                        <div class="input-left">
                            <h2> Name </h2>
                            <input type="text" placeholder="Name" name="name">
                        </div>

                        <div class="input-left">
                            <h2> Mobile </h2>
                            <input type="tel" placeholder="Number +256 ...."  name="mobile">
                        </div>

                        <div class="input-left">
                            <h2> Email  </h2>
                            <input type="email" placeholder="Email Address" name="email">
                        </div>

                        <div class="input-left">
                            <h2> Age </h2>
                            <input type="number" placeholder="Age " name="age">
                        </div>
                    </div>

                    <!-- ********************************* form separation ***************************** -->
                    <div class="form-right">
                        <div class="input-right">
                            <h2> Address </h2>
                            <input type="text" placeholder="Address Bulenga" name="address">
                        </div> 

                        <div class="input-right">
                            <h2> Password </h2>
                            <input type="password" placeholder="password" name="password">
                        </div>
<br><br>
                        <input type="submit" value="Add Driver" class="submit" name="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>