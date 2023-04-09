<?php
    include("../includes/admin_details.php");
    include("../includes/db.php");

    //message error
    $profile_success = "";
    $profile_error = "";

    if(isset($_POST["profile"])){

        //admin data
        $p_name = $_POST["p_name"];
        $p_email = $_POST["p_email"];
        $p_password = md5($_POST["p_password"]);
        $p_phone = $_POST["p_number"];
        $p_address = $_POST["p_address"];

        if(!empty($p_name) || !empty($p_email) || !empty($p_password) || !empty($p_phone) || !empty($p_address)){

            //updating user information
            $sql1 = mysqli_query($conn, "UPDATE admin set name = '$p_name', email = '$p_email', password = '$p_password', phone = '$p_phone', address = '$p_address' where id = $admin_id");
            
            //message
            $profile_success = "Profile updated successfully";
        }else{
            $profile_error = "Form can not be empty";
        }
    }
?>