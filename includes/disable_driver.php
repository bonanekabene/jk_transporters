<?php
include("./db.php");
include("../includes/driver_data.php");

if (isset($_GET['id'])) {

    //id from url
    $disable_id = $_GET["id"];

    if ($status == 'active') {
        //sql
        $dis_sql = mysqli_query($conn, "UPDATE drivers set status = 'Inactive' where id = '$disable_id'");
        header("location: ../dashboard/drivers.php");
    }else{
        $dis_sq = mysqli_query($conn, "UPDATE drivers set status = 'active' where id = '$disable_id'");
        header("location: ../dashboard/drivers.php");
    }
}
