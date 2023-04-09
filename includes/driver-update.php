<?php
    include("../includes/db.php");

    $driver_update_success = "";
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


if (isset($_POST["submit"])) {

    //git id
    $update_id = $_GET["id"];

    //admin data
    $du_username = $_POST["username"];
    $du_useremail = $_POST["useremail"];
    $du_userpassword = md5($_POST["userpassword"]);
    $du_truck = $_POST["p_number"];
    $du_mobile = $_POST["mobile"];
    $du_age = $_POST["age"];
    $du_licence = $_POST["licence"];
    $du_experience = $_POST["experience"];
    $du_address = $_POST["address"];

    if (!empty($du_username) || !empty($du_useremail) || !empty($du_userpassword) || !empty($du_truck) || !empty($du_mobile)) {

        //updating user information
        $sql1 = mysqli_query($conn, "UPDATE drivers set name = '$du_username', email = '$du_useremail', password = '$du_userpassword', truck = '$du_truck', mobile = '$du_mobile', age = '$du_age', licence = '$du_licence', experience = '$du_experience', address = '$du_address' where id = $update_id");

        //message
        $driver_update_success = "Profile updated successfully";
    } else {
        $profile_error = "Form can not be empty";
    }
}
