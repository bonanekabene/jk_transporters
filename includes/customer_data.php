<?php
    include("../includes/db.php");
    include("../includes/customer_id.php");

    //extracting admin id
    //echo $admin_id;

    //admin information
    $info_sql = mysqli_query($conn, "SELECT * from clients where id = '$customer_id'");
    $cust_data = mysqli_fetch_assoc($info_sql);

    //customer data
    $customer_name = $cust_data["name"];
    $customer_email = $cust_data["email"];
    $customer_mobile = $cust_data["mobile"];
    $customer_address = $cust_data["address"];
    $customer_date = $cust_data["date"];
    $customer_img = $cust_data["image"];


    
?>