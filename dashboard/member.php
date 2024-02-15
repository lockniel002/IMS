<?php
session_start();
include '../plugins/links.php';

// $onSession=$_SESSION['onSession'];
// $activePosition=$_SESSION['activePosition'];
// if ($onSession != 1 || $activePosition != 1) {
//     header("Location: ../index.php");

// }

?>


<?php
include "../config/dbcon.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="../css/Dashboard.css">

</head>
<body>
<div class="loader-wrapper">
  <span class="loader"><span class="loader-inner"></span>
  </div>
<aside class="left-P"><a class="navbar-brand" href="javascript:void(0)"><img src="../img/logo.png" alt=""></a>
<ul class="me-auto">
    <li class="sidebarL-menuD"><i class='bx bxs-dashboard'>Dashboard</i></li>
    <li class="sidebarL-menu"><a href="calendar.php" class='bx bx-building-house'>Property</a></li>
    <li class="sidebarL-menu"><i class='bx bx-group'>Members</i></li>
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

<div class="main">
            <main><div class="m-items-page container-fluid">
                <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    STAFF/RESIDENTS
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">password</th>
          <th scope="col">Position</th>
          <th scope="col">username</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["UserID"] ?></td>
            <td><?php echo $row["Fname"] ?></td>
            <td><?php echo $row["Lname"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td><?php echo $row["Position"] ?></td>
            <td><?php echo $row["username"] ?></td>
            <td>
              <a href="edit.php?UserID=<?php echo $row["UserID"] ?>"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?UserID=<?php echo $row["UserID"] ?>"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

</div>
</main>
</div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>