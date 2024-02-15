<?php
include "../config/dbcon.php";
$UserID = $_GET["UserID"];

if (isset($_POST["submit"])) {
   $Fname = $_POST['Fname'];
   $Lname = $_POST['Lname'];
   $password = $_POST['password'];
   $Position = $_POST['Position'];
   $username = $_POST['username'];

  $sql = "UPDATE users SET `Fname`='$Fname',`Lname`='$Lname',`password`='$password',`Position`='$Position', `username`='$username' WHERE UserID = $UserID";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: ../dashboard/member.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

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

</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    BLAH BLAH BLAH
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM users WHERE UserID = $UserID LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="Fname" value="<?php echo $row['Fname'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="Lname" value="<?php echo $row['Lname'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" name="username" value="<?php echo $row['username'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Password:</label>
          <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>">
        </div>

        <div class="form-group mb-3">
          <label>Position:</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="Position" id="1" value="1" <?php echo ($row["Position"] == '1') ? "checked" : ""; ?>>
          <label for="1" class="form-input-label">1</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="Position" id="2" value="2" <?php echo ($row["Position"] == '2') ? "checked" : ""; ?>>
          <label for="2" class="form-input-label">2</label>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>