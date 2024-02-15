
<?php
session_start();
include './plugins/links.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/guest.css">
    <link rel="stylesheet" href="./css/loader.css">
    <script src="./js/loader.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Guest</title>
</head>
<body>
   
    <div class="body-head">
        <video autoplay muted loop>
            <source src="./img/ReddManor-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <nav class="navbar navbar-expand-sm fixed-top navbar-scrolled">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <h1><span>Redd</span>_Manor</h1>
                </ul>
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
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
    <div class="rightSide">
        <div class="grid-item">
            <!-- Button with Popover and Dropdown -->
            <div class="dropdown dropup">
    <button class="btns dropdown-toggle" type="button" id="dropdownPopoverButtonChats" data-bs-toggle="dropdown" aria-expanded="false" style="background: transparent; border: none;">
        <img src="img/chats.gif" alt="">
    </button>
    <div  class="dropdown-menu chat" aria-labelledby="dropdownPopoverButtonChats">
    
      <div class="dropdown-item head"><h1><span>Redd</span>_Manor</h1></div>
      <div class="dropdown-item body">
     
      </div>
      <textarea class="chat-message" id="chats" name="chats" placeholder="Enter Message.." rows="4"></textarea>

      <div class="dropdown-item footer"><i class='bx bx-paperclip'></i></div>
    </div>
    
    <!-- Popover Content -->
    <div id="popover-content" style="display: none;">
        Hello! thank you for visiting Redd Manor How can i help you to day?╰(*°▽°*)╯
        
    </div>
</div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOCATION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Your alert message goes here -->
                    <div class="alert  ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4575.505007364697!2d120.68711879999998!3d15.044971599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f714ed0ac2e1%3A0xdfb29b2a0903f034!2sThe%20Redd%20Manor!5e1!3m2!1sen!2sph!4v1707475283748!5m2!1sen!2sph" width="420" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-logo">
        <div class="condo-name">
            <h1><span>Redd</span>_Manor</h1>
        </div>
    </div>

    <div class="page-body">
        <div class="page-body-head">
            <div class="h-page container-fluid  text-black">
                <div class="navbar-expand-sm">
                    <h2>Hotel and Condo in San Fernando Pampanga </h2>
                </div>
                <p type="button"><a href="./dashboard/reservation.php">RESERVE NOW</a></p> 
            </div>
        </div>
    </div>
    <!-- Main -->
    <div class="main-page">
        <div class="3dview">
            <center><iframe src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sph!4v1707699506545!5m2!1sen!2sph!6m8!1m7!1sSezEEK6pRyJ6mkQ6lC9NGw!2m2!1d15.04497627978767!2d120.6870840322265!3f240.01494999213867!4f27.599508383627466!5f0.7820865974627469" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
        </div>
        <div id="Amenities">
        <center><h2 >Amenities</h2></center>
        <div class="wrapper">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Security and Convenience</h4>
                            <p>24-hour front desk and concierge services</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>function hall </h4>
                            <p>accommodate different group sizes and event types</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>Accommodations</h4>
                            <p>Comfortable beds with quality linens</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4" >
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>Penthouses</h4>
                            <p>Private balconies or terraces.</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
        
        </div>
        <div class="siteMap">
        <div class="row">
  <div class="col"> <ul>
  <h1><span>Redd</span>_Manor</h1>
  <p>Hotel and Condo in San Fernando Pampanga</p>
  </ul> </div>
  <div class="col">
    
    <ul>
        <li><h4>SITEMAP</h4></li>
        <li>HOME</li>
        <li>ABOUT US</li>
        <li>AMENITIES</li>
        <li>LOCATION</li>
        <li>EVENT</li>
        <li>ORGANIZATION</li>
        <li>CONTACT US</li>
        <li>FAQS</li>
        <li>LOGIN</li>
        
    </ul>
</div>
  <div class="col contact">
    
    <ul>
    <h4>CONTACT US</h4>
    <li><i class='bx bx-phone-call'></i>09165854144</li>
    <i class='bx bxl-facebook-square' style='color:blue'></i>
    <i class='bx bxl-instagram' style='background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%)' ></i>
    <i class='bx bxl-telegram' style='color:#0088cc' ></i>
    </ul>
   
  </div>
</div>
        </div>
    </div>
   
    <footer></footer>

    <!-- Bootstrap Bundle with Popper -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var popover = new bootstrap.Popover(document.getElementById('dropdownPopoverButtonChats'), {
            content: document.getElementById('popover-content').innerHTML,
            boundary: 'viewport',
            trigger: 'manual'
        });

        // Show popover on page load
        popover.show();

        document.getElementById('dropdownPopoverButtonChats').addEventListener('click', function () {
            if (popover._activeTrigger.click) {
                // If the popover is currently active, hide it
                popover.hide();
            } else {
                // If the popover is currently hidden, show it
                popover.show();
            }
        });
    });
</script>


</body>
</html>
