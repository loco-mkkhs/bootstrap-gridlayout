<?php
$server="localhost";
$username="root";
$passward="";
$database="zalego";

$conn= mysqli_connect($server,$username,$passward,$database);

if(isset($_POST["submitButton"]))
{

//1. fetch form data
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$phonenumber =$_POST['phonenumber'];
$message =$_POST['message'];
//2. submit form data
$insertData = mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber,message) VALUES('$firstname','
$lastname','$email','$phonenumber','$message')");
if($insertData)
{
    echo "Data submitted sucessfully.";
}
else{
    echo "Error occured";
}

}
?>

<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
        <title> Bootstrap-Gridlayout</title>
    </head>
    <body>
        <!-- navigation bar here -->
            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" >Zalego Academy</a>
                    <buttton class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                    </buttton>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php"> Home</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
        <!-- End navigation bar here -->
        
        <div class="container">
            <main class="p-5 mb-4 bg-light ">

                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea, quod laboriosam quidem placeat assumenda! Aperiam tempora, exercitationem nulla provident corporis minus distinctio! Tempore beatae totam commodi nostrum a praesentium!</p>
            </main>
            <div class="row">
                <div class="mb-3 col-6">
                    <h1>Our programs</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed excepturi suscipit dicta voluptatibus laborum doloremque asperiores pariatur reprehenderit, molestias, sint eligendi non quae, doloribus eius aperiam dolorum odit optio. Numquam.</p>
                </div>

            </div>
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">Skill Discovery</h2>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quae, officiis sit ipsum modi minus nesciunt voluptate itaque. Cumque, autem.</p>
                        <a href="#" class="btn btn-primary">view Details</a>
    
                    </div>
                
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">Upskilling Program</h2>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quae, officiis sit ipsum modi minus nesciunt voluptate itaque. Cumque, autem.</p>
                        <a href="#" class="btn btn-primary">view Details</a>
    
                    </div>
                
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">path finding program</h2>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quae, officiis sit ipsum modi minus nesciunt voluptate itaque. Cumque, autem.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
    
                    </div>
                
                </div>
            </div>
            <footer class="text-center"></footer>
            <form action="index.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="first Name" class="form label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Please enter your Name">

                    </div>

                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="message" class="form-label">Your message</label>
                        <textarea cols="30" name="message" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" name="submitButton" class="btn btn-primary">send a message</button>

            </form>
            
            

                    
            <hr>
            <br>
            <footer>
                &copy Company 2022
            </footer>
            

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
        <!-- < script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
        <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
        







    </body>
</html>