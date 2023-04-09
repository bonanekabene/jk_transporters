<?php

    //check if there is session if not redirect to login page
    include("../includes/db.php");
    include("../includes/admin_details.php");

    //Success message variable
    $customer_message = "";
    $customer_success = "";

    // adding a booking 
    if(isset($_POST["customer"])){

        //booking details
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $date = $_POST["date"];
        $password = md5($_POST["password"]);


        if(!empty($name) || !empty($mobile) || !empty($email) || !empty($age) || !empty($address) || !empty($date) || !empty($password)){

            //inserting data in db
            $sql = mysqli_query($conn, "INSERT INTO customers (name, mobile, email, age, address, date, notifi, password) VALUES('$name', '$mobile', '$email', '$age', '$address', '$date', 'true', '$password')");
            $customer_success = "Customer Successfully Added";
        }else{

            //error message
            $customer_message = "This field is required";
        }
    }


?>