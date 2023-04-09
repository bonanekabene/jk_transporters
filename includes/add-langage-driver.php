<?php
include("../includes/driver_details.php");


//Success message variable
$error_langage = "";
$langage_success = "";

// adding a booking 
if (isset($_POST["langage"])) {

    //booking details
    $item_name = $_POST["item_name"];
    $type = $_POST["type"];
    $code = $_POST["code"];
    $s_name = $_POST["s_name"];
    $s_number = $_POST["s_number"];
    $s_address = $_POST["s_address"];
    $s_date = $_POST["s_date"];
    $s_time = $_POST["s_time"];
    $r_name = $_POST["r_name"];
    $r_number = $_POST["r_number"];
    $r_address = $_POST["r_address"];



    if (!empty($name) || !empty($type) || !empty($code) || !empty($s_name) || !empty($s_number) || !empty($s_address) || !empty($s_date) || !empty($s_time) || !empty($r_name) || !empty($r_number) || !empty($r_address))  {

        //inserting data in db
        $sql = mysqli_query($conn, "INSERT INTO langage (item_name, type, code, s_name, s_number, s_address, s_date, s_time, r_name, r_number, r_address, paid, picked, delivered, driver_id, client_id, notifi) VALUES('$item_name', '$type', '$code', '$s_name', '$s_number', '$s_address', '$s_date', '$s_time', '$r_name', '$r_number', '$r_address', 'no', 'no','no','$driver_id','$driver_id','true')");
        $langage_success = "Langage Added Successfully";
    } else {

        //error message
        $error_langage = "This field is required";
    }
}
