<?php
    // session 
    session_start();

    //extracting id from session
    $admin_id = $_SESSION["admin_id"];

    if(!$admin_id){

        //if there is no session admin redirect to login page
        header("location: ../admin-login.php");
    }

?>