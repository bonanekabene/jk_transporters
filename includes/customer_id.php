<?php
    // session 
    session_start();

    //extracting id from session
    $customer_id = $_SESSION["client_id"];

    if(!$customer_id){

        //if there is no session admin redirect to login page
        header("location: ../../login.php");
    }

?>