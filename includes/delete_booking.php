<?php
include("../includes/db.php");


if (isset($_GET["id"])) {

    $get_booking_id = $_GET["id"];
    $sql = mysqli_query($conn, "delete  from booking where id = '$get_booking_id'");

    header("location: ../dashboard/booking.php");
}