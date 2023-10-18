<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin page</title>
     <link rel="stylesheet" href="admin.css?v=<?=$version?>">
</head>
<body>
<div class="container">
     <a class="butt" href="index.php"><button>
          Home
     </button></a>
     <a class="butt" href="requestdata.php"><button>
          Adoption Request
     </button></a>
     <!-- <a class="butt" href="user.php"><button>User Database</button></a> -->
     </div>

     <table class="table" align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th class="head1" colspan="9"><h2>Users Database</h2></th> 
		</tr> 
			  <th class="head"> User ID </th> 
			  <th class="head"> Username </th> 
			  <th class="head"> Password </th> 
			  <th class="head"> Name </th>
              
              <th class="head" colspan='2'> Operation</th>
                 
			  
		</tr> 
</body>
</html>






<?php 
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "pet_adoption";

     $conn = mysqli_connect($server, $username, $password, $dbname);
     
     if(!$conn){
         die("connection to this database failed due to " . mysqli_connect_error());
     
     }
     
     // Show all data in table
     $sql = "SELECT * FROM `user`";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
          
          while($row = mysqli_fetch_assoc($result)) {
               echo "
                    <tr>
                    <td>" . $row['userid']. "</td>
                    <td>" . $row['username'] . "</td>
                    <td>". $row['password']. "</td>
                    <td>" . $row['name'] . "</td>
                    
                    
                    <td> <a href='deleteuser.php? pid= $row[userid]'> Delete </a> </td>
                    </tr>";
          }
          echo "</table>";
     }


     // Update the data
     // $sql = "UPDATE `adoption_request` SET `name` = 'Test1' WHERE `userid` = 123456";
     // $result = mysqli_query($conn, $sql);
     // echo $result;

     
?>