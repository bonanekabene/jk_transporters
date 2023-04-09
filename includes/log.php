<?php
    session_start();
    
    //checking if session user_id exists if destroy it 
    if($_SESSION['admin_id']){
        session_unset();
        session_destroy();
        header("location: ../admin-login.php");
     }

?>