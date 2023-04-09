<?php
    include("../includes/driver_details.php");
    include("../includes/db.php");

    //message error
    $profile_success = "";
    $profile_error = "";

    if(isset($_POST["profile"])){

        //admin data
        $username = $_POST["username"];
        $useremail = $_POST["useremail"];
        $userpassword = md5($_POST["userpassword"]);
        $truck = $_POST["truck"];
        $mobiles = $_POST["mobile"];
        $age = $_POST["age"];
        $licence = $_POST["licence"];
        $experience = $_POST["experience"];
        $address = $_POST["address"];

        if(!empty($username) || !empty($useremail) || !empty($userpassword) || !empty($truck) || !empty($mobiles) || !empty($age) || !empty($licence) || !empty($experience) || !empty($address)){

            //updating user information
            $sql1 = mysqli_query($conn, "UPDATE drivers set name = '$username', email = '$useremail', password = '$userpassword', truck = '$truck', mobile = '$mobiles', age = '$age', licence = '$licence', experience = '$experience', address = '$address' where id = $driver_id");
            
            //message
            $profile_success = "Profile updated successfully";
        }else{
            $profile_error = "Form can not be empty";
        }
    }
?>