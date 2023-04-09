<?php
   
    //check if there is session if not redirect to login page
    include("../includes/db.php");
    include("../includes/admin_details.php");

    //Success message variable
    $book_message = "";
    $book_success = "";

    // adding a booking 
    if(isset($_POST["book"])){

        //booking details
        $name = $_POST["name"];
        $truck = $_POST["truck"];
        $mobile = $_POST["mobile"];
        $date = $_POST["date"];

        if(!empty($name) || !empty($truck) || !empty($mobile) || !empty($date)){

            //inserting data in db
            $sql = mysqli_query($conn, "INSERT INTO booking (name, truck, phone, date, driver_id, client_id, notifi, accepted, delivered) VALUES('$name', '$truck', '$mobile', '$date', '$admin_id', '$admin_id', 'true', 'No', 'No')");
            $book_success = "Booking Successfully Added";
        }else{

            //error message
            $book_message = "This field is required";
        }
    }


?>