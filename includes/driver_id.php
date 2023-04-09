<?php
    session_start();

    //driver id
    $driver_id = $_SESSION["driver_id"];

    //checking if there is session
    if(!$driver_id){

        //redirection driver
        header("location: ../../driver-login.php");
    }

?>