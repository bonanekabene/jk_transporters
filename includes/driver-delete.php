<?php
include("../includes/db.php");
include("../includes/admin_details.php");

//success
$delete_success = "";

if (isset($_GET["id"])) {

    $get_driver_id = $_GET["id"];
    $sql = mysqli_query($conn, "delete  from drivers where id = '$get_driver_id'");
    $delete_success = "driver deleted successfully";
    header("location: ../dashboard/drivers.php");
}