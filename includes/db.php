<?php
    
    //conection to the database
    $conn = new mysqli("localhost", "root", "root", "jk_transporters");

    if($conn){
       // echo "connected successfully";
    }else{
       // echo "not connect";
        die .mysqli_error($conn);
    }
?>