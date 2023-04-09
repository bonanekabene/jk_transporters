<?php
    //check if there is session if not redirect to login page
    include("../includes/db.php");
    include("../includes/admin_details.php");

    //Success message variable
    $truck_message = "";
    $truck_success = "";

    // adding a booking 
    if(isset($_POST["truck"])){

        //booking details
        $t_plate = $_POST["t_plate"];
        $t_name = $_POST["t_name"];
        $model = $_POST["model"];
        $stage = $_POST["stage"];
        $route = $_POST["route"];
        $engine = $_POST["engine"];
        $date = $_POST["date"];
        $d_name = $_POST["d_name"];

        if(!empty($t_plate) || !empty($t_name) || !empty($model) || !empty($stage) || !empty($route) || !empty($engine) || !empty($date) || !empty($d_name)){

            //inserting data in db
            $sql = mysqli_query($conn, "INSERT INTO trucks (t_plate, t_name, model, stage, route, engine, date, d_river, notifi) VALUES('$t_plate', '$t_name', '$model', '$stage', '$route', '$engine',  '$date', '$d_name', 'true')");
            $truck_success = "Truck Add successfully";
        }else{

            //error message
            $truck_message = "This field is required";
        }
    }
?>