<?php
    include("../includes/driver_details.php");

    if(isset($driver_name)){
        $sql40 = mysqli_query($conn, "SELECT * from trucks where d_river = '$driver_name'");
        $truck_data = mysqli_fetch_assoc($sql40);
    
        $t_plate = $truck_data["t_plate"];
        $t_name = $truck_data["t_name"];
        $mode = $truck_data["model"];
        $stage = $truck_data["stage"];
        $route = $truck_data["route"];
        $engine = $truck_data["engine"];
    }


    echo $stage;

?>