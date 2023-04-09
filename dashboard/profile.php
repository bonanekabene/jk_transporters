<?php
//including files
include("../includes/admin-profile-update.php");
include("../includes/admin-img-upload.php");
include("../includes/admin-delete-account.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jk Profile </title>

    <!-- link to the css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="../assests/logo/jk logo.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="username">
            <h1><?php echo $admin_name; ?></h1>
            <p><?php echo $admin_email; ?></p>
        </div>

        <div class="action">
            <!-- search bar section -->
            <!-- <div class="search">
                <input type="text" name="" id="" placeholder="search admin....">
                <i class="fas fa-paper-plane"> </i>
            </div> -->

            <!-- add driver btn -->
            <!-- <div class="btn">
                <a href=""> <button> Add Driver </button></a>
            </div> -->

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
                <li><a href="./customer.php"><i class="fas fa-people-group"></i> Customers </a></li>
                <li class="active"><a href="./profile.php"><i class="fas fa-user-plus"></i> Profile </a></li>
                <li><a href="./truck.php"><i class="fas fa-truck"></i> Trucks </a></li>
                <li><a href="./analytics.php"><i class="fas fa-chart-gantt"></i> Analysis </a></li>
                <li><a href="../includes/log.php"><i class="fa fa-sign-out"></i> Log out </a></li>
            </ul>
        </div>

        <div class="container_right">
            <div class="profile_conta">
                <div class="profile_update">
                    <form action="" method="post">
                        <div class="form_text">
                            <h2> Update Profile </h2>
                            <p style="color: green; margin-top: 9px;"><?php echo  $profile_success; ?></p>
                            <p style="color: red"><?php echo $profile_error; ?></p>
                        </div>

                        <!-- form for updating user profile -->
                        <input type="text" name="p_name" id="" placeholder="Name" value="<?php echo $admin_name ?>"><br>
                        <input type="email" name="p_email" id="" placeholder="Email Address " value="<?php echo $admin_email ?>"><br>
                        <input type="password" name="p_password" id="" placeholder="Password "><br>
                        <input type="tel" name="p_number" placeholder="Tel: +256 " value="<?php echo $admin_mobile ?>"><br>
                        <input type="text" name="p_address" id="" placeholder="Physical Address" value="<?php echo $admin_address ?>"><br>

                        <input type="submit" value="Update Profile" name="profile">
                    </form>

                    <div class="img">
                        <img src="../uploaded/<?php echo $admin_img ?>" alt="" srcset="">
                    </div>
                </div>

                <div class="delete_conta">
                    <div class="delete_content">
                        <h2> Delete Account </h2>
                        <p class="d_p"> If you delete your account. You return it </p>

                        <form action="" method="post">
                            <div class="comfirm">
                                <input type="checkbox" name="checkbox" id="">
                                <p> Confirm </p>
                            </div>

                            <input type="submit" value="Delete" name="delete">
                        </form>
                    </div>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="update_img">
                            <h2> Update Profile Image </h2><br>
                            <p style="color: green; margin-top: 6px;"><?php echo $file_success; ?></p>
                            <p style="color: red"><?php echo $file_error; ?></p>


                            <input type="file" name="upload" id="">
                            <p> * only PNG, JPG, JPEG </p>
                            <input type="submit" value="Update Image" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/js.js"></script>
</body>

</html>