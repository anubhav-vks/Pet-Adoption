<?php include 'config.php';?>


<?php
    $insert = false;
    if(isset($_POST['name'])){

        $server = "localhost";
        
        $username = "root";
        $password = "";
        $dbname = "pet_adoption";

        $con = mysqli_connect($server, $username, $password, $dbname);
        
        if(!$con){
            // die("connection to this database failed due to " . mysqli_connect_error());
            echo "Success";
        }
        // echo "Succesfully connected to the DB";

        $name = $_POST['name'];
        $userid = $_POST['userid'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $petid = $_POST['petid'];
        $desc = $_POST['desc'];


        $sql = "INSERT INTO `pet_adoption`.`adoption_request` (`name`, `userid`, `phone`, `email`, `pet_id`, `comment`) VALUES ('$name', '$userid', '$phone', '$email', '$petid', '$desc')";
        // echo $sql;

        if($con->query($sql) == true){
            // echo "Successfully inserted";
            $insert =true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }

        //close the connection
        $con->close();

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Details</title>
    <link rel="stylesheet" href="style.css?v=<?=$version?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

</head>
<body>
<!-- <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary ; background-color:unset ">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Pawdopt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="adminlogin.php">Admin</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="sign.php">SignUp</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
            </li>
        </ul>
        
        
        </div>
    </div>
    </nav> -->
    <a href="loggedindex.php">
    <button type="submit" class="btn">Home</button>
    </a>
    <header>
        <h1 id="heading"  >Fill Your Details Here</h1>
    </header>
    <?php
    if($insert == true){
        echo "<h2 class= 'submitMsg'>Thanks for filling up this form, We will contact you soon.</h2 >";
    }
    ?>
    <form action="form.php" method="post">
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="text" name="userid" id="userid" placeholder="User ID">
        <input type="tel" name="phone" id="phone" placeholder="Phone No.">
        <input type="email" name="email" id="email" placeholder="Mail id">
        <input type="text" name="petid" id="petid" placeholder="Pet ID you want to adopt">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Why do you want to adopt this cutie"></textarea>
        <button type="submit" class="btn">Submit</button>
    
    </form>
    <script src="script.js"></script>
</body>

</html>