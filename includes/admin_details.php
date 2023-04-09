<?php
    
    include("../includes/db.php");
    include("../includes/admin_id.php");

    //extracting admin id
    //echo $admin_id;

    //admin information
    $info_sql = mysqli_query($conn, "SELECT * from admin where id = '$admin_id'");
    $info_result = mysqli_fetch_assoc($info_sql);

    //accessing data
    $admin_name = $info_result["name"];
    $admin_email = $info_result["email"];
    $admin_mobile = $info_result["phone"];
    $admin_address = $info_result["address"];
    $admin_date = $info_result["date"];
    $admin_img = $info_result["image"]
?>