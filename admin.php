<?php 
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "pet_adoption";

     $con = mysqli_connect($server, $username, $password, $dbname);
     
     if(!$con){
         die("connection to this database failed due to " . mysqli_connect_error());
        //  echo "Success";
     }
     echo "Succesfully connected to the DB";
?>