<?php
    //including the file for form
    include("../includes/add-langage.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Transportation Langage </title>

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
            <!-- notificatiuon section -->
            <div class="notification">
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
                <li><a href="./fuel.php"><i class="fas fa-gas-pump"></i> Fuel </a></li>
                <li><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
                <li><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.php"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="driver-form">
                <div class="driver-form-text">
                    <h2> Add  Langage </h2>
                    <p style="color: green; margin-top: 6px;"><?php echo $langage_success;?></p>
                </div>

                <form action="" method="post">
                    <div class="form-left">
                        <h2 style="text-align: center; margin: 10px"> Sender's Information </h2>

                        <div class="input-left">
                            <h2> Item Name </h2>
                            <input type="text" placeholder="Name" name="item_name">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-left">
                            <h2> Type </h2>
                            <input type="text" placeholder="Electron, cloth, food ..." name="type">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-left">
                            <h2> Sender's Code </h2>
                            <input type="text" placeholder="Type code " name="code">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-left">
                            <h2> Sender Name  </h2>
                            <input type="text" placeholder="Sender's name " name="s_name">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-left">
                            <h2> Sender Number  </h2>
                            <input type="tel" placeholder="Sender's number " name="s_number">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-left">
                            <h2> Sender Address  </h2>
                            <input type="text" placeholder="Sender's Physical Address" name="s_address">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-left">
                            <h2> Sent On  </h2>
                            <input type="date" placeholder="Date Sent" name="s_date">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-left">
                            <h2> Sent Time  </h2>
                            <input type="time" name="s_time">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                    </div>

                    <!-- ********************************* form separation ***************************** -->
                    <div class="form-right">
                        <h2 style="text-align: center; margin: 10px"> Receiver's Information </h2>

                        <div class="input-right">
                            <h2> Receiver Name </h2>
                            <input type="text" placeholder="Receiver Name" name="r_name">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-right">
                            <h2> Receiver Number </h2>
                            <input type="number" placeholder="Receiver Number" name="r_number">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <div class="input-right">
                            <h2> Receiver Address </h2>
                            <input type="text" placeholder="Receiver Address Bulenga" name="r_address">
                            <p style="color: red"><?php echo $error_langage; ?></p>
                        </div>

                        <input type="submit" value="Add Langage" class="submit" name="langage">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>