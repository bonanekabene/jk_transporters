<?php
session_start();

//including connection
include("./includes/db.php");

//errorr massages 
$error_email = "";
$error_password = "";
$validate = "";

if(isset($_POST["login"])){

    //users data 
    $email = $_POST["useremail"];
    $password = md5($_POST["userpassword"]);

    //checking if password empty
    if(!empty($email)){

        //password checking if empty
        if(!empty($password)){

            //selecting data from db
            $sql = mysqli_query($conn, "SELECT * from drivers where email = '$email' && password = '$password'");

            //checking results
            if(mysqli_num_rows($sql) > 0){

                //selecting data from db
                $result = mysqli_fetch_assoc($sql);

                //session for user id 
                $_SESSION["driver_id"] = $result["id"];
                header("location: ./driver-dashboard/index.php");
                
            }else{
                $validate  = "Email Or Passward Is Incorrect";
                // $res = mysqli_fetch_assoc($sql);
                //  echo $res["id"];
            }

        }else{
            $error_password = "Password can not be empty";
        }

    }else{
        $error_email = "Email can not be empty";
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JK Driver Login </title>

        <!-- ********** link to style sheet **************** -->
        <link rel="stylesheet" href="./assests/css/style.css">

        <!-- link to font awesome icon  -->
        <link rel="stylesheet" href="./assests/vendors/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="./assests/vendors/fontawesome-free/webfonts/fa-brands-400.ttf">

        <link rel="shortcut icon" href="./assests/logo/jk logo.png" type="image/x-icon">
</head>
<body class="signup">
    
    <div class="signup-conta">
        <a href="./index.html"><i class="fas fa-globe" title="Go back home"></i></a>
        <h1> JK Driver Login  </h1>
        <p class="p"> Login into your account </p>
        <p class="h" style="text-align: center;"><?php echo $validate;?></p>
 
        <form action="" method="post">
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
 <br>
             <input type="submit" value="Login" name="login">
         </form>
 <br>
         <p> Don't have an account? <a href="./driver_signup.php" style="color: #800000; text-decoration: none;"> Sign Up </a> </p>
     </div>

     <script src="./assests/js/sign.js"></script>
</body>
</html>