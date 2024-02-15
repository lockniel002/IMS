<?php
session_start();
include './plugins/links.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Log-In.css">
    <link rel="stylesheet" href="./css/loader.css">
    <script src="./js/loader.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top navbar-scrolled">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <h1><span>Redd</span>_Manor</h1>
                </ul>
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item">
                        <a class="nav-link" href="./Guest.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class='bx bx-menu'></i>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item nav" href="./Guest.php">About</a></li>
            <li><a class="dropdown-item nav" href="#Amenities" data-bs-target="#Amenities">Amenities</a></li>
            <li><a class="dropdown-item nav" data-toggle="modal" type="button" data-target="#myModal">Location</a></li>
            <li><a class="dropdown-item nav" href="#Amenities" data-bs-target="#Amenities">Event</a></li>
            <li><a class="dropdown-item nav" href="#Amenities" data-bs-target="#Amenities">Organization</a></li>
            <li><a class="dropdown-item nav" href="./Guest.php">Contact Us</a></li>
            <li><a class="dropdown-item nav" href="./Guest.php">FAQs</a></li>
            <li><a class="dropdown-item nav" href="./Log-In.php">Login</a></li>
          </ul>
        </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="background-video">
    <video autoplay muted loop>
      <source src="./img/redd-manor1.mp4" type="video/mp4">
      
    </video>
    <div class="loader-wrapper">
  <span class="loader"><span class="loader-inner"></span>
  </div>
    <div class="bg-video">
        <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onClick="LogIn()" >Log In </button>
            <button type="button" class="toggle-btn" onClick="SignUp()" >Sign Up</button>
        </div>
        
        <div class="social-icons">

        </div>
        <form method ="POST" id="login" action="config/login_authentication.php" class="input-group">
            <input type="email" class="input-field" name="username" placeholder="User:" require>
            <input type="password" class="input-field" name="password" placeholder="Password:" require>
            <p class="error"> <?php
		if(isset($_SESSION['errorMessage'])){
			echo $_SESSION['errorMessage'];
		}else{
		}
		?></p>
            <button type="submit" class="submit-btn">Log in</button>
        </form>
        <form id="signup" action="" class="input-group">
        <center><i class='bx bxl-google'><span>SignUp with Google</span></i></center>
            <!-- <input type="email" class="input-field" placeholder="Email@:" require>
            <input type="text" class="input-field" placeholder="Password:" require> -->

            <!-- <input type="checkbox" class="check-box"><br><span> I agree to the terms & conditions</span> -->
            <button type="submit" class="submit-btn">Sign Up</button>
        </form>
        </div>
    </div>
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("signup");
    var z = document.getElementById("btn");

    function SignUp(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "100px";
    }
    function LogIn(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
</script>
  </div>
</body>
</html>