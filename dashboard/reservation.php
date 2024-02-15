<?php
session_start();
include '../plugins/links.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reservation.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top navbar-scrolled">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                  <a href="../Guest.php"><h1><span>Redd</span>_Manor</h1></a>
                    
                </ul>
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item">
                        <a class="nav-link" href="../Guest.php">Home</a>
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
            <li><a class="dropdown-item nav" href="../Log-In.php">Login</a></li>
          </ul>
        </li>
                </ul>
            </div>
        </div>
    </nav>
      
      <div class="h-page container-fluid  text-light">
        <div class=" navbar-expand-sm">
          <ul class="navbar-nav me-auto ">
            <li >
              <p class="reservation">reservation form</p>
            </li>

            
            </ul>
            
        </div>
        <hr class="hr-line">
        <div class="posts">
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class='bx bx-user'></i></span>
  <input type="text" class="form-control" placeholder="FULLNAME:" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="form-group">
      <label for="phoneNumber">Phone Number:</label>
      <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
    </div>
    <div class="form-group">
      <label for="email">EMAIL</label>
      <input type="email" class="form-control" id="phoneNumber"placeholder="@" name="email" required>
    </div>
    <div class="form-group">
      <label for="phoneNumber">Address</label>
      <input type="text" class="form-control" id="phoneNumber"placeholder="Address" name="Address" required>
    </div>

<label for="basic-url" class="form-group">Reservation Details:</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Check-in Date:</span>
  <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  <span class="input-group-text" id="basic-addon3">Check-out Date:</span>
  <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<label for="basic-url" class="form-group">Number of People:</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Number of Adults:</span>
  <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  <span class="input-group-text" id="basic-addon3">Number of Children:</span>
  <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<form>
  <label class="form-group" for="choices">Select your room:</label><br>
  <select id="choices" name="choices">
    <option value="option1"> One Bedroom</option>
    <option value="option2"> Two Bedroom</option>
    <option value="option3"> Three Bedroom</option>
    <!-- Add more options as needed -->
  </select><br><br>
</form>

<div class="input-group">
  <span class="input-group-text">Some request</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
        </div>
       

        
      </div>
      <aside class="rightSide">
        <div class="v-page">
          <video class="right-video" width="400" height="350" autoplay muted loop src="../img/ReddManor-video.mp4"></video>
        </div>
        <div class="m-items-page container-fluid  text-light">
         <div class="bg-card"><i class='bx bxl-mastercard'></i>
         <form>
  <label class="text-card" for="cardNumber">Enter your card number:</label><br>
  <input type="text" id="cardNumber" name="cardNumber" pattern="[0-9]*" inputmode="numeric" maxlength="16" placeholder="XXXX XXXX XXXX XXXX" required><br>
  <small class="text-card">Only numbers allowed (16 digits maximum).</small><br><br>
  <div class="form-row">
      <div class="col">
        <label class="text-card" for="expiryDate">Expiration Date:</label>
        <input type="text" class="form-control" id="expiryDate" name="expiryDate" pattern="(0[1-9]|1[0-2])\/[0-9]{4}" placeholder="MM/YYYY" required>
      </div>
      <div class="col">
        <label class="text-card" for="cvc">CVC:</label>
        <input type="text" class="form-control" id="cvc" name="cvc" pattern="[0-9]{3,4}" maxlength="4" placeholder="XXX" required>
      </div>
    </div>
  <button type="submit">Submit</button>
</form>
        </div>
         
        </div>
      </aside>
      
</body>
</html>