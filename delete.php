<?php 
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "pet_adoption";

     $conn = mysqli_connect($server, $username, $password, $dbname);
     
     if(!$conn){
         die("connection to this database failed due to " . mysqli_connect_error());
     
     }

     $ids = $_GET["pid"];
     $query = "DELETE FROM `adoption_request` WHERE `adoption_request`.`pet_id` = '$ids'";

     $data = mysqli_query($conn, $query);

     if($data){
        echo "<font color = 'green'> DELETED THE DATA FROM DATABASE";
     }
     else{
        echo "<font color = 'red'> FAILED TO DELETE FROM DATABASE";
     }

?>