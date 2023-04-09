<?php
include("../includes/db.php");

$get_booking_id = $_GET["id"];


if (isset($_GET["id"])) {

    $sql = mysqli_query($conn, "delete  from customers where id = '$get_booking_id'");

    header("location: ../dashboard/customer.php");
}