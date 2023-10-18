<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption</title>
    <link rel="stylesheet" href="style.css?v=<?=$version?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


 
    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary ; background-color:unset ">
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
            <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
        
        
        </div>
    </div>
    </nav>
    
    
    <header>
        <h1 id="heading"  >Pawdopt <br> Adopt, Don't Shop</h1>
        <h2 id = "heading2">! Please note the Pet ID of your love carefully, as you will be asked to fill it in the adoption form. </br> Please Login To fill the adoption form </h2>
        <h3 ></h3>
    </header>

    <div class="container">
        
        <div class="column">
            <img src="assets\pet\dog\Labrador Retriever.webp" alt="error">
            <div id = "text1">
            <p>Name: Rocky</p>
            <p>Pet ID: 223344</p>
            <details>
                <summary>See More Details</summary>
                <p>Address: Kolkata</p>
                
                <p>Category: Dog</p>
                <p>Breed: Labrador retriver</p>
                <p>Gender: Male</p>
                <p>Age: 2 years 3 months</p>
                
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt Me</button>
            </a> -->
        </div>

        <div class="column">
            <img src="assets\pet\dog\American Pit Bull Terrier.webp" alt="Image 2">
            <div id = "text1">
            <p>Name: Ceaser</p>
            <p>Pet ID: 983444</p>
            <details>
                <summary>See More Details</summary>
                <p>Address: Mumbai</p>
                
                <p>Category: Dog</p>
                <p>Breed: American Pitbull</p>
                <p>Gender: Male</p>
                <p>Age: 1 years</p>
                </details>
            </div>
                <!-- <a href="form.php">
                    <button>Adopt me</button>
                </a> -->
            
        </div>

        <div class="column">
            <img src="assets\pet\cat\himalayan cat.webp" alt="Image 3">
            <div id = "text1">
            <p>Name: Kitty</p>
            <p>Pet ID: 462095</p>
            <details>
                <summary>See More Details</summary>
            <p>Address: Patna</p>
            
            <p>Category: Cat</p>
            <p>Breed: Himalayan Cat</p>
            <p>Gender: Male</p>
            <p>Age: 7 months</p>
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt Me</button>
            </a> -->
        </div>
        <div class="column">
            <img src="assets\pet\dog\Siberian Husky.webp" alt="error">
            <div id = "text1">
            <p>Name: Lucie</p>
            <p>Pet ID: 759867</p>
            <details>
                <summary>See More Details</summary>
            <p>Address: Delhi</p>
            
            <p>Category: Dog</p>
            <p>Breed: Syberian Husky</p>
            <p>Gender: Female</p>
            <p>Age: 1 years 1 months</p>
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt Me</button>
            </a> -->
            
        </div>

        <div class="column">
            <img src="assets\pet\cat\siamese cat.jpeg" alt="Image 2">
            <div id = "text1">
            <p>Name: Luna</p>
            <p>Pet ID: 112233</p>
            <details>
                <summary>See More Details</summary>
            <p>Address: Pune</p>
            
            <p>Category: Cat</p>
            <p>Breed: Siamese</p>
            <p>Gender: Female</p>
            <p>Age: 1 year 8 months</p>
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt me</button>
            </a>
             -->
        </div>

        <div class="column">
            <img src="assets\pet\dog\German Shepherd.webp" alt="Image 3">
            <div id = "text1">
            <p>Name: Max</p>
            <p>Pet ID: 445566</p>
            <details>
                <summary>See More Details</summary>
            <p>Address: Lucknow</p>
            
            <p>Category: Dog</p>
            <p>Breed: German Shepherd</p>
            <p>Gender: Male</p>
            <p>Age: 3 years 5 months</p>
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt Me</button>
            </a> -->
        </div>
        <div class="column">
            <img src="assets\pet\birds\African-Grey-Parrot-1024x824.webp" alt="error">
            <div id = "text1">
            <p>Name: Tweety</p>
            <p>Pet ID: 778899</p>
            <details>
                <summary>See More Details</summary>
            <p>Address: Chennai</p>
            
            <p>Category: Bird</p>
            <p>Breed: African Grey Parrot</p>
            <p>Gender: Female</p>
            <p>Age: 6 months</p>
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt Me</button>
            </a> -->
            
        </div>

        <div class="column">
            <img src="assets\pet\cat\persian cat.webp" alt="Image 2">
            <div id = "text1">
            <p>Name: Whiskers</p>
            <p>Pet ID: 990011</p>
            <details>
                <summary>See More Details</summary>
            <p>Address: Ladakh</p>
            
            <p>Category: Cat</p>
            <p>Breed: Persian</p>
            <p>Gender: Male</p>
            <p>Age: 2 years</p>
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt me</button>
            </a> -->
            
        </div>

        <div class="column">
            <img src="assets\pet\birds\Pacific-Parrotlet.webp" alt="Image 3">
            <div id = "text1">
            <p>Name: Kiwi</p>
            <p>Pet ID: 334455</p>
            <details>
                <summary>See More Details</summary>
            <p>Address: Chandigarh</p>
            
            <p>Category: Bird</p>
            <p>Breed: Pacific Parrotlet</p>
            <p>Gender: Female</p>
            <p>Age: 1 year</p>
            </details>
            </div>
            <!-- <a href="form.php">
                <button>Adopt Me</button>
            </a> -->
        </div>
        
    </div>
    
    <script src="script.js"></script>
    <style>
    p{
        margin: 0 0;
        font-weight: 700;
    }
    
</style>
</body>

</html>