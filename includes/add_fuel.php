<?php
    include("../includes/driver_details.php");


    //Success message variable
    $fuel_success = "";

    // adding a booking 
    if (isset($_POST["fuel"])) {

        //booking details
        $t_plate = $_POST["t_plate"];
        $t_name = $_POST["t_name"];
        $d_name = $_POST["d_name"];
        $date = $_POST["date"];
        $when = $_POST["when"];
        $quantity = $_POST["quantity"];
        $ammount = $_POST["ammount"];
        $comment = $_POST["comment"];


        if (!empty($name) || !empty($t_name) || !empty($d_name) || !empty($date) || !empty($when) || !empty($quantity) || !empty($ammount)){

            //inserting data in db
            $sql = mysqli_query($conn, "INSERT INTO fuel (t_plate, t_name, d_name, d_filled, way, quantity, amount, comment, driver_id, notifi) VALUES('$t_plate', '$t_name', '$d_name', '$date', '$when', '$quantity', '$ammount', '$comment', '$driver_id', 'true')");
            $fuel_success = "Fuel Added Successfully";
        } else {

        }
    }