<?php
     $driver_update_success = "";

    //update customer update 
    if (isset($_POST["submit"])) {

        //git id
        $cost_update = $_GET["id"];
    
        //admin data
        $t_plate = $_POST["t_plate"];
        $t_name = $_POST["t_name"];
        $model = $_POST["model"];
        $stage = $_POST["stage"];
        $route = $_POST["route"];
        $engine = $_POST["engine"];
        $date = $_POST["date"];
        $d_name = $_POST["d_name"];
    
        if (!empty($t_plate) || !empty($t_name) || !empty($du_userpassword) || !empty($model) || !empty($stage) || !empty($route) || !empty($engine) || !empty($date) || !empty($d_name)) {
    
            //updating user information
            $sql1 = mysqli_query($conn, "UPDATE trucks set t_plate = '$t_plate', t_name = '$t_name', model = '$model', stage = '$stage', route = '$route', engine = '$engine', date = '$date', d_river = '$d_name' where id = $cost_update");
    
            //message
            $driver_update_success = "Truck updated successfully";
        } else {
            $profile_error = "Form can not be empty";
        }
    }
?>