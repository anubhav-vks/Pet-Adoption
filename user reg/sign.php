<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connect.php';
        $username = $_POST['username'];
        $password=$_POST['password'];


        $sql = "insert into `user` (username, password) values('$username' , '$password')";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "Inserted Successfully";
        }
        else{
            die(mysqli_error($con));
            
        }
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Signup Page</h1>
    <div class="container mt-5">
    <form action="sign.php" method = "post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter your username">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>