<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pet_adoption";

    $con= mysqli_connect($hostname, $username, $password, $database);

    if($con){
        // echo "Connection success";
    }
    
?>