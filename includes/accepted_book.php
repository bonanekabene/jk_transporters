<?php 
    include("../includes/db.php");

    //id
    $booking_id = $_GET["id"];
    
    //selecting drivers from db
    $sql1 = mysqli_query($conn, "SELECT * from booking");
    $book_result = mysqli_fetch_assoc($sql1);
    
    //book data keeping variables
    $b_accepted = $book_result["accepted"];
    $b_deliverd = $book_result["delivered"];

    if($b_accepted == "no"){

        $sql45 = mysqli_query($conn, "UPDATE booking set accepted = 'yes' where id = '$booking_id'");
        header("location: ../dashboard/booking.php");
    }else{

        $sql45 = mysqli_query($conn, "UPDATE booking set accepted = 'no' where id = '$booking_id'");
        header("location: ../dashboard/booking.php");
    }
?>