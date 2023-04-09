<?php
    include("../includes/db.php");
    include("../includes/admin_details.php");

    if(isset($conn)){

        //selecting drivers from db
        $sql1 = mysqli_query($conn, "SELECT * from drivers");
        $driver_result = mysqli_fetch_assoc($sql1);
        $number_of_drivers = mysqli_num_rows($sql1);

        //driver data keeping variables
        $d_name = $driver_result["name"];
        $d_email = $driver_result["email"];
        $truck = $driver_result["truck"];
        $d_mobile = $driver_result["mobile"];
        $d_age = $driver_result["age"];
        $d_licence = $driver_result["licence"];
        $d_experience = $driver_result["experience"];
        $d_joined = $driver_result["date"];
        $d_address = $driver_result["address"];
        $status = $driver_result["status"];
    }

?>