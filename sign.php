<?php
 $version = time(); 

?>
<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connect.php';
        $username = $_POST['username'];
        $name=$_POST['name'];
        $password=$_POST['password'];


        $sql = "insert into `user` (username, password, name) values('$username' , '$password', '$name')";
        $result = mysqli_query($con, $sql);

        if($result){
            echo '<div class="alert alert-success" role="alert">
                Congratulations! You are successfully registered.
            </div>';
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
    <link rel="stylesheet" href="admin.css?v=<?=$version?>">
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pawdopt</a>
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
                <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
            
            
            </div>
        </div>
        </nav>

    <h1 class="text-center">Signup Page</h1>
    
    <div class="container mt-5">
    <form action="sign.php" method = "post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter your username">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your Name" name="name">
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