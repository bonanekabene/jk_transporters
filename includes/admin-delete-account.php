<?php
//include("../includes/admin_id.php");
include("../includes/db.php");

//success
//$delete_success = "";


if (isset($_POST["delete"])) {

    //check box clicked
    if (isset($_POST["checkbox"])) {
        //delete account
        $sql = mysqli_query($conn, "delete  from admin where id = '$admin_id'");

        //checking if deleted
        if ($sql) {
            header("location: ../admin-login.php");
        }
    }
}

