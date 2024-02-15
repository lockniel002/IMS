<?php
session_start();
include '../plugins/links.php';

// $onSession=$_SESSION['onSession'];
// $activePosition=$_SESSION['activePosition'];
// if ($onSession != 1 || $activePosition != 1) {
//     header("Location: ../index.php");

// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/loader.css">
    <link rel="stylesheet" href="../css/Home.css">
    <script src="../js/loader.js"></script>
    <title>Condominuim-Management-System</title>
</head>
<body>
  <div class="loader-wrapper">
  <span class="loader"><span class="loader-inner"></span>
  </div>
<nav class="navbar navbar-expand-sm fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Home.php"><img src="../img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Reports</a>
                </li>
            </ul>

            <form class="d-flex mx-auto"> 
                <div class="input-group">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn" type="button"><i class='bx bx-search-alt-2'></i></button>
                </div>
            </form>

            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item">
                    <i class='bx bx-bell nav-link'></i>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                <button class="pfp-img dropdown-toggle" type="button" data-bs-toggle="dropdown"><img src="../img/pfp1.jpeg" alt="" data-bs-toggle="offcanvas" data-bs-target="#demo"></button>
            <ul class="dropdown-menu">
            <p>admin@gmail.com</p>
            <div class="pfp-pic"><img src="../img/pfp1.jpeg" alt="" srcset=""></div>
            <!-- Database Name -->
               <h5>Luis Gabrielle Estacio</h5>
              <li><a class="dropdown-item" href="./admin.php"><i class='bx bxs-home-alt-2'></i>Home</a></li>
              <li><a class="dropdown-item" href="#"><i class='bx bxs-user-circle'></i>Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class='bx bxs-bell'></i>Notifications</a></li>
              <li><a class="dropdown-item" href="./adminDashboard.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
              <div class="log-out"><a href="../Home.php"><i class='bx bx-log-out'></i> Log out</a></div>
            </ul>
            
          </div>  
                </li>
            </ul>
        </div>
    </div>
</nav>


      <div class="h-page container-fluid  text-light">
        <div class=" navbar-expand-sm">
          <ul class="navbar-nav me-auto ">
            <li >
              <a class="nav-link" href="../features/Latests.php">latest</a>
            </li>
            <li >
              <a class="nav-link" href="#">Events</a>
            </li>
            
            </ul>
            
        </div>
        <hr class="hr-line">
        <div class="posts">
          <img src="../img/azure-north-beach.jpg" alt="" srcset="">
        </div>
        <!-- <i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star-half' ></i> -->
        <br>
        <div class="posts">
          <img src="../img/Azure-post.jpg" alt="" srcset="">
        </div>
      </div>
<!-- Sidebar -->
      <aside class="rightSide">
        <div class="v-page">
          <video  width="400" height="350" autoplay muted loop src="../img/Azure.mp4"></video>
        </div>
        <div class="m-items-page container-fluid  text-light">
          <div class="grid">
      
            <div class="grid-item"><img src="../img/location.gif" alt="" data-toggle="modal" data-target="#myModal"><a href="https://www.google.com/maps/place/Azure+North+Residences+in+Pampanga/@15.0485323,120.6938997,2101m/data=!3m1!1e3!4m9!3m8!1s0x3396f7f22399eb5d:0x1320dece0b9d4782!5m2!4m1!1i2!8m2!3d15.046838!4d120.6950073!16s%2Fg%2F11t6wzrcsm?authuser=0&entry=ttu" target="_blank">Location</a></div>
          <div class="grid-item"><img src="../img/mailing.gif" alt="" data-bs-toggle="popover" title="INBOX" data-bs-content="You have no mail now."><p>Inbox</p></div>
          <div class="grid-item"><img src="../img/calendar.gif" alt=""  data-bs-toggle="popover" title="TODAY" data-bs-content="01/29/2024" ><p>Calendar</p></div>
          <div class="grid-item"><img src="../img/settings.gif" alt="" ><p>Settings</p></div>
          <div class="grid-item"><img src="../img/bubble-chat.gif" alt=""  data-bs-toggle="popover" title="NEW CHATS" data-bs-content="HI!!" ><p>Chat</p></div>
          <div class="grid-item"><img src="../img/document.gif" alt=""  ><p>Documents</p></div>
          <div class="grid-item"><img src="../img/payment.gif" alt="" ><p>Payment</p></div>
          <div class="grid-item"><img src="../img/responsive-design.gif" alt="" ><p>Phone-view</p></div>
          <div class="grid-item"><img src="../img/tech-support.gif" alt=""  ><p>Contact Us</p></div>
          </div>
        </div>
      </aside>
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
        <div class="alert alert-warning">
          <img src="../img/map.png" alt="" srcset="">
          <p><a href="https://www.google.com/maps/place/Azure+North+Residences+in+Pampanga/@15.0485323,120.6938997,2101m/data=!3m1!1e3!4m9!3m8!1s0x3396f7f22399eb5d:0x1320dece0b9d4782!5m2!4m1!1i2!8m2!3d15.046838!4d120.6950073!16s%2Fg%2F11t6wzrcsm?authuser=0&entry=ttu" target="_blank">Click Here to Open</a></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Popover -->
      <script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>

</body>
</html>

<?php
session_destroy();


?>