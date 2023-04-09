<?php
    include("./includes/db.php");

    //error Messages 
    $error_name = "";
    $error_email = "";
    $error_password = "";
    $error_mobile = "";
    $error_Address = "";


    if(isset($_POST["submit"])){

        //client data from inputs
        $name = $_POST["username"];
        $email = $_POST["useremail"];
        $password = $_POST["userpassword"];
        $mobile = $_POST["usermobile"];
        $address = $_POST["useraddress"];

        //name validation
        if(!empty($name)){

            //email validation
            if(!empty($email)){

                //email already taken
                $signup_result = mysqli_query($conn, "SELECT `email` from `clients` where email = '$email'");
                if(!mysqli_num_rows($signup_result) > 0){

                    //password validation
                    if(!empty($password)){

                        //password length
                        if(strlen($password) < 8){
                            $error_password = "password too short";
                        }else{
                            
                            //mobile validation
                            if(!empty($mobile)){
                                
                                //address valiadtion
                                if(!empty($address)){

                                    //hashing password
                                    $enc_password = md5($password);

                                    //date
                                    $date = date("d-m-y");

                                    //inserting data into db
                                    $sql = mysqli_query($conn, "INSERT INTO clients (name, email, password, mobile, address, image, date) VALUES('$name', '$email', '$enc_password', '$mobile', '$address', 'default.png', '$date')");

                                    //redirecting user
                                    header("location: ./login.php");

                                }else{
                                    $error_Address = "Address can not be empty";
                                }

                            }else{
                                $error_mobile = "Mobile can not be empty";
                            }
                        }

                    }else{
                        $error_password = "Password can not be empty";
                    }

                }else{
                    $error_email = "Email already taken";
                }

            }else{
                $error_email = "Email can not be empty";
            }

        }else{
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
    <title> JK Transporters Sign UP</title>

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
        <h1> JK Transporters Sign Up </h1>
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
                <input type="tel" name="usermobile" placeholder="Mobile +256....">
            </div>
            <p class="h"><?php echo $error_mobile?></p>

            <div class="name">
                <input type="text" name="useraddress" placeholder="Physical Address">
            </div>
            <p class="h"><?php echo $error_Address?></p>


            <input type="submit" value="Sign Up" name="submit">
        </form>
        <br>
        <p> Already have an account? <a href="./login.php" style="color: #800000; text-decoration: none;"> Login </a> </p>
    </div>

    <script src="./assests/js/sign.js"></script>
</body>

</html>