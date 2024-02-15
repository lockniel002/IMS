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
    <link rel="stylesheet" href="../css/Dashboard.css">
    <!-- <link rel="stylesheet" href="../css/loader.css"> -->
  
    <script src="../js/loader.js"></script>
    <script src="../js/calendar.js"></script>
    <title>Dashboard</title>
</head>
<body>
<div class="loader-wrapper">
  <span class="loader"><span class="loader-inner"></span>
  </div>
<aside class="left-P"><a class="navbar-brand" href="javascript:void(0)"><img src="../img/logo.png" alt=""></a>
<ul class="me-auto">
    <li class="sidebarL-menuD"><i class='bx bxs-dashboard'>Dashboard</i></li>
    <li class="sidebarL-menu"><a href="calendar.php" class='bx bx-building-house'>Property</a></li>
    <li class="sidebarL-menu"><a href="member.php" class='bx bx-group'>Members</a></li>
    <li class="sidebarL-menu"><i class='bx bxs-briefcase-alt-2'type="button"  data-bs-toggle="collapse" data-bs-target="#bars">Accounting</i></li>
    <div id="bars" class="collapse">
    <ul class="me-autoo">
    <li class="sidebarL-menu"><i class='bx bxs-report'>General Accounting</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-flame'>Rental Dashboard</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-coin-stack'>Members Payment</i></li>
    <li class="sidebarL-menu"><i class='bx bx-user-voice'>Members Invoice</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-user-voice'>Property Invoice</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-cabinet'>Supplies</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-contact'>Contracts</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-diamond'>Treasury</i></li>
    <li class="sidebarL-menu"><i class='bx bx-money'>Fundraising</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-credit-card-alt'>Debit-Expense</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-credit-card' >Credit-Income</i></li>
    <li class="sidebarL-menu"><i class='bx bx-history'>Invoice History</i></li>
</ul>
  </div>
    <li class="sidebarL-menu"><i class='bx bxs-report'>Documents</i></li>
    <li class="sidebarL-menu"><i class='bx bxs-flame'>Incidents</i></li>
    <li class="sidebarL-menu"><i class='bx bx-chat'>Messages</i></li>
</ul>
</aside>
<nav class="navbar navbar-expand-sm fixed-top">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <p>Dashboard</p>
                    <span>Welcome back: Luis Gabrielle Estacio</span>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item">
                    <i class='bx bx-bell nav-link'></i>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                <button class="pfp-img dropdown-toggle" type="button" data-bs-toggle="dropdown"><img src="../img/pfp1.jpeg" alt="" data-bs-toggle="offcanvas" data-bs-target="#demo"></button>
            <ul class="dropdown-menu">
            <p class="email-user">admin@gmail.com</p>
            <div class="pfp-pic"><img src="../img/pfp1.jpeg" alt="" srcset=""></div>
               <h5>Luis Gabrielle Estacio</h5>
              <li><a class="dropdown-item" href="./admin.php"><i class='bx bxs-home-alt-2'></i>Home</a></li>
              <li><a class="dropdown-item" href="#"><i class='bx bxs-user-circle'></i>Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class='bx bxs-bell'></i>Notifications</a></li>
              <div class="log-out"><i class='bx bx-log-out'></i> <a href="../Guest.php">Log out</a></div>
            </ul>
            
          </div>  
                </li>
            </ul>
            
            
</div>
           
        </div>
    </div>
</nav>
    <div class="main">
        <main><div class="m-items-page container-fluid">
          <div class="grid">
          <div class="grid-item"><i class='bx bx-building-house'>Revenue</i>
          <h4 class="content-revenue">₱ gasgafsgfa</h4>
           </div>
          <div class="grid-item"><i class='bx bx-group'></i>
          <h4>₱ gasgafsgfa</h4>
           </div>
          <div class="grid-item"><i class='bx bxs-hot'></i>
          <h4>₱ gasgafsgfa</h4>
          </div>
          <div class="grid-item"><i class='bx bxs-chat'></i>
          <h4>₱ gasgafsgfa</h4>
          </div>
            </div>
            <div class="snd-main">
            <div class="progresss">
            <p>Source Type</p>
            <hr>
                        <svg>
                             <circle cx="100" cy="100" r="60"></circle>
                             <circle cx="100" cy="100" r="60" class="Sndcir"></circle>
                        </svg>
                        <div class="percentage">
                            <p>+80%</p>
                        </div>
                       <hr style="margin-top: 70px;">
                    </div>
                    <div class="chart-line">
                      <h5>Outcome vs Income Inventory</h5>
                      <canvas id="myChart" style="width:100%;max-width:600px"></canvas></div>   
                    </div>
            
            </div>
<div class="Accounting">
  <p>Accounting</p>
  <hr>
  <div class="Accounting-body">
    <div class="grid-acc">
    <div class="grid-acc">
    <div class="grid-acc">
      <!-- <div class="grid-info"></div> -->
    </div>
  </div>
  <div class="user-account">
    <!-- Databases User show here and edit user -->
  </div>
</div>
          </main>
        <!-- <footer>
        Footer
    </footer> -->
    </div>
    <aside class="right-P">
            <h6>Overview</h6>
            <div class="overviewTask">
              <ul>
                <li><span>|</span>Tasks Waiting</li>
              <p>view all Tasks -></p>
              <li><span>|</span>Members Units</li>
              <li><span>|</span>Total Amount Pending</li>
              </ul>
            </div>
           <h6> Calendar</h6>
           <div class="calendar-css">
           <div id="calendar-container"></div>
           </div>
           
        </aside>
        <script>
const xValues = [50,60,70,80,90,100,110,120,130,140,150];
const yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>