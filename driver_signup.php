<?php
//connect to db
include("./includes/db.php");

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
                                                $sql = mysqli_query($conn, "INSERT INTO drivers (name, email, password, truck, mobile, age, licence, experience, date, address, image ,status) VALUES('$name', '$email', '$enc_password', '$truck', '$mobile', '$age', '$licence', '$experience', '$date', '$address','default.png', 'Active')");

                                                //redirecting user
                                                header("location: ./driver-login.php");
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JK Driver Sign UP</title>

    <!-- ********** link to style sheet **************** -->
    <link rel="stylesheet" href="./assests/css/style.css">

    <!-- link to font awesome icon  -->
    <link rel="stylesheet" href="./assests/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

    <link rel="shortcut icon" href="./assests/logo/jk logo.png" type="image/x-icon">
</head>

<body class="signup">
    <!-- ****************** sign up section design ************ -->
    <div class="signup-conta">
        <a href="./index.html"><i class="fas fa-globe" title="Go back home"></i></a>
        <h1> JK Driver Sign Up </h1>
        <p class="p"> Create an account </p>


        <form action="" method="post">
            <div class="name">
                <input type="text" name="username" placeholder="Name">
            </div>
            <p class="h"><?php echo $error_name; ?></p>

            <div class="name">
                <input type="email" name="useremail" placeholder="Email">
            </div>
            <p class="h"><?php echo $error_email; ?></p>

            <div class="name">
                <div class="pass">
                    <input type="password" name="userpassword" placeholder="Password" id="inputpassword">
                    <i class="fas fa-eye" id="password"></i>
                </div>
            </div>
            <p class="h"><?php echo $error_password; ?></p>

            <div class="name">
                <input type="text" placeholder="Truck Plate UXA 567 H" name="truck">
            </div>
            <p class="h"><?php echo $error_truck; ?></p>

            <div class="name">
                <input type="tel" placeholder="Number +256 ...." name="mobile">
            </div>
            <p class="h"><?php echo $error_mobile; ?></p>

            <!-- driver mobile number -->
            <div class="name">
                <input type="text" placeholder="Licence number RGG 56675 ......" name="licence">
            </div>
            <p class="h"><?php echo $error_licence; ?></p>

            <!-- driver age -->
            <div class="name">
                <input type="number" placeholder="Age " name="age">
            </div>
            <p class="h"><?php echo $error_age; ?></p>

            <!-- driver age -->
            <div class="name">
                <input type="number" placeholder="Years of Experience" name="experience">
            </div>
            <p class="h"><?php echo $error_experience; ?></p>

            <!-- driver age -->
            <div class="name">
                <input type="text" placeholder="Address Bulenga" name="address">
            </div>
            <p class="h"><?php echo $error_Address; ?></p>

            <br>
            <input type="submit" value="Sign Up" name="submit">
        </form>
        <br>
        <p> Already have an account? <a href="./driver-login.php" style="color: #800000; text-decoration: none;"> Login </a> </p>
    </div>

    <script src="./assests/js/sign.js"></script>
</body>

</html>