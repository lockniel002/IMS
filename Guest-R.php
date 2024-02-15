
<?php
session_start();
include './plugins/links.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="./css/guest-r.css">
    <title>Guest</title>
</head>
<body>
<nav class="navbar navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><h1><span>Redd</span>_Manor</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <!-- <div class="offcanvas-header">
        
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div> -->
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Amenities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Location</a>
          </li>
         
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>
        
      </div>
    </div>
  </div>
</nav>


<div class="body-head">
    
    <video autoplay muted loop>
        <source src="./img/ReddManorV.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="condo-name">
<h1><span>Redd</span>_Manor</h1>
</div>
</div>

<div class="page-body">

      <div class="h-page container-fluid  text-black">
        <div class="navbar-expand-sm">
          <h2>Hotel and Condo in San Fernando Pampanga </h2>
         
        </div>
        <p type="button">RESERVE NOW</p>
      </div>


  </div>

  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Your alert message goes here -->
        <div class="alert  ">
          <img src="./img/map.png" alt="" srcset="">
          <p><a href="https://www.google.com/maps/place/The+Redd+Manor/@15.0447979,120.6844154,1051m/data=!3m2!1e3!4b1!4m9!3m8!1s0x3396f714ed0ac2e1:0xdfb29b2a0903f034!5m2!4m1!1i2!8m2!3d15.0447979!4d120.6869903!16s%2Fg%2F11by_kgxnt?hl=en&entry=ttu" target="_blank">Click Here to Open</a></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>