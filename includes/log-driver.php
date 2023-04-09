<?php
    session_start();
    
    //checking if session user_id exists if destroy it 
    if($_SESSION['driver_id']){
        session_unset();
        session_destroy();
        header("location: ../../driver-login.php");
     }

?>