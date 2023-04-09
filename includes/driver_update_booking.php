<?php
    $book_success = "";

    //update customer update 
    if (isset($_POST["book"])) {

        //git id
        $cost_update = $_GET["id"];
    
        //admin data
        $name = $_POST["name"];
        $t_truck = $_POST["truck"];
        $t_mobile = $_POST["mobile"];
        $t_date = $_POST["date"];
    
        if (!empty($name) || !empty($t_truck) || !empty($t_mobile) || !empty($t_date)){
    
            //updating user information
            $sql1 = mysqli_query($conn, "UPDATE booking set name = '$name', truck = '$t_truck', phone = '$t_mobile', date = '$t_date' where id = $cost_update");
    
            //message
            $book_success = "updated Booking successfully";
        } else {
            $profile_error = "Form can not be empty";
        }
    }
?>