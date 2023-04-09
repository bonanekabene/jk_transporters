<?php
    
    include("../includes/add-langage-driver.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Driver Langage </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="toggle-btn">
            <i class="fas fa-bars" id="btn"></i>
        </div>
        
        <div class="username">
            <h1><?php echo $driver_name?></h1>
            <p><?php echo $driver_email?></p>
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
            <li class="active"><a href="./langage.php"><i class="fab fa-itch-io"></i> Langage </a></li>
            <li><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
            <li><a href="../includes/log-driver.php"><i class="fa fa-sign-out"></i> Log out </a></li>
        </ul>
        </div>

        <div class="container_right">
            <div class="driver-container">
                <div class="driver-left">
                    
                    <form action="" method="post">
                        <h2 style="color: #EF4D5D; text-align: center"> Langage Information  </h2>
                        <div class="form-left">
                            <h2 style="text-align: center; margin: 10px"> Sender's Information </h2>
                            <p style="color: green; margin-top: 6px; text-align: center;"><?php echo $langage_success;?></p>
    
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
    
                            <div class="input-right">
                                <h2> Time  </h2>
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

                <div class="driver-right" style="overflow-x: auto;">
                    <div class="text">
                        <h2> Langages in store </h2>
                        <p> * ( S ) is the sender and ( R ) is the receiver  </p>
                    </div>
    
                    <table class="l_table" style="width: 100%;">
                        <thead>
                            <tr class="langage-tr">
                                <td> Item  </td>
                                <td class="s-hidden"> Type  </td>
                                <td class="s-hidden"> Code  </td>
                                <td> S-Name </td>
                                <td> R-name </td>
                                <td> View Item  </td>
                            </tr>
                        </thead>
    
                        <tbody>
                        <?php
                        //selecting data from db
                        $d_sql = mysqli_query($conn, "SELECT * from langage where driver_id = $driver_id");

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
                                    <td> $r_name </td>
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
    </div>


    <script src="./js/js.js"></script>
</body>

</html>