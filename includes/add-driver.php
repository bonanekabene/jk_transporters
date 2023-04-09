<?php
   //connect to db
include("../includes/db.php");
include("../includes/admin_id.php");

//error Messages 
$error_name = "";
$error_email = "";
$error_password = "";
$error_truck = "";
$error_mobile = "";
$error_age = "";
$error_licence = "";
$error_experience = "";
$error_Address = "";
$driver_success = "";


if (isset($_POST["submit"])) {

    //client data from inputs
    $name = $_POST["username"];
    $email = $_POST["useremail"];
    $password = $_POST["userpassword"];
    $truck = $_POST["truck"];
    $mobile = $_POST["mobile"];
    $age = $_POST["age"];
    $licence = $_POST["licence"];
    $experience = $_POST["experience"];
    $address = $_POST["address"];

    //name validation
    if (!empty($name)) {

        //email validation
        if (!empty($email)) {

            //email already taken
            $signup_result = mysqli_query($conn, "SELECT `email` from `drivers` where email = '$email'");
            if (!mysqli_num_rows($signup_result) > 0) {

                //password validation
                if (!empty($password)) {

                    //password length
                    if (strlen($password) < 8) {
                        $error_password = "password too short";
                    } else {

                        //mobile validation
                        if (!empty($truck)) {

                            //address valiadtion
                            if (!empty($mobile)) {

                                if (!empty($age)) {

                                    //licence
                                    if (!empty($licence)) {

                                        //experience
                                        if (!empty($experience)) {

                                            //address
                                            if (!empty($address)) {
                                                //hashing password
                                                $enc_password = md5($password);

                                                //date
                                                $date = date("d-m-y");

                                                //inserting data into db
                                                $sql = mysqli_query($conn, "INSERT INTO drivers (name, email, password, truck, mobile, age, licence, experience, date, address, image, status ) VALUES('$name', '$email', '$enc_password', '$truck', '$mobile', '$age', '$licence', '$experience', '$date', '$address','default.png', 'active')");

                                                $driver_success = "Successfully Added Driver";
                                            } else {
                                                $error_Address = "Address can not be emty";
                                            }
                                        } else {
                                            $error_experience = "Experience can not be empty";
                                        }
                                    } else {
                                        $error_licence = "licence can not be empty";
                                    }
                                } else {
                                    $error_age = "Age can not be empty";
                                }
                            } else {
                                $error_mobile = "Mobile can not be empty";
                            }
                        } else {
                            $error_truck = "Truck can not be empty";
                        }
                    }
                } else {
                    $error_password = "Password can not be empty";
                }
            } else {
                $error_email = "Email already taken";
            }
        } else {
            $error_email = "Email can not be empty";
        }
    } else {
        $error_name = "Name can not be empty";
    }
}
?>