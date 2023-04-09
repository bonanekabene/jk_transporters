<?php
    include("../includes/db.php");


    if(isset($conn)){

        //selecting drivers from db
        $sql1 = mysqli_query($conn, "SELECT * from trucks");
        $trucks_number = mysqli_num_rows($sql1);

        //boooking data
        $sql2 = mysqli_query($conn, "SELECT * from booking");
        $booking_number = mysqli_num_rows($sql2);

        //boooking data
        $sql3 = mysqli_query($conn, "SELECT * from langage");
        $langage_number = mysqli_num_rows($sql3);

        //selecting drivers from db
        $sql4 = mysqli_query($conn, "SELECT * from drivers");
        $number_of_drivers = mysqli_num_rows($sql4);

        // $d_n_sql = mysqli_query($conn, "SELECT * from langage");
        // $number_of_langages = mysqli_num_rows($d_n_sql);
    }
