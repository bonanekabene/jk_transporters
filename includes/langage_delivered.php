<?php
    include("../includes/db.php");

    if(isset($_GET["id"])){

        //id
        $delivery_id = $_GET["id"];

        //update delivery
        $sql = mysqli_query($conn, "UPDATE langage set delivered = 'Yes' where id = '$delivery_id'");
        header("location: ../dashboard/langage.php");
    }
?>