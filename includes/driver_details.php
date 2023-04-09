<?php
   include("../includes/db.php");
   include("../includes/driver_id.php");

    $sql1 = mysqli_query($conn, "SELECT * FROM drivers where id = '$driver_id' ");
    $driver_result = mysqli_fetch_assoc($sql1);
 
    $driver_name = $driver_result["name"];
    $driver_email = $driver_result["email"];
    $driver_img = $driver_result["image"];
    $driver_truck = $driver_result["truck"];
    $driver_phone = $driver_result["mobile"];
?>